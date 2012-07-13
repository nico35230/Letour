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


?><!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<header>		
			<img src="images/home.jpg" class="home"/><br />		
			
			<?php print "Bienvenue " . $_SESSION["user_prenom"] . " (<a href='logout.php'>Déconnection</a>)"; ?>
			
		</header>
		
		<content>
			<section id="etape">
				<a href="etape.html">
					<div class="etape">
						<img src="images/map.jpg" class="etape_image" />			
					</div>
					<p>Etapes</p>
				</a>
				
			</section>
			
			<section id="equipe">
				<a href="equipe.html">
					<div class="equipe">
						<img src="images/equipe.jpg" class="equipe_image" />			
					</div>
					<p>Equipes</p>
				</a>
			</section>
			
			<section id="classement">
				<a href="classement.html">
					<div class="classement">
						<img src="images/classement.jpg" class="classement_image" />			
					</div>
					<p>Classement</p>
				</a>
			</section>	
			
			<section id="prono">
				<a href="prono_fini.php">
					<div class="prono">
						<img src="images/prono.jpg" class="prono_image" />			
					</div>
					<p>Pronostic</p>
				</a>
			</section>
			
		</content>
		
	</body>
</html>
