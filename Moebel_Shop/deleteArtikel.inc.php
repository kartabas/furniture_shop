<?php 
	if(!isset($_SESSION)) { 
		session_start(); 
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_artikel"])) {
		
			//Löscht die gewählte Artikel 
			unset($_SESSION["warenkorb"][$_POST["delete_artikel"]]);

			// "array_values" dient , um alle Daten in Index 0 zu verschieben  
 			$_SESSION["warenkorb"] = array_values($_SESSION["warenkorb"]);

			header("Location: warenkorbPage.php");
			exit();
	}
?>