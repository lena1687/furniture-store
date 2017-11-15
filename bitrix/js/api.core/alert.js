/**
 * $.fn.apiAlert
 */
(function ($) {

	var defaults = {
		type: 'alert', //['confirm']
		class: 'info', //['info', 'error', 'warning', 'success']
		//single: true,
		theme: 'default', //['jbox', 'noty', 'sweetalert', 'dark', 'uikit2', 'bootstrap4']
		title: '',
		content: '',
		timeout: 0,
		labels: {
			ok:'OK',
			cancel:'Cancel',
		},
		header: {
			text: ''
		},
		footer: {
			text: ''
		},
		input: {
			class: '',
			text: '',
			placeholder: ''
		},
		callback: {
			onConfirm: function(isConfirm) {
				console.log('isConfirm',isConfirm);
			},
			onShow: function(){}, //TODO
			onClose: function(){},//TODO
		}
	};

	var methods = {

		init: function (params) {

			var options = $.extend(true, {}, defaults, params);

			if (!this.data('apiAlert')) {
				this.data('apiAlert', options);

				// код плагина

				if(options.type === 'confirm'){
					if(!options.title)
						options.title = 'Are you sure?';
				}

				//api_alert_alert
				$('html').addClass('api_alert_active');

				if (!$('.api_alert_overlay').length) {
					$('body').append('<div class="api_alert_overlay"/>');
				}

				var html = '';
				var alertId = '#apiAlert' + ($('.api_alert').length + 1);

				html += '<div id="' + alertId.replace('#', '') + '" class="api_alert api_alert_' + options.class + ' api_alert_theme_' + options.theme + ' api_alert_layout api_alert_layout_center">';
				html += '<div class="api_alert_dialog">';
				html += '<div class="api_alert_close api_icon_close">&#10005;</div>';

				if (options.header.text.length) {
					html += '<div class="api_alert_header">' + options.header.text + '</div>';
				}

				//start content
				html += '<div class="api_alert_content">';

				if (options.title.length) {
					html += '<div class="api_title">' + options.title + '</div>';
				}

				if (options.content.length) {
					html += '<div class="api_content">' + options.content + '</div>';
				}

				if(options.input.text.length){
					html += '<div class="api_input"><input type="text" value="' + options.input.text + '" class="' + options.input.class + '" placeholder="' + options.input.placeholder + '"></div>';
				}


				//{{buttons}}
				html += '<div class="api_buttons">{{buttons}}</div>';

				//end content
				html += '</div>';

				if (options.footer.text.length) {
					html += '<div class="api_alert_footer">' + options.footer.text + '</div>';
				}

				html += '</div>';
				html += '</div>';

				//Replace buttons
				switch (options.type) {
					case "confirm":
						html = html.replace("{{buttons}}", '<button type="button" class="api_button  api_button_yellow api_alert_confirm">{{ok}}</button><button type="button" class="api_button api_button_primary  api_alert_close">{{cancel}}</button>');
						html = html.replace("{{ok}}", options.labels.ok).replace("{{cancel}}", options.labels.cancel);
						break;
					case "prompt":
						html = html.replace("{{ok}}", this.labels.ok).replace("{{cancel}}", this.labels.cancel);
						break;
					case "alert":
					default:
						html = html.replace("{{buttons}}", '<button type="button" class="api_button api_button_primary api_alert_close">{{ok}}</button>');
						html = html.replace("{{ok}}", options.labels.ok);
						break;
				}

				//Show alert
				$('body').append(html).find(alertId).show();


				//Close button
				$(alertId).on('click', '.api_alert_close', function () {
					if(options.type === 'confirm'){
						options.callback.onConfirm.call(options, false);
					}
					methods.close(alertId);
				});

				//Confirm button
				$(alertId).on('click', '.api_alert_confirm', function () {
					options.callback.onConfirm.call(options, true);
					methods.close(alertId);
				});

			}

			return this;
		},
		close: function (alertId) {
			$(alertId).hide().remove();
			if (!$('.api_alert').length) {
				$('.api_alert_overlay').hide().remove();
				$('html').removeClass('api_alert_active');
			}
		}
	};

	$.fn.apiAlert = function (method) {
		if (methods[method]) {
			return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
		} else if (typeof method === 'object' || !method) {
			return methods.init.apply(this, arguments);
		} else {
			$.error('Error! Method "' + method + '" not found in plugin $.fn.apiAlert');
		}
	};

})(jQuery);