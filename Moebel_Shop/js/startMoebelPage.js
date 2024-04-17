let clickCount = 0;

$(document).ready(function () {


	//Überprüft die "number__artikel" wie viel Artikel in Warenkorb hinzugefügt 
	$(".warenkorb__icon").click(function (event) {
		if ($(".number__artikel").text() === '0') {
			event.preventDefault();
			alert("Sie können nicht auf den Warenkorb klicken, weil Sie keine Artikel hinzugefügt haben!!");
		}
	});




	//Wird nur Sofas anzeigen 
	$(".moebel__box__sofas").click(function () {
		$(".box__card_betten").css("display", "none");
		$(".box__card_schraenke").css("display", "none");
		$(".box__card_sessel").css("display", "none");
		$(".box__card_stuhle").css("display", "none");
		clickCount++;

		console.log(clickCount);
		if (clickCount > 1) {
			$(".box__card").css("display", "block");

			clickCount = 0;
		}
	});

	//Wird nur Schränke anzeigen 
	$(".moebel__box__schraenke").click(function () {
		$(".box__card_sofas").css("display", "none");
		$(".box__card_stuhle").css("display", "none");
		$(".box__card_sessel").css("display", "none");
		$(".box__card_betten").css("display", "none");
		clickCount++;

		if (clickCount > 1) {
			$(".box__card").css("display", "block");
			clickCount = 0;
		}
	});

	//Wird nur Schtühle anzeigen 
	$(".moebel__box__stuehle").click(function () {
		$(".box__card_schraenke").css("display", "none");
		$(".box__card_sofas").css("display", "none");
		$(".box__card_sessel").css("display", "none");
		$(".box__card_betten").css("display", "none");
		clickCount++;

		if (clickCount > 1) {
			$(".box__card").css("display", "block");
			clickCount = 0;
		}
	});

	//Wird nur Sessel anzeigen 
	$(".moebel__box__sessel").click(function () {
		$(".box__card_schraenke").css("display", "none");
		$(".box__card_stuhle").css("display", "none");
		$(".box__card_sofas").css("display", "none");
		$(".box__card_betten").css("display", "none");
		clickCount++;

		if (clickCount > 1) {
			$(".box__card").css("display", "block");
			clickCount = 0;
		}
	});

	//Wird nur Betten anzeigen 
	$(".moebel__box__betten").click(function () {
		$(".box__card_schraenke").css("display", "none");
		$(".box__card_stuhle").css("display", "none");
		$(".box__card_sessel").css("display", "none");
		$(".box__card_sofas").css("display", "none");
		clickCount++;

		if (clickCount > 1) {
			$(".box__card").css("display", "block");
			clickCount = 0;
		}
	});



});