<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Bootstrap-Themed Tree Widget Documentation</title>
	<meta name="description" content="Applied Internet Technologies timekeeping software">
	<meta name="author" content="Applied Internet Technologies: Jeromy French">
	<meta http-equiv="expires" content="Fri, 21 Jun 2013 20:24:32 GMT" />
	<meta name="viewport" content="width=device-width">
	{{HTML::style('media/framework/bootstrap-tree/bootstrap-combined.min.css');}}
	{{HTML::style('media/css/bootstrap-tree-reescribir.css');}}
</head>
<body class="container-fluid" style="">
	<div class="row-fluid">
		<div class="tree">
		    <ul>
		        <li>
		            <span><input type="checkbox" name="user" value="1"/></span>
		            <ul>
		                <li>
		                	<span><i class="icon-minus-sign"></i> Child</span> <a href="">Goes somewhere</a>
		                    <ul>
		                        <li>
			                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
		                        </li>
		                    </ul>
		                </li>
		                <li>
		                	<span><i class="icon-minus-sign"></i> Child</span> <a href="">Goes somewhere</a>
		                    <ul>
		                        <li>
			                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
		                        </li>
		                        <li>
		                        	<span><i class="icon-minus-sign"></i> Grand Child</span> <a href="">Goes somewhere</a>
		                            <ul>
		                                <li>
			                                <span><i class="icon-minus-sign"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
				                            <ul>
				                                <li>
					                                <span><i class="icon-leaf"></i> Great great Grand Child</span> <a href="">Goes somewhere</a>
				                                </li>
				                                <li>
					                                <span><i class="icon-leaf"></i> Great great Grand Child</span> <a href="">Goes somewhere</a>
				                                </li>
				                             </ul>
		                                </li>
		                                <li>
			                                <span><i class="icon-leaf"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
		                                </li>
		                                <li>
			                                <span><i class="icon-leaf"></i> Great Grand Child</span> <a href="">Goes somewhere</a>
		                                </li>
		                            </ul>
		                        </li>
		                        <li>
			                        <span><i class="icon-leaf"></i> Grand Child</span> <a href="">Goes somewhere</a>
		                        </li>
		                    </ul>
		                </li>
		            </ul>
		        </li>
		        <li>
		            <span><i class="icon-folder-open"></i> Parent2</span> <a href="">Goes somewhere</a>
		            <ul>
		                <li>
		                	<span><i class="icon-leaf"></i> Child</span> <a href="">Goes somewhere</a>
				        </li>
				    </ul>
		        </li>
		    </ul>
		</div>
	</div>
	{{HTML::script('media/framework/jquery-ui/tests/jquery-1.7.2.js');}}
	{{HTML::script('media/framework/bootstrap/docs/assets/js/bootstrap.js');}}
	{{HTML::script('media/framework/bootstrap-tree/js/bootstrap-tree.js');}}
</body>
</html>
