<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Bootstrap, from Twitter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Le styles -->
	{{HTML::style('media/framework/bootstrap/docs/assets/css/bootstrap.css');}}
	{{HTML::style('media/framework/ace/demo/kitchen-sink/styles.css')}}
  {{HTML::style('media/framework/ace/doc/site/images/favicon.ico',array('rel'=>'icon','type'=>'image/x-icon'))}}
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<style type="text/css">
		#editor-container{
			top:41px;
		}
	</style>
</head>
<body>
	<!--div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <ul class="nav" role="navigation btn-group btn-under">
            <li class="dropdown">
              <button id="drop1" href="#" role="button" class="dropdown-toggle btn btn-mini" data-toggle="dropdown">Archivo <b class="caret"></b>
          	  </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
              </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <button id="drop1" href="#" role="button" class="dropdown-toggle btn btn-mini" data-toggle="dropdown">Editar <b class="caret"></b>
          	  </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
              </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <button id="drop1" href="#" role="button" class="dropdown-toggle btn btn-mini" data-toggle="dropdown">Ver <b class="caret"></b>
          	  </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
              </ul>
            </li>
            <li class="divider-vertical"></li>
            <li class="dropdown">
              <button id="drop1" href="#" role="button" class="dropdown-toggle btn btn-mini" data-toggle="dropdown"> Herramientas <b class="caret"></b>
          	  </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
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
				      			<li valor="ace"><a>Ace</a></li>
					          <li valor="vim"><a>Vim</a></li>
					          <li valor="emacs"><a>Emacs</a></li>
					          <li valor="custom"><a>Custom</a></li>
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
				            <li valor="ace/theme/dreamweaver"><a style="padding-left:35px;">Dreamweaver</a></li>
				            <li valor="ace/theme/eclipse"><a style="padding-left:35px;">Eclipse</a></li>
				            <li valor="ace/theme/github"><a style="padding-left:35px;">GitHub</a></li>
				            <li valor="ace/theme/solarized_light"><a style="padding-left:35px;">Solarized Light</a></li>
				            <li valor="ace/theme/textmate"><a style="padding-left:35px;">TextMate</a></li>
				            <li valor="ace/theme/tomorrow"><a style="padding-left:35px;">Tomorrow</a></li>
				            <li valor="ace/theme/xcode"><a style="padding-left:35px;">XCode</a></li>
				            <li valor="ace/theme/ambiance"><a style="padding-left:35px;">Ambiance</a></li>
				            <li valor="ace/theme/chaos"><a style="padding-left:35px;">Chaos</a></li>
				            <li valor="ace/theme/clouds_midnight"><a style="padding-left:35px;">Clouds Midnight</a></li>
				            <li valor="ace/theme/cobalt"><a style="padding-left:35px;">Cobalt</a></li>
				            <li valor="ace/theme/idle_fingers"><a style="padding-left:35px;">idleFingers</a></li>
				            <li valor="ace/theme/kr_theme"><a style="padding-left:35px;">krTheme</a></li>
				            <li valor="ace/theme/merbivore"><a style="padding-left:35px;">Merbivore</a></li>
				            <li valor="ace/theme/merbivore_soft"><a style="padding-left:35px;">Merbivore Soft</a></li>
				            <li valor="ace/theme/mono_industrial"><a style="padding-left:35px;">Mono Industrial</a></li>
				            <li valor="ace/theme/solarized_dark"><a style="padding-left:35px;">Solarized Dark</a></li>
				            <li valor="ace/theme/terminal"><a style="padding-left:35px;">Terminal</a></li>
				            <li valor="ace/theme/tomorrow_night"><a style="padding-left:35px;">Tomorrow Night</a></li>
				            <li valor="ace/theme/tomorrow_night_blue"><a style="padding-left:35px;">Tomorrow Night Blue</a></li>
				            <li valor="ace/theme/tomorrow_night_bright"><a style="padding-left:35px;">Tomorrow Night Bright</a></li>
				            <li valor="ace/theme/tomorrow_night_eighties"><a style="padding-left:35px;">Tomorrow Night 80s</a></li>
				            <li valor="ace/theme/twilight"><a style="padding-left:35px;">Twilight</a></li>
				            <li valor="ace/theme/vibrant_ink"><a style="padding-left:35px;">Vibrant Ink</a></li>
				    			</ul>
								</li>
          	   </ul>
             </li>
          </ul>
        </div>
      </div>
    </div-->



	<div class="container">
		<div style="position:absolute;height:100%;width:260px;margin-left:-188px;">
  <a href="http://ajaxorg.github.com/ace/" >
    <img id="logo" src="demo/kitchen-sink/logo.png">
  </a>
  <div style="position: absolute; overflow: hidden; top:80px; bottom:0">
  <div style="width: 120%; height:100%; overflow-y: scroll">

  <table id="controls">
    <tr>
      <td>
        <label for="doc">Document</label>
      </td><td>
        <select id="doc" size="1">
        </select>
      </td>
    </tr>
    <tr>
      <td >
        <label for="mode">Mode</label>
      </td><td>
        <select id="mode" size="1">
        </select>
      </td>
    </tr>
    <tr>
      <td>
        <label for="split">Split</label>
      </td><td>
        <select id="split" size="1">
          <option value="none">None</option>
          <option value="below">Below</option>
          <option value="beside">Beside</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>
        <label for="fontsize">Font Size</label>
      </td><td>
        <select id="fontsize" size="1">
          <option value="10px">10px</option>
          <option value="11px">11px</option>
          <option value="12px" selected="selected">12px</option>
          <option value="13px">13px</option>
          <option value="14px">14px</option>
          <option value="16px">16px</option>
          <option value="18px">18px</option>
          <option value="20px">20px</option>
          <option value="24px">24px</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>
        <label for="folding">Code Folding</label>
      </td><td>
        <select id="folding" size="1">
          <option value="manual">manual</option>
          <option value="markbegin" selected="selected">mark begin</option>
          <option value="markbeginend">mark begin and end</option>
        </select>
      </td>
    </tr>
    <tr>
      <td >
        <label for="keybinding">Key Binding</label>
      </td><td>
        <select id="keybinding" size="1">
          <option value="ace">Ace</option>
          <option value="vim">Vim</option>
          <option value="emacs">Emacs</option>
          <option value="custom">Custom</option>
        </select>
      </td>
    </tr>
    <tr>
      <td >
        <label for="soft_wrap">Soft Wrap</label>
      </td><td>
        <select id="soft_wrap" size="1">
          <option value="off">Off</option>
          <option value="40">40 Chars</option>
          <option value="80">80 Chars</option>
          <option value="free">Free</option>
        </select>
      </td>
    </tr>

    <tr><td colspan="2">
    <table id="more-controls">
    <tr>
      <td>
        <label for="select_style">Full Line Selection</label>
      </td><td>
        <input type="checkbox" name="select_style" id="select_style" checked>
      </td>
    </tr>
    <tr>
      <td>
        <label for="highlight_active">Highlight Active Line</label>
      </td><td>
        <input type="checkbox" name="highlight_active" id="highlight_active" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="show_hidden">Show Invisibles</label>
      </td><td>
        <input type="checkbox" name="show_hidden" id="show_hidden" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="display_indent_guides">Show Indent Guides</label>
      </td><td>
        <input type="checkbox" name="display_indent_guides" id="display_indent_guides" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="show_hscroll">Persistent HScroll</label>
      </td><td>
        <input type="checkbox" name="show_hscroll" id="show_hscroll">
		<label for="show_hscroll">VScroll</label>
        <input type="checkbox" name="show_vscroll" id="show_vscroll">
      </td>
    </tr>
    <tr>
      <td >
        <label for="animate_scroll">Animate scrolling</label>
      </td><td>
        <input type="checkbox" name="animate_scroll" id="animate_scroll">
      </td>
    </tr>
    <tr>
      <td >
        <label for="show_gutter">Show Gutter</label>
      </td><td>
        <input type="checkbox" id="show_gutter" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="show_print_margin">Show Print Margin</label>
      </td><td>
        <input type="checkbox" id="show_print_margin" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="soft_tab">Use Soft Tab</label>
      </td><td>
        <input type="checkbox" id="soft_tab" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="highlight_selected_word">Highlight selected word</label>
      </td>
      <td>
        <input type="checkbox" id="highlight_selected_word" checked>
      </td>
    </tr>
    <tr>
      <td >
        <label for="enable_behaviours">Enable Behaviours</label>
      </td>
      <td>
        <input type="checkbox" id="enable_behaviours">
      </td>
    </tr>
    <tr>
      <td >
        <label for="fade_fold_widgets">Fade Fold Widgets</label>
      </td>
      <td>
        <input type="checkbox" id="fade_fold_widgets">
      </td>
    </tr>
    <tr>
      <td >
        <label for="elastic_tabstops">Enable Elastic Tabstops</label>
      </td>
      <td>
        <input type="checkbox" id="elastic_tabstops">
      </td>
    </tr>
    <tr>
      <td >
        <label for="isearch">Incremental Search</label>
      </td>
      <td>
        <input type="checkbox" id="isearch">
      </td>
    </tr>
    <tr>
      <td >
        <label for="highlight_token">Show token info</label>
      </td>
      <td>
        <input type="checkbox" id="highlight_token">
      </td>
    </tr>
    <tr>
      <td >
        <label for="read_only">Read-only</label>
      </td>
      <td>
        <input type="checkbox" id="read_only">
      </td>
    </tr>
    <tr>
      <td >
        <label for="scrollPastEnd">Scroll Past End</label>
      </td>
      <td>
        <input type="checkbox" id="scrollPastEnd" checked>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="button" value="Edit Snippets" onclick="env.editSnippets()">
      </td>
    </tr>
  </table>
  </td></tr>
  </table>

  </div>
  </div>
</div>
  <div id="editor-container"></div>

	</div> <!-- /container -->

	<!-- Le javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	{{HTML::script('media/framework/jquery-ui/tests/jquery-1.7.js');}}
	{{HTML::script('media/framework/bootstrap/docs/assets/js/bootstrap.js');}}
	{{HTML::script('media/framework/bootstrap/docs/assets/js/bootstrap.min.js');}}
  <script type="text/javascript">
      var require = {
          baseUrl: window.location.protocol + "//" + window.location.host + window.location.pathname.split("/").slice(0, -1).join("/"),
          paths: {
              ace: "media/framework/ace/lib/ace"
          },
          waitSeconds: 30
      };
  </script>
  <script src="media/framework/ace/demo/kitchen-sink/require.js" data-main="media/framework/ace/demo/kitchen-sink/demo" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.dropdown-toggle').dropdown();
		});
	</script>

	<!--PACKAGE
  <script src="src/ace.js" data-ace-base="src" type="text/javascript" charset="utf-8"></script>
  <script src="src/keybinding-vim.js"></script>
  <script src="src/keybinding-emacs.js"></script>
  <script src="kitchen-sink/demo.js"></script>
  <script type="text/javascript" charset="utf-8">
    require("kitchen-sink/demo");
  </script>
    PACKAGE-->
</body>
</html>