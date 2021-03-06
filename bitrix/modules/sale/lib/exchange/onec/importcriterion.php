<?php
namespace Bitrix\Sale\Exchange\OneC;


use Bitrix\Main;
use Bitrix\Sale;
use Bitrix\Sale\Exchange;

class ImportCriterionBase
    implements Exchange\ICriterion
{
    protected $entity = null;

    /**
     * @return null|Sale\Internals\CollectableEntity $entity
     */
    public function getEntity()
    {
        return $this->entity;
    }

	/**
	 * @param $entity
	 */
	public function setEntity($entity = null)
	{
		$this->entity = $entity;
	}

    /**
     * @param $entityTypeId
     * @param $entity
     * @return static
     * @throws Main\ArgumentException
     * @throws Main\NotImplementedException
     */
    public static function getCurrent($entityTypeId, $entity)
    {
        if(!Exchange\EntityType::IsDefined($entityTypeId))
        {
            throw new Main\ArgumentOutOfRangeException('Is not defined', Exchange\EntityType::FIRST, Exchange\EntityType::LAST);
        }

        /** @var ImportCriterionBase $criterion */
        $criterion =  new static();
        $criterion->setEntity($entity);

        return $criterion;
    }

	/**
	 * @param array $fields
	 * @return bool
	 */
	public function equals(array $fields)
	{
		return true;
	}
}

class ImportCriterionOneCCml2 extends ImportCriterionBase
{
	/**
	 * @param array $fields
	 * @return bool
	 */
	public function equals(array $fields)
	{
		/** @var Sale\Internals\CollectableEntity $entity */
		$entity = $this->getEntity();
		if(empty($entity))
		{
			return true;
		}

		if(($entity->getField('VERSION_1C') != $fields['VERSION_1C']) ||
			(strlen($entity->getField('VERSION_1C'))<=0 || strlen($fields['VERSION_1C'])<=0)
		)
		{
			return true;
		}

		return false;
	}
}

class CriterionOrder extends ImportCriterionOneCCml2
    implements Exchange\ICriterionOrder
{
    /**
     * @param Sale\BasketItem $basketItem
     * @param array $fields
     * @return bool
     */
    public function equalsBasketItemTax(Sale\BasketItem $basketItem, array $fields)
    {
        if($fields['TAX']['VAT_RATE'] != $basketItem->getVatRate() &&
            ($fields['TAX']['VAT_INCLUDED']<>'Y' && $fields['PRICE']<>$basketItem->getPrice())
        )
        {
            return true;
        }

        return false;
    }

    /**
     * @param Sale\BasketItem $basketItem
     * @param array $fields
     * @return bool
     */
    public function equalsBasketItem(Sale\BasketItem $basketItem, array $fields)
    {
        if($fields['QUANTITY'] != $basketItem->getQuantity() ||
            $fields['PRICE'] != $basketItem->getPrice() ||
            $fields['VAT_RATE'] != $basketItem->getVatRate() ||
            $fields['DISCOUNT_PRICE'] != $basketItem->getDiscountPrice())
        {
            return true;
        }

        return false;
    }

    /**
     * @param Sale\BasketItem $basketItem
     * @param array $fields
     * @return bool
     */
    public function equalsBasketItemDiscount(Sale\BasketItem $basketItem, array $fields)
    {
        if($fields['DISCOUNT']['PRICE'] != $basketItem->getDiscountPrice() && intval($fields['DISCOUNT']['PRICE'])>0)
        {
            return true;
        }

        return false;
    }

	/**
	 * @param Sale\Order|null $entity
	 * @throws Main\ArgumentException
	 */
	public function setEntity($entity = null)
	{
		if(!empty($entity) && !($entity instanceof Sale\Order))
			throw new Main\ArgumentException("Entity must be instanceof Order");

		parent::setEntity($entity);
	}
}

class CriterionShipment extends ImportCriterionOneCCml2
{
	/**
	 * @param Sale\Shipment $entity
	 * @throws Main\ArgumentException
	 */
	public function setEntity($entity = null)
	{
		if(!empty($entity) && !($entity instanceof Sale\Shipment))
			throw new Main\ArgumentException("Entity must be instanceof Shipment");

		parent::setEntity($entity);
	}

	/**
	 * @param array $fields
	 * @return bool
	 */
	public function equals(array $fields)
	{
		/** @var Sale\Shipment $entity */
		$entity = $this->getEntity();
		if(empty($entity))
		{
			return true;
		}

		if(strlen($entity->getField('VERSION_1C'))<=0 && strlen($fields['VERSION_1C'])>0)
		{
			$bBasketItemsMatch = true;
			$basketItemsIndexList = array();
			$fieldsItemsIndexList = array();

			$basketItems = Exchange\Entity\OrderImport::getGroupItemsBasketFields($fields['ITEMS']);
			if(count($basketItems)<=0)
			{
				return true;
			}

			/** @var Sale\ShipmentCollection $shipmentCollection */
			$shipmentCollection = $entity->getCollection();
			$order = $shipmentCollection->getOrder();
			$basket = $order->getBasket();
			/** @var Sale\BasketItem $basketItem */
			foreach ($basket as $basketItem)
			{
				if($entity->isExistBasketItem($basketItem))
				{
					$quantity = $entity->getBasketItemQuantity($basketItem);
					if($quantity>0)
					{
						$basketItemsIndexList[$basketItem->getId()] = $quantity;
					}
				}
			}

			foreach($basketItems as $items)
			{
				foreach($items as $productXML_ID => $item)
				{
					if($basketItem = Exchange\Entity\OrderImport::getBasketItemByItem($basket, $item))
					{
						$fieldsItemsIndexList[$basketItem->getId()] = $item['QUANTITY'];
					}
				}
			}

			if(count($basketItemsIndexList)<>count($fieldsItemsIndexList))
			{
				$bBasketItemsMatch = false;
			}
			else
			{
				foreach ($basketItemsIndexList as $basketId=>$quantity)
				{
					if(isset($fieldsItemsIndexList[$basketId]) && $fieldsItemsIndexList[$basketId] == $quantity)
						unset($fieldsItemsIndexList[$basketId]);
				}

				if(count($fieldsItemsIndexList)>0)
					$bBasketItemsMatch = false;
			}

			$itemDeliveryService = Exchange\Entity\ShipmentImport::getFieldsDeliveryService($fields);

			if($bBasketItemsMatch &&
				($entity->isShipped()? $fields['DEDUCTED']=='Y':true) &&
				$entity->getPrice() == $itemDeliveryService['PRICE']
			)
			{
				return false;
			}
			else
			{
				return true;
			}
		}
		else
		{
			return parent::equals($fields);
		}
	}
}

class CriterionPayment extends ImportCriterionOneCCml2
{
	/**
	 * @param Sale\Payment|null $entity
	 * @throws Main\ArgumentException
	 */
	public function setEntity($entity = null)
	{
		if(!empty($entity) && !($entity instanceof Sale\Payment))
			throw new Main\ArgumentException("Entity must be instanceof Payment");

		parent::setEntity($entity);
	}

	/**
	 * @param array $fields
	 * @return bool
	 */
	public function equals(array $fields)
	{
		/** @var Sale\Payment $entity */
		$entity = $this->getEntity();
		if(empty($entity))
		{
			return true;
		}

		if(strlen($entity->getField('VERSION_1C'))<=0 && strlen($fields['VERSION_1C'])>0)
		{
			if(($entity->isPaid()? $fields['PAID']=='Y':true) &&
				$entity->getSum() == $fields['SUM']
				)
			{
				return false;
			}
			else
			{
				return true;
			}
		}
		else
		{
			return parent::equals($fields);
		}
	}
}

/**
 * Class CriterionProfile
 * @package Bitrix\Sale\Exchange\OneC
 * @deprecated
 */
class CriterionProfile extends ImportCriterionOneCCml2
{
    /**
     * @param array $fields
     * @return bool
     */
    public function equals(array $fields)
    {
        $entity = $this->getEntity();
        if(empty($entity))
        {
            return true;
        }

        if(($entity->getField('USER_PROFILE_VERSION') != $fields['VERSION_1C']) ||
            (strlen($entity->getField('USER_PROFILE_VERSION'))<=0 || strlen($fields['VERSION_1C'])<=0)
        )
        {
            return true;
        }

        return false;
    }

	/**
	 * @param Exchange\ProfileImport|null $entity
	 * @throws Main\ArgumentException
	 */
	public function setEntity($entity = null)
	{
		if(!empty($entity) && !($entity instanceof Exchange\ProfileImport))
			throw new Main\ArgumentException("Entity must be instanceof ProfileImport");

		parent::setEntity($entity);
	}
}