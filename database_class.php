<?php

require_once("settings_inc.php");

class database {

	function connection() {
		
		global $host, $user, $pass, $database;
	
		$link = mysql_connect($host, $user, $pass);
		
		if ($link === false) {
		
			print "Impossible de se connecter au serveur de base de donn�es";
			
		} else {
		
			$connection = mysql_select_db($database, $link);
			
			if ($connection === false) {
			
				print "Impossible de selectionner la base de donn�es";
				
			} else {
			
				return true;
				
			}
			
		}
		
		return false;
		
	}
	
}

?>
			
		
			