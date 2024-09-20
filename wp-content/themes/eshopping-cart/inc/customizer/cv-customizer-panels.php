<?php
/**
 * EShopping Cart manage the Customizer panels.
 *
 * @subpackage eshopping-cart
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'eshopping_cart_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'eshopping-cart' ),
) );

/**
 * EShopping Cart Options
 */
Kirki::add_panel( 'eshopping_cart_options_panel', array(
	'priority' => 20,
	'title'    => __( 'EShopping Cart Theme Options', 'eshopping-cart' ),
) );