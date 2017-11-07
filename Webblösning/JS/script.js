$(window).load(function() {
	$('.flexslider').flexslider();
});

$(document).ready( function() {
	var icon = $("#hamburgermenu");
	var menu = $("header nav");

	icon.click( function(event) {
		event.preventDefault();
		menu.toggleClass("open");
	} );
} );