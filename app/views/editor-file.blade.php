<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE in Action</title>
	{{HTML::style('media/framework/bootstrap/docs/assets/css/bootstrap.css');}}
  {{HTML::style('media/framework/ace/doc/site/images/favicon.ico',array('rel'=>'icon','type'=>'image/x-icon'))}}
</head>
<body>



<div class="container">

<!-------->
<div id="content">
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active"><a href="#red" data-toggle="tab">Red</a></li>
        <li><a href="#orange" data-toggle="tab">Orange</a></li>
        <li><a href="#yellow" data-toggle="tab">Yellow</a></li>
        <li><a href="#green" data-toggle="tab">Green</a></li>
        <li><a href="#blue" data-toggle="tab">Blue</a></li>
    </ul>
    <div id="my-tab-content" class="tab-content">
        <div class="tab-pane active" id="red">
            <h1>Red</h1>
            <p>red red red red red red</p>
        </div>
        <div class="tab-pane" id="orange">
            <h1>Orange</h1>
            <p>orange orange orange orange orange</p>
        </div>
        <div class="tab-pane" id="yellow">
            <h1>Yellow</h1>
            <p>yellow yellow yellow yellow yellow</p>
        </div>
        <div class="tab-pane" id="green">
            <h1>Green</h1>
            <p>green green green green green</p>
        </div>
        <div class="tab-pane" id="blue">
            <h1>Blue</h1>
            <p>blue blue blue blue blue</p>
        </div>
    </div>
</div>
</div> <!-- container -->


	{{HTML::script('media/framework/jquery-ui/tests/jquery-1.7.js');}}
	<{{HTML::script('media/framework/bootstrap/docs/assets/js/bootstrap.js');}}
	<!--{{HTML::script('media/framework/ace/build/src/ace.js');}}
 <!--{{HTML::script('media/framework/ace/lib/ace/keyboard/keybinding.js');}}
	{{HTML::script('media/framework/ace/lib/ace/document.js');}}
	{{HTML::script('media/framework/ace/lib/ace/ext/emmet.js');}}
	{{HTML::script('media/framework/ace/lib/ace/ext/keybinding_menu.js');}}
	{{HTML::script('media/framework/ace/build/src/mode-html.js');}}
	{{HTML::script('media/framework/ace/lib/ace/virtual_renderer.js');}}
	{{HTML::script('media/framework/ace/lib/ace/anchor.js');}}
	<!--{{HTML::script('media/js/required.ace.js');}}-->

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#tabs').tab();
    });
</script>

</body>
</html>


