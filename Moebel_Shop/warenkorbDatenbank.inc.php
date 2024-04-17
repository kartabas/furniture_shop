<?php


if (!isset($_SESSION)) {
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["artikel"])) {
		if (!isset($_SESSION["warenkorb"])) {
			$_SESSION["warenkorb"] = [];
		}

		// "json_decode" dient ,um die JSON Daten in normale array zu umwandeln
		$_SESSION["warenkorb"][] = json_decode($_POST["artikel"], true);

		//Wird auf diese Seite öffnen 
		header("Location: startMoebelPage.php");
		exit();
	}

	
} else {

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["artikel"])) {
		if (!isset($_SESSION["warenkorb"])) {
			$_SESSION["warenkorb"] = [];
		}
		// "json_decode" dient ,um die JSON Daten in normale array zu umwandeln
		$_SESSION["warenkorb"][] = json_decode($_POST["artikel"], true);

		//Wird auf diese Seite öffnen 
		header("Location: startMoebelPage.php");
		exit();
	}
}
?>