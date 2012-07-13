<?php

/*
	Ca serait bien d'avoir une description de ce à quoi sert la classe ici
*/

class etape {

	// Et une explication de la fonction ici
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
