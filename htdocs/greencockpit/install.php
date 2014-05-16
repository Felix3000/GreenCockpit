<html>
<head>
<title>
Green Cockpit 2.0
</title>
</head>


<body>
<!-- Form Name and Number of Columns for creating Table in Database -->
<form action = "install.php" method = "post">
	Name Database: <br>
	<input type = "Text" name = "databasename"><br><br>
	Name Table: <br>
	<input type = "Text" name = "tablename"><br><br>
	<?php
		$select=array('','1','2','3','4', '5', '6', '7', '8', '9', '10');
		echo "Number of Culomns ";
		echo '<select name="number">';
		foreach ($select as $var)
			{
    		echo '<option value="'.$var.'">'.$var.'</option>';
			}
		echo '</select>'; 
	?>
	<br>
	<input type = "Submit" value = "Create" name = "create" >
	<br>
</form>




<?php
	$databasename = $_POST["databasename"];
	$tablename = $_POST["tablename"];
	$number = $_POST["number"];
	echo $name;



#if ($number !== ""){
#		echo "<script language=\"javascript\">
#	alert('$name');
#	</script>";


if (isset($_POST['create'])) {
	
#createing database 
	$conn = mysql_connect("localhost", "Felix", "1234"); 
	if (!$conn){
		die("Can not connect:" .mysql_error());
	}

	if (mysql_query("CREATE DATABASE $databasename", $conn)){
		echo "Database was created successfully";
	}
	else
		echo "Error: " .mysql_error();
	
	ini_set('auto_detect_line_endings',TRUE);


	mysql_select_db("$databasename", $conn);



	$sql = "CREATE TABLE $tablename (

		ID INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(ID),
		TIME VARCHAR(100) NOT NULL)";
		
	mysql_query($sql,$conn);
	$i = 1;
	while ($i <= $number) 
	{
		$mashine = "mashine".$i;
		mysql_query("ALTER TABLE `$tablename` ADD $mashine VARCHAR(50) NOT NULL");
		
		echo $mashine;
		$i++;
	}

}	
?>

<a href="index.php?name=<?=$tablename?>">Weiter ....</a>
    


	
