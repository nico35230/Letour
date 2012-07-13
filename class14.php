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
					$class="SELECT DISTINCT nom, prenom, classement FROM coureur, resultat WHERE resultat.coureur_id = coureur.id AND type = '15' ORDER BY classement ";
					$classe=mysql_query($class);

					while ($classement=mysql_fetch_array($classe))
					{
						print "<tr>";
						print "<li>";
						print "<td>";
						print $classement['classement'];
						print "</td>";
						print "<td>";
						print $classement['prenom'];
						print "</td>";
						print "<td>";
						print $classement['nom'];
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
			<a href="etape14.php" class="retour">Retour</a>
		</div>
		
	</body>
</html>