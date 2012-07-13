<?php

	// Accède à la session
	session_start();
	
	// Chargement du fichier
	require_once("database_class.php");
	require_once("user_class.php");
	
	// Chargement de la classe
	$db = new database;
	
	// Connection à la base de données
	$result = $db->connection();
	
if ($_POST) {

	// Chargement de la classe 'user'
	$user = new user;
	
	// Appel de la fonction login dans la classe 'user'
	if ($user->login($_POST["login"], $_POST["pass"]) === false) {
	
		$error = "Identification impossible!";
		
	}
	
}
	
?><!DOCTYPE html>
<html>	
<head>
<?php require_once("inc/stylesheets_inc.php"); ?>
</head>
<body class="login">

<img src="images/home.jpg" class="home"/>

<form method="post" action="">

	<h1>Le Tour de France</h1>
	<h2>Veuillez vous identifier</h2>

	<?php if (isset($error)) {

		print "<p class='error'>" . $error . "</p>";
	
	} ?>

	<label for="login">Identifiant:</label>
	<input type="text" name="login" id="login" />
	<br />
	
	<label for="pass">Mot de passe:</label>
	<input type="text" name="pass" id="pass" />
	<br />
	
	<input type="submit" name="OK" value="OK &raquo;" />
	<br />
	
</form>

</body>
</html>
