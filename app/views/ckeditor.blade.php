<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$title}}</title>
	{{HTML::style('media/framework/bootstrap/docs/assets/css/bootstrap.css');}}
	<style type="text/css">
		.cke_contents {
			height: 250px !important;
		}
	</style>
</head>
<body>

	<div class="row-fluid">
		<div class="span6 columna-uno" id="editor">Column 1</div>
		<div class="span6 columna-dos"><!--id="editor2"-->
			{{Form::open(array('url' => 'form', 'method' => 'POST'));}}
				{{Form::label('editor','Editor de texto');}}
				<div id="editor2"></div>
				{{Form::submit('Aceptar');}}
			{{Form::close();}}
		</div>
	</div>

	{{HTML::script('media/framework/jquery-ui/tests/jquery-1.7.js');}}
	{{HTML::script('media/framework/bootstrap/docs/assets/js/bootstrap.js');}}
	{{HTML::script('media/framework/bootstrap/docs/assets/js/bootstrap.min.js');}}
	{{HTML::script('media/framework/ckeditor-dev/ckeditor.js');}}
	<script>
	$(document).ready(function($){
		var editor, html = '';
		var config = {};
		$.ajax({
		  url: 'ckeditor/config',
		  type: 'POST',
		  success: function(data) {
		  	config = jQuery.parseJSON(data);
		  	CKEDITOR.appendTo( 'editor',config, html );
		  	CKEDITOR.appendTo( 'editor2',config, html );
		  }
		});
	});
	</script>
</body>
</html>