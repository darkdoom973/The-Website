<?php
/**
 * Add theme page
 */
function swiftstore_menu() {
	add_theme_page( esc_html__( 'SwiftStore Theme', 'swiftstore' ), esc_html__( 'SwiftStore Theme', 'swiftstore' ), 'edit_theme_options', 'swiftstore-info', 'swiftstore_theme_page_display' );
}
add_action( 'admin_menu', 'swiftstore_menu' );

/**
 * Display About page
 */
function swiftstore_theme_page_display() {
    require get_parent_theme_file_path( '/inc/about-admin/templates/theme-info.php' );
}

function swiftstore_admin_plugin_notice() {
    require get_parent_theme_file_path( '/inc/about-admin/templates/admin-plugin-notice.php' );
}
add_action( 'admin_notices', 'swiftstore_admin_plugin_notice' );

/**
 * Enqueue admin scripts and styles.
 */
function swiftstore_admin_scripts() {
	
    wp_enqueue_style(
        'swiftstore-admin-message-style',
        get_template_directory_uri() . '/assets/css/admin-style.css',
        array(),
        swiftstore_file_version( '/assets/css/admin-style.css' )
    );
    
}
add_action( 'admin_enqueue_scripts', 'swiftstore_admin_scripts' );
