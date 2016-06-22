// header slider
(function($) {

	'use strict';

	var $slides = $('[data-slides]');
	var images = $slides.data('slides');
	var count = images.length;
	var oldSlide;
	var newSlide;
	var slideshow = function() {
		$slides.animate({ opacity: 0 }, { duration: 300 });
		setTimeout( function() {
			// prevent same image twice
			oldSlide = $slides.css('background-image');
			newSlide = images[Math.floor(Math.random() * count)];

			while( oldSlide === newSlide ) {
			    newSlide = images[Math.floor(Math.random() * count)];
			};

			$slides.css('background-image', 'url("' + newSlide + '")')
				   .animate({ opacity: 1 }, { duration: 1000 })
				   .show(0, function() {
				   		setTimeout(slideshow, 10000);
				   });
		}, 501);
	};

	slideshow();

}(jQuery));