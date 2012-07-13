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
	$ajout = new pronostic;
	
	// Appel de la fonction ajouter dans la classe 'ajout'
	$ajout->ajouter();
	

	
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
						<td colspan="6"><form method="post" action="">
										<ul>
											<li>
												
												

													<label for="place1">Place :</label>
													<input type="text" name="place1" id="place1" value="1" />
													
													<?php
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur1" id="coureur1">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value='". $liste['id'] ."'>" . $liste['nom'] . " " . $liste['prenom'] . "</option>";
									
													}
													?>
													</select>
													
													
											</li>
											<li>
												

													<label for="place2">Place :</label>
													<input type="text" name="place2" id="place2" value="2" />
													
													<?php
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur2" id="coureur2">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . " " . $liste['prenom'] . "</option>";
									
													}
													?>
													</select>
														
													
											</li>
											<li>
												

													<label for="place3">Place :</label>
													<input type="text" name="place3" id="place3" value="3" />
													
													<?php
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur3" id="coureur3">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . " " . $liste['prenom'] . "</option>";
									
													}
													?>
													</select>
														
												
											</li>
											<li>
												

													<label for="place4">Place :</label>
													<input type="text" name="place4" id="place4" value="4" />
													
													<?php
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur4" id="coureur4">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . " " . $liste['prenom'] . "</option>";
									
													}
													?>
													</select>
														
													
											</li>
											<li>
												

													<label for="place5">Place :</label>
													<input type="text" name="place5" id="place5" value="5" />
													
													<?php
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur5" id="coureur5">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . " " . $liste['prenom'] . "</option>";
									
													}
													?>
													</select>
														
												
											</li>
											<li>
												

													<label for="place6">Place :</label>
													<input type="text" name="place6" id="place6" value="6" />
													
													<?php
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur6" id="coureur6">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . " " . $liste['prenom'] . "</option>";
									
													}
													?>
													</select>
														
													
											</li>
											<li>
											

													<label for="place7">Place :</label>
													<input type="text" name="place7" id="place7" value="7" />
													
													<?php
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur7" id="coureur7">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . " " . $liste['prenom'] . "</option>";
									
													}
													?>
													</select>
														
												
											</li>
											<li>
												

													<label for="place8">Place :</label>
													<input type="text" name="place8" id="place8" value="8" />
													
													<?php
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur8" id="coureur8">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . " " . $liste['prenom'] . "</option>";
									
													}
													?>
													</select>
														
													

												
											</li>
											<li>
											

													<label for="place9">Place :</label>
													<input type="text" name="place9" id="place9" value="9" />
													
													<?php
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur9" id="coureur9">';
													
													while ($liste=mysql_fetch_array($result))
													{
													
														print "<option value=". $liste['id'] .">" . $liste['nom'] . " " . $liste['prenom'] . "</option>";
									
													}
													?>
													</select>
														
													
											</li>
											<li>
												

													<label for="place10">Place :</label>
													<input type="text" name="place10" id="place10" value="10" />
													
													<?php
													$requete="SELECT DISTINCT id, nom, prenom FROM coureur ORDER BY nom";
													$result=mysql_query($requete);
													print '<select name="coureur10" id="coureur10">';
													
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
		
		<div id="retour">
			<a href="index.php" class="retour">Retour</a>
		</div>
		
	</body>
</html>