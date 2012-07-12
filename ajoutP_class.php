<?php

class ajoutP {

	function ajouterP() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '1', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '1', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '1', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '1', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '1', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: pronoP.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
		function ajouter1() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '2', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '2', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '2', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '2', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '2', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono1.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter2() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '3', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '3', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '3', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '3', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '3', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono2.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter3() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '4', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '4', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '4', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '4', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '4', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono3.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter4() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '5', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '5', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '5', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '5', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '5', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono4.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter5() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '6', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '6', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '6', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '6', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '6', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono5.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter6() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '7', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '7', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '7', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '7', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '7', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono6.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter7() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '8', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '8', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '8', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '8', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '8', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono7.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter8() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '9', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '9', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '9', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '9', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '9', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono8.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter9() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '10', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '10', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '10', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '10', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '10', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono9.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter10() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '11', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '11', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '11', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '11', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '11', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono10.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter11() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '12', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '12', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '12', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '12', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '12', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono11.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter12() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '13', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '13', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '13', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '13', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '13', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono12.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter13() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '14', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '14', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '14', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '14', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '14', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono13.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter14() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '15', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '15', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '15', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '15', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '15', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono14.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter15() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '16', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '16', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '16', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '16', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '16', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono15.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter16() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '17', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '17', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '17', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '17', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '17', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono16.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter17() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '18', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '18', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '18', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '18', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '18', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono17.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter18() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '19', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '19', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '19', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '19', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '19', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono18.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter19() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '20', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '20', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '20', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '20', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '20', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono19.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
	function ajouter20() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']))
		{
	
		$membre_id = $_SESSION['user_id'];
		
		$coureur1 = $_POST['coureur1'];
		$place1 = $_POST['place1'];
		
		$coureur2 = $_POST['coureur2'];
		$place2 = $_POST['place2'];
		
		$coureur3 = $_POST['coureur3'];
		$place3 = $_POST['place3'];
		
		$coureur4 = $_POST['coureur4'];
		$place4 = $_POST['place4'];
		
		$coureur5 = $_POST['coureur5'];
		$place5 = $_POST['place5'];
	
		}
		
		$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '21', '$coureur1', '$place1')";
		$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '21', '$coureur2', '$place2')";
		$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '21', '$coureur3', '$place3')";
		$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '21', '$coureur4', '$place4')";
		$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '21', '$coureur5', '$place5')";
		
		if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
		{
			header("Location: prono20.php");		
		} else {
		
			print "Impossible d'ajouter ces pronostics";
			print mysql_error();
		}
		
	}
	
}

?>
