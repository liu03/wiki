$(function() {

	$(".gotop").hide();

	$(window).scroll(function() {
		if ($(this).scrollTop() > 100) {
			$('.gotop').fadeIn();
		} else {
			$('.gotop').fadeOut();
		}
	});

	$('.gotop').click(function() {
		$('html,body').stop().animate({
			scrollTop : 0
		});
	});
});
