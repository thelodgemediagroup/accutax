$(document).ready(function() {

	var hero = $('.hero');
	var title = $('.hero > h1');
	var bkgnd = $('.hero-bkgnd');
	var titleBkgnd = $('.title-bkgnd');	

	function debounce(func, wait, immediate) {
		var timeout;
		return function() {
			var context = this, args = arguments;
			var later = function() {
				timeout = null;
				if (!immediate) func.apply(context, args);
			};
			if (immediate && !timeout) func.apply(context, args);
			clearTimeout(timeout);
			timeout = setTimeout(later, wait);
		};
	}

	function animateTitle(titleLeft, titleHeight, titleTop, titleSpeed, bkgndSpeed) {
		title.animate({
			opacity: 1,
			left: titleLeft
		}, titleSpeed);

		titleBkgnd.animate({
			height: titleHeight,
			opacity: 0.8,
			top: titleTop
		}, bkgndSpeed);
	}

	function heroResize() {

		var currWidth = $(window).width() + 15;

		var titleLeft; titleHeight; titleTop;

		titleLeft = currWidth < 1030 ? 466 : 600;
		titleHeight = currWidth < 1030 ? 96 : 124;
		titleTop = currWidth < 1030 ? 40 : 64;		

		animateTitle(titleLeft, titleHeight, titleTop, 300, 300);

	}

	var currWidth = $(window).width() + 15;

	if (currWidth > 768) {

		var titleLeft = currWidth < 1030 ? 466 : 600;
		var titleHeight = currWidth < 1030 ? 96 : 124;
		var titleTop = currWidth < 1030 ? 40 : 64;


		bkgnd.hide();
		title.css('opacity', 0);
		titleBkgnd.css('opacity', 0);

		animateTitle(titleLeft, titleHeight, titleTop, 4000, 3000);

		bkgnd.fadeIn(5000);
	}

	window.onresize = debounce(function() {

		heroResize();

	}, 150);

});