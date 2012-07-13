<?php

session_start();

if ($_SESSION["auth"] !== true) {

	header("Location: login.php");

}

require_once("database_class.php");
require_once("user_class.php");
require_once("ajoutP_class.php");

	// Chargement de la classe
	$db = new database;
	
	// Connection à la base de données
	$result = $db->connection();
	
	if ($_POST) {

	// Chargement de la classe 'ajout'
	$ajout = new ajoutP;
	
	// Appel de la fonction ajouter dans la classe 'ajout'
	$ajout->ajouter5();
	
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
						<th>Pronostic de la cinquième étape</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td>	<form method="post" action="">
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
													
														print "<option value=". $liste['id'] .">" .$liste['nom'] ."</option>";
									
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
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur2" id="coureur2">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" .$liste['nom'] ."</option>";
									
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
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur3" id="coureur3">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" .$liste['nom'] ."</option>";
									
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
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur4" id="coureur4">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" .$liste['nom'] ."</option>";
									
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
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur5" id="coureur5">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" .$liste['nom'] ."</option>";
									
													}
													?>
													</select>
														
													<!--<input type="submit" name="OK" value="OK" />

												</form>-->
											</li>
										
										</ul>
									<input type="submit" name="OK" value="OK" />
								</form>
							</td>	
					</tr>
				</tbody>
			</table>
		</content>
		
		<div id="retour">
			<a href="etape5.php" class="retour">Retour</a>
		</div>
		
	</body>
</html>