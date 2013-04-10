jQuery(document).ready(function(jQuery){
	jQuery('#showtab span').width((960-40*4)/4);
jQuery('#showtab span').click(function(){
	jQuery(this).addClass("selected").siblings().removeClass();
	jQuery("#showcont > ul").fadeOut('1500').eq(jQuery('#showtab span').index(this)).fadeIn('1500');
});});