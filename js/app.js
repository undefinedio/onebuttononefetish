var fetishApp = angular.module('fetishApp', []);


fetishApp.controller('fetishCtrl', function ($scope) {

	var audio = [
		document.getElementById("js-audio-1")
	];

	$scope.openFetish = function () {

		$button = $('#js-button');
		$audio = document.getElementById("js-audio-1");

		if ($button.hasClass('active')) {
			console.log('NO GO');
			return false;
		}

		$button.addClass('active');

		$audio.load();
		$audio.play();

		$audio.addEventListener("ended", function () {
			$button.removeClass('active');
			var item = fetishes[Math.floor(Math.random() * fetishes.length)];
			window.open(item.url, "_self")
		}, true);

	}
});