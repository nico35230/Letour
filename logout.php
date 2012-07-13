<?php

	session_start();
	session_destroy();
	
	print "Votre session est terminée";
	
	header("Location: login.php");
	
?>