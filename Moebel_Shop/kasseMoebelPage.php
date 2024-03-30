<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style/kasseMoebelPage.css">
	<title>Kasse</title>
</head>

<body>
<?php 
	session_start();
	include("warenkorbDatenbank.inc.php");

	// echo "<pre>";
	// print_r( $_SESSION["warenkorb"]);
	// echo "</pre>";

	//$_SESSION["preisAllArtikel"];

?>


<div class="header">
		<div class="header__tittle">
			<h1><a href="startMoebelPage.php">Möbel Shop</a></h1>
		</div>

		<div class="nav__bar">
			<ul class="menu">
				<li class="nav_title"> <a href="#">Top Name1</a></li>
				<li class="nav_title"> <a href="#">Top Name2</a></li>
				<li class="nav_title"> <a href="#">Top Name3</a></li>
				<li class="nav_title"> <a href="#">Top Name4</a></li>

				<div class="warenkorb__box">
					<li class="warenkorb__icon"> <a href="warenkorbPage.php"><img src="Bilder/icons/warenkorb.png" alt="Warenkorb"></a></li>
					<?php 
						if(isset($_SESSION["warenkorb"])) {
							echo '<div class="number__artikel">' . count($_SESSION["warenkorb"]) . '</div>';
						} else {
    						echo '<div class="number__artikel">0</div>';
						}
					?>
				</div>

			</ul>

		</div>
	</div><!--header-->




	<div class="middle">
		<div class="middle__container">

				<div class="middle__container__tittle">
					<h2>Kasse</h2>
				</div>
					<div class="middle__container__box">
						<div class="middle__container__form">
							<div class="middle__container__form__text">
								<h3>Bestellung abschließen</h3>
							</div>

							<?php  if(!isset($_POST["absenden"])){
								

								?>
								<form class="bestellung__form" method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>">
									<div class="bestellung__form__name">
										<div class="bestellung__form__vorname">
												<p for="vorname" >Vorname</p>
												<input type="text" name="vorname" placeholder="Vorname" size="30" required>
										</div>

										<div class="bestellung__form__nachname">
												<p for="nachname" >Nachname</p>
												<input type="text" name="nachname" placeholder="Nachname" size="30" required>
										</div>
									</div><!-- bestellung__form__name-->
									

									<div class="bestellung__form__email">
										<p>Email</p>
										<input type="email" name="email" placeholder="Email" size="40" required>
									</div>

									<div class="bestellung__form__location">

										<div class="bestellung__form__location__land">
											<p>Land</p>
											<input type="text" name="land" placeholder="Land" size="25" required>
										</div>

										<div class="bestellung__form__location__stadt">
											<p>Stadt</p>
											<input type="text" name="stadt" placeholder="Stadt" size="25" required>
										</div>

										<div class="bestellung__form__location__street">
											<p>Straße</p>
											<input type="text" name="street" placeholder="Straße" size="25" required>
										</div>

										<div class="bestellung__form__location__home__number">
											<p>Hausnummer</p>
											<input type="text" name="home__number" placeholder="Hausnummer" size="25" required>
										</div>

										<div class="bestellung__form__location__postal_code">
											<p>Postazahl</p>
											<input type="text" name="postal_code" placeholder="Postazahl" size="15" required>
										</div>

									</div><!-- bestellung__form__location-->
									<div class="zusammenfassung">
										<div class="zusammenfassung__tittle">
											<h3>Stimmen Sie die Daten: </h3>
										</div>
										<table>
											<tr class="choese">
												<td><input type="checkbox" name="zusammenfassung__artikel" required></td>
												<td><p  name="zusammenfassung__artikel" >Alle Artikel sind: <?php echo count($_SESSION["warenkorb"]); ?></p></td>
											</tr>
											<tr class="choese"> 
												<td><input type="checkbox" name="zusammenfassung__summe" required></td>
												<td><p name="zusammenfassung__summe" >Gesamtpreis: <?php echo $_SESSION["preisAllArtikel"]; ?>.00 &euro;</p></td>
											</tr>
										</table>
									</div>
									<div class="bestellung__senden">
										<button class="bestellung__senden__button" type="submit" name="absenden">Bestellung abschließen</button>
									</div>



								</form>
								<?php  
									}else{
										echo "Sie haben folgende Bestellung übermittelt: ";
										echo "</br>";
										echo "Bestellung für ".$_POST["vorname"]." ".$_POST["nachname"]."die Email lautet ".$_POST["email"] ;
										echo "</br>";
										echo " zum ".$_POST["land"].", ".$_POST["stadt"].", ".$_POST["street"]." ".$_POST["home__number"].", ".$_POST["postal_code"]." ";
										?>
									
										<div class="artikel_container">
											<?php  
											
											for($i=0;$i<(count($_SESSION["warenkorb"]));++$i){?>
											<form class="warenkorb__artikel" method="POST" action="deleteArtikel.inc.php">
												<div class="artikel__box">
													
													<div class="artikel__box__image">
														<img src="<?php echo $_SESSION["warenkorb"][$i]["image"] ?>" alt="Bett_1">
													</div>
													<div class="artikel__box_info">
														<div class="artikel__box__title">
															<h2><?php echo $_SESSION["warenkorb"][$i]["name"] ?></h2>
														</div>
														<div class="artikel__box__preis">
															<p><?php echo $_SESSION["warenkorb"][$i]["preis"] ?>.00 &euro;</p>
														</div>
													</div><!-- artikel__box_info-->
													
												</div><!-- artikel__box-->
												</form>
												<?php   } ?>
										</div><!-- artikel_container-->	
								<?php 


										echo "</br>";
										echo "Vielen Dank! Die Session wird beendet.";
										echo "</br>";
										echo "Die Bestelldaten wurden in der Datei bestellung.csv gespeichert.";



									}
										

									?>
							</div>
					</div>
		</div>
	</div>





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
			<p class="copyright">Möbel Shop  © 2024</p>
		</footer>
	</div><!--footer-basic-->



<script src="js/Biblioteken/jquery-3.7.1.min.js"></script>
<script src="js/kasseMoebelPage.js"></script>


</body>

</html>