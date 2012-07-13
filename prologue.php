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
				<a href="classP.php" class="classementE">Classement</a>
			</div>
			
			<div id="prono_P">
				<?php

					if ($pronostic->verifierP($_SESSION["user_id"]) !== true)
					{					
						print '<a href="prono_P.php" class="prono_P">Pronostiquer</a>';
					} else {
						print '<a href="pronoP.php" class="prono_P">Votre prono</a>';
					}
				?>
			</div>
			
			<table>
				<thead>
					<tr>
						<th>Parcours</th>
						<th><a href="profilP.html">Profil</a></th>
						<th><a href="coteP.html">Côtes</a></th>
						<th><a href="derP.html">Dernier Km</a></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="4"><img src="images/parcoursP.jpg" class="parcours" /></td>
					</tr>
				</tbody>
			</table>
		</content>
		
		<div id="retour">
			<a href="etape.html" class="retour">Retour</a>
		</div>
		
		<div id="etape_suivante">
			<a href="etape1.php" class="etape_suivante">Etape suivante</a>	
		</div>

	</body>
</html> 