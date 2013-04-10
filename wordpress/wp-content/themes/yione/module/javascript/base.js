jQuery(document).ready(function($) {
	$('.tips').tooltip();
	jQuery("#gotop").click(function(e) {
		jQuery("html,body").animate({
			scrollTop : 0
		}, 1000);
		event.stopPropagation();
		event.preventDefault();
	});
	jQuery("#sc_comments").click(function(e) {
		jQuery("html,body").animate({
			scrollTop: $("#comments").offset().top
		}, 1000);
		event.stopPropagation();
		event.preventDefault();
	});
	jQuery(".thumb").hover(function(){
		jQuery(this).find(".shadow").fadeIn("fast");
	}, function() {
		jQuery(this).find(".shadow").fadeOut("fast");
	});
	jQuery(".sc_facebook , .sc_google").hover(function() {
		jQuery(this).children().fadeIn("fast");
	}, function() {
		jQuery(this).children().fadeOut("fast");
	}, 500);
	
	jQuery(".scroll").waypoint({
		handler: function(event, direction) {
			if (direction == 'down') {
				jQuery("#gotop").stop().fadeIn("fast");
			}
			else {
				jQuery("#gotop").stop().fadeOut("fast");
			}
		}
	});
	jQuery("#social_big > a").width( (jQuery("#social_big").width()-10)/2 );
	jQuery('.right_sidebar ul li').addClass('even');
	jQuery('.right_sidebar ul li:even').addClass('even');
    jQuery('.right_sidebar ul li:odd').addClass('odd');
});