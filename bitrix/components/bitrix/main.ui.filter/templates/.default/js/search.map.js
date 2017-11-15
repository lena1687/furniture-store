{"version":3,"file":"search.min.js","sources":["search.js"],"names":["BX","namespace","Filter","Search","parent","this","container","input","preset","buttonsContainer","delay","timeout","init","prototype","bind","getInput","delegate","_onInputWithoutDebounce","getParam","debounce","_onInput","_onKeyDown","getFindButton","_onSearchClick","getContainer","_onSearchContainerClick","firstInit","type","isDomNode","findButton","Utils","getByClass","settings","classSearchButton","apply","selectSquare","square","addClass","classSquareSelected","selectSquares","getSquares","forEach","unselectSquare","removeClass","unselectSquares","removeSquares","removeSquare","isSquaresSelected","every","isSquareSelected","hasClass","getLastSquare","squares","length","isTextSelected","searchStringLength","getSearchString","searchInput","selectionStart","selectionEnd","isSelectionStart","isSquareRemoveButton","node","classSquareDelete","isClearButton","classClearSearchValueButton","isSearchButton","adjustFocus","document","activeElement","window","scrollY","pos","top","value","blur","focus","findSquareByChild","childNode","findParent","className","classSquare","getSquareData","rawData","data","JSON","parse","isSquareControl","squareData","isArray","onPresetSquareRemove","Preset","getPreset","currentPresetId","getCurrentPresetId","isResetToDefaultMode","isPinned","resetWithoutSearch","lastPromise","resetFilter","closePopup","applyPinnedPreset","onControlSquareRemove","clearControls","onValueRequiredSquareRemove","deactivateAllPresets","showPopup","adjustPlaceholder","complexSquareRemove","isValueRequiredMode","isPresetSquare","adjustClearButton","showClearButton","hideClearButton","remove","event","target","clearInput","getPopup","isShown","start","end","searchLength","restoreRemovedPreset","utils","isKey","metaKey","ctrlKey","clearTimeout","setInputPlaceholder","get","isResolvedRequest","state","applyFilter","reset","getSearch","removePreset","resetPreset","setTimeout","searchString","lastSearchString","isIe","showGridAnimation","onCustomEvent","params","FILTER_ID","getButtonsContainer","classSearchButtonsContainer","classShow","inputId","join","containerId","text","placeholder","form","clearForm","makeSquares","squaresData","depth","additional","tmpSquare","result","moreSquares","current","index","decl","prepend","insertAfter","lastSquare","push","name","title","fields","squaresWidth","item","prepareSquaresData","width","block","map","curr","reduce","prev","parseFloat","style","setPreset","presetData","squaresResult","isPlainObject","clone","ADDITIONAL","ID","TITLE","isPreset","NAME","TYPE","FIELDS","isNotEmptyString","tmpValues","control","types","DATE","LABEL","SUB_TYPE","VALUE","dateTypes","QUARTER","VALUES","_quarter","quarter","QUARTERS","filter","toLocaleLowerCase","_year","YEAR","MONTH","_month","month","MONTHS","EXACT","_from","RANGE","_to","NEXT_DAYS","PREV_DAYS","isNumber","parseInt","_days","replace","NONE","SELECT","MULTI_SELECT","val","NUMBER","CUSTOM_ENTITY","MULTIPLE","label","_label","Object","keys","key","_value","CUSTOM","_VALUE","presetClass","updatePreset"],"mappings":"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"}