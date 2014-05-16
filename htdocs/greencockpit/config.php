
<?php
	if (!$_GET["name"]){
	$databasename = "testbase";
	};	
	if ($_GET["name"]){
	$databasename = $_GET["name"];
	}

	$host = "localhost";
	$username = "Felix";
	$password = "1234";
	
	$conn = mysql_connect("$host", "$username", "$password"); 
	if (!$conn){

		die("Can not connect:" .mysql_error());
	}


	#$db_list = mysql_list_dbs($conn);

	#while ($row = mysql_fetch_object($db_list)) {
    #	 echo $row->Database."\r\n";
    #	 
	#	}

	#if (mysql_query("CREATE DATABASE megadatabase", $conn)){
	#	echo "Database was created successfully";
	#}
	#else
	#	echo "Error: " .mysql_error();

	mysql_select_db("$databasename", $conn);

	if (mysql_select_db("$databasename", $conn)){
	#echo '<script type="text/javascript" language="javascript">alert("Connected to '.$databasename . '");</script>';
	}
	else {

		echo '<script type="text/javascript" language="javascript">alert("No Database Connected");</script>';
	}

	
	ini_set('auto_detect_line_endings',TRUE);
?>


