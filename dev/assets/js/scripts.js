$(document).ready(function() {

	var hero = $('.hero');
	var title = $('.hero > h1');
	var bkgnd = $('.hero-bkgnd');
	var titleBkgnd = $('.title-bkgnd');

	bkgnd.hide();
	title.css('opacity', 0);
	titleBkgnd.css('opacity', 0);

	title.animate({
		opacity: 1,
		left: 600
	}, 4000);

	titleBkgnd.animate({
		height: 124,
		opacity: 0.8,
		top: 64
	}, 3000);
	bkgnd.fadeIn(5000);
});