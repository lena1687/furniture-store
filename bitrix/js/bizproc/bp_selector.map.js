{"version":3,"file":"bp_selector.min.js","sources":["bp_selector.js"],"names":["BX","window","namespace","Bizproc","Selector","delimiter","listenKeyCode","currentData","inputElement","popup","selectedTab","activitiesItemsCache","initSelectors","globalScope","document","scope","props","i","items","querySelectorAll","length","JSON","parse","getAttribute","getElementById","controlId","bind","e","onSearch","this","setAttribute","getTabItems","tabId","getActivitiesItems","getTemplateActivitiesItems","rootActivity","Serialize","arAllActivities","template","activities","result","s","activityType","activityData","key","Type","toLowerCase","hasOwnProperty","push","text","NAME","description","Properties","Title","value","Name","Children","subResult","j","getTabsCounters","getListElement","findChild","contentContainer","className","getSelectedItem","getTabsElements","findChildren","closePopup","close","insertItemValue","item","multiInsert","replaceText","substr","selectionEnd","beforePart","lastIndexOf","middlePart","afterPart","cursorPosition","parseInt","isNaN","me","mentionListen","keyCode","PreventDefault","shiftKey","SelectNextTab","SelectNextItem","altKey","ctrlKey","setTimeout","delegate","updatePopupContent","PopupWindow","lightShadow","offsetTop","closeIcon","offsetLeft","autoHide","bindOptions","position","closeByEsc","zIndex","events","onPopupShow","WindowManager","currently_loaded","CloseDialog","Close","wnd","Get","unclosable","onPopupClose","destroy","onPopupDestroy","content","create","children","generatePopupContent","show","extractMenuItem","type","filterItems","query","altQuery","correctText","replace_way","mixed","indexOf","updateCurrentData","util","object_keys","arWorkflowParameters","tabName","message","arWorkflowVariables","arWorkflowConstants","arDocumentFields","activitiesItems","attrs","tabs","list","appendChild","data","tab","html","addClass","updateList","selectTab","focus","counterElement","counters","innerHTML","hasClass","direction","selected","selectedId","targetKey","removeClass","fixListScroll","cleanNode","listElement","htmlspecialchars","scrollTop","selectedListPos","pos","selectedItemPos","bottom","top"],"mappings":"CAAA,WACC,GAAIA,GAAKC,OAAOD,EAEhBA,GAAGE,UAAU,aACb,IAAGF,EAAGG,QAAQC,SACb,MAEDJ,GAAGG,QAAQC,UACVC,UAAW,IACXC,cAAe,IACfC,eACAC,aAAc,KACdC,MAAO,KACPC,YAAa,KAEbC,qBAAsB,KAIvBX,GAAGG,QAAQC,SAASQ,cAAgB,SAASC,GAE5C,IAAKA,EACJA,EAAcC,QAEf,IAAIC,GAAOC,EAAOC,EAAGC,EAAQL,EAAYM,iBAAiB,mCAE1D,IAAID,EACJ,CACC,IAAKD,EAAI,EAAGA,EAAIC,EAAME,SAAUH,EAChC,CACCD,EAAQK,KAAKC,MAAMJ,EAAMD,GAAGM,aAAa,0BACzC,UAAWP,KAAU,SACpB,QAEDD,GAAQD,SAASU,eAAeR,EAAMS,UAEtC,KAAKV,EACJ,QAEDf,GAAG0B,KAAKX,EAAO,UAAW,SAASY,GAClC3B,EAAGG,QAAQC,SAASwB,SAASC,KAAMF,IAEpCZ,GAAMe,aAAa,eAAgB,SAKtC9B,GAAGG,QAAQC,SAAS2B,YAAc,SAASC,GAE1C,GAAIf,EAEJ,KAAKA,EAAI,EAAGA,EAAIY,KAAKtB,YAAYa,SAAUH,EAC3C,CACC,GAAIY,KAAKtB,YAAYU,GAAG,WAAae,EACpC,MAAOH,MAAKtB,YAAYU,GAAG,SAG7B,SAGDjB,GAAGG,QAAQC,SAAS6B,mBAAqB,WAExC,GAAIJ,KAAKlB,uBAAyB,KAClC,CACCkB,KAAKlB,qBAAuBkB,KAAKK,4BAA4BC,aAAaC,aAAcC,iBAGzF,MAAOR,MAAKlB,qBAGbX,GAAGG,QAAQC,SAAS8B,2BAA6B,SAASI,EAAUC,GAEnE,GAAIC,MAAavB,EAAGwB,EAAGC,EAAcC,EAAcC,CACnD,KAAK3B,EAAI,EAAGwB,EAAIH,EAASlB,OAAQH,EAAIwB,IAAKxB,EAC1C,CACCyB,EAAeJ,EAASrB,GAAG4B,KAAKC,aAChC,IAAIP,EAAWG,GACdC,EAAgBJ,EAAWG,EAE5B,IAAIC,GAAgBA,EAAa,UACjC,CACC,IAAKC,IAAOD,GAAa,UACzB,CACC,IAAKA,EAAa,UAAUI,eAAeH,GAC1C,QAEDJ,GAAOQ,MACNC,KAAMN,EAAa,UAAUC,GAAKM,KAClCC,YAAab,EAASrB,GAAGmC,WAAWC,OAASV,EAAaO,KAC1DI,MAAO,KAAKhB,EAASrB,GAAGsC,KAAK,IAAIX,EAAI,OAKxC,GAAIN,EAASrB,GAAGuC,UAAYlB,EAASrB,GAAGuC,SAASpC,OAAS,EAC1D,CACC,GAAIqC,GAAY5B,KAAKK,2BAA2BI,EAASrB,GAAGuC,SAAUjB,EACtE,KAAK,GAAImB,GAAI,EAAGA,EAAID,EAAUrC,SAAUsC,EACxC,CACClB,EAAOQ,KAAKS,EAAUC,MAIzB,MAAOlB,GAGRxC,GAAGG,QAAQC,SAASuD,gBAAkB,WAErC,GAAI1C,GAAGuB,IAEP,KAAKvB,EAAI,EAAGA,EAAIY,KAAKtB,YAAYa,SAAUH,EAC3C,CACCuB,EAAOX,KAAKtB,YAAYU,GAAG,UAAYY,KAAKtB,YAAYU,GAAG,SAASG,OAGrE,MAAOoB,GAGRxC,GAAGG,QAAQC,SAASwD,eAAiB,WAEpC,MAAO5D,GAAG6D,UAAUhC,KAAKpB,MAAMqD,kBAAmBC,UAAW,oBAAqB,MAGnF/D,GAAGG,QAAQC,SAAS4D,gBAAkB,WAErC,MAAOhE,GAAG6D,UAAUhC,KAAKpB,MAAMqD,kBAAmBC,UAAW,6BAA8B,MAG5F/D,GAAGG,QAAQC,SAAS6D,gBAAkB,WAErC,MAAOjE,GAAGkE,aAAarC,KAAKpB,MAAMqD,kBAAmBC,UAAW,mBAAoB,MAGrF/D,GAAGG,QAAQC,SAAS+D,WAAa,WAEhC,GAAItC,KAAKpB,MACRoB,KAAKpB,MAAM2D,QAGbpE,GAAGG,QAAQC,SAASiE,gBAAkB,SAASC,EAAMC,GAEpD,GAAIC,GAAc3C,KAAKrB,aAAa8C,MAAMmB,OAAO,EAAG5C,KAAKrB,aAAakE,cACrEC,EAAa9C,KAAKrB,aAAa8C,MAAMmB,OAAO,EAAGD,EAAYI,YAAY/C,KAAKxB,YAC5EwE,EAAaP,EAAK/C,aAAa,eAAiBgD,EAAa1C,KAAKxB,UAAY,IAC9EyE,EAAYjD,KAAKrB,aAAa8C,MAAMmB,OAAO5C,KAAKrB,aAAakE,cAC7DK,EAAiBC,SAASV,EAAK/C,aAAa,wBAE7C,IAAI0D,MAAMF,GACTA,EAAiBF,EAAWzD,MAE7B,IAAIuD,EAAWF,QAAQ,KAAO,IAC7BE,EAAaA,EAAWF,OAAO,EAAGE,EAAWvD,OAAS,EAEvDS,MAAKrB,aAAa8C,MAAQqB,EAAaE,EAAaC,CACpDjD,MAAKrB,aAAakE,aAAeC,EAAWvD,OAAS2D,EAGtD/E,GAAGG,QAAQC,SAASwB,SAAW,SAASb,EAAOY,GAE9C,GAAIuD,GAAKrD,KAAMW,EAAS,IAExB,IAAIzB,EAAMoE,cACV,CACC,GAAIxD,EAAEyD,SAAW,GACjB,CACCrE,EAAMoE,cAAgB,KACtBtD,MAAKsC,YACL,OAAOnE,GAAGqF,eAAe1D,OAErB,IAAIA,EAAEyD,SAAW,IAAMvD,KAAKpB,MACjC,CACC,GAAI6D,GAAOzC,KAAKmC,iBAChB,IAAIM,EACJ,CACCzC,KAAKwC,gBAAgBC,EAAM3C,EAAE2D,WAAa,KAC1C,IAAI3D,EAAE2D,WAAa,KAClBzD,KAAKsC,aAGP,MAAOnE,GAAGqF,eAAe1D,OAErB,KAAKA,EAAEyD,SAAW,IAAMzD,EAAEyD,SAAW,IAAMzD,EAAEyD,SAAW,IAAMvD,KAAKpB,MACxE,CACCoB,KAAK0D,cAAc5D,EAAEyD,SAAW,IAAM,EAAI,EAC1C,OAAOpF,GAAGqF,eAAe1D,OAErB,KAAKA,EAAEyD,SAAW,IAAMzD,EAAEyD,SAAW,KAAOvD,KAAKpB,MACtD,CACCoB,KAAK2D,eAAe7D,EAAEyD,SAAW,IAAM,EAAI,EAC3C,OAAOpF,GAAGqF,eAAe1D,OAErB,IAAIA,EAAE8D,SAAW,MAAQ9D,EAAE+D,UAAY,MAAS/D,EAAE2D,WAAa,MAAQ3D,EAAEyD,SAAW,GACzF,MAIA,CACCO,WAAW3F,EAAG4F,SAAS,WACtB,GAAIpB,GAAc3C,KAAKyB,MAAMmB,OAAO,EAAG5C,KAAK6C,aAC5C,IAAIF,EAAYI,YAAYM,EAAG7E,WAAa,EAC5C,CACC6E,EAAGf,YACH,OAAO,OAERK,EAAcA,EAAYC,OAAOD,EAAYI,YAAYM,EAAG7E,WAAYwB,KAAK6C,aAAaF,EAAYI,YAAYM,EAAG7E,WACrH,IAAImE,EAAYpD,QAAU,EAC1B,CACC8D,EAAGf,YACH,OAAO,OAERK,EAAcA,EAAYC,OAAO,EACjC,IAAID,EAAYC,OAAO,EAAG,IAAM,IAChC,CACCS,EAAGf,YACH,OAAO,OAGR,GAAIe,EAAGzE,MACNyE,EAAGW,mBAAmBrB,IACtBzD,GAAQ,SAGP,IAAIY,EAAE2D,WAAa,OAAS3D,EAAEyD,SAAWF,EAAG5E,cACjD,CACC,IAAKS,EAAMoE,cACX,CACCQ,WAAW3F,EAAG4F,SAAS,WACtB,GAAIvF,GAAYwB,KAAKyB,MAAMmB,OAAO5C,KAAK6C,aAAa,EAAG,EACvD,IAAIrE,GAAa6E,EAAG7E,UACnB,MAAO,MAERwB,MAAKsD,cAAgB,IACrBD,GAAGf,YACHe,GAAGzE,MAAQ,GAAIT,GAAG8F,YAAY,sBAAuBjE,MACpDkE,YAAc,KACdC,UAAW,EACXC,UAAY,KACZC,WAAY,EACZC,SAAU,KACVC,aAAcC,SAAU,UACxBC,WAAY,KACZC,OAAQ,IACRC,QACCC,YAAa,WAGZzG,EAAG0G,cAAcC,iBAAmB9E,IACpCA,MAAK+E,YAAc/E,KAAKgF,MAAQ,WAE/B7G,EAAG0G,cAAcC,iBAAmB,IACpC,IAAIzB,EAAGzE,QAAU,KACjB,CACC,GAAIqG,GAAM9G,EAAG0G,cAAcK,KAC3B,IAAID,IAAQA,EAAIE,WAAYF,EAAID,WAInCI,aAAe,WACdpF,KAAKqF,SACLvB,YAAW,WAAW3F,EAAG0G,cAAcC,iBAAmB,MAAQ,KAEnEQ,eAAiBnH,EAAG4F,SAAS,WAC5BV,EAAGzE,MAAQ,IACXyE,GAAGvE,qBAAuB,IAC1BkB,MAAKsD,cAAgB,OACnBtD,OAEJuF,QAAUpH,EAAGqH,OAAO,OAAQC,UAAWpC,EAAGqC,2BAE3CrC,GAAGzE,MAAM+G,MACTtC,GAAG1E,aAAeqB,MACjBd,GAAQ,MAIZ,IAAKyB,EACJ,MAAOxC,GAAGqF,eAAe1D,GAG3B3B,GAAGG,QAAQC,SAASqH,gBAAkB,SAASxE,EAAM/B,EAAOwG,GAE3D,GAAIlF,KACJ,IAAII,EACJ,KAAKA,IAAO1B,GACZ,CACC,IAAKA,EAAM6B,eAAeH,GACzB,QAEDJ,GAAOQ,MACNC,KAAM/B,EAAM0B,GAAKW,KACjBD,MAAO,KAAKoE,EAAK,IAAI9E,EAAI,MAG3B,MAAOf,MAAK8F,YAAYnF,EAAQS,GAGjCjD,GAAGG,QAAQC,SAASuH,YAAc,SAASzG,EAAO0G,GAEjD,GAAIpF,MAAavB,CACjB2G,GAAQA,EAAOA,EAAM9E,cAAgB,EACrC,IAAI+E,GAAWD,GAAS5H,EAAG8H,YAAc9H,EAAG8H,YAAYF,GAAQG,YAAa,OAAQC,MAAM,OAAOlF,cAAgB,EAClH,KAAK7B,EAAI,EAAGA,EAAIC,EAAME,SAAUH,EAChC,CACC,IAAK2G,GACD1G,EAAMD,GAAGgC,KAAKH,cAAcmF,QAAQL,IAAU,GAC9C1G,EAAMD,GAAGqC,MAAMR,cAAcmF,QAAQL,IAAU,GAC/C1G,EAAMD,GAAGgC,KAAKH,cAAcmF,QAAQJ,IAAa,GACjD3G,EAAMD,GAAGqC,MAAMR,cAAcmF,QAAQJ,IAAa,EAEtD,CACCrF,EAAOQ,KAAK9B,EAAMD,KAGpB,MAAOuB,GAGRxC,GAAGG,QAAQC,SAAS8H,kBAAoB,SAASN,GAEhD,GAAIpF,KAEJ,IAAIxC,EAAGmI,KAAKC,YAAYC,sBAAsBjH,OAAS,EACtDoB,EAAOQ,MACNsF,QAAStI,EAAGuI,QAAQ,qCACpBvG,MAAO,aACPd,MAAOW,KAAK4F,gBAAgBG,EAAOS,qBAAsB,aAG3D,IAAIrI,EAAGmI,KAAKC,YAAYI,qBAAqBpH,OAAS,EACrDoB,EAAOQ,MACNsF,QAAStI,EAAGuI,QAAQ,oCACpBvG,MAAO,YACPd,MAAOW,KAAK4F,gBAAgBG,EAAOY,oBAAqB,aAG1D,IAAIxI,EAAGmI,KAAKC,YAAYK,qBAAqBrH,OAAS,EACrDoB,EAAOQ,MACNsF,QAAStI,EAAGuI,QAAQ,oCACpBvG,MAAO,YACPd,MAAOW,KAAK4F,gBAAgBG,EAAOa,oBAAqB,aAG1D,UAAWC,oBAAqB,YAChC,CACClG,EAAOQ,MACNsF,QAAStI,EAAGuI,QAAQ,mCACpBvG,MAAO,WACPd,MAAOW,KAAK4F,gBAAgBG,EAAOc,iBAAkB,cAIvD,GAAIC,GAAkB9G,KAAKI,oBAE3B,IAAI0G,EAAgBvH,OAAS,EAC5BoB,EAAOQ,MACNsF,QAAStI,EAAGuI,QAAQ,qCACpBvG,MAAO,aACPd,MAAOW,KAAK8F,YAAYgB,EAAiBf,IAG3CpF,GAAOQ,MACNsF,QAAStI,EAAGuI,QAAQ,iCACpBvG,MAAO,SACPd,MAAOW,KAAK8F,cACX1E,KAAMjD,EAAGuI,QAAQ,sCACjBjF,MAAO,mBAEPL,KAAMjD,EAAGuI,QAAQ,sCACjBjF,MAAO,2BAEPL,KAAMjD,EAAGuI,QAAQ,kCACjBjF,MAAO,eAEPL,KAAMjD,EAAGuI,QAAQ,8BACjBjF,MAAO,kBAEPL,KAAMjD,EAAGuI,QAAQ,oCACjBjF,MAAO,uBAEPL,KAAMjD,EAAGuI,QAAQ,+BACjBjF,MAAO,mBACJsE,IAGLpF,GAAOQ,MACNsF,QAAStI,EAAGuI,QAAQ,oCACpBvG,MAAO,YACPd,MAAOW,KAAK8F,cACX1E,KAAM,MACNE,YAAanD,EAAGuI,QAAQ,mDACxBjF,MAAO,aACPyB,eAAgB,IAEhB9B,KAAM,UACNE,YAAanD,EAAGuI,QAAQ,uDACxBjF,MAAO,mBACPyB,eAAgB,KAEhB9B,KAAM,WACNE,YAAanD,EAAGuI,QAAQ,wDACxBjF,MAAO,qBACPyB,eAAgB,KAEhB9B,KAAM,KACNE,YAAanD,EAAGuI,QAAQ,kDACxBjF,MAAO,eACPyB,eAAgB,IAEhB9B,KAAM,SACNE,YAAanD,EAAGuI,QAAQ,sDACxBjF,MAAO,gBACPyB,eAAgB,KAEhB9B,KAAM,MACNE,YAAanD,EAAGuI,QAAQ,mDACxBjF,MAAO,eACPyB,eAAgB,IAEhB9B,KAAM,SACNE,YAAanD,EAAGuI,QAAQ,sDACxBjF,MAAO,mBACPyB,eAAgB,KAEhB9B,KAAM,QACNE,YAAanD,EAAGuI,QAAQ,qDACxBjF,MAAO,iBACPyB,eAAgB,IACb6C,IAGL/F,MAAKtB,YAAciC,CACnB,OAAOA,GAGRxC,GAAGG,QAAQC,SAASmH,qBAAuB,SAAStE,GAEnD,GAAIxC,GAAQT,EAAGqH,OAAO,OAAQuB,OAAQ7E,UAAW,sBACjD,IAAI8E,GAAO7I,EAAGqH,OAAO,MAAOuB,OAAQ7E,UAAW,qBAC/C,IAAI+E,GAAO9I,EAAGqH,OAAO,MAAOuB,OAAQ7E,UAAW,qBAE/CtD,GAAMsI,YAAYF,EAClBpI,GAAMsI,YAAYD,EAElB,IAAIE,GAAOnH,KAAKqG,kBAAkBjF,EAElC,IAAIhC,GAAGgI,EAAK/D,EAAKrD,IAEjB,KAAKZ,EAAI,EAAGA,EAAI+H,EAAK5H,SAAUH,EAC/B,CACCgI,EAAMjJ,EAAGqH,OAAO,MACfuB,OAAQ7E,UAAW,mBACnBmF,KAAMF,EAAK/H,GAAGqH,QAAQ,iCAAiCU,EAAK/H,GAAGC,MAAME,OAAO,YAE7E6H,GAAInH,aAAa,cAAekH,EAAK/H,GAAGe,MACxCiH,GAAInH,aAAa,YAAa,OAE9B,KAAKD,KAAKnB,aAAeO,IAAM,GAAKY,KAAKnB,aAAesI,EAAK/H,GAAGe,MAChE,CACChC,EAAGmJ,SAASF,EAAK,WACjBpH,MAAKuH,WAAWN,EAAME,EAAK/H,GAAGC,OAG/BlB,EAAG0B,KAAKuH,EAAK,QAAS,SAAStH,GAC9BuD,EAAGmE,UAAUxH,KACb7B,GAAGsJ,MAAMpE,EAAG1E,aACZ,OAAOR,GAAGqF,eAAe1D,IAG1BkH,GAAKE,YAAYE,GAGlB,MAAOxI,GAGRT,GAAGG,QAAQC,SAASyF,mBAAqB,SAAS5C,GAEjD,GAAI6F,GAAOjH,KAAK+B,gBAChB,IAAI3C,GAAGe,EAAOuH,EAAgBP,EAAOnH,KAAKqG,kBAAkBjF,EAE5D,IAAIuG,GAAW3H,KAAK8B,iBACpB,IAAIkF,GAAOhH,KAAKoC,iBAChB,KAAKhD,EAAI,EAAGA,EAAI4H,EAAKzH,SAAUH,EAC/B,CACCe,EAAQ6G,EAAK5H,GAAGM,aAAa,cAE7BgI,GAAiBvJ,EAAG6D,UAAUgF,EAAK5H,IAAK8C,UAAW,iBACnDwF,GAAeE,UAAYD,EAASxH,IAAU,CAE9C,IAAIhC,EAAG0J,SAASb,EAAK5H,GAAI,YACzB,CACCY,KAAKuH,WAAWN,EAAMjH,KAAKE,YAAYC,MAK1ChC,GAAGG,QAAQC,SAASmF,cAAgB,SAASoE,GAE5C,GAAIC,GAAUC,EAAY5I,EAAGwB,EAAGqH,EAAWjB,EAAOhH,KAAKoC,iBACvD,KAAKhD,EAAE,EAAGwB,EAAIoG,EAAKzH,OAAQH,EAAIwB,IAAKxB,EACpC,CACC2I,EAAW5J,EAAG0J,SAASb,EAAK5H,GAAI,WAEhC,IAAI2I,GAAYD,EAAY,EAC5B,CACCG,EAAY7I,EAAE,GAAK,EAAIA,EAAE,EAAIwB,EAAE,CAC/BzC,GAAG+J,YAAYlB,EAAK5H,GAAI,WACxBjB,GAAGmJ,SAASN,EAAKiB,GAAY,WAC7BD,GAAahB,EAAKiB,GAAWvI,aAAa,cAC1C,OAED,GAAIqI,GAAYD,EAAY,EAC5B,CACCG,EAAY7I,EAAE,GAAKwB,EAAE,EAAIxB,EAAE,EAAI,CAC/BjB,GAAG+J,YAAYlB,EAAK5H,GAAI,WACxBjB,GAAGmJ,SAASN,EAAKiB,GAAY,WAC7BD,GAAahB,EAAKiB,GAAWvI,aAAa,cAC1C,QAIF,GAAIuH,GAAOjH,KAAK+B,gBAChB/B,MAAKuH,WAAWN,EAAMjH,KAAKE,YAAY8H,GACvChI,MAAKnB,YAAcmJ,EAGpB7J,GAAGG,QAAQC,SAASiJ,UAAY,SAASJ,GAExC,GAAIH,GAAOjH,KAAK+B,gBAChB,IAAIiF,GAAOhH,KAAKoC,iBAEhB,KAAK,GAAIhD,GAAE,EAAGA,EAAI4H,EAAKzH,SAAUH,EACjC,CACC,GAAI4H,EAAK5H,IAAMgI,EACf,CACCjJ,EAAGmJ,SAASF,EAAK,WACjBpH,MAAKuH,WAAWN,EAAMjH,KAAKE,YAAYkH,EAAI1H,aAAa,qBAGzD,CACCvB,EAAG+J,YAAYlB,EAAK5H,GAAI,aAG1BY,KAAKnB,YAAcuI,EAAI1H,aAAa,eAGrCvB,GAAGG,QAAQC,SAASoF,eAAiB,SAASmE,GAE7C,GAAIb,GAAOjH,KAAK+B,gBAChB,IAAIgG,GAAU3I,EAAGwB,EAAGqH,EAAY,EAAG5I,EAAQlB,EAAGkE,aAAa4E,GAAO/E,UAAW,oBAAqB,KAClG,KAAK9C,EAAI,EAAGwB,EAAIvB,EAAME,OAAQH,EAAIwB,IAAKxB,EACvC,CACC2I,EAAW5J,EAAG0J,SAASxI,EAAMD,GAAI,4BACjC,IAAI2I,GAAYD,EAAY,EAC5B,CACCG,EAAY7I,EAAE,GAAK,EAAIA,EAAE,EAAIwB,EAAE,CAC/BzC,GAAG+J,YAAY7I,EAAMD,GAAI,4BACzBjB,GAAGmJ,SAASjI,EAAM4I,GAAY,4BAC9B,OAED,GAAIF,GAAYD,EAAY,EAC5B,CACCG,EAAY7I,EAAE,GAAKwB,EAAE,EAAIxB,EAAE,EAAI,CAC/BjB,GAAG+J,YAAY7I,EAAMD,GAAI,4BACzBjB,GAAGmJ,SAASjI,EAAM4I,GAAY,4BAC9B,QAIFjI,KAAKmI,cAAclB,EAAM5H,EAAM4I,IAGhC9J,GAAGG,QAAQC,SAASgJ,WAAa,SAASN,EAAM5H,GAE/ClB,EAAGiK,UAAUnB,EAEb,IAAI7H,GAAGqD,EAAM4F,EAAahF,EAAKrD,IAC/B,IAAIX,EAAME,SAAW,EACrB,CACC8I,EAAclK,EAAGqH,OAAO,MAAO6B,KAAMlJ,EAAGuI,QAAQ,sCAChDvI,GAAGmJ,SAASe,EAAa,yBACzBpB,GAAKC,YAAYmB,GAGlB,IAAKjJ,EAAI,EAAGA,EAAIC,EAAME,SAAUH,EAChC,CACCqD,EAAOpD,EAAMD,EACbiJ,GAAclK,EAAGqH,OAAO,MAAO6B,KAAMlJ,EAAGmI,KAAKgC,iBAAiB7F,EAAKrB,OAChEqB,EAAKnB,YAAc,+CAAiDnD,EAAGmI,KAAKgC,iBAAiB7F,EAAKnB,aAAe,UAAY,KAEhI+G,GAAYpI,aAAa,aAAcwC,EAAKhB,MAC5C4G,GAAYpI,aAAa,uBAAwBwC,EAAKS,gBAAkB,GACxEmF,GAAYpI,aAAa,YAAa,OAEtC9B,GAAGmJ,SAASe,EAAa,mBACzB,IAAIjJ,IAAM,EACTjB,EAAGmJ,SAASe,EAAa,4BAE1BlK,GAAG0B,KAAKwI,EAAa,QAAS,SAASvI,GACtCuD,EAAGb,gBAAgBxC,KAAMF,EAAE2D,WAAa,KACxC,IAAI3D,EAAE2D,WAAa,KAClBJ,EAAGf,YACJnE,GAAGsJ,MAAMpE,EAAG1E,aACZ,OAAOR,GAAGqF,eAAe1D,IAG1BmH,GAAKC,YAAYmB,GAGlBpB,EAAKsB,UAAY,EAGlBpK,GAAGG,QAAQC,SAAS4J,cAAgB,SAASlB,EAAMxE,GAElD,GAAI+F,GAAkBrK,EAAGsK,IAAIxB,EAC7B,IAAIyB,GAAkBvK,EAAGsK,IAAIhG,EAE7B,IAAIiG,EAAgBC,OAASH,EAAgBG,QAAUD,EAAgBE,IAAMJ,EAAgBI,IAC7F,CACC3B,EAAKsB,WACJG,EAAgBC,OAASH,EAAgBG,OACrCD,EAAgBC,OAASH,EAAgBG,OACzCD,EAAgBE,IAAMJ,EAAgBI"}