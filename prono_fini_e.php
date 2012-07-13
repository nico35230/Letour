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
	
/*	if ($_POST) {

	// Chargement de la classe 'ajout'
	$ajout = new pronostic;
	
	// Appel de la fonction ajouter dans la classe 'ajout'
	$ajout->vert();
	
	}*/
	
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
		
			<div id="classement_prono">
				<a href="classement_prono.php">Classement</a>
			</div>
			
			<table>
				<thead>
					<tr>
						<th><a href="prono_fini.php">Général</a></th>
						<th><a href="prono_fini_v.php">Par points</a></th>
						<th><a href="prono_fini_m.php">Montagne</a></th>
						<th><a href="prono_fini_a.php">AG2R</a></th>
						<th><a href="prono_fini_e.php">Equipe</a></th>
						<th><a href="prono_fini_d.php">Dernier</a></th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td colspan="6"><ul>
											<?php
												
											$affiche = "SELECT classement, equipe_id, nom FROM prono, equipe WHERE prono.equipe_id = equipe.id AND membre_id = '". $_SESSION['user_id'] . "' AND type='26' ORDER BY classement";
		
											$affiche_result = mysql_query($affiche);
		
											
											
											if (mysql_num_rows($affiche_result) == 0) {
											
												  print "Aucun enregistrement ne correspond";
												  
												} else {
														print "<table>";
												  while ($affiche_equipe = mysql_fetch_array($affiche_result))
													{
														
														print "<tr><td>";
														print $affiche_equipe['classement'] . "-";
														print "</td>";
														print "<td>";
														print $affiche_equipe['nom'];
														print "</td>";
														print "</tr>";
														
													}
											}		print "</table>";
																							
											?>
											
											
										</ul>		
						</td>
					</tr>
				</tbody>
			</table>
		</content>
		
		<div id="retour">
			<a href="index.php" class="retour">Retour</a>
		</div>
		
	</body>
</html>