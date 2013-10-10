<!DOCTYPE html>
<html lang="en">
<head>
<title>ACE in Action</title>
	{{HTML::style('media/framework/bootstrap/docs/assets/css/bootstrap.css');}}
	{{HTML::style('media/framework/ace/demo/kitchen-sink/styles.css')}}
  {{HTML::style('media/framework/ace/doc/site/images/favicon.ico',array('rel'=>'icon','type'=>'image/x-icon'))}}
<style type="text/css" media="screen">
	body{
		overflow: scroll;
	}
	#editor {
 		position: absolute;
  	top: 63px;
  	right: 0;
  	bottom: 0;
  	left: 0;
  }
  #editor-container{
		top:41px;
	}
	.ace_editor {
	/*position: relative !important;
	border: 1px solid lightgray;
	margin: auto;
	height: 200px;
	width: 100%;*/
 }
.nav > li > a,
.nav > li > a:hover,
.nav > li > a:focus {
	color: #FFFFFF;
	text-decoration: none;
	background-color: #555555;
	border-left: solid 1px #000;
	border-right: solid 1px #000;
	border-top: solid 1px #000;
}
.nav-tabs > .active > a,
.nav-tabs > .active > a:hover,
.nav-tabs > .active > a:focus {
	color: #e0e0e0;
	background-color: #272822;
	border-left: solid 1px #000;
	border-right: solid 1px #000;
	border-top: solid 1px #000;
}
.nav > li > a{
	text-decoration: none;
	background-color: #555555;
	border-left: solid 1px #000;
	border-right: solid 1px #000;
	border-top: solid 1px #000;
}
.nav-tabs,
.nav-tabs :focus,
.nav-tabs :hover{
		border-bottom: none;
}
.nav{
	margin-bottom: 0px;
}
.nav-tabs > li > a{
  padding-top: 0px;
  padding-bottom: 0px;
}
.icon-remove{
	margin-left: 5px;
}
.nav-tabs > li > a{
	padding-right: 0px;
}
[class^="icon-"],
[class*=" icon-"]{
margin-top: 4px;
}
.ace_scrollbar{
	overflow-y: inherit;
}
.ace_scrollbar-h{
	overflow-x: inherit;
}
</style>
</head>
<body>
<button id="addTab">Add an editor</button>
<div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#editor" data-toggle="tab">Section 1</a></li>
    <li><a href="#tab" data-toggle="tab">Section 2</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="editor"><p>Howdy, I'm in Section 244.</p></div>
    <div class="tab-pane" id="tab"><p>Howdy, I'm in Section 2.</p></div>
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
	{{HTML::script('media/framework/ace/lib/ace/edit_session.js');}}
	{{HTML::script('media/framework/ace/lib/ace/anchor.js');}}
	<!--{{HTML::script('media/js/required.ace.js');}}-->

<script type="text/javascript">
$(document).ready(function() {

    // initialize button listener
    $('#addTab').live('click', function() {
        var tabsElement    = $('.tabbable');

        var tabsUlElement  = tabsElement.children('.nav-tabs');
        tabsUlElement.children('li').removeClass('active');
        var tabsDivContent = tabsElement.children('.tab-content');

        // the panel id is a timestamp plus a random number from 0 to 10000
        var tabUniqueId = new Date().getTime() + Math.floor(Math.random()*10000);

       // create a new panel DOM
       var titulo_tab ='Section'+tabUniqueId;
        var newTabPanelElement = '<li class="active"><a href="#tab'+tabUniqueId+'" click-tab="tab'+tabUniqueId+'" data-toggle="tab">'+titulo_tab.substring(0,1)+'<i class="icon-remove pull-right"></i></a></li>';
        var newTabContent      = '<div class="tab-pane" id="tab'+tabUniqueId+'" style="height: '+ $(window).height()+'px; width: 100%;"><p>Im in Section '+tabUniqueId+'</p></div>';

         // add the new nav item to the DOM
        tabsUlElement.append(newTabPanelElement);
        tabsDivContent.append(newTabContent);
        $('a').attr('click-tab', 'tab'+tabUniqueId).click();



        // initialize the editor in the tab
        var editor = ace.edit('tab'+tabUniqueId);
        editor.setTheme("ace/theme/monokai");
        editor.getSession().setMode("ace/mode/php");


        var color = $('.ace_editor').css( "background-color" );
        $('.ace_scrollbar').css('overflow-y','inherit');
        $('.ace_scrollbar-h').css('overflow-x','inherit');
        editor.focus();
        //$('.nav-tabs > .active > a').css('background-color',color);
				//$('.nav-tabs > .active > a:hover').css('background-color',color);
				//$('.nav-tabs > .active > a:focus').css('background-color',color);

    });

		$('.icon-remove').live('click', function(event) {
				$($(this).parent('a').attr('href')).remove();
			  $(this).parent('a').remove();
		});
	});
</script>
</body>
</html>


