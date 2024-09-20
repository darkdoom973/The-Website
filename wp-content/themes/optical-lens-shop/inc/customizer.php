<?php
/**
 * Optical Lens Shop  Theme Customizer
 *
 * @package Optical Lens Shop
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function optical_lens_shop_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'optical_lens_shop_custom_controls' );

function optical_lens_shop_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'optical_lens_shop_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'optical_lens_shop_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'optical_lens_shop_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Homepage Settings', 'optical-lens-shop' ),
		'priority' => 10,
	));

 	// Header Background color
	$wp_customize->add_setting('optical_lens_shop_header_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'optical_lens_shop_header_background_color', array(
		'label'    => __('Header Background Color', 'optical-lens-shop'),
		'section'  => 'header_image',
	)));

	$wp_customize->add_setting('optical_lens_shop_header_img_position',array(
	  'default' => 'center top',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_header_img_position',array(
		'type' => 'select',
		'label' => __('Header Image Position','optical-lens-shop'),
		'section' => 'header_image',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'optical-lens-shop' ),
			'center top'   => esc_html__( 'Top', 'optical-lens-shop' ),
			'right top'   => esc_html__( 'Top Right', 'optical-lens-shop' ),
			'left center'   => esc_html__( 'Left', 'optical-lens-shop' ),
			'center center'   => esc_html__( 'Center', 'optical-lens-shop' ),
			'right center'   => esc_html__( 'Right', 'optical-lens-shop' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'optical-lens-shop' ),
			'center bottom'   => esc_html__( 'Bottom', 'optical-lens-shop' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'optical-lens-shop' ),
		),
	));

	//Menus Settings
	$wp_customize->add_section( 'optical_lens_shop_menu_section' , array(
    	'title' => __( 'Menus Settings', 'optical-lens-shop' ),
		'panel' => 'optical_lens_shop_panel_id'
	) );

	$wp_customize->add_setting('optical_lens_shop_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_navigation_menu_font_weight',array(
        'default' => 500,
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','optical-lens-shop'),
        'section' => 'optical_lens_shop_menu_section',
        'choices' => array(
        	'100' => __('100','optical-lens-shop'),
            '200' => __('200','optical-lens-shop'),
            '300' => __('300','optical-lens-shop'),
            '400' => __('400','optical-lens-shop'),
            '500' => __('500','optical-lens-shop'),
            '600' => __('600','optical-lens-shop'),
            '700' => __('700','optical-lens-shop'),
            '800' => __('800','optical-lens-shop'),
            '900' => __('900','optical-lens-shop'),
        ),
	) );

	// text trasform
	$wp_customize->add_setting('optical_lens_shop_menu_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_menu_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Menu Text Transform','optical-lens-shop'),
		'choices' => array(
            'Uppercase' => __('Uppercase','optical-lens-shop'),
            'Capitalize' => __('Capitalize','optical-lens-shop'),
            'Lowercase' => __('Lowercase','optical-lens-shop'),
        ),
		'section'=> 'optical_lens_shop_menu_section',
	));

	$wp_customize->add_setting('optical_lens_shop_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_menus_item_style',array(
        'type' => 'select',
        'section' => 'optical_lens_shop_menu_section',
		'label' => __('Menu Item Hover Style','optical-lens-shop'),
		'choices' => array(
            'None' => __('None','optical-lens-shop'),
            'Zoom In' => __('Zoom In','optical-lens-shop'),
        ),
	) );

	$wp_customize->add_setting('optical_lens_shop_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'optical_lens_shop_header_menus_color', array(
		'label'    => __('Menus Color', 'optical-lens-shop'),
		'section'  => 'optical_lens_shop_menu_section',
	)));

	$wp_customize->add_setting('optical_lens_shop_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'optical_lens_shop_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'optical-lens-shop'),
		'section'  => 'optical_lens_shop_menu_section',
	)));

	$wp_customize->add_setting('optical_lens_shop_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'optical_lens_shop_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'optical-lens-shop'),
		'section'  => 'optical_lens_shop_menu_section',
	)));

	$wp_customize->add_setting('optical_lens_shop_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'optical_lens_shop_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'optical-lens-shop'),
		'section'  => 'optical_lens_shop_menu_section',
	)));


	//Topbar
	$wp_customize->add_section( 'optical_lens_shop_header_section' , array(
  		'title' => __( 'Topbar Section', 'optical-lens-shop' ),
		'panel' => 'optical_lens_shop_panel_id'
	) );

	$wp_customize->add_setting( 'optical_lens_shop_topbar_hide_show',array(
    	'default' => 0,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_topbar_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Topbar','optical-lens-shop' ),
      	'section' => 'optical_lens_shop_header_section'
    )));

    //Sticky Header
	$wp_customize->add_setting( 'optical_lens_shop_sticky_header',array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new optical_lens_shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_sticky_header',array(
        'label' => esc_html__( 'Sticky Header','optical-lens-shop' ),
        'section' => 'optical_lens_shop_header_section'
    )));

    $wp_customize->add_setting('optical_lens_shop_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_sticky_header_padding',array(
		'label'	=> __('Sticky Header Padding','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_header_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_topbar_text1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_topbar_text1',array(
		'label'	=> esc_html__('Add Topbar Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'FREE WORLDWIDE SHIPPING ON ORDER FROM $200', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_header_section',
		'type'=> 'text'
	));

    $wp_customize->add_setting('optical_lens_shop_phone_number',array(
		'default'=> '',
		'sanitize_callback'	=> 'optical_lens_shop_sanitize_phone_number'
	));
	$wp_customize->add_control('optical_lens_shop_phone_number',array(
		'label'	=> __('Add Phone number','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '+00 123 456 7890', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_header_section',
		'type'=> 'text'
	));

	// Middle header
    $wp_customize->add_setting( 'optical_lens_shop_cart_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_cart_hide_show',
       array(
		'label' => esc_html__( 'Show / Hide Cart','optical-lens-shop' ),
		'section' => 'optical_lens_shop_header_section'
    )));

    $wp_customize->add_setting( 'optical_lens_shop_wishlist_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_wishlist_hide_show',
       array(
		'label' => esc_html__( 'Show / Hide Wishlist','optical-lens-shop' ),
		'section' => 'optical_lens_shop_header_section'
    )));

    $wp_customize->add_setting( 'optical_lens_shop_tracking_order_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_tracking_order_hide_show',
       array(
		'label' => esc_html__( 'Show / Hide Tracking Order','optical-lens-shop' ),
		'section' => 'optical_lens_shop_header_section'
    )));

	$wp_customize->add_setting( 'optical_lens_shop_my_account_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_my_account_hide_show',
       array(
		'label' => esc_html__( 'Show / Hide My Account','optical-lens-shop' ),
		'section' => 'optical_lens_shop_header_section'
    )));

	//Slider
	$wp_customize->add_section( 'optical_lens_shop_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'optical-lens-shop' ),
    	'description' => __('Free theme has 3 slides options, For unlimited slides and more options </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/lens-wordpress-theme">GET PRO</a>','optical-lens-shop'),
		'panel' => 'optical_lens_shop_panel_id'
	) );

	$wp_customize->add_setting( 'optical_lens_shop_slider_hide_show',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_slider_hide_show',array(
      'label' => esc_html__( 'Show / Hide Slider','optical-lens-shop' ),
      'section' => 'optical_lens_shop_slidersettings'
    )));

     //Selective Refresh
    $wp_customize->selective_refresh->add_partial('optical_lens_shop_slider_hide_show',array(
		'selector'        => '.slider-btn a',
		'render_callback' => 'optical_lens_shop_customize_partial_optical_lens_shop_slider_hide_show',
	));

  	$wp_customize->add_setting('optical_lens_shop_slider_type',array(
    'default' => 'Default slider',
    'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	) );
	$wp_customize->add_control('optical_lens_shop_slider_type', array(
    'type' => 'select',
    'label' => __('Slider Type','optical-lens-shop'),
    'section' => 'optical_lens_shop_slidersettings',
    'choices' => array(
        'Default slider' => __('Default slider','optical-lens-shop'),
        'Advance slider' => __('Advance slider','optical-lens-shop'),
        ),
	));

	for ( $count = 1; $count <= 3; $count++ ) {
		$wp_customize->add_setting( 'optical_lens_shop_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'optical_lens_shop_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'optical_lens_shop_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'optical-lens-shop' ),
			'description' => __('Slider image size (1400 x 550)','optical-lens-shop'),
			'section'  => 'optical_lens_shop_slidersettings',
			'type'     => 'dropdown-pages',
			'active_callback' => 'optical_lens_shop_default_slider'
		) );
	}

	$wp_customize->add_setting('optical_lens_shop_advance_slider_shortcode',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_advance_slider_shortcode',array(
		'label'	=> __('Add Slider Shortcode','optical-lens-shop'),
		'section'=> 'optical_lens_shop_slidersettings',
		'type'=> 'text',
		'active_callback' => 'optical_lens_shop_advance_slider'
	));

	$wp_customize->add_setting('optical_lens_shop_slider_small_heading',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_slider_small_heading',array(
		'label'	=> __('Add Small Heading Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'Stylish Eye Wear', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_slidersettings',
		'type'=> 'text',
		'active_callback' => 'optical_lens_shop_default_slider'
	));

	$wp_customize->add_setting('optical_lens_shop_slider_button_label',array(
		'default' => 'Shop Now',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_slider_button_label',array(
		'label' => __('Slider Button Text','optical-lens-shop'),
		'section' => 'optical_lens_shop_slidersettings',
		'setting' => 'optical_lens_shop_slider_button_label',
		'type' => 'text',
		'active_callback' => 'optical_lens_shop_default_slider'
	));
	
	$wp_customize->add_setting('optical_lens_shop_slider_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('optical_lens_shop_slider_button_url',array(
		'label'	=> __('Add Slider Button URL','optical-lens-shop'),
		'section'	=> 'optical_lens_shop_slidersettings',
		'setting'	=> 'optical_lens_shop_top_button_url',
		'type'	=> 'url',
		'active_callback' => 'optical_lens_shop_default_slider'
	));

	//content layout
	$wp_customize->add_setting('optical_lens_shop_slider_content_option',array(
        'default' => 'Left',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Image_Radio_Control($wp_customize, 'optical_lens_shop_slider_content_option', array(
        'type' => 'select',
        'label' => esc_html__('Slider Content Layouts','optical-lens-shop'),
        'section' => 'optical_lens_shop_slidersettings',
        'choices' => array(
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/slider-content1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/slider-content2.png',
            'Right' => esc_url(get_template_directory_uri()).'/assets/images/slider-content3.png',
    ),'active_callback' => 'optical_lens_shop_default_slider'
    )));

    //Slider content padding
    $wp_customize->add_setting('optical_lens_shop_slider_content_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_slider_content_padding_top_bottom',array(
		'label'	=> __('Slider Content Padding Top Bottom','optical-lens-shop'),
		'description'	=> __('Enter a value in %. Example:20%','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '50%', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_slidersettings',
		'type'=> 'text',
		'active_callback' => 'optical_lens_shop_default_slider'
	));

	$wp_customize->add_setting('optical_lens_shop_slider_content_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_slider_content_padding_left_right',array(
		'label'	=> __('Slider Content Padding Left Right','optical-lens-shop'),
		'description'	=> __('Enter a value in %. Example:20%','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '50%', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_slidersettings',
		'type'=> 'text',
		'active_callback' => 'optical_lens_shop_default_slider'
	));

	$wp_customize->add_setting( 'optical_lens_shop_slider_speed', array(
		'default'  => 4000,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'optical_lens_shop_slider_speed', array(
		'label' => esc_html__('Slider Transition Speed','optical-lens-shop'),
		'section' => 'optical_lens_shop_slidersettings',
		'type'  => 'text',
		'active_callback' => 'optical_lens_shop_default_slider'
	) );

	//Slider height
	$wp_customize->add_setting('optical_lens_shop_slider_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_slider_height',array(
		'label'	=> __('Slider Height','optical-lens-shop'),
		'description'	=> __('Specify the slider height (px).','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '500px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_slidersettings',
		'type'=> 'text',
		'active_callback' => 'optical_lens_shop_default_slider'
	));

	$wp_customize->add_setting( 'optical_lens_shop_slider_image_overlay',array(
    	'default' => '',
    	'transport' => 'refresh',
    	'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
   ));
   $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_slider_image_overlay',array(
      	'label' => esc_html__( 'Show / Hide Slider Image Overlay','optical-lens-shop' ),
      	'section' => 'optical_lens_shop_slidersettings',
      	'active_callback' => 'optical_lens_shop_default_slider'
   )));

	//Opacity
	$wp_customize->add_setting('optical_lens_shop_slider_opacity_color',array(
      'default'              =>'',
      'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));

	$wp_customize->add_control( 'optical_lens_shop_slider_opacity_color', array(
		'label'       => esc_html__( 'Slider Image Opacity','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_slidersettings',
		'type'        => 'select',
		'settings'    => 'optical_lens_shop_slider_opacity_color',
		'choices' => array(
	      '0' =>  esc_attr('0','optical-lens-shop'),
	      '0.1' =>  esc_attr('0.1','optical-lens-shop'),
	      '0.2' =>  esc_attr('0.2','optical-lens-shop'),
	      '0.3' =>  esc_attr('0.3','optical-lens-shop'),
	      '0.4' =>  esc_attr('0.4','optical-lens-shop'),
	      '0.5' =>  esc_attr('0.5','optical-lens-shop'),
	      '0.6' =>  esc_attr('0.6','optical-lens-shop'),
	      '0.7' =>  esc_attr('0.7','optical-lens-shop'),
	      '0.8' =>  esc_attr('0.8','optical-lens-shop'),
	      '0.9' =>  esc_attr('0.9','optical-lens-shop')
	),'active_callback' => 'optical_lens_shop_default_slider'
	));


   $wp_customize->add_setting('optical_lens_shop_slider_image_overlay_color', array(
		'default'           => 1,
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'optical_lens_shop_slider_image_overlay_color', array(
		'label'    => __('Slider Image Overlay Color', 'optical-lens-shop'),
		'section'  => 'optical_lens_shop_slidersettings',
		'active_callback' => 'optical_lens_shop_default_slider'
	)));

	$wp_customize->add_setting( 'optical_lens_shop_slider_arrow_hide_show',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
	));
	$wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_slider_arrow_hide_show',array(
		'label' => esc_html__( 'Show / Hide Slider Arrows','optical-lens-shop' ),
		'section' => 'optical_lens_shop_slidersettings',
		'active_callback' => 'optical_lens_shop_default_slider'
	)));

	$wp_customize->add_setting('optical_lens_shop_slider_prev_icon',array(
		'default'	=> 'fas fa-angle-left',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_slider_prev_icon',array(
		'label'	=> __('Add Slider Prev Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_slidersettings',
		'setting'	=> 'optical_lens_shop_slider_prev_icon',
		'type'		=> 'icon',
		'active_callback' => 'optical_lens_shop_default_slider'
	)));

	$wp_customize->add_setting('optical_lens_shop_slider_next_icon',array(
		'default'	=> 'fas fa-angle-right',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_slider_next_icon',array(
		'label'	=> __('Add Slider Next Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_slidersettings',
		'setting'	=> 'optical_lens_shop_slider_next_icon',
		'type'		=> 'icon',
		'active_callback' => 'optical_lens_shop_default_slider'
	)));

	//category Section
	$wp_customize->add_section('optical_lens_shop_category_section', array(
		'title'       => __('Category Section', 'optical-lens-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','optical-lens-shop'),
		'priority'    => null,
		'panel'       => 'optical_lens_shop_panel_id',
	));

	$wp_customize->add_setting('optical_lens_shop_category_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_category_text',array(
		'description' => __('<p>1. More options for category section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for category section.</p>','optical-lens-shop'),
		'section'=> 'optical_lens_shop_category_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('optical_lens_shop_category_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_category_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=optical_lens_shop_guide') ." '>More Info</a>",
		'section'=> 'optical_lens_shop_category_section',
		'type'=> 'hidden'
	));

	//new product Section
	$wp_customize->add_section('optical_lens_shop_new_product_section', array(
		'title'       => __('New Product Section', 'optical-lens-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','optical-lens-shop'),
		'priority'    => null,
		'panel'       => 'optical_lens_shop_panel_id',
	));

	$wp_customize->add_setting('optical_lens_shop_new_product_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_new_product_text',array(
		'description' => __('<p>1. More options for new product section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for new product section.</p>','optical-lens-shop'),
		'section'=> 'optical_lens_shop_new_product_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('optical_lens_shop_new_product_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_new_product_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=optical_lens_shop_guide') ." '>More Info</a>",
		'section'=> 'optical_lens_shop_new_product_section',
		'type'=> 'hidden'
	));

	//collection Section
	$wp_customize->add_section('optical_lens_shop_collection_section', array(
		'title'       => __('Collection Section', 'optical-lens-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','optical-lens-shop'),
		'priority'    => null,
		'panel'       => 'optical_lens_shop_panel_id',
	));

	$wp_customize->add_setting('optical_lens_shop_collection_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_collection_text',array(
		'description' => __('<p>1. More options for collection section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for collection section.</p>','optical-lens-shop'),
		'section'=> 'optical_lens_shop_collection_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('optical_lens_shop_collection_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_collection_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=optical_lens_shop_guide') ." '>More Info</a>",
		'section'=> 'optical_lens_shop_collection_section',
		'type'=> 'hidden'
	));


	// Products Section
	$wp_customize->add_section('optical_lens_shop_products_section',array(
		'title'	=> __('Products Section','optical-lens-shop'),
		'description' => __('For more options of products section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/lens-wordpress-theme">GET PRO</a>','optical-lens-shop'),
		'panel' => 'optical_lens_shop_panel_id',
	));

	$wp_customize->add_setting( 'optical_lens_shop_product_hide_show',array(
	    'default' => 0,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
	));
	$wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_product_hide_show',array(
		'label' => esc_html__( 'Show / Hide Product Section','optical-lens-shop' ),
		'section' => 'optical_lens_shop_products_section'
	)));

	$wp_customize->add_setting( 'optical_lens_shop_product_banner_page' , array(
		'default'           => '',
		'sanitize_callback' => 'optical_lens_shop_sanitize_dropdown_pages'
	));
	$wp_customize->add_control( 'optical_lens_shop_product_banner_page' , array(
		'label'    => __( 'Select Product Banner Page', 'optical-lens-shop' ),
		'section'  => 'optical_lens_shop_products_section',
		'type'     => 'dropdown-pages'
	) );

	$wp_customize->add_setting('optical_lens_shop_product_heading_product',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_product_heading_product',array(
		'label'	=> __('Add Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'Trending Product', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_products_section',
		'type'=> 'text'
	));

	$args = array(
		'type'         => 'product',
		'child_of'     => 0,
		'parent'       => '',
		'orderby'      => 'term_group',
		'order'        => 'ASC',
		'hide_empty'   => false,
		'hierarchical' => 1,
		'number'       => '',
		'taxonomy'     => 'product_cat',
		'pad_counts'   => false
	);
 	$categories = get_categories( $args );
	$cat_posts = array();
	$i = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('optical_lens_shop_product_page',array(
		'default'	=> 'select',
		'sanitize_callback' => 'optical_lens_shop_sanitize_choices',
	));
	$wp_customize->add_control('optical_lens_shop_product_page',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Category to display Products','optical-lens-shop'),
		'section' => 'optical_lens_shop_products_section',
	));

	$wp_customize->add_setting('optical_lens_shop_product_button_label',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_product_button_label',array(
		'label' => __('Product Button Text','optical-lens-shop'),
		'section' => 'optical_lens_shop_products_section',
		'setting' => 'optical_lens_shop_product_button_label',
		'type' => 'text',
	));
	
	$wp_customize->add_setting('optical_lens_shop_product_button_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('optical_lens_shop_product_button_url',array(
		'label'	=> __('Add Product Button URL','optical-lens-shop'),
		'section'	=> 'optical_lens_shop_products_section',
		'setting'	=> 'optical_lens_shop_product_button_url',
		'type'	=> 'url',
	));

	//lens feature Section
	$wp_customize->add_section('optical_lens_shop_lens_feature_section', array(
		'title'       => __('Lens Feature Section', 'optical-lens-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','optical-lens-shop'),
		'priority'    => null,
		'panel'       => 'optical_lens_shop_panel_id',
	));

	$wp_customize->add_setting('optical_lens_shop_lens_feature_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_lens_feature_text',array(
		'description' => __('<p>1. More options for lens feature section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for lens feature section.</p>','optical-lens-shop'),
		'section'=> 'optical_lens_shop_lens_feature_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('optical_lens_shop_lens_feature_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_lens_feature_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=optical_lens_shop_guide') ." '>More Info</a>",
		'section'=> 'optical_lens_shop_lens_feature_section',
		'type'=> 'hidden'
	));

	//use code Section
	$wp_customize->add_section('optical_lens_shop_use_code_section', array(
		'title'       => __('Use Code Section', 'optical-lens-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','optical-lens-shop'),
		'priority'    => null,
		'panel'       => 'optical_lens_shop_panel_id',
	));

	$wp_customize->add_setting('optical_lens_shop_use_code_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_use_code_text',array(
		'description' => __('<p>1. More options for use code section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for use code section.</p>','optical-lens-shop'),
		'section'=> 'optical_lens_shop_use_code_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('optical_lens_shop_use_code_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_use_code_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=optical_lens_shop_guide') ." '>More Info</a>",
		'section'=> 'optical_lens_shop_use_code_section',
		'type'=> 'hidden'
	));

	//Shop by Brand Section
	$wp_customize->add_section('optical_lens_shop_shop_by_brand_section', array(
		'title'       => __('Shop by Brand Section', 'optical-lens-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','optical-lens-shop'),
		'priority'    => null,
		'panel'       => 'optical_lens_shop_panel_id',
	));

	$wp_customize->add_setting('optical_lens_shop_shop_by_brand_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_shop_by_brand_text',array(
		'description' => __('<p>1. More options for shop by brand section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for shop by brand section.</p>','optical-lens-shop'),
		'section'=> 'optical_lens_shop_shop_by_brand_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('optical_lens_shop_shop_by_brand_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_shop_by_brand_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=optical_lens_shop_guide') ." '>More Info</a>",
		'section'=> 'optical_lens_shop_shop_by_brand_section',
		'type'=> 'hidden'
	));

	//latest news Section
	$wp_customize->add_section('optical_lens_shop_latest_news_section', array(
		'title'       => __('Latest News Section', 'optical-lens-shop'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','optical-lens-shop'),
		'priority'    => null,
		'panel'       => 'optical_lens_shop_panel_id',
	));

	$wp_customize->add_setting('optical_lens_shop_latest_news_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_latest_news_text',array(
		'description' => __('<p>1. More options for latest news section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for latest news section.</p>','optical-lens-shop'),
		'section'=> 'optical_lens_shop_latest_news_section',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('optical_lens_shop_latest_news_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_latest_news_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=optical_lens_shop_guide') ." '>More Info</a>",
		'section'=> 'optical_lens_shop_latest_news_section',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('optical_lens_shop_footer',array(
		'title'	=> esc_html__('Footer Settings','optical-lens-shop'),
		'description' => __('For more options of footer section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/products/lens-wordpress-theme">GET PRO</a>','optical-lens-shop'),
		'panel' => 'optical_lens_shop_panel_id',
	));

  $wp_customize->add_setting( 'optical_lens_shop_footer_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
  ));
  $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_footer_hide_show',array(
    'label' => esc_html__( 'Show / Hide Footer','optical-lens-shop' ),
    'section' => 'optical_lens_shop_footer'
  )));

	// font size
	$wp_customize->add_setting('optical_lens_shop_button_footer_font_size',array(
		'default'=> 30,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','optical-lens-shop'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'optical_lens_shop_footer',
	));

	$wp_customize->add_setting('optical_lens_shop_button_footer_heading_letter_spacing',array(
		'default'=> 1,
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','optical-lens-shop'),
  		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'optical_lens_shop_footer',
	));

	// text trasform
	$wp_customize->add_setting('optical_lens_shop_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','optical-lens-shop'),
		'choices' => array(
      'Uppercase' => __('Uppercase','optical-lens-shop'),
      'Capitalize' => __('Capitalize','optical-lens-shop'),
      'Lowercase' => __('Lowercase','optical-lens-shop'),
    ),
		'section'=> 'optical_lens_shop_footer',
	));

	$wp_customize->add_setting('optical_lens_shop_footer_heading_weight',array(
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_footer_heading_weight',array(
        'type' => 'select',
        'label' => __('Heading Font Weight','optical-lens-shop'),
        'section' => 'optical_lens_shop_footer',
        'choices' => array(
        	'100' => __('100','optical-lens-shop'),
            '200' => __('200','optical-lens-shop'),
            '300' => __('300','optical-lens-shop'),
            '400' => __('400','optical-lens-shop'),
            '500' => __('500','optical-lens-shop'),
            '600' => __('600','optical-lens-shop'),
            '700' => __('700','optical-lens-shop'),
            '800' => __('800','optical-lens-shop'),
            '900' => __('900','optical-lens-shop'),
        ),
	) );
	
  $wp_customize->add_setting('optical_lens_shop_footer_template',array(
      'default'	=> esc_html('optical_lens_shop-footer-one'),
      'sanitize_callback'	=> 'optical_lens_shop_sanitize_choices'
  ));
  $wp_customize->add_control('optical_lens_shop_footer_template',array(
          'label'	=> esc_html__('Footer style','optical-lens-shop'),
          'section'	=> 'optical_lens_shop_footer',
          'setting'	=> 'optical_lens_shop_footer_template',
          'type' => 'select',
          'choices' => array(
              'optical_lens_shop-footer-one' => esc_html__('Style 1', 'optical-lens-shop'),
              'optical_lens_shop-footer-two' => esc_html__('Style 2', 'optical-lens-shop'),
              'optical_lens_shop-footer-three' => esc_html__('Style 3', 'optical-lens-shop'),
              'optical_lens_shop-footer-four' => esc_html__('Style 4', 'optical-lens-shop'),
              'optical_lens_shop-footer-five' => esc_html__('Style 5', 'optical-lens-shop'),
              )
  ));

  $wp_customize->add_setting('optical_lens_shop_footer_background_color', array(
    'default'           => '#121212',
    'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'optical_lens_shop_footer_background_color', array(
    'label'    => __('Footer Background Color', 'optical-lens-shop'),
    'section'  => 'optical_lens_shop_footer',
  )));

  $wp_customize->add_setting('optical_lens_shop_footer_background_image',array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw',
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'optical_lens_shop_footer_background_image',array(
        'label' => __('Footer Background Image','optical-lens-shop'),
        'section' => 'optical_lens_shop_footer'
  )));

	$wp_customize->add_setting('optical_lens_shop_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','optical-lens-shop'),
		'section' => 'optical_lens_shop_footer',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'optical-lens-shop' ),
			'center top'   => esc_html__( 'Top', 'optical-lens-shop' ),
			'right top'   => esc_html__( 'Top Right', 'optical-lens-shop' ),
			'left center'   => esc_html__( 'Left', 'optical-lens-shop' ),
			'center center'   => esc_html__( 'Center', 'optical-lens-shop' ),
			'right center'   => esc_html__( 'Right', 'optical-lens-shop' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'optical-lens-shop' ),
			'center bottom'   => esc_html__( 'Bottom', 'optical-lens-shop' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'optical-lens-shop' ),
		),
	));

  // Footer
  $wp_customize->add_setting('optical_lens_shop_img_footer',array(
    'default'=> 'scroll',
    'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
  ));
  $wp_customize->add_control('optical_lens_shop_img_footer',array(
    'type' => 'select',
    'label' => __('Footer Background Attatchment','optical-lens-shop'),
    'choices' => array(
      'fixed' => __('fixed','optical-lens-shop'),
      'scroll' => __('scroll','optical-lens-shop'),
    ),
    'section'=> 'optical_lens_shop_footer',
  ));

  // footer padding
  $wp_customize->add_setting('optical_lens_shop_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('optical_lens_shop_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','optical-lens-shop'),
    'description' => __('Enter a value in pixels. Example:20px','optical-lens-shop'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'optical-lens-shop' ),
    ),
    'section'=> 'optical_lens_shop_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('optical_lens_shop_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
  ));
  $wp_customize->add_control('optical_lens_shop_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','optical-lens-shop'),
    'section' => 'optical_lens_shop_footer',
    'choices' => array(
      'Left' => __('Left','optical-lens-shop'),
      'Center' => __('Center','optical-lens-shop'),
      'Right' => __('Right','optical-lens-shop')
    ),
  ) );

  $wp_customize->add_setting('optical_lens_shop_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
  ));
  $wp_customize->add_control('optical_lens_shop_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','optical-lens-shop'),
    'section' => 'optical_lens_shop_footer',
    'choices' => array(
      'Left' => __('Left','optical-lens-shop'),
      'Center' => __('Center','optical-lens-shop'),
      'Right' => __('Right','optical-lens-shop')
    ),
  ) );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('optical_lens_shop_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'optical_lens_shop_Customize_partial_optical_lens_shop_footer_text',
	));

	$wp_customize->add_setting( 'optical_lens_shop_copyright_hide_show',array(
	   'default' => 1,
	   'transport' => 'refresh',
	   'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
	));
	$wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_copyright_hide_show',array(
	 'label' => esc_html__( 'Show / Hide Copyright','optical-lens-shop' ),
	 'section' => 'optical_lens_shop_footer'
	)));

	$wp_customize->add_setting('optical_lens_shop_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_footer_text',array(
		'label'	=> esc_html__('Copyright Text','optical-lens-shop'),
		'input_attrs' => array(
      'placeholder' => esc_html__( 'Copyright 2023, .....', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_footer',
		'type'=> 'text'
	));

  $wp_customize->add_setting('optical_lens_shop_copyright_background_color', array(
    'default'           => '#00a3fc',
    'sanitize_callback' => 'sanitize_hex_color',
  ));
  $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'optical_lens_shop_copyright_background_color', array(
    'label'    => __('Copyright Background Color', 'optical-lens-shop'),
    'section'  => 'optical_lens_shop_footer',
  )));

	$wp_customize->add_setting('optical_lens_shop_copyright_text_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'optical_lens_shop_copyright_text_color', array(
		'label'    => __('Copyright Text Color', 'optical-lens-shop'),
		'section'  => 'optical_lens_shop_footer',
	)));

  $wp_customize->add_setting('optical_lens_shop_copyright_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('optical_lens_shop_copyright_font_size',array(
    'label' => __('Copyright Font Size','optical-lens-shop'),
    'description' => __('Enter a value in pixels. Example:20px','optical-lens-shop'),
    'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
    'section'=> 'optical_lens_shop_footer',
    'type'=> 'text'
  ));

	$wp_customize->add_setting('optical_lens_shop_copyright_font_weight',array(
	  'default' => 400,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_copyright_font_weight',array(
	    'type' => 'select',
	    'label' => __('Copyright Font Weight','optical-lens-shop'),
	    'section' => 'optical_lens_shop_footer',
	    'choices' => array(
	    	'100' => __('100','optical-lens-shop'),
	        '200' => __('200','optical-lens-shop'),
	        '300' => __('300','optical-lens-shop'),
	        '400' => __('400','optical-lens-shop'),
	        '500' => __('500','optical-lens-shop'),
	        '600' => __('600','optical-lens-shop'),
	        '700' => __('700','optical-lens-shop'),
	        '800' => __('800','optical-lens-shop'),
	        '900' => __('900','optical-lens-shop'),
    ),
	));

	$wp_customize->add_setting('optical_lens_shop_copyright_alingment',array(
        'default' => 'center',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Image_Radio_Control($wp_customize, 'optical_lens_shop_copyright_alingment', array(
        'type' => 'select',
        'label' => esc_html__('Copyright Alignment','optical-lens-shop'),
        'section' => 'optical_lens_shop_footer',
        'settings' => 'optical_lens_shop_copyright_alingment',
        'choices' => array(
            'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
            'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
            'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
    ))));

    $wp_customize->add_setting( 'optical_lens_shop_hide_show_scroll',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_hide_show_scroll',array(
      	'label' => esc_html__( 'Show / Hide Scroll to Top','optical-lens-shop' ),
      	'section' => 'optical_lens_shop_footer'
    )));

    //Selective Refresh
	$wp_customize->selective_refresh->add_partial('optical_lens_shop_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'optical_lens_shop_Customize_partial_optical_lens_shop_scroll_to_top_icon',
	));

  $wp_customize->add_setting('optical_lens_shop_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('optical_lens_shop_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','optical-lens-shop'),
    'description' => __('Enter a value in pixels. Example:20px','optical-lens-shop'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'optical-lens-shop' ),
    ),
    'section'=> 'optical_lens_shop_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('optical_lens_shop_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('optical_lens_shop_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','optical-lens-shop'),
    'description' => __('Enter a value in pixels. Example:20px','optical-lens-shop'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'optical-lens-shop' ),
    ),
    'section'=> 'optical_lens_shop_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('optical_lens_shop_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('optical_lens_shop_scroll_to_top_width',array(
    'label' => __('Icon Width','optical-lens-shop'),
    'description' => __('Enter a value in pixels Example:20px','optical-lens-shop'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'optical-lens-shop' ),
    ),
    'section'=> 'optical_lens_shop_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('optical_lens_shop_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('optical_lens_shop_scroll_to_top_height',array(
    'label' => __('Icon Height','optical-lens-shop'),
    'description' => __('Enter a value in pixels. Example:20px','optical-lens-shop'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'optical-lens-shop' ),
    ),
    'section'=> 'optical_lens_shop_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'optical_lens_shop_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'optical_lens_shop_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','optical-lens-shop' ),
    'section'     => 'optical_lens_shop_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

    $wp_customize->add_setting('optical_lens_shop_scroll_top_alignment',array(
        'default' => 'Right',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Image_Radio_Control($wp_customize, 'optical_lens_shop_scroll_top_alignment', array(
        'type' => 'select',
        'label' => esc_html__('Scroll To Top','optical-lens-shop'),
        'section' => 'optical_lens_shop_footer',
        'settings' => 'optical_lens_shop_scroll_top_alignment',
        'choices' => array(
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
            'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
    ))));

	//Blog Post
	$wp_customize->add_panel( 'optical_lens_shop_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'optical-lens-shop' ),
		'panel' => 'optical_lens_shop_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'optical_lens_shop_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'optical-lens-shop' ),
		'panel' => 'optical_lens_shop_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('optical_lens_shop_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'optical_lens_shop_Customize_partial_optical_lens_shop_toggle_postdate',
	));

	//Blog layout
    $wp_customize->add_setting('optical_lens_shop_blog_layout_option',array(
     'default' => 'Default',
     'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
    ));
    $wp_customize->add_control(new Optical_Lens_Shop_Image_Radio_Control($wp_customize, 'optical_lens_shop_blog_layout_option', array(
     'type' => 'select',
     'label' => __('Blog Post Layouts','optical-lens-shop'),
     'section' => 'optical_lens_shop_post_settings',
     'choices' => array(
         'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
         'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
         'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
    ))));

	$wp_customize->add_setting('optical_lens_shop_theme_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_theme_options',array(
        'type' => 'select',
        'label' => esc_html__('Post Sidebar Layout','optical-lens-shop'),
        'description' => esc_html__('Here you can change the sidebar layout for posts. ','optical-lens-shop'),
        'section' => 'optical_lens_shop_post_settings',
        'choices' => array(
            'Left Sidebar' => esc_html__('Left Sidebar','optical-lens-shop'),
            'Right Sidebar' => esc_html__('Right Sidebar','optical-lens-shop'),
            'One Column' => esc_html__('One Column','optical-lens-shop'),
            'Three Columns' => __('Three Columns','optical-lens-shop'),
            'Four Columns' => __('Four Columns','optical-lens-shop'),
            'Grid Layout' => esc_html__('Grid Layout','optical-lens-shop')
        ),
	) );

  	$wp_customize->add_setting('optical_lens_shop_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_post_settings',
		'setting'	=> 'optical_lens_shop_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'optical_lens_shop_toggle_postdate',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_toggle_postdate',array(
        'label' => esc_html__( 'Post Date','optical-lens-shop' ),
        'section' => 'optical_lens_shop_post_settings'
    )));

	$wp_customize->add_setting('optical_lens_shop_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_post_settings',
		'setting'	=> 'optical_lens_shop_toggle_author_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'optical_lens_shop_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_toggle_author',array(
		'label' => esc_html__( 'Author','optical-lens-shop' ),
		'section' => 'optical_lens_shop_post_settings'
    )));

    $wp_customize->add_setting('optical_lens_shop_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_post_settings',
		'setting'	=> 'optical_lens_shop_toggle_comments_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'optical_lens_shop_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_toggle_comments',array(
		'label' => esc_html__( 'Comments','optical-lens-shop' ),
		'section' => 'optical_lens_shop_post_settings'
    )));

    $wp_customize->add_setting('optical_lens_shop_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_post_settings',
		'setting'	=> 'optical_lens_shop_toggle_time_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'optical_lens_shop_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_toggle_time',array(
		'label' => esc_html__( 'Time','optical-lens-shop' ),
		'section' => 'optical_lens_shop_post_settings'
    )));

    $wp_customize->add_setting( 'optical_lens_shop_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
	));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','optical-lens-shop' ),
		'section' => 'optical_lens_shop_post_settings'
    )));

  $wp_customize->add_setting( 'optical_lens_shop_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'optical_lens_shop_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'optical_lens_shop_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'optical_lens_shop_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('optical_lens_shop_blog_post_featured_image_dimension',array(
       'default' => 'default',
       'sanitize_callback'	=> 'optical_lens_shop_sanitize_choices'
	));
  	$wp_customize->add_control('optical_lens_shop_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','optical-lens-shop'),
		'section'	=> 'optical_lens_shop_post_settings',
		'choices' => array(
		'default' => __('Default','optical-lens-shop'),
		'custom' => __('Custom Image Size','optical-lens-shop'),
      ),
  	));

	$wp_customize->add_setting('optical_lens_shop_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('optical_lens_shop_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'optical-lens-shop' ),),
		'section'=> 'optical_lens_shop_post_settings',
		'type'=> 'text',
		'active_callback' => 'optical_lens_shop_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('optical_lens_shop_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'optical-lens-shop' ),),
		'section'=> 'optical_lens_shop_post_settings',
		'type'=> 'text',
		'active_callback' => 'optical_lens_shop_blog_post_featured_image_dimension'
	));

    $wp_customize->add_setting( 'optical_lens_shop_toggle_tags',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
	));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_toggle_tags', array(
		'label' => esc_html__( 'Tags','optical-lens-shop' ),
		'section' => 'optical_lens_shop_post_settings'
    )));

    $wp_customize->add_setting( 'optical_lens_shop_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'optical_lens_shop_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_post_settings',
		'type'        => 'range',
		'settings'    => 'optical_lens_shop_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('optical_lens_shop_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','optical-lens-shop'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','optical-lens-shop'),
		'section'=> 'optical_lens_shop_post_settings',
		'type'=> 'text'
	));

    $wp_customize->add_setting('optical_lens_shop_excerpt_settings',array(
        'default' => 'Excerpt',
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_excerpt_settings',array(
        'type' => 'select',
        'label' => esc_html__('Post Content','optical-lens-shop'),
        'section' => 'optical_lens_shop_post_settings',
        'choices' => array(
        	'Content' => esc_html__('Content','optical-lens-shop'),
            'Excerpt' => esc_html__('Excerpt','optical-lens-shop'),
            'No Content' => esc_html__('No Content','optical-lens-shop')
        ),
	) );

	$wp_customize->add_setting( 'optical_lens_shop_blog_pagination_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new optical_lens_shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_blog_pagination_hide_show',array(
      'label' => esc_html__( 'Show / Hide Blog Pagination','optical-lens-shop' ),
      'section' => 'optical_lens_shop_post_settings'
    )));

	$wp_customize->add_setting( 'optical_lens_shop_blog_pagination_type', array(
        'default'			=> 'blog-page-numbers',
        'sanitize_callback'	=> 'optical_lens_shop_sanitize_choices'
    ));
    $wp_customize->add_control( 'optical_lens_shop_blog_pagination_type', array(
        'section' => 'optical_lens_shop_post_settings',
        'type' => 'select',
        'label' => __( 'Blog Pagination', 'optical-lens-shop' ),
        'choices'		=> array(
            'blog-page-numbers'  => __( 'Numeric', 'optical-lens-shop' ),
            'next-prev' => __( 'Older Posts/Newer Posts', 'optical-lens-shop' ),
    )));

    $wp_customize->add_setting('optical_lens_shop_blog_page_posts_settings',array(
        'default' => 'Into Blocks',
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_blog_page_posts_settings',array(
        'type' => 'select',
        'label' => __('Display Blog Posts','optical-lens-shop'),
        'section' => 'optical_lens_shop_post_settings',
        'choices' => array(
        	'Into Blocks' => __('Into Blocks','optical-lens-shop'),
            'Without Blocks' => __('Without Blocks','optical-lens-shop')
        ),
	) );

    // Button Settings
	$wp_customize->add_section( 'optical_lens_shop_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'optical-lens-shop' ),
		'panel' => 'optical_lens_shop_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('optical_lens_shop_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'optical_lens_shop_Customize_partial_optical_lens_shop_button_text',
	));

    $wp_customize->add_setting('optical_lens_shop_button_text',array(
		'default'=> esc_html__('Read More','optical-lens-shop'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_button_text',array(
		'label'	=> esc_html__('Add Button Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Read More', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_button_settings',
		'type'=> 'text'
	));

    $wp_customize->add_setting('optical_lens_shop_button_text',array(
		'default'=> esc_html__('Read More','optical-lens-shop'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_button_text',array(
		'label'	=> esc_html__('Add Button Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Read More', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('optical_lens_shop_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_button_font_size',array(
		'label'	=> __('Button Font Size','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'optical-lens-shop' ),
    ),
    	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'optical_lens_shop_button_settings',
	));


	$wp_customize->add_setting( 'optical_lens_shop_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'optical_lens_shop_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('optical_lens_shop_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'optical-lens-shop' ),
    ),
		'section'=> 'optical_lens_shop_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'optical-lens-shop' ),
    ),
		'section'=> 'optical_lens_shop_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'optical-lens-shop' ),
    ),
    	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'optical_lens_shop_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('optical_lens_shop_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','optical-lens-shop'),
		'choices' => array(
      'Uppercase' => __('Uppercase','optical-lens-shop'),
      'Capitalize' => __('Capitalize','optical-lens-shop'),
      'Lowercase' => __('Lowercase','optical-lens-shop'),
    ),
		'section'=> 'optical_lens_shop_button_settings',
	));


	// Related Post Settings
	$wp_customize->add_section( 'optical_lens_shop_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'optical-lens-shop' ),
		'panel' => 'optical_lens_shop_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('optical_lens_shop_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'optical_lens_shop_Customize_partial_optical_lens_shop_related_post_title',
	));

    $wp_customize->add_setting( 'optical_lens_shop_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_related_post',array(
		'label' => esc_html__( 'Show / Hide Related Post','optical-lens-shop' ),
		'section' => 'optical_lens_shop_related_posts_settings'
    )));

    $wp_customize->add_setting('optical_lens_shop_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Related Post', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_related_posts_settings',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('optical_lens_shop_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'optical_lens_shop_sanitize_number_absint'
	));
	$wp_customize->add_control('optical_lens_shop_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => esc_html__( '3', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'optical_lens_shop_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'optical_lens_shop_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'optical_lens_shop_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// Single Posts Settings
	$wp_customize->add_section( 'optical_lens_shop_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'optical-lens-shop' ),
		'panel' => 'optical_lens_shop_blog_post_parent_panel',
	));

  	$wp_customize->add_setting('optical_lens_shop_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_single_blog_settings',
		'setting'	=> 'optical_lens_shop_single_postdate_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'optical_lens_shop_toggle_postdate',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
	) );
	$wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_toggle_postdate',array(
	    'label' => esc_html__( 'Show / Hide Date','optical-lens-shop' ),
	   'section' => 'optical_lens_shop_single_blog_settings'
	)));

	$wp_customize->add_setting('optical_lens_shop_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_single_author_icon',array(
		'label'	=> __('Add Author Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_single_blog_settings',
		'setting'	=> 'optical_lens_shop_single_author_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'optical_lens_shop_toggle_author',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
	) );
	$wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_toggle_author',array(
	    'label' => esc_html__( 'Show / Hide Author','optical-lens-shop' ),
	    'section' => 'optical_lens_shop_single_blog_settings'
	)));

   	$wp_customize->add_setting('optical_lens_shop_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_single_blog_settings',
		'setting'	=> 'optical_lens_shop_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'optical_lens_shop_toggle_comments',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
	) );
	$wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_toggle_comments',array(
	    'label' => esc_html__( 'Show / Hide Comments','optical-lens-shop' ),
	    'section' => 'optical_lens_shop_single_blog_settings'
	)));

  	$wp_customize->add_setting('optical_lens_shop_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_single_time_icon',array(
		'label'	=> __('Add Time Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_single_blog_settings',
		'setting'	=> 'optical_lens_shop_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'optical_lens_shop_toggle_time',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
	) );
	$wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_toggle_time',array(
	    'label' => esc_html__( 'Show / Hide Time','optical-lens-shop' ),
	    'section' => 'optical_lens_shop_single_blog_settings'
	)));

	$wp_customize->add_setting( 'optical_lens_shop_toggle_tags',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
	));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','optical-lens-shop' ),
		'section' => 'optical_lens_shop_single_blog_settings'
    )));

	$wp_customize->add_setting( 'optical_lens_shop_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
 	 $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','optical-lens-shop' ),
		'section' => 'optical_lens_shop_single_blog_settings'
    )));

	// Single Posts Category
 	 $wp_customize->add_setting( 'optical_lens_shop_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
  	$wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','optical-lens-shop' ),
		'section' => 'optical_lens_shop_single_blog_settings'
    )));

	$wp_customize->add_setting('optical_lens_shop_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','optical-lens-shop'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','optical-lens-shop'),
		'section'=> 'optical_lens_shop_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'optical_lens_shop_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
	));
	$wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_single_blog_post_navigation_show_hide', array(
		  'label' => esc_html__( 'Show / Hide Post Navigation','optical-lens-shop' ),
		  'section' => 'optical_lens_shop_single_blog_settings'
	)));

	//navigation text
	$wp_customize->add_setting('optical_lens_shop_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'PREVIOUS', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'NEXT', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('optical_lens_shop_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','optical-lens-shop'),
		'input_attrs' => array(
        'placeholder' => __( 'Leave a Reply', 'optical-lens-shop' ),
    	),
		'section'=> 'optical_lens_shop_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('optical_lens_shop_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'Post Comment', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_single_blog_settings',
		'type'=> 'text'
	)); 

	$wp_customize->add_setting('optical_lens_shop_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','optical-lens-shop'),
		'description'	=> __('Enter a value in %. Example:50%','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '100%', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'optical_lens_shop_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'optical-lens-shop' ),
		'panel' => 'optical_lens_shop_blog_post_parent_panel',
	));

  	$wp_customize->add_setting('optical_lens_shop_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_grid_layout_settings',
		'setting'	=> 'optical_lens_shop_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'optical_lens_shop_grid_postdate_setting',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_grid_postdate_setting',array(
        'label' => esc_html__( 'Show / Hide Post Date','optical-lens-shop' ),
        'section' => 'optical_lens_shop_grid_layout_settings'
    )));

	$wp_customize->add_setting('optical_lens_shop_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_grid_author_icon',array(
		'label'	=> __('Add Author Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_grid_layout_settings',
		'setting'	=> 'optical_lens_shop_grid_author_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'optical_lens_shop_grid_author_setting',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_grid_author_setting',array(
		'label' => esc_html__( 'Show / Hide Author','optical-lens-shop' ),
		'section' => 'optical_lens_shop_grid_layout_settings'
    )));

    $wp_customize->add_setting('optical_lens_shop_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_grid_layout_settings',
		'setting'	=> 'optical_lens_shop_grid_comments_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'optical_lens_shop_grid_comments_setting',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_grid_comments_setting',array(
		'label' => esc_html__( 'Show / Hide Comments','optical-lens-shop' ),
		'section' => 'optical_lens_shop_grid_layout_settings'
    )));

 	$wp_customize->add_setting('optical_lens_shop_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','optical-lens-shop'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','optical-lens-shop'),
		'section'=> 'optical_lens_shop_grid_layout_settings',
		'type'=> 'text'
	));

	 $wp_customize->add_setting( 'optical_lens_shop_grid_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'optical_lens_shop_grid_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_grid_layout_settings',
		'type'        => 'range',
		'settings'    => 'optical_lens_shop_grid_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

 	$wp_customize->add_setting('optical_lens_shop_grid_button_text',array(
		'default'=> esc_html__('Read More','optical-lens-shop'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Read More', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_grid_layout_settings',
		'type'=> 'text'
	));

    $wp_customize->add_setting('optical_lens_shop_display_grid_posts_settings1',array(
        'default' => 'Into Blocks',
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_display_grid_posts_settings1',array(
        'type' => 'select',
        'label' => __('Display Grid Posts','optical-lens-shop'),
        'section' => 'optical_lens_shop_grid_layout_settings',
        'choices' => array(
        	'Into Blocks' => __('Into Blocks','optical-lens-shop'),
            'Without Blocks' => __('Without Blocks','optical-lens-shop')
        ),
	) );

  	$wp_customize->add_setting('optical_lens_shop_grid_button_text',array(
		'default'=> esc_html__('Read More','optical-lens-shop'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Read More', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '[...]', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_grid_layout_settings',
		'type'=> 'text'
	));

    $wp_customize->add_setting('optical_lens_shop_grid_excerpt_settings',array(
        'default' => 'Excerpt',
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_grid_excerpt_settings',array(
        'type' => 'select',
        'label' => esc_html__('Grid Post Content','optical-lens-shop'),
        'section' => 'optical_lens_shop_grid_layout_settings',
        'choices' => array(
        	'Content' => esc_html__('Content','optical-lens-shop'),
            'Excerpt' => esc_html__('Excerpt','optical-lens-shop'),
            'No Content' => esc_html__('No Content','optical-lens-shop')
        ),
	) );

    $wp_customize->add_setting( 'optical_lens_shop_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'optical_lens_shop_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'optical_lens_shop_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'optical_lens_shop_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Other
	$wp_customize->add_panel( 'optical_lens_shop_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'optical-lens-shop' ),
		'panel' => 'optical_lens_shop_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'optical_lens_shop_left_right', array(
    	'title' => esc_html__('General Settings', 'optical-lens-shop'),
		'panel' => 'optical_lens_shop_other_parent_panel'
	) );

	$wp_customize->add_setting('optical_lens_shop_width_option',array(
        'default' => 'Full Width',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Image_Radio_Control($wp_customize, 'optical_lens_shop_width_option', array(
        'type' => 'select',
        'label' => esc_html__('Width Layouts','optical-lens-shop'),
        'description' => esc_html__('Here you can change the width layout of Website.','optical-lens-shop'),
        'section' => 'optical_lens_shop_left_right',
        'choices' => array(
            'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
            'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
            'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
    ))));

	$wp_customize->add_setting('optical_lens_shop_page_layout',array(
        'default' => 'One_Column',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_page_layout',array(
        'type' => 'select',
        'label' => esc_html__('Page Sidebar Layout','optical-lens-shop'),
        'description' => esc_html__('Here you can change the sidebar layout for pages. ','optical-lens-shop'),
        'section' => 'optical_lens_shop_left_right',
        'choices' => array(
            'Left_Sidebar' => esc_html__('Left Sidebar','optical-lens-shop'),
            'Right_Sidebar' => esc_html__('Right Sidebar','optical-lens-shop'),
            'One_Column' => esc_html__('One Column','optical-lens-shop')
        ),
	) );

	 //Wow Animation
	$wp_customize->add_setting( 'optical_lens_shop_animation',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new optical_lens_shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_animation',array(
        'label' => esc_html__( 'Show / Hide Animation ','optical-lens-shop' ),
        'description' => __('Here you can disable overall site animation effect','optical-lens-shop'),
        'section' => 'optical_lens_shop_left_right'
    )));

	$wp_customize->add_setting( 'optical_lens_shop_single_page_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
  	$wp_customize->add_control( new optical_lens_shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_single_page_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Page Breadcrumb','optical-lens-shop' ),
		'section' => 'optical_lens_shop_left_right'
  	)));

	// Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'optical_lens_shop_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'optical_lens_shop_customize_partial_optical_lens_shop_woocommerce_shop_page_sidebar', ) );

    // Pre-Loader
	$wp_customize->add_setting( 'optical_lens_shop_loader_enable',array(
        'default' => false,
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_loader_enable',array(
        'label' => esc_html__( 'Show / Hide Pre-Loader','optical-lens-shop' ),
        'section' => 'optical_lens_shop_left_right'
    )));

	$wp_customize->add_setting('optical_lens_shop_preloader_bg_color', array(
		'default'           => '#00A3FC',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'optical_lens_shop_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'optical-lens-shop'),
		'section'  => 'optical_lens_shop_left_right',
	)));

	$wp_customize->add_setting('optical_lens_shop_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'optical_lens_shop_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'optical-lens-shop'),
		'section'  => 'optical_lens_shop_left_right',
	)));

	$wp_customize->add_setting('optical_lens_shop_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'optical_lens_shop_preloader_bg_img',array(
        'label' => __('Preloader Background Image','optical-lens-shop'),
        'section' => 'optical_lens_shop_left_right'
	)));

	$wp_customize->add_setting('optical_lens_shop_bradcrumbs_alignment',array(
        'default' => 'Left',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_bradcrumbs_alignment',array(
        'type' => 'select',
        'label' => __('Bradcrumbs Alignment','optical-lens-shop'),
        'section' => 'optical_lens_shop_left_right',
        'choices' => array(
            'Left' => __('Left','optical-lens-shop'),
            'Right' => __('Right','optical-lens-shop'),
            'Center' => __('Center','optical-lens-shop'),
        ),
	) );

    //404 Page Setting
	$wp_customize->add_section('optical_lens_shop_404_page',array(
		'title'	=> __('404 Page Settings','optical-lens-shop'),
		'panel' => 'optical_lens_shop_other_parent_panel',
	));

	$wp_customize->add_setting('optical_lens_shop_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('optical_lens_shop_404_page_title',array(
		'label'	=> __('Add Title','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('optical_lens_shop_404_page_content',array(
		'label'	=> __('Add Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_404_page_button_text',array(
		'label'	=> __('Add Button Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'GO BACK', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('optical_lens_shop_no_results_page',array(
		'title'	=> __('No Results Page Settings','optical-lens-shop'),
		'panel' => 'optical_lens_shop_other_parent_panel',
	));

	$wp_customize->add_setting('optical_lens_shop_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('optical_lens_shop_no_results_page_title',array(
		'label'	=> __('Add Title','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('optical_lens_shop_no_results_page_content',array(
		'label'	=> __('Add Text','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('optical_lens_shop_social_icon_settings',array(
		'title'	=> __('Social Icons Settings','optical-lens-shop'),
		'panel' => 'optical_lens_shop_other_parent_panel',
	));

	$wp_customize->add_setting('optical_lens_shop_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_social_icon_padding',array(
		'label'	=> __('Icon Padding','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_social_icon_width',array(
		'label'	=> __('Icon Width','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
    'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_social_icon_height',array(
		'label'	=> __('Icon Height','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_social_icon_settings',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('optical_lens_shop_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','optical-lens-shop'),
		'panel' => 'optical_lens_shop_other_parent_panel',
	));

	$wp_customize->add_setting( 'optical_lens_shop_responsive_topbar_hide',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_responsive_topbar_hide',array(
      'label' => esc_html__( 'Show / Hide Topbar','optical-lens-shop' ),
      'section' => 'optical_lens_shop_responsive_media'
    )));

    $wp_customize->add_setting( 'optical_lens_shop_resp_slider_hide_show',array(
      	'default' => 1,
     	'transport' => 'refresh',
      	'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_resp_slider_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Slider','optical-lens-shop' ),
      	'section' => 'optical_lens_shop_responsive_media'
    )));

    $wp_customize->add_setting( 'optical_lens_shop_sidebar_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_sidebar_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Sidebar','optical-lens-shop' ),
      	'section' => 'optical_lens_shop_responsive_media'
    )));

    $wp_customize->add_setting( 'optical_lens_shop_responsive_preloader_hide',array(
        'default' => false,
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_responsive_preloader_hide',array(
        'label' => esc_html__( 'Show / Hide Preloader','optical-lens-shop' ),
        'section' => 'optical_lens_shop_responsive_media'
    )));

    $wp_customize->add_setting( 'optical_lens_shop_resp_scroll_top_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ));
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_resp_scroll_top_hide_show',array(
      	'label' => esc_html__( 'Show / Hide Scroll To Top','optical-lens-shop' ),
      	'section' => 'optical_lens_shop_responsive_media'
    )));

    $wp_customize->add_setting('optical_lens_shop_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#00A3FC',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'optical_lens_shop_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'optical-lens-shop'),
		'section'  => 'optical_lens_shop_responsive_media',
	)));

    $wp_customize->add_setting('optical_lens_shop_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_responsive_media',
		'setting'	=> 'optical_lens_shop_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('optical_lens_shop_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new Optical_Lens_Shop_Fontawesome_Icon_Chooser(
        $wp_customize,'optical_lens_shop_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','optical-lens-shop'),
		'transport' => 'refresh',
		'section'	=> 'optical_lens_shop_responsive_media',
		'setting'	=> 'optical_lens_shop_res_close_menu_icon',
		'type'		=> 'icon'
	)));


   //Woocommerce settings
	$wp_customize->add_section('optical_lens_shop_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'optical-lens-shop'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

    // Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'optical_lens_shop_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Shop Page Sidebar','optical-lens-shop' ),
		'section' => 'optical_lens_shop_woocommerce_section'
    )));

    $wp_customize->add_setting('optical_lens_shop_shop_page_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_shop_page_layout',array(
        'type' => 'select',
        'label' => __('Shop Page Sidebar Layout','optical-lens-shop'),
        'section' => 'optical_lens_shop_woocommerce_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','optical-lens-shop'),
            'Right Sidebar' => __('Right Sidebar','optical-lens-shop'),
        ),
	) );

    // Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'optical_lens_shop_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'optical_lens_shop_customize_partial_optical_lens_shop_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'optical_lens_shop_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','optical-lens-shop' ),
		'section' => 'optical_lens_shop_woocommerce_section'
    )));

       $wp_customize->add_setting('optical_lens_shop_single_product_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_single_product_layout',array(
        'type' => 'select',
        'label' => __('Single Product Sidebar Layout','optical-lens-shop'),
        'section' => 'optical_lens_shop_woocommerce_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','optical-lens-shop'),
            'Right Sidebar' => __('Right Sidebar','optical-lens-shop'),
        ),
	) );

    //Products per page
    $wp_customize->add_setting('optical_lens_shop_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'optical_lens_shop_sanitize_float'
	));
	$wp_customize->add_control('optical_lens_shop_products_per_page',array(
		'label'	=> __('Products Per Page','optical-lens-shop'),
		'description' => __('Display on shop page','optical-lens-shop'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'optical_lens_shop_woocommerce_section',
		'type'=> 'number',
	));

    //Products per row
    $wp_customize->add_setting('optical_lens_shop_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_products_per_row',array(
		'label'	=> __('Products Per Row','optical-lens-shop'),
		'description' => __('Display on shop page','optical-lens-shop'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'optical_lens_shop_woocommerce_section',
		'type'=> 'select',
	));

	//Products padding
	$wp_customize->add_setting('optical_lens_shop_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'optical_lens_shop_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'optical_lens_shop_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'optical_lens_shop_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'optical_lens_shop_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('optical_lens_shop_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'optical_lens_shop_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'optical_lens_shop_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products Sale Badge
	$wp_customize->add_setting('optical_lens_shop_woocommerce_sale_position',array(
        'default' => 'right',
        'sanitize_callback' => 'optical_lens_shop_sanitize_choices'
	));
	$wp_customize->add_control('optical_lens_shop_woocommerce_sale_position',array(
        'type' => 'select',
        'label' => __('Sale Badge Position','optical-lens-shop'),
        'section' => 'optical_lens_shop_woocommerce_section',
        'choices' => array(
            'left' => __('Left','optical-lens-shop'),
            'right' => __('Right','optical-lens-shop'),
        ),
	) );

	$wp_customize->add_setting('optical_lens_shop_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('optical_lens_shop_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('optical_lens_shop_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','optical-lens-shop'),
		'description'	=> __('Enter a value in pixels. Example:20px','optical-lens-shop'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'optical-lens-shop' ),
        ),
		'section'=> 'optical_lens_shop_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'optical_lens_shop_woocommerce_sale_border_radius', array(
		'default'              => '100',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'optical_lens_shop_sanitize_number_range'
	) );
	$wp_customize->add_control( 'optical_lens_shop_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','optical-lens-shop' ),
		'section'     => 'optical_lens_shop_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

    //Related Products
	$wp_customize->add_setting( 'optical_lens_shop_related_product_show_hide',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'optical_lens_shop_switch_sanitization'
    ) );
    $wp_customize->add_control( new Optical_Lens_Shop_Toggle_Switch_Custom_Control( $wp_customize, 'optical_lens_shop_related_product_show_hide',array(
        'label' => esc_html__( 'Show / Hide Related product','optical-lens-shop' ),
        'section' => 'optical_lens_shop_woocommerce_section'
    )));
}

add_action( 'customize_register', 'optical_lens_shop_customize_register' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Optical_Lens_Shop_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Optical_Lens_Shop_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new Optical_Lens_Shop_Customize_Section_Pro( $manager,'optical_lens_shop_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'OPTICAL LENS SHOP PRO', 'optical-lens-shop' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'optical-lens-shop' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/lens-wordpress-theme'),
		) )	);

		// Register sections.
		$manager->add_section(new Optical_Lens_Shop_Customize_Section_Pro($manager,'optical_lens_shop_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'optical-lens-shop' ),
			'pro_text' => esc_html__( 'DOCS', 'optical-lens-shop' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-optical-lens/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'optical-lens-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'optical-lens-shop-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Optical_Lens_Shop_Customize::get_instance();
