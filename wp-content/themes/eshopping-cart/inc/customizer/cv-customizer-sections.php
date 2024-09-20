<?php
/**
 * EShopping Cart manage the Customizer sections.
 *
 * @subpackage eshopping-cart
 * @since 1.0 
 */

/**
 * Top Header Options
 */
Kirki::add_section( 'eshopping_cart_top_header_section_content', array(
	'title'    => __( 'Top Header Options', 'eshopping-cart' ),
	'panel'    => 'eshopping_cart_options_panel',
	'description' => __( 'Personalize the settings top header.', 'eshopping-cart' ),
	'priority' => 5,
) );

/**
 * General Options
 */
Kirki::add_section( 'eshopping_cart_general_section_content', array(
	'title'    => __( 'General Options', 'eshopping-cart' ),
	'panel'    => 'eshopping_cart_options_panel',
	'description' => __( 'Personalize the settings of your theme.', 'eshopping-cart' ),
	'priority' => 8,
) );

/**
 * Layout Options
 */
Kirki::add_section( 'eshopping_cart_layout_section_content', array(
	'title'    => __( 'Layout Options', 'eshopping-cart' ),
	'panel'    => 'eshopping_cart_options_panel',
	'description' => __( 'Personalize the layout settings of your theme.', 'eshopping-cart' ),
	'priority' => 10,
) );

/**
 * Blog Post Options
 */
Kirki::add_section( 'eshopping_cart_blog_post_section_content', array(
	'title'    => __( 'Blog Post Options', 'eshopping-cart' ),
	'panel'    => 'eshopping_cart_options_panel',
	'description' => __( 'Setting will also apply on archieve and search page.', 'eshopping-cart' ),
	'priority' => 12,
) );

/**
 * Single Post Options
 */
Kirki::add_section( 'eshopping_cart_single_post_section_content', array(
	'title'    => __( 'Single Post Options', 'eshopping-cart' ),
	'panel'    => 'eshopping_cart_options_panel',
	'description' => __( 'Setting will apply on the content of single posts.', 'eshopping-cart' ),
	'priority' => 14,
) );

/**
 * Footer Options
 */
Kirki::add_section( 'eshopping_cart_footer_section_content', array(
	'title'    => __( 'Footer Options', 'eshopping-cart' ),
	'panel'    => 'eshopping_cart_options_panel',
	'description' => __( 'Personalize the footer settings of your theme.', 'eshopping-cart' ),
	'priority' => 16,
) );

/**
 * Advance Options
 */
Kirki::add_section( 'eshopping_cart_advance_option_content', array(
	'title'    => __( 'Advance Options', 'eshopping-cart' ),
	'panel'    => 'eshopping_cart_options_panel',
	'description' => __( 'Personalize the Advance settings of your theme.', 'eshopping-cart' ),
	'priority' => 18,
) );