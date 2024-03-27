<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Warenkorb</title>
</head>
<body>
	<a href="startMoebelPage.php">Start</a>

<?php

	session_start();
	//$_SESSION["warenkorb"] = [];
	echo "<pre>";
	print_r( $_SESSION["warenkorb"]);
	echo "</pre>";

?>






</body>
</html>
