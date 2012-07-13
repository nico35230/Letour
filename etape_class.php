<?php

class etape {

	function liste()
	{
		$sql = "SELECT id, nom FROM etape";
		$results = mysql_query($sql) or die(mysql_error());
		
		$etape = array();
		
		while ($result = mysql_fetch_array($results))
		{
		
			$etape[] = array("etape_id" => $result["id"], "nom" => $result["nom"]);
			
		}
		
		return $etape;
	
	
	
	
	
	
	}


}
?>