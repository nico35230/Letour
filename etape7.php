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
	
	
	// Chargement de la classe 'ajout'
	$pronostic = new pronostic;
	
	

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
		
			<div id="classementE">
				<a href="class7.php" class="classementE">Classement</a>
			</div>
			
			<div id="prono_P">
				<?php

					if ($pronostic->verifier7($_SESSION["user_id"]) !== true)
					{					
						print '<a href="prono_7.php" class="prono_P">Pronostiquer</a>';
					} else {
						print '<a href="prono7.php" class="prono_P">Votre prono</a>';
					}
				?>
			</div>
			
			<table>
				<thead>
					<tr>
						<th>Parcours</th>
						<th><a href="profil7.html">Profil</a></th>
						<th><a href="cote7.html">Côtes</a></th>
						<th><a href="der7.html">Dernier Km</a></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="4"><img src="images/parcours7.jpg" class="parcours" /></td>
					</tr>
				</tbody>
			</table>
		</content>
		
		<div id="etape_pred">
			<a href="etape6.php" class="etape_pred">Etape précédente</a>
		</div>
		
		<div id="retour">
			<a href="etape.html" class="retour">Retour</a>
		</div>
		
		<div id="etape_suivante">
			<a href="etape8.php" class="etape_suivante">Etape suivante</a>	
		</div>
	</body>
</html>