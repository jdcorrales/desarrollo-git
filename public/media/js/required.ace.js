//var editorFirst = ace.edit("editor");
//var editorFirst = '';
//var contentCopy;
//setupEditor();

/*function setupEditor() {
    editorFirst.setOption("enableEmmet", true);
    editorFirst.setTheme('ace/theme/monokai');//tema de visualizacion
    editorFirst.getSession().setMode("ace/mode/php");//typo de documento php,javascript,html
    editorFirst.setValue("../css/mycss.scss");//documento a abrir
    editorFirst.renderer.setShowPrintMargin(true); //Muestra la margen de la pantalla
    editorFirst.getSession().setUseWrapMode(true);
    editorFirst.getSession().setWrapLimitRange(null, null);
    editorFirst.setPrintMarginColumn(152);
    editorFirst.setHighlightActiveLine(false);//linea linterna que indica donde estoy hubicado
    editorFirst.resize();
    editorFirst.setBehavioursEnabled(true);
    editorFirst.getSession().setUseWrapMode(true);
    editorFirst.getSession().setTabSize(2);
    editorFirst.setAnimatedScroll(false);
    editorFirst.getSession().setUseSoftTabs(true);
    editorFirst.getSession().setUseWrapMode(true);
    document.getElementById('editor').style.fontSize = '12px';
}*/
var EditSession = require("ace/edit_session").EditSession;
var Editor = require("ace/editor").Editor;
//var MockRenderer = require("ace/renderer").MockRenderer;
var MultiSelect = require("ace/multi_select").MultiSelect;


$('#addTab').live('click', function() {
	var tabsElement    = $('.tabbable');

	var tabsUlElement  = tabsElement.children('.nav-tabs');
	tabsUlElement.children('li').removeClass('active');
	var tabsDivContent = tabsElement.children('.tab-content');

	// the panel id is a timestamp plus a random number from 0 to 10000
	var tabUniqueId = new Date().getTime() + Math.floor(Math.random()*10000);

	// create a new panel DOM
	var titulo_tab ='Section'+tabUniqueId;
	var newTabPanelElement = '<li class="active"><a href="#tab'+tabUniqueId+'" class="tab'+tabUniqueId+'" data-toggle="tab">'+titulo_tab.substring(0,1)+'<i class="icon-remove pull-right"></i></a></li>';
	var newTabContent      = '<div class="tab-pane" id="tab'+tabUniqueId+'" style="height: '+ $(window).height()+'px; width: 100%;"><p>Im in Section '+tabUniqueId+'</p></div>';

	 // add the new nav item to the DOM
	tabsUlElement.append(newTabPanelElement);
	tabsDivContent.append(newTabContent);
	$('.nav > li > a').attr('click-tab', 'tab'+tabUniqueId).click();
	//$('a').attr('click-tab', 'tab'+tabUniqueId).click();


	// initialize the editor in the tab
	editorFirst = ace.edit('tab'+tabUniqueId);
	editorFirst.setTheme("ace/theme/monokai");
	editorFirst.getSession().setMode("ace/mode/php");

	console.log(editorFirst);
	/*var color = $('.ace_editor').css( "background-color" );
	$('.ace_scrollbar').css('overflow-y','inherit');
	$('.ace_scrollbar-h').css('overflow-x','inherit');
	editor.focus();*/
	//$('.nav-tabs > .active > a').css('background-color',color);
	//$('.nav-tabs > .active > a:hover').css('background-color',color);
	//$('.nav-tabs > .active > a:focus').css('background-color',color);
});

$('.icon-remove').live('click', function(event) {
	$($(this).parent('a').attr('href')).remove();
  $(this).parent('a').remove();
});


/**
* -------------------------------------------------------------------------
* Preferencias
* -------------------------------------------------------------------------
*/

/**
* -------------------------------------------------------------------------
* Event click keybinding
* -------------------------------------------------------------------------
* Descripción resumen: Cambia el cursor del editor de texto
*
* Descripción extensa: Al hacer click en #keybinding remueve el icon-ok y pone
* todos los padding-left:35px, luego pone el icon-ok y el padding-left:20px
* al keybinding selecionado
*
* @date      2013-09-24 1:48:05 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#keybinding > li').live('click', function(event) {
	$('#keybinding > li').children('a').children('i').remove();
	$('#keybinding > li').children('a').css('padding-left', '35px');
	$(this).children('a').prepend('<i class="icon-ok"></i>');
	$(this).children('a').css('padding-left', '20px');
	var valor = null;
	if($(this).attr('valor') !== 'null'){
		valor = $(this).attr('valor');
	}
	editorFirst.setKeyboardHandler(valor);
});

/**
* -------------------------------------------------------------------------
* Event click theme
* -------------------------------------------------------------------------
* Descripción resumen: Cambia el tema del editor de texto
*
* Descripción extensa: Al hacer click en #theme remueve el icon-ok y pone
* todos los padding-left:35px, luego pone el icon-ok y el padding-left:20px
* al theme selecionado
*
* @date      2013-09-24 1:48:05 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  theme
*/
$('#theme > li').live('click', function(event) {
	$('#theme > li').children('a').children('i').remove();
	$('#theme > li').children('a').css('padding-left', '35px');
	$(this).children('a').prepend('<i class="icon-ok"></i>');
	$(this).children('a').css('padding-left', '20px');
	editorFirst.setTheme($(this).attr('valor'));

});

/**
* -------------------------------------------------------------------------
* Herramientas
* -------------------------------------------------------------------------
*/

/**
* -------------------------------------------------------------------------
* Event click highlight_active
* -------------------------------------------------------------------------
* Descripción resumen: Resalta la fila donde se encuentra hubicado el cursor
*
* Descripción extensa: Al hacer click en #highlight_active activa o desaciva
* el resaltador de linea poniendo el icon-ok y el padding-left:20px cuando
* el resaltador esta activo sino remueve el icon-ok y pone el
* padding-left:35px
*
* @date      2013-09-24 10:35:04 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#highlight_active').live('click', function(event) {
	if($(this).attr('valor') === '1'){
	 $(this).attr('valor',0);
	 $(this).children('a').children('i').remove();
	 $(this).children('a').css('padding-left', '35px');
	}else{
	 $(this).attr('valor',1);
	 $(this).children('a').prepend('<i class="icon-ok"></i>');
	 $(this).children('a').css('padding-left', '20px');
	}
	editorFirst.setHighlightActiveLine(parseInt($(this).attr('valor')));
});

/**
* -------------------------------------------------------------------------
* Event click show_hidden
* -------------------------------------------------------------------------
* Descripción resumen: Muestra las marcas de espacios y final de linea
*
* Descripción extensa: Al hacer click en #show_hidden muestra u oculta las
* marcas de los espacios en el texto y el final de cada linea
*
* @date      2013-09-25 10:35:04 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#show_hidden').live('click', function(event) {
	if($(this).attr('valor') === '1'){
	 $(this).attr('valor',0);
	 $(this).children('i').remove();
	 $(this).css('padding-left', '35px');
	}else{
	 $(this).attr('valor',1);
	 $(this).prepend('<i class="icon-ok"></i>');
	 $(this).css('padding-left', '20px');
	}
	editorFirst.setShowInvisibles(parseInt($(this).attr('valor')));
});

/**
* -------------------------------------------------------------------------
* Event click display_indent_guides
* -------------------------------------------------------------------------
* Descripción resumen: Muestra las guias de identación
*
* Descripción extensa: Al hacer click en #display_indent_guides muestra u
* oculta las guias de identación del codigó
*
* @date      2013-09-25 1:22:57 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#display_indent_guides').live('click', function(event) {
	if($(this).attr('valor') === '1'){
	 $(this).attr('valor',0);
	 $(this).children('i').remove();
	 $(this).css('padding-left', '35px');
	}else{
	 $(this).attr('valor',1);
	 $(this).prepend('<i class="icon-ok"></i>');
	 $(this).css('padding-left', '20px');
	}
	editorFirst.setDisplayIndentGuides(parseInt($(this).attr('valor')));
});

/**
* -------------------------------------------------------------------------
* Event click show_hscroll
* -------------------------------------------------------------------------
* Descripción resumen: Muestra la barra de scroll horizontal
*
* Descripción extensa: Al hacer click en #show_hscroll muestra u
* oculta la barra de scroll horizontal, poniendo el icon-ok cuando la
* muestra y quitandolo al ocultar la barra de scroll
*
* @date      2013-09-25 9:33:57 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#show_hscroll').live('click', function(event) {
	if($(this).attr('valor') === '1'){
	 $(this).attr('valor',0);
	 $(this).children('i').remove();
	 $(this).css('padding-left', '35px');
	}else{
	 $(this).attr('valor',1);
	 $(this).prepend('<i class="icon-ok"></i>');
	 $(this).css('padding-left', '20px');
	}
	editorFirst.setOption("hScrollBarAlwaysVisible",parseInt($(this).attr('valor')));
});

/**
* -------------------------------------------------------------------------
* Event click show_vscroll
* -------------------------------------------------------------------------
* Descripción resumen: Muestra la barra de scroll vertical
*
* Descripción extensa: Al hacer click en #show_vscroll muestra u
* oculta la barra de scroll vertical, poniendo el icon-ok cuando la
* muestra y quitandolo al ocultar la barra de scroll
*
* @date      2013-09-25 9:37:20 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#show_vscroll').live('click', function(event) {
	if($(this).attr('valor') === '1'){
	 $(this).attr('valor',0);
	 $(this).children('i').remove();
	 $(this).css('padding-left', '35px');
	}else{
	 $(this).attr('valor',1);
	 $(this).prepend('<i class="icon-ok"></i>');
	 $(this).css('padding-left', '20px');
	}
	editorFirst.setOption("vScrollBarAlwaysVisible",parseInt($(this).attr('valor')));
});

/**
* -------------------------------------------------------------------------
* Event click show_print_margin
* -------------------------------------------------------------------------
* Descripción resumen: Muestra la barra de scroll vertical
*
* Descripción extensa: Al hacer click en #show_print_margin muestra u
* oculta la barra de scroll vertical, poniendo el icon-ok cuando la
* muestra y quitandolo al ocultar la barra de scroll
*
* @date      2013-09-25 9:37:20 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#show_print_margin').live('click', function(event) {
	if($(this).attr('valor') === '1'){
	 $(this).attr('valor',0);
	 $(this).children('i').remove();
	 $(this).css('padding-left', '35px');
	}else{
	 $(this).attr('valor',1);
	 $(this).prepend('<i class="icon-ok"></i>');
	 $(this).css('padding-left', '20px');
	}
	editorFirst.renderer.setShowPrintMargin(parseInt($(this).attr('valor')));
});
/**
* -------------------------------------------------------------------------
* Ver
* -------------------------------------------------------------------------
*/

/**
* -------------------------------------------------------------------------
* Event click show_gutter
* -------------------------------------------------------------------------
* Descripción resumen: Muestra las flechas para plegar el código
*
* Descripción extensa: Al hacer click en #folding muestra u oculta la
* opción para peglar o desplegar el codigó dentro de una sentencia
*
* @date      2013-09-24 10:38:55 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#show_gutter').live('click', function(event) {
	if($(this).attr('valor') === '1'){
	 $(this).attr('valor',0);
	 $(this).children('i').remove();
	 $(this).css('padding-left', '35px');
	}else{
	 $(this).attr('valor',1);
	 $(this).prepend('<i class="icon-ok"></i>');
	 $(this).css('padding-left', '20px');
	}
	editorFirst.renderer.setShowGutter(parseInt($(this).attr('valor')));
});

/**
* -------------------------------------------------------------------------
* Event click folding
* -------------------------------------------------------------------------
* Descripción resumen: Muestra las flechas para plegar el código
*
* Descripción extensa: Al hacer click en #folding muestra u oculta la
* opción para peglar o desplegar el codigó dentro de una sentencia
*
* @date      2013-09-24 10:38:55 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#folding').live('click', function(event) {
	if($(this).attr('valor') === '1'){
	 $(this).attr('valor',0);
	 $(this).children('i').remove();
	 $(this).css('padding-left', '35px');
	}else{
	 $(this).attr('valor',1);
	 $(this).prepend('<i class="icon-ok"></i>');
	 $(this).css('padding-left', '20px');
	}
	editorFirst.setShowFoldWidgets(parseInt($(this).attr('valor')));
});

/**
* -------------------------------------------------------------------------
* Event click fade_fold_widgets
* -------------------------------------------------------------------------
* Descripción resumen: Seleciona el modo a mostrar los plieges del folding
*
* Descripción extensa: Al hacer click en #fade_fold_widgets en uno de los
* dos modos.
* Persistente: Muestra las pestañas de una forma continua
* Oculto: Las mespañas se muestran al pasar sobre ellas (hover)
*
* @date      2013-09-24 10:50:10 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#fade_fold_widgets > li').live('click', function(event) {
	$('#fade_fold_widgets > li').children('a').children('i').remove();
	$('#fade_fold_widgets > li').children('a').css('padding-left', '35px');
	$(this).children('a').prepend('<i class="icon-ok"></i>');
	$(this).children('a').css('padding-left', '20px');
	editorFirst.setFadeFoldWidgets(parseInt($(this).attr('valor')));
});

/**
* -------------------------------------------------------------------------
* Event click soft_wrap
* -------------------------------------------------------------------------
* Descripción resumen: Ajusta la cantidad de caracteres por linea de codigo
*
* Descripción extensa: Al hacer click en #soft_wrap se especifica que can-
* tidad de caracteres se muestran por linea, se ajusta el margen, el codigó
* se repliega cuando alcanza el tope de caracteres
*
* @date      2013-09-25 12:33:40 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#soft_wrap > li').live('click', function(event) {
	$('#soft_wrap > li').children('a').children('i').remove();
	$('#soft_wrap > li').children('a').css('padding-left', '35px');
	$(this).children('a').prepend('<i class="icon-ok"></i>');
	$(this).children('a').css('padding-left', '20px');
    switch ($(this).attr('valor')) {
        case "off":
            editorFirst.setShowPrintMargin(false);
            editorFirst.getSession().setUseWrapMode(false);
            break;
        case "free":
        		//editorFirst.setShowPrintMargin(true);
            editorFirst.getSession().setUseWrapMode(true);
            editorFirst.getSession().setWrapLimitRange(null, null);
            editorFirst.setPrintMarginColumn(152);
            break;
        default:
        		//editorFirst.setShowPrintMargin(true);
            editorFirst.getSession().setUseWrapMode(true);
            var col = parseInt($(this).attr('valor'), 10);
            editorFirst.getSession().setWrapLimitRange(col, col);
            editorFirst.setPrintMarginColumn(col);
    }
});

/**
* -------------------------------------------------------------------------
* Event click select_style
* -------------------------------------------------------------------------
* Descripción resumen: Cambia el modo en que se muestra el texto selecionado
*
* Descripción extensa: Al hacer click en #select_style pone la selección del
* texto en modo ajustado o modo completo
*
* @date      2013-09-25 12:5605 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/

$('#select_style').live('click', function(event) {
	if($(this).attr('valor') === 'line'){
	 $(this).attr('valor','text');
	 $(this).children('i').remove();
	 $(this).css('padding-left', '35px');
	}else{
	 $(this).attr('valor','line');
	 $(this).prepend('<i class="icon-ok"></i>');
	 $(this).css('padding-left', '20px');
	}
	editorFirst.setSelectionStyle($(this).attr('valor'));
});

/**
* -------------------------------------------------------------------------
* Editar
* -------------------------------------------------------------------------
*/

var UndoManager = require("ace/undomanager").UndoManager;

$('#undo').live('click', function(event) {
	var undoManager = editorFirst.session.getUndoManager();
	//console.log(editorFirst.undo());
	console.log(undoManager);
	console.log(undoManager.hasUndo());
	//editorFirst.focus();
});

$('#redo').live('click', function(event) {
	var undoManager = editorFirst.session.getUndoManager();
	console.log(undoManager);
	console.log(undoManager.hasRedo());
	editorFirst.focus();
});

/**
* -------------------------------------------------------------------------
* Event click copy
* -------------------------------------------------------------------------
* Descripción resumen: Cambia el modo en que se muestra el texto selecionado
*
* Descripción extensa: Al hacer click en #select_style pone la selección del
* texto en modo ajustado o modo completo
*
* @date      2013-09-25 12:5605 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#copy').live('click', function(event) {
	contentCopy = editorFirst.getCopyText();
	editorFirst.focus();
});

/**
* -------------------------------------------------------------------------
* Event click cut
* -------------------------------------------------------------------------
* Descripción resumen: Cambia el modo en que se muestra el texto selecionado
*
* Descripción extensa: Al hacer click en #select_style pone la selección del
* texto en modo ajustado o modo completo
*
* @date      2013-09-25 12:5605 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* ess private
*
* @param  array
* @param  cursor
*/
$('#cut').live('click', function(event) {
	if(!jQuery.isEmptyObject(editorFirst.getCopyText())){
		contentCopy = editorFirst.getCopyText();
		editorFirst.removeWordLeft();
	}
	editorFirst.focus();
});

/**
* -------------------------------------------------------------------------
* Event click cut
* -------------------------------------------------------------------------
* Descripción resumen: Cambia el modo en que se muestra el texto selecionado
*
* Descripción extensa: Al hacer click en #select_style pone la selección del
* texto en modo ajustado o modo completo
*
* @date      2013-09-25 12:5605 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#paste').live('click', function(event) {
	editorFirst.insert(contentCopy);
	editorFirst.focus();
});

/**
* -------------------------------------------------------------------------
* Event click fontsize-plus
* -------------------------------------------------------------------------
* Descripción resumen: Aumenta el tamaño de la fuente
*
* Descripción extensa: Al hacer click en #fontsize-plus aumenta el tamaño
* de la fuente en un máximo de 40px
*
* @date      2013-09-24 10:45:50 p.m
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#fontsize-plus').live('click', function(event) {
	var valor = parseInt($('#fontsize-plus + #size').attr('valor')) + 1;
	if(valor >= 40){
		valor = 40;
	}
	$('#fontsize-plus + #size').attr('valor', valor);
	$('#fontsize-plus + #size').html(valor);
		editorFirst.setFontSize(valor+'px');
		event.stopPropagation();
});

/**
* -------------------------------------------------------------------------
* Event click fontsize-minus
* -------------------------------------------------------------------------
* Descripción resumen: Disminuye el tamaño de la fuente
*
* Descripción extensa: Al hacer click en #fontsize-minus disminuye el tamaño
* de la fuente en un mínimo de 10px
*
* @date      2013-09-24 10:17:50 p.ml
* @author    jdcorrales <jdcorralesS@gmail.com>
*
* @access private
*
* @param  array
* @param  cursor
*/
$('#fontsize-minus').live('click', function(event) {
	var valor = parseInt($('#fontsize-plus + #size').attr('valor')) - 1;
	if(valor <= 10){
		valor = 10;
	}
	$('#fontsize-plus + #size').attr('valor', valor);
	$('#fontsize-plus + #size').html(valor);
	editorFirst.setFontSize(valor+'px');
	event.stopPropagation();
});

/**
* -------------------------------------------------------------------------
* Archivo
* -------------------------------------------------------------------------
*/



/*var editor = ace.edit("editor");
editor.setTheme("ace/theme/chrome");
editor.getSession().setMode("ace/mode/php");
editor.setOptions({
    enableBasicAutocompletion: true,
    enableLiveAutoComplete: true,
    enableSnippets: true
});
var snippetManager = ace.require("ace/snippets").snippetManager;
var config = ace.require("ace/config");
ace.config.loadModule("ace/snippets/php", function(m) {
if (m) {
  snippetManager.files.php = m;
  m.snippets = snippetManager.parseSnippetFile(m.snippetText);

  // or do this if you already have them parsed
  m.snippets.push({
    content: "buscar_filtro_tabla(${1:''},${2:''},${3:''},${4:''},${6:conn});",
    name: "busca_filtro_tabla",
    tabTrigger: "bft"
  });
  snippetManager.register(m.snippets, m.scope);
  }
}); */