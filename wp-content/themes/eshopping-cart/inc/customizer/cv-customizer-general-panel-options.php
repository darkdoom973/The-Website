<?php
/**
 * EShopping Cart manage the Customizer options of general panel.
 *
 * @subpackage eshopping-cart
 * @since 1.0 
 */
Kirki::add_field(
	'eshopping_cart_config', array(
		'type'        => 'checkbox',
		'settings'    => 'eshopping_cart_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'eshopping-cart' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);

// Color Picker field for Primary Color
Kirki::add_field( 
	'eshopping_cart_config', array(
		'type'        => 'color',
		'settings'    => 'eshopping_cart_theme_color',
		'label'       => esc_html__( 'Primary Color', 'eshopping-cart' ),
		'section'     => 'colors',
		'default'     => '#f10e00',
	)
);