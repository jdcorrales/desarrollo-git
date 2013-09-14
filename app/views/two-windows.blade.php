<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>two view</title>
	{{HTML::style('media/framework/bootstrap/docs/assets/css/bootstrap.css');}}
</head>
<body>

<div class="row-fluid">
	<div class="span6 columna-uno">Column 1</div>
	<div class="span6 columna-dos">Column 2</div>
</div>

	{{HTML::script('media/framework/jquery-ui/tests/jquery-1.7.js');}}
	{{HTML::script('media/framework/bootstrap/docs/assets/js/bootstrap.js');}}
	{{HTML::script('media/framework/bootstrap/docs/assets/js/bootstrap.min.js');}}
	<script>
	$(document).ready(function($){
		$.ajax({
		  url: 'ckeditor',
		  type: 'GET',
		  success: function(data) {
		  	alert(data);
		  	//$('.columna-dos').append(data);
		  }
		});
	});
	</script>
</body>
</html>