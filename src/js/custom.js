var $ = jQuery;

//Preloader
$(window).load(function(){
	$('#loader-wrapper').delay(1500).queue(function(next){
		$(this).stop().fadeOut(2000);
	});
});

// $('li.internal-link a').click(function(){
// 	$('#loader-wrapper').fadeIn(2000);

// 	var href= $(this).attr('href');
// 	setTimeout(function(){
// 		window.location = href
// 	}, 2500);
// 	return false;
// });