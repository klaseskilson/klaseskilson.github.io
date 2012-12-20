(function(){
	$("#continue").click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("#about").offset().top
		}, 'slow');
	});

})();
