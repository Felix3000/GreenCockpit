<html>
<head>

<title>
Green Cockpit 2.0

</title>

</head>

<body>


<?php
	
	echo "Vorname: ", $_GET["name"];

	$databasename = $_POST["accept_database"];
	echo $databasename;
	
	#include ("config.php");

	if ($_GET["mode"] == "install"){
		"install.php";
	}
	if ($_GET["mode"] == "mega"){
		include("config.php");
	}

?>

</body>

</html>
