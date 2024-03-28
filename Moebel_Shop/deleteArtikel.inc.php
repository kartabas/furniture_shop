<?php 
	if(!isset($_SESSION)) { 
		session_start(); 
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_artikel"])) {
		
			unset($_SESSION["warenkorb"][$_POST["delete_artikel"]]);

			$_SESSION["warenkorb"] = array_values($_SESSION["warenkorb"]);

			header("Location: warenkorbPage.php");
			exit();
	}
?>