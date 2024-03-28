let clickCount = 0;
$(document).ready(function () {
	$(".warenkorb__icon").click(function (event) {
		if ($(".number__artikel").text() === '0') {
			 event.preventDefault();
			 alert("Sie können nicht auf Warenkorb klicken ,weil sie 0 Artikel haben!!");
		}
  });

	$(".moebel__box__sofas").click(function () {
		$(".artikel__form__schraenke").css("display", "none");
		$(".artikel__form__stuhle").css("display", "none");
		$(".artikel__form__sessel").css("display", "none");
		$(".artikel__form__betten").css("display", "none");
		clickCount++;

		console.log(clickCount);
		if (clickCount > 1) {
			$(".artikel__form").css("display", "block");

			clickCount = 0;
		}
	});

	$(".moebel__box__schraenke").click(function () {
		$(".artikel__form__sofas").css("display", "none");
		$(".artikel__form__stuhle").css("display", "none");
		$(".artikel__form__sessel").css("display", "none");
		$(".artikel__form__betten").css("display", "none");
		clickCount++;

		if (clickCount > 1) {
			$(".artikel__form").css("display", "block");
			clickCount = 0;
		}
	});

	$(".moebel__box__stuehle").click(function () {
		$(".artikel__form__schraenke").css("display", "none");
		$(".artikel__form__sofas").css("display", "none");
		$(".artikel__form__sessel").css("display", "none");
		$(".artikel__form__betten").css("display", "none");
		clickCount++;

		if (clickCount > 1) {
			$(".artikel__form").css("display", "block");
			clickCount = 0;
		}
	});

	$(".moebel__box__sessel").click(function () {
		$(".artikel__form__schraenke").css("display", "none");
		$(".artikel__form__stuhle").css("display", "none");
		$(".artikel__form__sofas").css("display", "none");
		$(".artikel__form__betten").css("display", "none");
		clickCount++;

		if (clickCount > 1) {
			$(".artikel__form").css("display", "block");
			clickCount = 0;
		}
	});

	$(".moebel__box__betten").click(function () {
		$(".artikel__form__schraenke").css("display", "none");
		$(".artikel__form__stuhle").css("display", "none");
		$(".artikel__form__sessel").css("display", "none");
		$(".artikel__form__sofas").css("display", "none");
		clickCount++;

		if (clickCount > 1) {
			$(".artikel__form").css("display", "block");
			clickCount = 0;
		}
	});



});