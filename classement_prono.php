<?php
session_start();

if ($_SESSION["auth"] !== true) {

	header("Location: login.php");

}

require_once("database_class.php");
require_once("user_class.php");
require_once("etape_class.php");


	$db = new database;
	
	$result = $db->connection();
	
	$user = new user;
	
	$etape = new etape;
	
	
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
							<th>Etape</th>
								<?php
									$users = $user->liste();
									
									foreach ($users as $u)
									{
										print "<th>";
										print $u["prenom"];
										print "</th>";
									}
								?>
						</tr>
					</thead>
					<tbody>
						<?php
							$etapes = $etape->liste();
							
							$user_points = array();
							
							foreach ($etapes as $e)
							{
							
								$user_points[$e["etape_id"]] = array();
								
								print "<tr>";
								print "<td>";
								print $e["nom"];
								print "</td>";
								
								
								
								foreach ($users as $u)
									{
									
										$points = $user->points($u["user_id"], $e["etape_id"]);
										
										print "<td>";
										print $points;
										print "</td>";
										
										$user_points[$e["etape_id"]][$u["user_id"]] = $points;
									}
								print "</tr>";
								
							}
							
								print "<tr>";
								
								print "<td>TOTAL</td>";
								
								$nico = 0;
								$max = 0;
								$christian = 0;
								
								foreach($user_points as $up) {
								
									$nico += $up[1];
									$christian += $up[2];
									$max += $up[3];
									
								}
								
								print "<td>" . $nico . "</td>";
								print "<td>" . $christian . "</td>";
								print "<td>" . $max . "</td>";
								
								print "</tr>";
						?>
					</tbody>
				</table>
		</content>
		
		<div id="retour">
			<a href="prono_fini.php" class="retour">Retour</a>
		</div>

		
	</body>
</html>