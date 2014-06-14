var fetishApp = angular.module('fetishApp', []);

fetishApp.controller('fetishCtrl', function ($scope) {
	$scope.fetishes = [
		{'name': 'Nexus S',
			'url': 'Fast just got faster with Nexus S.'}
	];

	$scope.openFetish = function() {
		document.getElementById("js-button").className += " active";
		console.log('TEST');
	}
});