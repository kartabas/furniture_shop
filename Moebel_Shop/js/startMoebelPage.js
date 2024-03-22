
let clickCount = 0;
$(document).ready(function () {


	$(".card__buy_button").click(function () {

		clickCount++;
		$(".number__artikel").text(clickCount);

	});





});