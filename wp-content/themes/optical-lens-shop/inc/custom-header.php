<?php
/**
 * @package Optical Lens Shop 
 * Setup the WordPress core custom header feature.
 *
 * @uses optical_lens_shop_header_style()
*/
function optical_lens_shop_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'optical_lens_shop_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 70,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'optical_lens_shop_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'optical_lens_shop_custom_header_setup' );

if ( ! function_exists( 'optical_lens_shop_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see optical_lens_shop_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'optical_lens_shop_header_style' );

function optical_lens_shop_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .middle-header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		    background-size: cover;
		}";
	   	wp_add_inline_style( 'optical-lens-shop-basic-style', $custom_css );
	endif;
}
endif;