<?php

	if(!isset($_SESSION)) { 
		
		session_start(); 
		if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_button"])) {

			if (!isset($_SESSION["warenkorb"])) {
				 $_SESSION["warenkorb"] = [];
			}
	  
	  
	  
			$_SESSION["warenkorb"][] = json_decode( $_POST["artikel"],true);
	  
			// Redirect back to the previous page or any other page
			header("Location: startMoebelPage.php");
			exit();
	  }

	} else{

		if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_button"])) {

			if (!isset($_SESSION["warenkorb"])) {
				 $_SESSION["warenkorb"] = [];
			}
	  
	  
	  
			$_SESSION["warenkorb"][] = json_decode( $_POST["artikel"],true);
	  
			// Redirect back to the previous page or any other page
			header("Location: startMoebelPage.php");
			exit();
	  }
		
	}

?>