$(function() {

	// Custom JS

	var menu = mmlight(document.querySelector("#my-menu"));
	menu.create("(max-width: 991px)");
	menu.init("#my-menu");

	document.querySelector("#burger-mmenu")
		.addEventListener('click', function(evnt) {
			menu.open();
			
			evnt.preventDefault();
			evnt.stopPropagation();
		});

});
