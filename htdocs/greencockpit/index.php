<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

	<title>Green Cockpit 2.0</title>

	 <!-- Bootstrap core CSS -->
 <!--   <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template 
    <link href="css/starter-template.css" rel="stylesheet"> 

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!--<body>
	 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Green Cockpit 2.0</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="?mode=analyse">Analyse</a></li>
            <li><a href="?mode=planning">Planning</a></li>
            <li><a href="?mode=controlling">Controlling</a></li>
            <li><a href="?mode=refresh">Refresh Data</a></li>
            <li><a href="?mode=help">Help</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li><a href="?mode=impressum">Impressum</a></li>
          </ul>
        </div><!--/.nav-collapse -->
 <!--     </div>
    </div>



    <div class="container">

      <div class="starter-template">
        <h1>Welcome</h1>
        <p class="lead">Green Cockpit 2.0.<br> Analyse/Plan & Controll energy data.</p>
      </div>
      <div id="container" class="" style="width:100%; height:400px";></div>

    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<!--  
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/highcharts.js"></script>
<script src="js/bootstrap.min.js"></script>


<div id="test" class="" style="width:100%; height:400px";></div>
<div id="container" class="" style="width:100%; height:400px";></div>




</body>
-->

<body>
         <a href="index.php">Home</a>
            <a href="?mode=analyse">Analyse</a>
           <a href="?mode=planning">Planning</a>
            <a href="?mode=controlling">Controlling</a>
            <a href="?mode=refresh">Refresh Data</a>
            <a href="?mode=help">Help</a>
            <a href="settings.php">Settings</a>
            <a href="?mode=impressum">Impressum</a>

</body>

<?php
	
	include ("config.php");


	if ($_GET["mode"] == "settings"){
		echo "TEST";
		"settings.php";
	}
	if ($_GET["mode"] == "refresh"){
		include("refresh.php");
	}
	if ($_GET["mode"] == "analyse"){
		include("plugins/analysefkt.php");
		include("template/analyse.php");
		


	}

	



?>






</html>


