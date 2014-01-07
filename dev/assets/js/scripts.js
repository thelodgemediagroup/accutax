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

		var title = {
			left: 0,
			height: 0,
			top: 0
		};

		if (currWidth > 1030) {
			title = {
				left: 600,
				height: 124,
				top: 64
			};
		} else if (currWidth < 1030 && currWidth > 768) {
			title = {
				left: 466,
				height: 96,
				top: 40
			};
		} else if (currWidth < 768) {
			title = {
				left: 266,
				height: 50,
				top: 20
			};
		}

		animateTitle(title.left, title.height, title.top, 300, 300);

	}

	var currWidth = $(window).width() + 15;

	if (currWidth > 480) {
		var size = {
			left: 0,
			height: 0,
			top: 0
		};

		if (currWidth > 1030) {
			size = {
				left: 600,
				height: 124,
				top: 64
			};
		} else if (currWidth < 1030 && currWidth > 768) {
			size = {
				left: 466,
				height: 96,
				top: 40
			};
		} else if (currWidth < 768) {
			size = {
				left: 266,
				height: 50,
				top: 20
			};
		}
		bkgnd.hide();
		title.css('opacity', 0);
		titleBkgnd.css('opacity', 0);

		animateTitle(size.left, size.height, size.top, 4000, 3000);

		bkgnd.fadeIn(5000);
	}

	window.onresize = debounce(function() {

		heroResize();

	}, 150);

    $('.mobile-nav select').change(function(){

        if ($(this).val() != '')
        {
            window.location.href = $(this).val();
        }
            
    });	
});