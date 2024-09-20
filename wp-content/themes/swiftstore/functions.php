<?php
/**
 * SwiftStore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage SwiftStore
 * @since SwiftStore 1.0
 */


if ( ! function_exists( 'swiftstore_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since SwiftStore 1.0
	 *
	 * @return void
	 */
	function swiftstore_support() {
		add_filter( 'woocommerce_get_image_size_thumbnail', function( $size ) {
			return array(
				'width'  => 800,
				'height' => 800,
				'crop'   => 1,
			);
		} );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'swiftstore_support' );

if ( ! function_exists( 'swiftstore_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since SwiftStore 1.0
	 *
	 * @return void
	 */
	function swiftstore_styles() {
		// Enqueue Bootstrap Icons.
		wp_enqueue_style( 
			'bootstrap-icons', 
			get_template_directory_uri() . '/assets/icons/bootstrap-icons/bootstrap-icons.css', 
			array(), 
			'1.9.1', 
			'all' 
		);
		
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'swiftstore-style',
			get_template_directory_uri() . '/style.css',
			array(),
			swiftstore_file_version( '/style.css' )
		);
	}

endif;

add_action( 'wp_enqueue_scripts', 'swiftstore_styles' );

if ( ! function_exists( 'swiftstore_admin_editor_styles' ) ) :

	/**
	 * Enqueue admin editor styles.
	 *
	 * @since 1.0
	 *
	 * @return void
	 */
	function swiftstore_admin_editor_styles() {
		// Enqueue Bootstrap Icons.
		wp_enqueue_style( 
			'bootstrap-icons', 
			get_template_directory_uri() . '/assets/icons/bootstrap-icons/bootstrap-icons.css', 
			array(), 
			'1.9.1', 
			'all' 
		);
		
		// Enqueue theme stylesheet.
		wp_enqueue_style(
			'swiftstore-admin-style',
			get_template_directory_uri() . '/assets/css/editor.css',
			array(),
			swiftstore_file_version( '/assets/css/editor.css' )
		);

	}

endif;

add_action( 'admin_enqueue_scripts', 'swiftstore_admin_editor_styles' );

/**
 * Get file version with respect to file modified date.
 */
function swiftstore_file_version( $file_path ) {
	// create my own version codes
	return gmdate('ymd-Gis', filemtime( get_theme_file_path( $file_path ) ) );
}

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Load Theme About Page
 */
require get_theme_file_path( '/inc/about-admin/theme-info.php' );

/**
 * Load TGMPA
 */
require get_parent_theme_file_path( '/inc/tgmpa/tgmpa.php' );