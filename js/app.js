var fetishApp = angular.module('fetishApp', []);

//suggestionCtrl.controller('suggestionCtrl', function($scope){
//
//	$form = $('.form');
//
//	$scope.openForm = function(){
//			$form.fadeIn();
//	}
//});

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

var fetishes = [
	{'name': 'Stepping', 'url': 'https://www.youtube.com/watch?v=VL5xJO9Hsoo'},
	{'name': 'dwarf1', 'url': 'http://imgur.com/a/exGn0#0 '},
	{'name': 'dwarf2', 'url': 'http://i.imgur.com/9OPoZ.jpg'},
	{'name': 'french mmaid', 'url': 'http://imgur.com/a/uXpvZ'},
	{'name': 'Balloon', 'url': 'https://www.youtube.com/watch?v=-GK1OZkj0Mg'},
	{'name': 'Feet Worship', 'url': 'http://www.pornhub.com/view_video.php?viewkey=1837441385'},
	{'name': 'Feet Worship', 'url': 'http://www.pornhub.com/view_video.php?viewkey=1837441385'},
	{'name': 'Breath control', 'url': 'http://freakykinky.com/uploads/posts/2013-10/breath-control_731.jpeg'},
	{'name': 'Tooth paste', 'url': 'https://www.youtube.com/watch?v=mDv9nF5QocU'},
	{'name': 'Retard porn', 'url': 'http://newsfilter.org/photo/terri-schiavo-made-a-sex-tape-164782 '},
	{'name': 'Bondage', 'url': 'http://newsfilter.org/photo/the-new-newsfilter-is-finally-live-2-fists-in-the-air-if-you-approve-164732'},
	{'name': 'Dolphine', 'url': 'http://newsfilter.org/photo/no-wonder-the-dolphins-are-always-jumping-out-of-the-water-at-sea-world-164781'},
	{'name': 'Ashtray', 'url': 'http://www.superzooi.com/4774/genital-ashtray/'},
	{'name': 'Amputee', 'url': 'http://2guys1stump.com/'},
	{'name': 'SM', 'url': 'http://fsz.tumblr.com/'},
	{'name': 'Zentai', 'url': 'https://www.youtube.com/watch?v=ui_esdmfuOI'},
	{'name': 'Hair', 'url': 'https://www.youtube.com/watch?v=IE7nDe5Fg5c'},
	{'name': 'Black feets', 'url': 'http://youtu.be/jCTeiHDNclY'},
	{'name': 'Lesbian socks fetish', 'url': 'http://youtu.be/MxVGcri2OaA'},
	{'name': 'Over stocking', 'url': 'http://youtu.be/Nj-taC-i1q0'},
	{'name': 'Ballon guy', 'url': 'http://youtu.be/EqMxEBFfIHI'},
	{'name': 'Fart1', 'url': 'http://www.princessoffarts.com/home12.htm'},
	{'name': 'Fart2', 'url': 'http://www.pornhub.com/view_video.php?viewkey=910709781'},
	{'name': 'Fart3', 'url': 'http://www.pornhub.com/view_video.php?viewkey=1172706137'},
	{'name': 'Macrophilea', 'url': 'https://www.youtube.com/watch?v=lAWL3qMokHQ'},
	{'name': 'Slave', 'url': 'https://www.youtube.com/watch?v=v9ZYwhGJ0Q4'},
	{'name': 'Giantess compilatiob', 'url': 'https://www.youtube.com/watch?v=lAWL3qMokHQ'},
	{'name': 'Suffocation', 'url': 'http://www.humoron.com/porn/Snuff_movie_Girl_wrapped_in_a_plastic_bag__Snuff_Videos_48445/'},
	{'name': 'Suffocation 2', 'url': 'http://www.humoron.com/porn/Girl_suffocates_in_plastic_bag__Suffocate_Videos_48020/'},
	{'name': 'Face sitting', 'url': 'http://www.humoron.com/porn/Hardcore_BBW_Facesitting__Facesitting_Videos_57115/'},
	{'name': 'Anime suffectaion', 'url': 'http://www.humoron.com/porn/Kigurumi_Breathplay__Kigurumi_breathplay_Videos_51274/'},
	{'name': 'Swimsuite', 'url': 'http://aquarhythm.kir.jp/main.htm'},
	{'name': 'Gold', 'url': 'http://www.tube8.com/fetish/golden-fuck01/14269841/'}
];