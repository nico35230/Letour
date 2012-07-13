<?php
session_start();

if ($_SESSION["auth"] !== true) {

	header("Location: login.php");

}

require_once("database_class.php");
require_once("user_class.php");

	$db = new database;
	
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
			<img src="images/argos.jpg" />

					
				<table>
					<thead>
						<tr>
							<th>Numéro de dossard</th>
							<th>Prénom</th>
							<th>Nom</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<ul>
							
					<?php
					$affich_rabo="SELECT DISTINCT nom, prenom, numero FROM coureur WHERE equipe_id=22 ";
					$affiche_rabo=mysql_query($affich_rabo);

					while ($afficher_rabo=mysql_fetch_array($affiche_rabo))
					{
						print "<tr>";
						print "<li>";
						print "<td>";
						print $afficher_rabo['numero'];
						print "</td>";
						print "<td>";
						print $afficher_rabo['prenom'];
						print "</td>";
						print "<td>";
						print $afficher_rabo['nom'];
						print "</td>";
						print "</li>";
						print "</tr>";
					}
					?>
							</ul>
						</tr>
					</tbody>
				</table>
		</content>
		
		<div id="retour">
			<a href="equipe.html" class="retour">Retour</a>
		</div>

		
	</body>
</html>