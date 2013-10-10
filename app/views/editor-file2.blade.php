<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE in Action</title>
	{{HTML::style('media/framework/bootstrap/docs/assets/css/bootstrap.css');}}
	{{HTML::style('media/css/required.ace.css');}}
	{{HTML::style('media/framework/ace/demo/kitchen-sink/styles.css')}}
  {{HTML::style('media/framework/ace/doc/site/images/favicon.ico',array('rel'=>'icon','type'=>'image/x-icon'))}}
<style type="text/css" media="screen">
    /*#editor {
        position: absolute;
        top: 40px;
        right: 0;
        bottom: 0;
        left: 0;
    }
    #editor-container{
			top:41px;
		}*/
		.ace_editor {
		/*position: relative !important;
		border: 1px solid lightgray;
		margin: auto;
		height: 200px;
		width: 100%;*/
	}
</style>
</head>
<body>

	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <ul class="nav" role="navigation btn-group btn-under">
            <li class="dropdown">
              <button id="drop1" href="#" role="button" class="dropdown-toggle btn btn-mini" data-toggle="dropdown">Archivo <b class="caret"></b>
          	  </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a id="addTab" tabindex="-1" style="padding-left:35px;">Nuevo</a></li>
              </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <button id="drop1" href="#" role="button" class="dropdown-toggle btn btn-mini" data-toggle="dropdown">Editar <b class="caret"></b>
          	  </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
              	<!--li><a id="undo" tabindex="-1" style="padding-left:35px;">Deshacer</a></li>
              	<li><a id="redo" tabindex="-1" style="padding-left:35px;">Rehacer</a></li-->
                <li><a id="copy" tabindex="-1" style="padding-left:35px;">Copiar</a></li>
                <li><a id="cut" tabindex="-1" style="padding-left:35px;">Cortar</a></li>
                <li><a id="paste" tabindex="-1" style="padding-left:35px;">Pegar</a></li>
                <li>
                	<a class="prepend append" style="padding:0px 0px 0px 7px;" tabindex="-1">
                		Tama&ntilde;o fuente
                		<div id="fontsize-plus" class="btn btn-large btn-mini dd-on">+</div>
  										<b id="size" valor="12" style="padding:5px;">12</b>
  									<div id="fontsize-minus" class="btn btn-mini add-on">-&nbsp;</div>
                	</a>
                </li>
              </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <button id="drop1" href="#" role="button" class="dropdown-toggle btn btn-mini" data-toggle="dropdown">Ver <b class="caret"></b>
          	  </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li><a id="show_gutter" tabindex="-1" valor="1" style="padding-left:35px;">Ver numeración</a></li>
                <li><a id="folding" tabindex="-1" valor="1" style="padding-left:35px;">Plegar código</a></li>
                <li class="dropdown-submenu">
									<a tabindex="-1" style="padding-left:35px;">Tipo plegado</a>
				    			<ul class="dropdown-menu" id="fade_fold_widgets">
				      			<li valor="0"><a style="padding-left:35px;">Persistente</a></li>
				    				<li valor="1"><a style="padding-left:35px;">Oculto</a></li>
				    			</ul>
								</li>
								<li class="dropdown-submenu">
									<a tabindex="-1" style="padding-left:35px;">Ajustar línea</a>
				    			<ul class="dropdown-menu" id="soft_wrap">
				      			<li valor="off"><a style="padding-left:35px;">No ajustar</a></li>
				    				<li valor="free"><a style="padding-left:35px;">Libre</a></li>
				    				<li valor="80"><a style="padding-left:35px;">80 caracteres</a></li>
				    				<li valor="40"><a style="padding-left:35px;">40 caracteres</a></li>
				    				<li valor="20"><a style="padding-left:35px;">20 caracteres</a></li>
				    			</ul>
								</li>
								<li><a id="select_style" style="padding-left:35px;" valor="line">Selección Completa</a></li>
              </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <button id="drop1" href="#" role="button" class="dropdown-toggle btn btn-mini" data-toggle="dropdown">Herramientas <b class="caret"></b>
          	  </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li id="highlight_active" valor="0"><a style="padding-left:35px;">Resaltar</a></li>
                <li><a id="show_hidden" valor="0" style="padding-left:35px;">Huellas</a></li>
                <li><a id="display_indent_guides" valor="0" style="padding-left:35px;">Guias identación</a></li>
                <li class="dropdown-submenu">
									<a tabindex="-1" style="padding-left:35px;">Barras desplazamiento</a>
				    			<ul class="dropdown-menu">
				      			<li><a id="show_hscroll" valor='0' style="padding-left:35px;">Horizontal</a></li>
				    				<li><a id="show_vscroll" valor='0' style="padding-left:35px;">Vertical</a></li>
				    			</ul>
								</li>
								<li><a id="show_print_margin" valor="1" style="padding-left:35px;">Margen</a></li>
              </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <button id="drop1" href="#" role="button" class="dropdown-toggle btn btn-mini" data-toggle="dropdown">Preferencias <b class="caret"></b>
          	  </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                <li class="divider"></li>
                <li class="dropdown-submenu">
									<a tabindex="-1">Key Binding</a>
				    			<ul class="dropdown-menu" id="keybinding">
				      			<li valor="null"><a>Normal</a></li>
					          <li valor="ace/keyboard/vim"><a>Protegido</a></li>
					          <li valor="ace/keyboard/emacs"><a>Linterna</a></li>
				    			</ul>
								</li>
								<li class="divider"></li>
                <li class="dropdown-submenu">
									<a tabindex="-1" href="#">Cambiar tema</a>
				    			<ul class="dropdown-menu" id="theme">
				      			<li valor="ace/theme/monokai"><a style="padding-left:35px;">Monokai</a></li>
				    				<li valor="ace/theme/chrome"><a style="padding-left:35px;">Chrome</a></li>
	        		  		<li valor="ace/theme/pastel_on_dark"><a style="padding-left:35px;">Pastel on dark</a></li>
	        		  		<li valor="ace/theme/clouds"><a style="padding-left:35px;">Clouds</a></li>
				            <li valor="ace/theme/crimson_editor"><a style="padding-left:35px;">Crimson Editor</a></li>
				            <li valor="ace/theme/dawn"><a style="padding-left:35px;">Dawn</a style="padding-left:35px;"></li>
				            <li valor="ace/theme/github"><a style="padding-left:35px;">GitHub</a></li>
				            <li valor="ace/theme/tomorrow"><a style="padding-left:35px;">Tomorrow</a></li>
				            <li valor="ace/theme/xcode"><a style="padding-left:35px;">XCode</a></li>
				            <li valor="ace/theme/ambiance"><a style="padding-left:35px;">Ambiance</a></li>
				            <li valor="ace/theme/mono_industrial"><a style="padding-left:35px;">Mono Industrial</a></li>
				            <li valor="ace/theme/solarized_dark"><a style="padding-left:35px;">Solarized Dark</a></li>
				            <li valor="ace/theme/twilight"><a style="padding-left:35px;">Twilight</a></li>
				            <li valor="ace/theme/vibrant_ink"><a style="padding-left:35px;">Vibrant Ink</a></li>
				    			</ul>
								</li>
          	   </ul>
             </li>
          </ul>
        </div>
      </div>
    </div>


  <!--div id="editor"></div-->
  <div class="tabbable"> <!-- Only required for left/right tabs -->
	  <ul class="nav nav-tabs">
	    <li class="active"><a href="#editor" data-toggle="tab">Section 1</a></li>
	  </ul>
	  <div class="tab-content">
	    <div class="tab-pane active" id="editor"><p>Howdy, I'm in Section 244.</p></div>
	  </div>
	</div>

	{{HTML::script('media/framework/jquery-ui/tests/jquery-1.7.js');}}
	{{HTML::script('media/framework/bootstrap/docs/assets/js/bootstrap.js');}}
	{{HTML::script('media/framework/ace/build/src/ace.js');}}
	{{HTML::script('media/framework/ace/lib/ace/keyboard/keybinding.js');}}
	{{HTML::script('media/framework/ace/lib/ace/document.js');}}
	{{HTML::script('media/framework/ace/lib/ace/ext/emmet.js');}}
	{{HTML::script('media/framework/ace/lib/ace/ext/keybinding_menu.js');}}
	{{HTML::script('media/framework/ace/build/src/mode-html.js');}}
	{{HTML::script('media/framework/ace/lib/ace/virtual_renderer.js');}}
	{{HTML::script('media/framework/ace/lib/ace/anchor.js');}}
	{{HTML::script('media/framework/ace/lib/ace/edit_session.js');}}
	{{HTML::script('media/framework/ace/lib/ace/test/mockrenderer.js');}}
	{{HTML::script('media/js/required.ace.js');}}

<!--script type="text/javascript">
	$(document).ready(function() {
		var editorFirst = ace.edit("editor");
		setupEditor();
		function setupEditor() {
		    editorFirst.setOption("enableEmmet", true);
		    editorFirst.setTheme("ace/theme/monokai");//tema de visualizacion
		    editorFirst.getSession().setMode("ace/mode/html");//typo de documento php,javascript,html
		    editorFirst.setValue('');
		    //documento a abrir
		    editorFirst.getValue();
		    editorFirst.setShowPrintMargin(false); //tamaño de la margen de la pantalla
		    editorFirst.setHighlightActiveLine(true);//linea linterna que indica donde estoy hubicado
		    editorFirst.resize();
		    editorFirst.setBehavioursEnabled(true);
		    editorFirst.getSession().setUseWrapMode(true);
		    editorFirst.getSession().setTabSize(2);
		    editorFirst.setAnimatedScroll(false);
		    editorFirst.setKeyboardHandler("emacs");
		    editorFirst.getSession().setUseSoftTabs(true);
		    editorFirst.getSession().setUseWrapMode(true);

		    document.getElementById('editor').style.fontSize = '12px';
		    //document.createAnchor('50','50');
		}

	});
</script-->
</body>
</html>


