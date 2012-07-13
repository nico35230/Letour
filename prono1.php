<?php

session_start();

if ($_SESSION["auth"] !== true) {

	header("Location: login.php");

}

require_once("database_class.php");
require_once("user_class.php");
require_once("pronostic_class.php");

	// Chargement de la classe
	$db = new database;
	
	// Connection à la base de données
	$result = $db->connection();
	
	
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<header>		
			<a href="index.php"><img src="images/home.jpg" class="home"/></a>	
		</header>
		
		<content>
			<table>
				<thead>
					<tr>
						<th>Place</th>
						<th>Prénom</th>
						<th>Nom</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<ul>
											<?php
												
											$affiche = "SELECT classement, prenom, nom FROM prono, coureur WHERE prono.coureur_id = coureur.id AND membre_id = '". $_SESSION['user_id'] . "' AND type='2' ORDER BY classement";
											
											$affiche_result = mysql_query($affiche);
		
											
											
											if (mysql_num_rows($affiche_result) == 0) {
											
												  print "Aucun enregistrement ne correspond";
												  
												} else {
												
												  while ($affiche_coureur = mysql_fetch_array($affiche_result))
													{
														
														print "<tr>";
														print "<li>";
														print "<td>";
														print $affiche_coureur['classement'] . "-";
														print "</td>";
														print "<td>";
														print $affiche_coureur['prenom'];
														print "</td>";
														print "<td>";
														print $affiche_coureur['nom'];
														print "</td>";
														print "</li>";
														print "</tr>";
														
													}
											}
																							
											?>
											
						</ul>		
						
					
				</tbody>
			</table>
		</content>
		
			<div id="retour">
				<a href="etape1.php" class="retour">Retour</a>
			</div>
			
	</body>
</html>