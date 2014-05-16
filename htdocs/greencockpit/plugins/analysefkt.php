<?php
	function analyse ($databasename){
		mysql_select_db($databasename, $conn);
		$labelarray = array();
		$dataarray = array();
# TIME = HARDCODE

		$abfragelabel = "SELECT RIGHT(TIME,5) as TIME FROM $databasename";
		$ergebnis = mysql_query($abfragelabel);
		while($row = mysql_fetch_object($ergebnis))
  			{
 	 			$labelarray[] = $row->TIME;	
	  		 }

	  	$abfragedata = "SELECT mashine1 FROM $databasename";
	  	$ergebnisdata = $ergebnis = mysql_query($abfragedata); 
	  	while($row = mysql_fetch_object($ergebnis))
  			{	
 	 		$dataarray[] = str_replace(',', '.',$row->mashine1);
		
	  		 }


	$js_labels = json_encode($labelarray,true);
	$js_data = implode(",",$dataarray);
	#$js_data = json_encode($dataarray,true);

	$js['labels'] = $js_labels;
	$js['data'] = $js_data ;
	return $js;

	}


?>