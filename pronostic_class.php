<?php


class pronostic {

	function ajouter() {
	
		
		if (isset($_POST['coureur1']) && ($_POST['coureur2']) && ($_POST['coureur3']) && ($_POST['coureur4']) && ($_POST['coureur5']) && ($_POST['coureur6']) && ($_POST['coureur7']) && ($_POST['coureur8']) && ($_POST['coureur9']) && ($_POST['coureur10']))
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
			
			$coureur6 = $_POST['coureur6'];
			$place6 = $_POST['place6'];
			
			$coureur7 = $_POST['coureur7'];
			$place7 = $_POST['place7'];
			
			$coureur8 = $_POST['coureur8'];
			$place8 = $_POST['place8'];
			
			$coureur9 = $_POST['coureur9'];
			$place9 = $_POST['place9'];
			
			$coureur10 = $_POST['coureur10'];
			$place10 = $_POST['place10'];
		
			
			
			$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '22', '$coureur1', '$place1')";
			$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '22', '$coureur2', '$place2')";
			$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '22', '$coureur3', '$place3')";
			$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '22', '$coureur4', '$place4')";
			$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '22', '$coureur5', '$place5')";
			$ajout6 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '22', '$coureur6', '$place6')";
			$ajout7 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '22', '$coureur7', '$place7')";
			$ajout8 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '22', '$coureur8', '$place8')";
			$ajout9 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '22', '$coureur9', '$place9')";
			$ajout10 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '22', '$coureur10', '$place10')";
			
			if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)) && (mysql_query($ajout6)) && (mysql_query($ajout7)) && (mysql_query($ajout8)) && (mysql_query($ajout9)) && (mysql_query($ajout10)))
			{
				header("Location: prono_fini.php");		
			} else {
				print mysql_error();
				print "Impossible d'ajouter ces pronostics";
			}
		
		}
	}
	
	function vert()
	{
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
	
	
			$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '23', '$coureur1', '$place1')";
			$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '23', '$coureur2', '$place2')";
			$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '23', '$coureur3', '$place3')";
			$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '23', '$coureur4', '$place4')";
			$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '23', '$coureur5', '$place5')";
	
			if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
			{
				header("Location: prono_fini_v.php");		
			} else {
				print mysql_error();
				print "Impossible d'ajouter ces pronostics";
			}
		}
	}
	
		function montagne()
	{
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
	
	
			$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '24', '$coureur1', '$place1')";
			$ajout2 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '24', '$coureur2', '$place2')";
			$ajout3 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '24', '$coureur3', '$place3')";
			$ajout4 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '24', '$coureur4', '$place4')";
			$ajout5 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '24', '$coureur5', '$place5')";
	
			if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
			{
				header("Location: prono_fini_m.php");		
			} else {
				print mysql_error();
				print "Impossible d'ajouter ces pronostics";
			}
		}
	}
	
	function ag2r()
	{
		if (isset($_POST['coureur1']))
		{
	
			$membre_id = $_SESSION['user_id'];
			
			$coureur1 = $_POST['coureur1'];
			$place1 = $_POST['place1'];
			
			$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '25', '$coureur1', '$place1')";

	
			if((mysql_query($ajout1)))
			{
				header("Location: prono_fini_a.php");		
			} else {
				print mysql_error();
				print "Impossible d'ajouter ces pronostics";
			}
		}
	}
	
	function equipe()
	{
		if (isset($_POST['equipe1']) && ($_POST['equipe2']) && ($_POST['equipe3']) && ($_POST['equipe4']) && ($_POST['equipe5']))
		{
	
			$membre_id = $_SESSION['user_id'];
			
			$equipe1 = $_POST['equipe1'];
			$place1 = $_POST['place1'];
			
			$equipe2 = $_POST['equipe2'];
			$place2 = $_POST['place2'];
			
			$equipe3 = $_POST['equipe3'];
			$place3 = $_POST['place3'];
			
			$equipe4 = $_POST['equipe4'];
			$place4 = $_POST['place4'];
			
			$equipe5 = $_POST['equipe5'];
			$place5 = $_POST['place5'];
	
	
			$ajout1 = "INSERT INTO prono (id, membre_id, type, equipe_id, classement) VALUES ('', '$membre_id', '26', '$equipe1', '$place1')";
			$ajout2 = "INSERT INTO prono (id, membre_id, type, equipe_id, classement) VALUES ('', '$membre_id', '26', '$equipe2', '$place2')";
			$ajout3 = "INSERT INTO prono (id, membre_id, type, equipe_id, classement) VALUES ('', '$membre_id', '26', '$equipe3', '$place3')";
			$ajout4 = "INSERT INTO prono (id, membre_id, type, equipe_id, classement) VALUES ('', '$membre_id', '26', '$equipe4', '$place4')";
			$ajout5 = "INSERT INTO prono (id, membre_id, type, equipe_id, classement) VALUES ('', '$membre_id', '26', '$equipe5', '$place5')";
	
			if((mysql_query($ajout1)) && (mysql_query($ajout2)) && (mysql_query($ajout3)) && (mysql_query($ajout4)) && (mysql_query($ajout5)))
			{
				header("Location: prono_fini_e.php");		
			} else {
				print mysql_error();
				print "Impossible d'ajouter ces pronostics";
			}
		}
	}
	
	function dernier()
	{
		if (isset($_POST['coureur1']))
		{
	
			$membre_id = $_SESSION['user_id'];
			
			$coureur1 = $_POST['coureur1'];
			$place1 = $_POST['place1'];
			
			$ajout1 = "INSERT INTO prono (id, membre_id, type, coureur_id, classement) VALUES ('', '$membre_id', '27', '$coureur1', '$place1')";

	
			if((mysql_query($ajout1)))
			{
				header("Location: prono_fini_d.php");		
			} else {
				print mysql_error();
				print "Impossible d'ajouter ces pronostics";
			}
		}
	}
	
	//verifie si le pronostic exite pour l'utilisateur "id"
	function verifierP($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='1' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier1($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='2' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier2($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='3' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier3($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='4' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier4($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='5' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier5($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='6' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier6($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='7' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier7($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='8' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier8($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='9' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier9($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='10' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier10($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='11' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier11($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='12' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier12($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='13' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier13($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='14' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier14($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='15' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier15($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='16' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier16($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='17' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier17($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='18' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier18($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='19' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier19($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='20' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	function verifier20($id)
	{
		$req = "SELECT id FROM prono WHERE membre_id = '$id' AND type ='21' LIMIT 1";

		$result = mysql_query($req);
		
		if (mysql_num_rows($result) === 1 && $result !== false) 
		{
			return true;
		} else {
			return false;
		}
		
	}
	
	
}

?>