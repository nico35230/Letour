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
	
	if ($_POST) {

	// Chargement de la classe 'ajout'
	$ajout = new pronostic;
	
	// Appel de la fonction ajouter dans la classe 'ajout'
	$ajout->dernier();
	
	}
	
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
						<th><a href="prono.php">Général</a></th>
						<th><a href="points.php">Par points</a></th>
						<th><a href="montagne.php">Montagne</a></th>
						<th><a href="ag2r.php">AG2R</a></th>
						<th><a href="equipe.php">Equipe</a></th>
						<th><a href="dernier.php">Dernier</a></th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td colspan="6"><form method="post" action="">
										<ul>
											<li>
												
												<!--<form method="post" action="">-->

													<label for="place1">Place :</label>
													<input type="text" name="place1" id="place1" value="1" />
													
													<?php
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur1" id="coureur1">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . " " . $liste['prenom'] . "</option>";
									
													}
													?>
													</select>
													
													
											</li>
											
	
										</ul>
										<input type="submit" name="OK" value="OK" />
						</td>		</form>
					</tr>
				</tbody>
			</table>
		</content>
	</body>
</html>