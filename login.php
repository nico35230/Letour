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
	$user->login($_POST["login"], $_POST["pass"]);
	
}
	
?>

<form method="post" action="">

	<label for="login">Identifiant:</label>
	<input type="text" name="login" id="login" />
	<br />
	
	<label for="pass">Mot de passe:</label>
	<input type="text" name="pass" id="pass" />
	<br />
	
	<input type="submit" name="OK" value="OK" />

</form>