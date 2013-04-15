<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Quattor | Data Warehouse</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="bootstrap/css/pygments.css" />
    <script type="text/javascript" charset="utf-8" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    <script type="text/javascript" charset="utf-8" src="keylist.js"></script>
    <style type="text/css">
		body {
			padding-top: 60px;
			padding-bottom: 40px;
		}
  </style>
  <link rel="publisher" href="https://plus.google.com/106108753304191902209" />
  <link rel="icon" href="images/favicon.ico"/>
</head>
<body>
	        
<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-inner">
	<div class="container">
		<a class="brand" href="http://quattor.org/index.html">
			<img src="images/quattor_logo_navbar.png" alt="quattor logo"/>
		</a>
	  <div class="nav-collapse collapse">
		<ul class="nav">
			<?php
			    $currentFile = $_SERVER["PHP_SELF"];
                $parts = Explode('/', $currentFile);
                $page = $parts[count($parts) - 1];
			?>
		  <li<?php if ($page == "index.php") { echo ' class="active"'; } ?>><a href="index.php">Distribution</a></li>
		  <li<?php if ($page == "ServerAttribute.php") { echo ' class="active"'; } ?>><a href="ServerAttribute.php">Server Attribute</a></li>
		</ul>
	   </div>
	</div>
  </div>
</div>

<script>
    $(function() {
        $('#attribute').dblclick(function() {
            $( "#attribute" ).autocomplete("search", "");
        });
    });
</script>

<script>
    $(function() {
        $('#value').dblclick(function() {
            $( "#value" ).autocomplete("search", "");
        });
    });
</script>

<div id="main">
    <div id="main_inner" class="fixed">
        <div id="primaryContent_columnless">
            <div id="columnA_columnless">
