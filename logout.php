<?php

	session_start();
	session_destroy();
	
	print "Votre session est termin�e";
	
	header("Location: login.php");
	
?>