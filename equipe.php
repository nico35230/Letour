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
	$ajout->equipe();
	
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
													$requete="SELECT DISTINCT id, nom FROM equipe ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="equipe1" id="equipe1">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . "</option>";
									
													}
													?>
													</select>
													
													<!--<input type="submit" name="OK" value="OK" />

												</form>-->
											</li>
											<li>
												<!--<form method="post" action="">-->

													<label for="place2">Place :</label>
													<input type="text" name="place2" id="place2" value="2" />
													
													<?php
													$requete="SELECT DISTINCT id, nom FROM equipe ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="equipe2" id="equipe2">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . "</option>";
									
													}
													?>
													</select>
														
													<!--<input type="submit" name="OK" value="OK" />

												</form>-->
											</li>
											<li>
												<!--<form method="post" action="">-->

													<label for="place3">Place :</label>
													<input type="text" name="place3" id="place3" value="3" />
													
													<?php
													$requete="SELECT DISTINCT id, nom FROM equipe ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="equipe3" id="equipe3">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . "</option>";
									
													}
													?>
													</select>
														
													<!--<input type="submit" name="OK" value="OK" />

												</form>-->
											</li>
											<li>
												<!--<form method="post" action="">-->

													<label for="place4">Place :</label>
													<input type="text" name="place4" id="place4" value="4" />
													
													<?php
													$requete="SELECT DISTINCT id, nom FROM equipe ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="equipe4" id="equipe4">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . "</option>";
									
													}
													?>
													</select>
														
													<!--<input type="submit" name="OK" value="OK" />

												</form>-->
											</li>
											<li>
												<!--<form method="post" action="">-->

													<label for="place5">Place :</label>
													<input type="text" name="place5" id="place5" value="5" />
													
													<?php
													$requete="SELECT DISTINCT id, nom FROM equipe ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="equipe5" id="equipe5">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . "</option>";
									
													}
													?>
													</select>
														
													<!--<input type="submit" name="OK" value="OK" />

												</form>-->
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