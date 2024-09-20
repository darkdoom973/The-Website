<?php
//about theme info
add_action( 'admin_menu', 'optical_lens_shop_gettingstarted' );
function optical_lens_shop_gettingstarted() {
	add_theme_page( esc_html__('About Optical Lens Shop ', 'optical-lens-shop'), esc_html__('About Optical Lens Shop ', 'optical-lens-shop'), 'edit_theme_options', 'optical_lens_shop_guide', 'optical_lens_shop_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function optical_lens_shop_admin_theme_style() {
	wp_enqueue_style('optical-lens-shop-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('optical-lens-shop-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'optical_lens_shop_admin_theme_style');

//guidline for about theme
function optical_lens_shop_mostrar_guide() { 
	//custom function about theme customizer
	$optical_lens_shop_return = add_query_arg( array()) ;
	$optical_lens_shop_theme = wp_get_theme( 'optical-lens-shop' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to Optical Lens Shop', 'optical-lens-shop' ); ?> <span class="version"><?php esc_html_e( 'Version', 'optical-lens-shop' ); ?>: <?php echo esc_html($optical_lens_shop_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','optical-lens-shop'); ?></p>
    </div>
   	<div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy Optical Lens Shop at 20% Discount','optical-lens-shop'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','optical-lens-shop'); ?> ( <span><?php esc_html_e('vwpro20','optical-lens-shop'); ?></span> ) </h4>
			<div class="info-link">
				<a href="<?php echo esc_url(OPTICAL_LENS_SHOP_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'optical-lens-shop' ); ?></a>
			</div>
		</div>
	</div>

    <div class="tab-sec">
    	<div class="tab">
			<button class="tablinks" onclick="optical_lens_shop_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'optical-lens-shop' ); ?></button>
			<button class="tablinks" onclick="optical_lens_shop_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'optical-lens-shop' ); ?></button>
			<button class="tablinks" onclick="optical_lens_shop_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'optical-lens-shop' ); ?></button>
			<button class="tablinks" onclick="optical_lens_shop_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'optical-lens-shop' ); ?></button>
			<button class="tablinks" onclick="optical_lens_shop_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'optical-lens-shop' ); ?></button>
		  	<button class="tablinks" onclick="optical_lens_shop_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'optical-lens-shop' ); ?></button>
		  	<button class="tablinks" onclick="optical_lens_shop_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 250+ Themes Bundle at $99', 'optical-lens-shop' ); ?></button>
		</div>

		<?php 
			$optical_lens_shop_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$optical_lens_shop_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Optical_Lens_Shop_Plugin_Activation_Settings::get_instance();
				$optical_lens_shop_actions = $plugin_ins->recommended_actions;
				?>
				<div class="optical-lens-shop-recommended-plugins">
				    <div class="optical-lens-shop-action-list">
				        <?php if ($optical_lens_shop_actions): foreach ($optical_lens_shop_actions as $key => $optical_lens_shop_actionValue): ?>
				                <div class="optical-lens-shop-action" id="<?php echo esc_attr($optical_lens_shop_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($optical_lens_shop_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($optical_lens_shop_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($optical_lens_shop_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','optical-lens-shop'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($optical_lens_shop_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'optical-lens-shop' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('The Optical Lens Shop WordPress Theme is a highly versatile and customizable website template designed for businesses that specialize in eye care, glasses, sunglasses, eyeglasses, optical prescription, lens cleaner, lenses, and related medical services. This theme is a perfect choice for optometrists, ophthalmologists, eye clinics, opticians, hospitals, and other medical or hospital-related websites. The theme has a modern and clean design that is easy on the eyes and provides a professional look to your website. This Optical theme for WordPress can be used by clinics for eye care, eye clinic, eye doctor, eyeglasses, glasses, glasses shop, lenses, optic, optical, optician, optician shop, optics store and much more. The theme features a prominent slider on the homepage that can be used to highlight your services, products, or promotions. You can also add call-to-action buttons to the slider, which can be linked to any page on your website, making it easy for users to navigate to specific sections. The Opical WordPress theme uses popular plugins such as Ibtana Website builder, Woocommerce, Contact Form 7, Classic Widget, YITH Woocommere Wishlist, GT Translate, Post views counter, Variation Swatcher, Quantity Plus, Currency Switcher, to create dedicated sections and features on your website. Furthermore, the Optical Lens Shop Theme has a range of customization options that allow you to modify the colors, fonts, and layouts of your website. The theme also comes with several pre-built templates that can be easily customized to meet your specific needs. You can add your logo, change the background color or image, and add custom widgets to the footer or sidebar. The theme is fully responsive, ensuring that your website will look great on all devices, including desktops, laptops, tablets, and mobile phones. It is also compatible with all major web browsers, including Chrome, Firefox, Safari, and Internet Explorer.','optical-lens-shop'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'optical-lens-shop' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'optical-lens-shop' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'optical-lens-shop' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'optical-lens-shop'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'optical-lens-shop'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'optical-lens-shop'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'optical-lens-shop'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'optical-lens-shop'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'optical-lens-shop'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'optical-lens-shop'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'optical-lens-shop'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'optical-lens-shop'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'optical-lens-shop' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','optical-lens-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=optical_lens_shop_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','optical-lens-shop'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=optical_lens_shop_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','optical-lens-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=optical_lens_shop_products_section') ); ?>" target="_blank"><?php esc_html_e('Products Section','optical-lens-shop'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','optical-lens-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','optical-lens-shop'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=optical_lens_shop_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','optical-lens-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=optical_lens_shop_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','optical-lens-shop'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','optical-lens-shop'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','optical-lens-shop'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','optical-lens-shop'); ?></span><?php esc_html_e(' Go to ','optical-lens-shop'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','optical-lens-shop'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','optical-lens-shop'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','optical-lens-shop'); ?></span><?php esc_html_e(' Go to ','optical-lens-shop'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','optical-lens-shop'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','optical-lens-shop'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','optical-lens-shop'); ?> <a class="doc-links" href="<?php echo esc_url( OPTICAL_LENS_SHOP_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','optical-lens-shop'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$plugin_ins = Optical_Lens_Shop_Plugin_Activation_Settings::get_instance();
				$optical_lens_shop_actions = $plugin_ins->recommended_actions;
				?>
				<div class="optical-lens-shop-recommended-plugins">
				    <div class="optical-lens-shop-action-list">
				        <?php if ($optical_lens_shop_actions): foreach ($optical_lens_shop_actions as $key => $optical_lens_shop_actionValue): ?>
				                <div class="optical-lens-shop-action" id="<?php echo esc_attr($optical_lens_shop_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($optical_lens_shop_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($optical_lens_shop_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($optical_lens_shop_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','optical-lens-shop'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($optical_lens_shop_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'optical-lens-shop' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','optical-lens-shop'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon.','optical-lens-shop'); ?></b></p>
	              	<div class="optical-lens-shop-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','optical-lens-shop'); ?></a>
				    </div>
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern1.png" alt="" />
				    <p><b><?php esc_html_e('Click on Patterns Tab >> Click on Theme Name >> Click on Sections >> Publish.','optical-lens-shop'); ?></b></p>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />
	            </div>

	            <div class="block-pattern-link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'optical-lens-shop' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','optical-lens-shop'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=optical_lens_shop_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','optical-lens-shop'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','optical-lens-shop'); ?></a>
							</div>

							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=optical_lens_shop_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','optical-lens-shop'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=optical_lens_shop_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','optical-lens-shop'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','optical-lens-shop'); ?></a>
							</div>
						</div>
					</div>
				</div>
	     	</div>
		</div>
		
		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Optical_Lens_Shop_Plugin_Activation_Settings::get_instance();
			$optical_lens_shop_actions = $plugin_ins->recommended_actions;
			?>
				<div class="optical-lens-shop-recommended-plugins">
				    <div class="optical-lens-shop-action-list">
				        <?php if ($optical_lens_shop_actions): foreach ($optical_lens_shop_actions as $key => $optical_lens_shop_actionValue): ?>
				                <div class="optical-lens-shop-action" id="<?php echo esc_attr($optical_lens_shop_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($optical_lens_shop_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($optical_lens_shop_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($optical_lens_shop_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'optical-lens-shop' ); ?></h3>
				<hr class="h3hr">
				<div class="optical-lens-shop-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','optical-lens-shop'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'optical-lens-shop' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','optical-lens-shop'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=optical_lens_shop_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','optical-lens-shop'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','optical-lens-shop'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=optical_lens_shop_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','optical-lens-shop'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=optical_lens_shop_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','optical-lens-shop'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','optical-lens-shop'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = Optical_Lens_Shop_Plugin_Activation_Woo_Products::get_instance();
				$optical_lens_shop_actions = $plugin_ins->recommended_actions;
				?>
				<div class="optical-lens-shop-recommended-plugins">
				    <div class="optical-lens-shop-action-list">
				        <?php if ($optical_lens_shop_actions): foreach ($optical_lens_shop_actions as $key => $optical_lens_shop_actionValue): ?>
				                <div class="optical-lens-shop-action" id="<?php echo esc_attr($optical_lens_shop_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($optical_lens_shop_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($optical_lens_shop_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($optical_lens_shop_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'optical-lens-shop' ); ?></h3>
				<hr class="h3hr">
				<div class="optical-lens-shop-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','optical-lens-shop'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','optical-lens-shop'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','optical-lens-shop'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','optical-lens-shop'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','optical-lens-shop'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','optical-lens-shop'); ?></b></p>
	              	<div class="optical-lens-shop-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','optical-lens-shop'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','optical-lens-shop'); ?></p>
			    </div>
			<?php } ?>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'optical-lens-shop' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('The Premium Lens WordPress Theme is a high-quality and professional-looking theme designed especially for businesses in the eye care and optical industries. As the name suggests, it is a premium theme, which means that it comes with a set of premium and advanced features to help you create a professional website. The theme features a modern and clean design that is optimized for search engines, ensuring that your website will rank well in search results. It is also fully responsive, which means that it can be viewed on all devices, including desktops, laptops, tablets, and mobile phones. The Premium Lens WordPress Theme offers a range of customization options, allowing you to modify the colors, fonts, layouts, and other design elements of your website with ease. You can customize your homepage layout with pre-built templates or create your own using the built-in drag-and-drop page builder. The theme also includes a range of pre-built pages and templates for common eye care business needs, such as services, products, team members, testimonials, and more. This makes it easy to create a professional and effective website without having to start from scratch.','optical-lens-shop'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'optical-lens-shop'); ?></a>
					<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'optical-lens-shop'); ?></a>
					<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'optical-lens-shop'); ?></a>
					<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 250+ Themes Bundle at $99', 'optical-lens-shop'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'optical-lens-shop' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'optical-lens-shop'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'optical-lens-shop'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'optical-lens-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('Slider', 'optical-lens-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('Dynamic Slider', 'optical-lens-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'optical-lens-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'optical-lens-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'optical-lens-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'optical-lens-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'optical-lens-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('12', 'optical-lens-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'optical-lens-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'optical-lens-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'optical-lens-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'optical-lens-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'optical-lens-shop'); ?></td>
								<td class="table-img"><?php esc_html_e('9', 'optical-lens-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'optical-lens-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'optical-lens-shop'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'optical-lens-shop'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1(Full width)', 'optical-lens-shop'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Global Color Option', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Reordering', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Demo Importer', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Full Documentation', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Latest WordPress Compatibility', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support 3rd Party Plugins', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Secure and Optimized Code', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Exclusive Functionalities', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Enable / Disable', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Google Font Choices', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Gallery', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Simple & Mega Menu Option', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Shortcodes', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Premium Membership', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Budget Friendly Value', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Priority Error Fixing', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Feature Addition', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('All Access Theme Pass', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Seamless Customer Support', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('WordPress 6.4 or later', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('PHP 8.2 or 8.3', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('MySQL 5.6 (or greater) | MariaDB 10.0 (or greater)', 'optical-lens-shop'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( OPTICAL_LENS_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'optical-lens-shop'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'optical-lens-shop'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'optical-lens-shop'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'optical-lens-shop'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'optical-lens-shop'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'optical-lens-shop'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'optical-lens-shop'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'optical-lens-shop'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'optical-lens-shop'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'optical-lens-shop'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'optical-lens-shop'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'optical-lens-shop'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','optical-lens-shop'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'optical-lens-shop'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'optical-lens-shop'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'optical-lens-shop'); ?></a>
				</div>
		  	</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   <div class="col-left-pro">
		   	<h3><?php esc_html_e( 'WP Theme Bundle', 'optical-lens-shop' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 250+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','optical-lens-shop'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'optical-lens-shop' ); ?></h4>
		    		<p><?php esc_html_e('250+ Premium Themes & 5+ Plugins.', 'optical-lens-shop'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'optical-lens-shop'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'optical-lens-shop'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'optical-lens-shop'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'optical-lens-shop'); ?></p>
		    	</div>
		    	<p>Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $99!</p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'optical-lens-shop'); ?></a>
					<a href="<?php echo esc_url( OPTICAL_LENS_SHOP_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'optical-lens-shop'); ?></a>
				</div>
		   </div>
		   <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   </div>		    
		</div>

	</div>
</div>

<?php } ?>