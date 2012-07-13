<?php

class user {

	// Identification de l'utilisateur
	function login($user, $pass) {
	
		// Authentification simple direct dans le code
		/*
		if ($user == "gaga") {
			
			$_SESSION["auth"] = true;
			
		}
		*/
		
		// Authentification par la base de données
		$sql = "SELECT id, prenom FROM membre WHERE login = '" . mysql_real_escape_string($user) . "' AND pass = '" . mysql_real_escape_string($pass) . "' LIMIT 1";
		
		$results = mysql_query($sql);
		
		$result = mysql_fetch_object($results);
		
		if ($result !== false && count($result) === 1) {
		
			$_SESSION["auth"] = true;
			$_SESSION["user_id"] = $result->id;
			$_SESSION["user_prenom"] = $result->prenom;
			
			header("Location: index.php");
		
		} else {
		
			print "Identification impossible";
			
		}
		
	}
	
	// Count user's points for an etape
	function points($user_id, $etape)
	{
		// initialisation du décompte des points
		$points = 0;
		
		// chercher pronostic du user_id
		$sql = "SELECT classement, coureur_id FROM prono WHERE membre_id = '$user_id' AND type = '$etape'";
		$result = mysql_query($sql);
		
		while ($row = mysql_fetch_array($result))
		{		
			$sql2 = "SELECT classement FROM resultat WHERE type = '$etape' AND coureur_id = '" . $row["coureur_id"] . "' AND classement = '" . $row["classement"] . "' LIMIT 1";
			$result2 = mysql_query($sql2);
			
			// Si le coureur est bien placé
			if (mysql_num_rows($result2) > 0)
			{
			
				// Attribution des points en fonction du classement
				// 5 points pour le premier puis un point en moins au fur et à mesure que le classement descend
				switch($classment) {
				
					// On ajoute 5 points pour le premier
					case 1: $points = $points + 5; break;
					
					// On ajoute 5 points pour le premier
					case 2: $points = $points + 4; break;
					
					// On ajoute 5 points pour le premier
					case 3: $points = $points + 3; break;
					
					// On ajoute 5 points pour le premier
					case 4: $points = $points + 2; break;
					
					// On ajoute 5 points pour le premier
					case 5: $points = $points + 1; break;
					
				}
				
			} else {
			
				// sinon on vérifie si le coureur est classé
				$sql3 = "SELECT classement FROM resultat WHERE type = '$etape' AND coureur_id = '" . $row['coureur_id'] . "'";
				$results3 = mysql_query($sql3);
				
				if (mysql_num_rows($results3) > 0)
				{
					// auquel cas on ajoute 1 point
					$points = $points + 1;
				}
		
			}
			
		} 
		
		return $points;
	
	}
		
	
	
	//liste de tous les utilisateurs
	function liste()
	{
		$sql = "SELECT id, prenom FROM membre";
		$results = mysql_query($sql) or die(mysql_error());
		
		$user = array();
		
		while ($result = mysql_fetch_array($results))
		{
		
			$user[] = array("user_id" => $result["id"], "prenom" => $result["prenom"]);
			
		}
		
		return $user;
	}
	
}

?>
			
		
			
