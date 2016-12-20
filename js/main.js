$(window).load(function(){
	$('.slider-content').fractionSlider({
		'controls': 			true,
		'pager': 				true,
		'responsive': 			true,
		'dimensions': 			"2100,880",
	});

});

$(window).load(function(){
	$('.slider-content1').fractionSlider({
		'pager': 				true,
		'responsive': 			true,
		'dimensions': "1100,200",
	});

});


$(document).ready(function(){
	$(".contentLoad").slice(0, 6).show();
	$("#loadMore").on('click', function (e) {
			e.preventDefault();
			$(".contentLoad:hidden").slice(0, 9).slideDown();
			if ($(".contentLoad:hidden").length == 0) {
					$("#load").fadeOut('slow');
			}
			$('html,body').animate({
					scrollTop: $(this).offset().top
			}, 1500);
	});

});

$(document).ready(function(){
	$('.clickr').click(function(){
  $('#nav ul').slideToggle(500);
});
});
