<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE in Action</title>
	{{HTML::style('media/framework/bootstrap/docs/assets/css/bootstrap.css');}}
	{{HTML::style('media/framework/ace/demo/kitchen-sink/styles.css')}}
  {{HTML::style('media/framework/ace/doc/site/images/favicon.ico',array('rel'=>'icon','type'=>'image/x-icon'))}}
<style type="text/css" media="screen">
    #editor {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
</style>
</head>
<body>

  <div id="editor"></div>

	{{HTML::script('media/framework/jquery-ui/tests/jquery-1.7.js');}}
	{{HTML::script('media/framework/bootstrap/docs/assets/js/bootstrap.js');}}
	{{HTML::script('media/framework/bootstrap/docs/assets/js/bootstrap.min.js');}}
	{{HTML::script('media/framework/ace/build/src/ace.js');}}
	{{HTML::script('media/framework/ace/lib/ace/ext/emmet.js');}}
	{{HTML::script('media/framework/ace/lib/ace/ext/keybinding_menu.js');}}

  <script src="media/framework/ace/demo/kitchen-sink/require.js" data-main="media/framework/ace/demo/kitchen-sink/demo" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var editorFirst = ace.edit("editor");
		setupEditor();
		function setupEditor() {
		    editorFirst.setOption("enableEmmet", true);
		    editorFirst.setTheme("ace/theme/monokai");//tema de visualizacion
		    editorFirst.getSession().setMode("ace/mode/html");//typo de documento php,javascript,html
		    editorFirst.setShowPrintMargin(false); //tamaño de la margen de la pantalla
		    editorFirst.setHighlightActiveLine(true);//linea linterna que indica donde estoy hubicado
		    editorFirst.resize();
		    editorFirst.setBehavioursEnabled(true);
		    editorFirst.getSession().setUseWrapMode(true);
		    getSession().setTabSize(2);
		    editorFirst.setAnimatedScroll(false);
		    editorFirst.setKeyboardHandler("emacs");
		    document.getElementById('editor').style.fontSize = '12px';
		}
	});
</script>
</body>
</html>


