<?php 
/**
 * all customizer setting includeed
 *
 * @param  
 * @return mixed|string
 */
function eshopping_cart_front_customize_register( $wp_customize ){

//Registered panel and section
require ESHOPPING_CART_THEME_DIR . 'customizer/register-panels-and-sections.php';	
require ESHOPPING_CART_THEME_DIR . 'customizer/section/layout/header/main-header.php';
}

add_action('customize_register','eshopping_cart_front_customize_register');
