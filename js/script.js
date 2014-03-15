// Flexslider

$(window).load(function() {
	$('#hero').flexslider({
		controlNav: false,
		directionNav: false   
	});
});

jQuery(document).ready(function ($) {
	
	if($(window).width() > 491){
	
		// Fixed header
		
		var top = $('header').offset().top + 10;
		$(window).scroll(function (event) {
			// what the y position of the scroll is
			var y = $(this).scrollTop();
		
			// whether that's below the form
			if (y >= top) {
			  // if so, ad the fixed class
			  $('header').addClass('fixed');
			} else {
			  // otherwise remove it
			  $('header').removeClass('fixed');
			}
		});
		  
		// Main Menu
		  
		$('#menu-main li').hover(function() {
			$(this).find('ul').fadeIn();
		}, function() {
			$(this).find('ul').fadeOut();
		});
	  
	} else {
		
		$('#menu-main li').click(function() {
			$(this).find('ul').toggle();
		});
	}
});