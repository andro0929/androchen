<?php
	/***
	 * Theme Name: YiOne
	 * Author : Yuxin
	 * Url : http://fundesigner.net
	***/
$theme_uri = get_bloginfo('template_directory');
$theme_req = get_stylesheet_directory();
$theme_module = get_bloginfo('template_directory')."/module/";
require ( $theme_req . '/functions/theme-function.php'); 
require ( $theme_req . '/functions/bootstrap-nav.php'); 
require ( $theme_req . '/functions/theme-options.php' );
require ( $theme_req . '/functions/theme-update-checker.php');
require ( $theme_req . '/module/lesswp/wp-less.php' );

add_filter( 'less_vars', 'my_less_vars', 10, 2 );
function my_less_vars( $vars, $handle ) {
	$cor = f_option("color") ? f_option("color") : "#5EA8DE";
    $vars[ 'colours' ] = $cor;
	$tcor = f_option("txtcolor") ? f_option("txtcolor") : "#0088cc";
    $vars[ 'txtcolours' ] = $tcor;
    return $vars;
}
$example_update_checker = new ThemeUpdateChecker(
    'yione',
    'http://theme.fundesigner.net/yione/info.json'
);
?>