<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="./Bilder/icons/bedroom.ico">
	<link rel="stylesheet" href="style/warenkorbPage.css">
	<title>Warenkorb</title>
</head>


<?php
	
	session_start();
	include("warenkorbDatenbank.inc.php");
	//$_SESSION["preisAllArtikel"];
	//$_SESSION["warenkorb"] = [];
	// echo "<pre>";
	// print_r( $_SESSION["warenkorb"]);
	// echo "</pre>";
	
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



	<div class="middle">
		<div class="middle__container">


			<div class="artikel_container">
				<?php  
				$_SESSION["preisAllArtikel"] = 0;
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
							<div class="delete_artikel_icon">
							<input type="hidden" name="delete_artikel" value="<?php echo $i?>">
								<button class="delete_artikel" type="submit"  >  <img src="Bilder/icons/delete.png" alt="delete_artikel"></button>
									
							</div>
						</div><!-- artikel__box_info-->
						
					</div><!-- artikel__box-->
					</form>
					<?php 
						$_SESSION["preisAllArtikel"]+=$_SESSION["warenkorb"][$i]["preis"];
					}?>
				
			</div><!-- artikel_container-->

			<div class="artikel_container_to_kasse">
					<div class="artikel_container_to_kasse_container">
						<div class="kasse__tittle">
							<h2>Zum Kasse</h2>
						</div>
						<div class="kasse__artikel">
							<p>Alle Artikel sind: <?php echo count($_SESSION["warenkorb"]) ?> Stück</p>
						</div>
						<div class="kasse__preis">
							<p>Gesamt Preis aller Artikel beträgt: <?php echo $_SESSION["preisAllArtikel"] ?>.00 &euro; </p>
						</div>
						
						<div class="zum__kasse__button">
							<div class="alert_text"></div>
							<?php if(count($_SESSION["warenkorb"])== 0){?>
								<a href="#"><button onclick="alertInWarenkorb()">Zum Kasse</button></a>
							<?php }else{?>
								<a href="kasseMoebelPage.php"><button  class="zum__kasse__button_click">Zum Kasse</button></a>
							<?php }?>
						</div>
					</div><!-- artikel_container_to_kasse_container-->
						
			</div><!-- artikel_container_to_kasse-->

		</div><!-- middle-->
	</div><!-- middle__container-->




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
	<script src="js/warenkorbPage.js"></script>




</body>
</html>
