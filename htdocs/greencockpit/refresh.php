<?php 
	
	mysql_select_db($databasename, $conn);
	ini_set('auto_detect_line_endings',TRUE);

		#counter integer is used to count the new imported data values
		$counter = 0;
	
	foreach(glob("csv/*.csv") as $filename){

		#skiprow integer is used to skip the header of .csv data!
		$skiprow = 0;
		//SELECT auf Datenbank


		#if($filename != in_array($SELECTARRAY))
		$filepath = fopen($filename,"r");
	
# HADRCODE

			while(($fileop = fgetcsv($filepath, 1000, ";")) !== false)
			{
			$skiprow++;
			if($skiprow ==1) continue;
			


			$timestamp = $fileop[0];

			$sql_result = mysql_query("SELECT ID FROM $databasename WHERE TIME = '$timestamp'");

			if (mysql_num_rows($sql_result) == 0){

					$timestamp = $fileop[0];
					$mashine1 = $fileop[1];
					$mashine2 = $fileop[2];
					$mashine3 = $fileop[3];

					$sql = mysql_query("INSERT INTO $databasename (TIME, mashine1, mashine2, mashine3) VALUES ('$timestamp','$mashine1','$mashine2', '$mashine3')");
					$counter++;

				}
		
			}	

			}

			if ($counter !=0)
			{
				echo "added " .$counter. " new values to $databasename <br>";
			} else {
				echo "no new data available";
			}

?>



	
