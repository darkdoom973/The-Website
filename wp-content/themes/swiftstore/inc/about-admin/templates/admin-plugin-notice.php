<?php
$screen = get_current_screen();
if ( ! empty( $screen->base ) && 'appearance_page_swiftstore-info' === $screen->base ) {
	return false;
}

?>
<div class="notice notice-info is-dismissible swiftstore-admin-notice">
	<div class="swiftstore-admin-notice-wrapper">
		<h2><?php esc_html_e( 'Howdy, Welcome to', 'swiftstore' ); ?> <?php esc_html_e( 'SwiftStore!', 'swiftstore' ); ?></h2>
		<p><?php esc_html_e( 'Do you know you can get more features in SwiftStore? Upgrade to Jetblack FSE Pro!!!', 'swiftstore' ); ?></p>
		<a href="<?php echo esc_url( admin_url( 'themes.php?page=swiftstore-info' ) ); ?>" class="swiftstore-admin-notice-primary-button"><?php esc_html_e( 'SwiftStore Pro Details', 'swiftstore' ); ?></a>
		<a class="button" href="<?php echo esc_url( 'https://fireflythemes.com/themes/swiftstore-pro'); ?>" target="_blank"><?php esc_html_e( 'Learn more about SwiftStore Pro Theme', 'swiftstore' ); ?></a>
	</div>
</div>
<?php
