<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/startMoebelPage.css">
	<title>Start Seite </title>
</head>

<body>
	<?php
	session_start();

	?>

	<div class="header">
		<div class="header__tittle">
			<h1>Möbel Shop</h1>
		</div>

		<div class="nav__bar">
			<ul class="menu">
				<li class="nav_title"> <a href="#">Sofas</a></li>
				<li class="nav_title"> <a href="#">Schränke</a></li>
				<li class="nav_title"> <a href="#">Stühle</a></li>
				<li class="nav_title"> <a href="#">Sessel</a></li>
				<li class="nav_title"> <a href="#">Betten</a></li>
				<div class="warenkorb__box">
					<li class="warenkorb__icon"> <a href="warenkorbPage.php"><img src="Bilder/icons/warenkorb.png" alt="Warenkorb"></a></li>
					<div class="number__artikel">0</div>
				</div>

			</ul>

		</div>
	</div>



	<div class="main">

		<div class="main__kategorien">
			<div class="main__title">
				<h1>Top Kategorien</h1>
			</div>
			<div class="main__container">
				<div class="moebel__box">
					<div class="box__img">
						<img src="Bilder/Title_Bilder/sofas__title.jpg" alt="Sofas">
					</div>
					<div class="box__title">
						<span class="box__title__text">Sofas</span>
					</div>
				</div> <!--moebel__box-->

				<div class="moebel__box">
					<div class="box__img">
						<img src="Bilder/Title_Bilder/schraenke__title.jpg" alt="Schränke">
					</div>
					<div class="box__title">
						<span class="box__title__text">Schränke</span>
					</div>
				</div><!--moebel__box-->

				<div class="moebel__box">
					<div class="box__img">
						<img src="Bilder/Title_Bilder/stuehle__title.jpg" alt="Stühle">
					</div>
					<div class="box__title">
						<span class="box__title__text">Stühle</span>
					</div>
				</div><!--moebel__box-->

				<div class="moebel__box">
					<div class="box__img">
						<img src="Bilder/Title_Bilder/sessel__title.jpg" alt="Sessel">
					</div>
					<div class="box__title">
						<span class="box__title__text">Sessel</span>
					</div>
				</div><!--moebel__box-->

				<div class="moebel__box">
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

				<!-- <div class="box__card">

					<div class="card_img">
						<img src="Bilder/Betten_Bilder/Bett_1.jpg" alt="Boxspringbett Countess">
					</div>
					<div class="card__title">
						<p>Boxspringbett Countess</p>
					</div>
					<div class="card__stars">
						<span><img src="Bilder/icons/star.png" alt=""></span>
						<span><img src="Bilder/icons/star.png" alt=""></span>


					</div>
					<div class="card__price">
						<h3>399,00 &euro;</h3>
					</div>
					<div class="card__buy">
						<button class="card__buy_button"><img src="Bilder/icons/zum-warenkorb-hinzufugen.png" alt=""></button>
					</div>
					

				</div> --> <!--box__card -->


				<?php
				include("artikle_shop.inc.php");
				include("warenkorbDatenbank.inc.php");

				for ($i = 0; $i < 3; $i++) {
					echo "<div class='box__card'>";

					echo "<div class='card_img'>";
					echo "<img src=" . $betten[$i]["image"] . " alt='Boxspringbett Countess'>";
					echo "</div>";
					echo "<div class='card__title'>
							<p>" . $betten[$i]["name"] . "</p>
							</div>";
					echo "<div class='card__stars'>
							<span><img src='Bilder/icons/star.png' alt=''></span>
							<span><img src='Bilder/icons/star.png' alt=''></span>
							</div>";
					echo "<div class='card__price'>
							<h3>" . $betten[$i]["preis"] . ".00 &euro;</h3>
							</div>";
					echo "<div class='card__buy'>
							<button class='card__buy_button' value='.$betten[$i].'><img src='Bilder/icons/zum-warenkorb-hinzufugen.png' alt=''></button>
							</div>";


					echo "</div>"; //<!--box__card-->
				}


				for ($i = 0; $i < 3; $i++) {
					echo "<div class='box__card'>";

					echo "<div class='card_img'>";
					echo "<img src=" . $schraenke[$i]["image"] . " alt='Boxspringbett Countess'>";
					echo "</div>";
					echo "<div class='card__title'>
							<p>" . $schraenke[$i]["name"] . "</p>
							</div>";
					echo "<div class='card__stars'>
							<span><img src='Bilder/icons/star.png' alt=''></span>
							<span><img src='Bilder/icons/star.png' alt=''></span>
							</div>";
					echo "<div class='card__price'>
							<h3>" . $schraenke[$i]["preis"] . ".00 &euro;</h3>
							</div>";
					echo "<div class='card__buy'>
							<button class='card__buy_button'><img src='Bilder/icons/zum-warenkorb-hinzufugen.png' alt=''></button>
							</div>";


					echo "</div>"; //<!--box__card-->
				}

				for ($i = 0; $i < 3; $i++) {
					echo "<div class='box__card'>";

					echo "<div class='card_img'>";
					echo "<img src=" . $sessel[$i]["image"] . " alt='Boxspringbett Countess'>";
					echo "</div>";
					echo "<div class='card__title'>
							<p>" . $sessel[$i]["name"] . "</p>
							</div>";
					echo "<div class='card__stars'>
							<span><img src='Bilder/icons/star.png' alt=''></span>
							<span><img src='Bilder/icons/star.png' alt=''></span>
							</div>";
					echo "<div class='card__price'>
							<h3>" . $sessel[$i]["preis"] . ".00 &euro;</h3>
							</div>";
					echo "<div class='card__buy'>
							<button class='card__buy_button'><img src='Bilder/icons/zum-warenkorb-hinzufugen.png' alt=''></button>
							</div>";


					echo "</div>"; //<!--box__card-->
				}

				for ($i = 0; $i < 3; $i++) {
					echo "<div class='box__card'>";

					echo "<div class='card_img'>";
					echo "<img src=" . $sofas[$i]["image"] . " alt='Boxspringbett Countess'>";
					echo "</div>";
					echo "<div class='card__title'>
							<p>" . $sofas[$i]["name"] . "</p>
							</div>";
					echo "<div class='card__stars'>
							<span><img src='Bilder/icons/star.png' alt=''></span>
							<span><img src='Bilder/icons/star.png' alt=''></span>
							</div>";
					echo "<div class='card__price'>
							<h3>" . $sofas[$i]["preis"] . ".00 &euro;</h3>
							</div>";
					echo "<div class='card__buy'>
							<button class='card__buy_button'><img src='Bilder/icons/zum-warenkorb-hinzufugen.png' alt=''></button>
							</div>";


					echo "</div>"; //<!--box__card-->
				}

				for ($i = 0; $i < 3; $i++) {
					echo "<div class='box__card'>";

					echo "<div class='card_img'>";
					echo "<img src=" . $stuhle[$i]["image"] . " alt='Boxspringbett Countess'>";
					echo "</div>";
					echo "<div class='card__title'>
							<p>" . $stuhle[$i]["name"] . "</p>
							</div>";
					echo "<div class='card__stars'>
							<span><img src='Bilder/icons/star.png' alt=''></span>
							<span><img src='Bilder/icons/star.png' alt=''></span>
							</div>";
					echo "<div class='card__price'>
							<h3>" . $stuhle[$i]["preis"] . ".00 &euro;</h3>
							</div>";
					echo "<div class='card__buy'>
							<button class='card__buy_button'><img src='Bilder/icons/zum-warenkorb-hinzufugen.png' alt=''></button>
							</div>";


					echo "</div>"; //<!--box__card-->
				}




				?>


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
			<p class="copyright">Company Name © 2024</p>
		</footer>
	</div>





	<script src="js/Biblioteken/jquery-3.7.1.min.js"></script>
	<script src="js/startMoebelPage.js"></script>

</body>

</html>