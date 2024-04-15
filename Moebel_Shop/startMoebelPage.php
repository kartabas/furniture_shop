<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="./Bilder/icons/bedroom.ico">
	<link rel="stylesheet" href="style/startMoebelPage.css">


	<title>Start Seite </title>
</head>


<body>
	<script src="js/Biblioteken/jquery-3.7.1.min.js"></script>
	<script>
		function clickOnArtikel(item) {
			$.ajax({
				type: "POST",
				url: "warenkorbDatenbank.inc.php",
				data: {
					artikel: item
				},
				success: function(item) {

					//console.log(item);
				},
				error: function(xhr, status, error) {

					//console.error(xhr.responseText);
				}
			});
		}
	</script>



	<?php
	session_start();


	include("artikle_shop.inc.php");
	include("warenkorbDatenbank.inc.php");

	// echo "<pre>";
	// print_r($warenkorb);
	// echo "</pre>";
	//print_r($_SESSION );
	?>
	<div class="header">
		<div class="header__tittle">
			<h1><a href="startMoebelPage.php">Möbel Shop</a></h1>
		</div>

		<div class="nav__bar">
			<ul class="menu">
				<li class="nav_title"> <a href="#Info">Info</a></li>
				<li class="nav_title"> <a href="#Über_uns">Über uns</a></li>
				<li class="nav_title"> <a href="#Nachrichten">Nachrichten</a></li>
				<li class="nav_title"> <a href="#Neue_Artikel">Neue Artikel</a></li>

				<div class="warenkorb__box">
					<li class="warenkorb__icon"> <a href="warenkorbPage.php"><img src="Bilder/icons/warenkorb.png" alt="Warenkorb"></a></li>
					<?php
					if (isset($_SESSION["warenkorb"])) {
						echo '<div class="number__artikel">' . count($_SESSION["warenkorb"]) . '</div>';
					} else {

						echo '<div class="number__artikel">0</div>';
					}
					?>
				</div>

			</ul>

		</div>
	</div><!--header-->



	<div class="main">

		<div class="main__kategorien">
			<div class="main__title">
				<h1>Top Kategorien</h1>
			</div>
			<div class="main__container">
				<div class="moebel__box moebel__box__sofas">
					<div class="box__img">
						<img src="Bilder/Title_Bilder/sofas__title.jpg" alt="Sofas">
					</div>
					<div class="box__title">
						<span class="box__title__text">Sofas</span>
					</div>
				</div> <!--moebel__box-->

				<div class="moebel__box moebel__box__schraenke">
					<div class="box__img">
						<img src="Bilder/Title_Bilder/schraenke__title.jpg" alt="Schränke">
					</div>
					<div class="box__title">
						<span class="box__title__text">Schränke</span>
					</div>
				</div><!--moebel__box-->

				<div class="moebel__box moebel__box__stuehle">
					<div class="box__img">
						<img src="Bilder/Title_Bilder/stuehle__title.jpg" alt="Stühle">
					</div>
					<div class="box__title">
						<span class="box__title__text">Stühle</span>
					</div>
				</div><!--moebel__box-->

				<div class="moebel__box moebel__box__sessel">
					<div class="box__img">
						<img src="Bilder/Title_Bilder/sessel__title.jpg" alt="Sessel">
					</div>
					<div class="box__title">
						<span class="box__title__text">Sessel</span>
					</div>
				</div><!--moebel__box-->

				<div class="moebel__box moebel__box__betten">
					<div class="box__img">
						<img src="Bilder/Title_Bilder/betten__title.jpg" alt="Betten">
					</div>
					<div class="box__title">
						<span class="box__title__text">Betten</span>
					</div>


				</div><!--moebel__box-->
			</div><!--main__container-->
		</div><!--main__kategorien-->
	</div><!--main-->




	<div class="middle">
		<div class="middle__container">

			<div class="middle__container__cards">

				<?php for ($i = 0; $i < count($betten); $i++) { ?>
					<?php
					echo "<div class='box__card box__card_betten'>";

					echo "<div class='card_img'>";
					echo "<img src=" . $betten[$i]["image"] . " alt='Boxspringbett Countess'>";
					echo "</div>";
					echo "<div class='card__title'>
							<p>" . $betten[$i]["name"] . "</p>
							</div>";
					echo "<div class='card__stars'>";
					for ($j = 0; $j < $betten[$i]["stars"]; $j++) {
						echo "<span><img src='Bilder/icons/star.png' alt=''></span>";
					}
					echo "</div>";
					echo "<div class='card__price'>
							<h3>" . $betten[$i]["preis"] . ",00 &euro;</h3>
							</div>";
					echo "<div class='card__buy'>";
					?>
					<button class='card__buy_button' type="button" name="submit_button" value="<?php echo htmlspecialchars(json_encode($betten[$i])); ?>" onclick="clickOnArtikel(this.value)">
						<img src='Bilder/icons/zum-warenkorb-hinzufugen.png' alt=''>
					</button>

					<?php

					echo "</div>";
					echo "</div>"; //<!--box__card-->
					?>
				<?php  } ?>

				<?php for ($i = 0; $i < count($schraenke); $i++) { ?>

					<?php
					echo "<div class='box__card box__card_schraenke'>";

					echo "<div class='card_img'>";
					echo "<img src=" . $schraenke[$i]["image"] . " alt='Boxspringbett Countess'>";
					echo "</div>";
					echo "<div class='card__title'>
							<p>" . $schraenke[$i]["name"] . "</p>
							</div>";
					echo "<div class='card__stars'>";
					for ($j = 0; $j < $schraenke[$i]["stars"]; $j++) {
						echo "<span><img src='Bilder/icons/star.png' alt=''></span>";
					}
					echo "</div>";
					echo "<div class='card__price'>
							<h3>" . $schraenke[$i]["preis"] . ",00 &euro;</h3>
							</div>";
					echo "<div class='card__buy'>";
					?>
					<button class='card__buy_button' type="button" name="submit_button" value="<?php echo htmlspecialchars(json_encode($schraenke[$i])); ?>" onclick="clickOnArtikel(this.value)">
						<img src='Bilder/icons/zum-warenkorb-hinzufugen.png' alt=''>
					</button>


					<?php



					echo "</div>";
					echo "</div>"; //<!--box__card-->
					?>
				<?php } ?>

				<?php for ($i = 0; $i < count($sessel); $i++) { ?>
					<?php
					echo "<div class='box__card box__card_sessel'>";

					echo "<div class='card_img'>";
					echo "<img src=" . $sessel[$i]["image"] . " alt='Boxspringbett Countess'>";
					echo "</div>";
					echo "<div class='card__title'>
							<p>" . $sessel[$i]["name"] . "</p>
							</div>";
					echo "<div class='card__stars'>";
					for ($j = 0; $j < $sessel[$i]["stars"]; $j++) {
						echo "<span><img src='Bilder/icons/star.png' alt=''></span>";
					}
					echo "</div>";
					echo "<div class='card__price'>
							<h3>" . $sessel[$i]["preis"] . ",00 &euro;</h3>
							</div>";
					echo "<div class='card__buy'>";
					?>

					<button class='card__buy_button' type="button" name="submit_button" value="<?php echo htmlspecialchars(json_encode($sessel[$i])); ?>" onclick="clickOnArtikel(this.value)">
						<img src='Bilder/icons/zum-warenkorb-hinzufugen.png' alt=''>
					</button>

					<?php
					echo "</div>";
					echo "</div>"; //<!--box__card-->
					?>
				<?php } ?>



				<?php for ($i = 0; $i < count($sofas); $i++) { ?>
					<?php
					echo "<div class='box__card box__card_sofas'>";

					echo "<div class='card_img'>";
					echo "<img src=" . $sofas[$i]["image"] . " alt='Boxspringbett Countess'>";
					echo "</div>";
					echo "<div class='card__title'>
							<p>" . $sofas[$i]["name"] . "</p>
							</div>";
					echo "<div class='card__stars'>";
					for ($j = 0; $j < $sofas[$i]["stars"]; $j++) {
						echo "<span><img src='Bilder/icons/star.png' alt=''></span>";
					}
					echo "</div>";
					echo "<div class='card__price'>
							<h3>" . $sofas[$i]["preis"] . ",00 &euro;</h3>
							</div>";
					echo "<div class='card__buy'>";
					?>
					<button class='card__buy_button' type="button" name="submit_button" value="<?php echo htmlspecialchars(json_encode($sofas[$i])); ?>" onclick="clickOnArtikel(this.value)">
						<img src='Bilder/icons/zum-warenkorb-hinzufugen.png' alt=''>
					</button>

					<?php
					echo "</div>";
					echo "</div>"; //<!--box__card-->
					?>
				<?php } ?>

				<?php for ($i = 0; $i < count($stuhle); $i++) { ?>
					<?php
					echo "<div class='box__card box__card_stuhle'>";

					echo "<div class='card_img'>";
					echo "<img src=" . $stuhle[$i]["image"] . " alt='Boxspringbett Countess'>";
					echo "</div>";
					echo "<div class='card__title'>
							<p>" . $stuhle[$i]["name"] . "</p>
							</div>";
					echo "<div class='card__stars'>";
					for ($j = 0; $j < $stuhle[$i]["stars"]; $j++) {
						echo "<span><img src='Bilder/icons/star.png' alt=''></span>";
					}
					echo "</div>";
					echo "<div class='card__price'>
							<h3>" . $stuhle[$i]["preis"] . ",00 &euro;</h3>
							</div>";
					echo "<div class='card__buy'>";
					?>
					<button class='card__buy_button' type="button" name="submit_button" value="<?php echo htmlspecialchars(json_encode($stuhle[$i])); ?>" onclick="clickOnArtikel(this.value)">
						<img class='card__buy_button_img' src='Bilder/icons/zum-warenkorb-hinzufugen.png' alt=''>
					</button>

					<?php
					echo "</div>";
					echo "</div>"; //<!--box__card-->
					?>
				<?php } ?>


			</div><!--middle__container__cards-->

		</div><!--middle__container-->
	</div><!--middle-->




	<div class="footer-basic">
		<footer>
			<div class="social">
				<a href="#"><img src="Bilder/icons/inst.png" alt=""></a>
				<a href="#"><img src="Bilder/icons/snapchat.png" alt=""></a>
				<a href="#"><img src="Bilder/icons/x.png" alt=""></a>
				<a href="#"><img src="Bilder/icons/facebook.png" alt=""></a>
			</div>
			<ul class="list-inline">
				<li class="list-inline-item"><a href="#">Home</a></li>
				<li class="list-inline-item"><a href="#">Services</a></li>
				<li class="list-inline-item"><a href="#">About</a></li>
				<li class="list-inline-item"><a href="#">Terms</a></li>
				<li class="list-inline-item"><a href="#">Privacy Policy</a></li>
			</ul>
			<p class="copyright">Möbel Shop © 2024</p>
		</footer>
	</div><!--footer-basic-->






	<script src="js/startMoebelPage.js"></script>
	<script>
		let default_count = 0;
		let ALL_ARTIKLE = <?php
								if (isset($_SESSION["warenkorb"])) {
									echo count($_SESSION["warenkorb"]);
								} else {
									echo 0;
								}
								?>;
		$(document).ready(function() {
			$(".card__buy_button").click(function() {
				default_count++;

				ALL_ARTIKLE++;
				console.log("click");
				$(".number__artikel").html(default_count);
				if ($(".number__artikel").val() == '0') {
					$(".number__artikel").html(0);
				} else {
					$(".number__artikel").html(ALL_ARTIKLE);
				}



			});
		});
	</script>

</body>

</html>