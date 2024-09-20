<?php
// main header


/***************************************/
// Disable product category search box
/****************************************/




$wp_customize->add_setting( 'eshopping_cart_cat_search_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_cat_search_disable', array(
                'label'                 => esc_html__('Check to disable Category in Search Box', 'eshopping-cart'),
                'type'                  => 'checkbox',
                //'section'               => 'eshopping-cart-main-header',
				'section'               => 'eshopping-cart-main-header',
                'settings'              => 'eshopping_cart_cat_search_disable',
                'priority'   => 1,
            ) ) );


// choose col layout


/***********************************/  
// menu alignment
/***********************************/ 
$wp_customize->add_setting('eshopping_cart_menu_alignment', array(
                'default'               => 'center',
                'sanitize_callback'     => 'eshopping_cart_sanitize_select',
            ) );
$wp_customize->add_control( new EShopping_Cart_Customizer_Buttonset_Control( $wp_customize, 'eshopping_cart_menu_alignment', array(
                'label'                 => esc_html__( 'Menu Alignment', 'eshopping-cart' ),
                'section'               => 'eshopping-cart-main-header',
                'settings'              => 'eshopping_cart_menu_alignment',
                'choices'               => array(
                    'left'              => esc_html__( 'Left', 'eshopping-cart' ),
                    'center'            => esc_html__( 'center', 'eshopping-cart' ),
                    'right'             => esc_html__( 'Right', 'eshopping-cart' ),
                ),
                'priority'   => 2,
        ) ) );
//Main menu option
$wp_customize->add_setting('eshopping_cart_main_header_option', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_select',
    ));
$wp_customize->add_control( 'eshopping_cart_main_header_option', array(
        'settings' => 'eshopping_cart_main_header_option',
        'label'    => __('Right Column','eshopping-cart'),
        'section'  => 'eshopping-cart-main-header',
        'type'     => 'select',
        'choices'    => array(
        'none'       => __('None','eshopping-cart'),
        'callto'     => __('Call-To','eshopping-cart'),
        'button'     => __('Button (Pro)','eshopping-cart'),
        
        'widget'     => __('Widget (Pro)','eshopping-cart'),     
        ),
        'priority'   => 3,
    ));
//**************/
// BUTTON TEXT //
//**************/
$wp_customize->add_setting('eshopping_cart_main_hdr_btn_txt', array(
        'default' => __('Button Text','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_main_hdr_btn_txt', array(
        'label'    => __('Button Text', 'eshopping-cart'),
        'section'  => 'eshopping-cart-main-header',
         'type'    => 'text',
         'priority'   => 4,
));

$wp_customize->add_setting('eshopping_cart_main_hdr_btn_lnk', array(
        'default' => __('#','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        
));
$wp_customize->add_control( 'eshopping_cart_main_hdr_btn_lnk', array(
        'label'    => __('Button Link', 'eshopping-cart'),
        'section'  => 'eshopping-cart-main-header',
         'type'    => 'text',
         'priority'   => 5,
));
/*****************/
// Call-to
/*****************/
$wp_customize->add_setting('eshopping_cart_main_hdr_calto_txt', array(
        'default' => __('Call To','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_main_hdr_calto_txt', array(
        'label'    => __('Call To Text', 'eshopping-cart'),
        'section'  => 'eshopping-cart-main-header',
         'type'    => 'text',
         'priority'   => 6,
));

$wp_customize->add_setting('eshopping_cart_main_hdr_calto_nub', array(
        'default' => __('+1800090098','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_main_hdr_calto_nub', array(
        'label'    => __('Call To Number', 'eshopping-cart'),
        'section'  => 'eshopping-cart-main-header',
         'type'    => 'text',
         'priority'   => 7,
));

// col1 widget redirection
if (class_exists('EShopping_Cart_Widegt_Redirect')){ 
$wp_customize->add_setting(
            'eshopping-cart_main_header_widget_redirect', array(
            'sanitize_callback' => 'sanitize_text_field',
     )
);
$wp_customize->add_control(
            new EShopping_Cart_Widegt_Redirect(
                $wp_customize, 'eshopping-cart_main_header_widget_redirect', array(
                    'section'      => 'eshopping-cart-main-header',
                    'button_text'  => esc_html__( 'Go To Widget', 'eshopping-cart' ),
                    'button_class' => 'focus-customizer-widget-redirect',  
                    'priority'   => 8,
                )
            )
        );
} 
/***********************************/  
// menu alignment
/***********************************/ 
$wp_customize->add_setting('eshopping-cart_mobile_menu_open', array(
                'default'               => 'left',
                'sanitize_callback'     => 'eshopping-cart_sanitize_select',
            ) );
$wp_customize->add_control( new EShopping_Cart_Customizer_Buttonset_Control( $wp_customize, 'eshopping_cart_mobile_menu_open', array(
                'label'                 => esc_html__( 'Mobile Menu', 'eshopping-cart' ),
                'section'               => 'eshopping-cart-main-header',
                'settings'              => 'eshopping_cart_mobile_menu_open',
                'choices'               => array(
                    'left'              => esc_html__( 'Left', 'eshopping-cart' ),
                    // 'overcenter'        => esc_html__( 'center', 'eshopping-cart' ),
                    'right'             => esc_html__( 'Right', 'eshopping-cart' ),
                ),
                'priority'   => 9,
        ) ) );

  $wp_customize->add_setting( 'eshopping_cart_shadow_header', array(
    'default'           => false,
    'sanitize_callback' => 'eshopping_cart_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new EShopping_Cart_Toggle_Control( $wp_customize, 'eshopping_cart_shadow_header', array(
    'label'       => esc_html__( 'Header Shadow', 'eshopping-cart' ),
    'section'     => 'eshopping-cart-main-header',
    'type'        => 'toggle',
    'settings'    => 'eshopping_cart_shadow_header',
    'priority'   => 10,
  ) ) );
/***********************************/  
// Sticky Header
/***********************************/ 
  $wp_customize->add_setting( 'eshopping_cart_sticky_header', array(
    'default'           => false,
    'sanitize_callback' => 'eshopping_cart_sanitize_checkbox',
  ) );
  $wp_customize->add_control( new EShopping_Cart_Toggle_Control( $wp_customize, 'eshopping_cart_sticky_header', array(
    'label'       => esc_html__( 'Sticky Header', 'eshopping-cart' ),
    'section'     => 'eshopping-cart-main-header',
    'type'        => 'toggle',
    'settings'    => 'eshopping_cart_sticky_header',
    'priority'   => 10,
  ) ) );

  $wp_customize->add_setting('eshopping_cart_sticky_header_effect', array(
        'default'        => 'scrldwmn',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_select',
    ));
$wp_customize->add_control( 'eshopping_cart_sticky_header_effect', array(
        'settings' => 'eshopping_cart_sticky_header_effect',
        'label'    => __('Sticky Header Effect','eshopping-cart'),
        'section'  => 'eshopping-cart-main-header',
        'type'     => 'select',
        'choices'    => array(
        'scrldwmn'    => __('Effect One','eshopping-cart'),
        'scrltop'     => __('Effect Two','eshopping-cart'),
        
        ),
        'priority'   => 11,
    ));
/******************/
// Disable in Mobile
/******************/
$wp_customize->add_setting( 'eshopping_cart_whislist_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_whislist_mobile_disable', array(
                'label'                 => esc_html__('Check to disable whislist icon in mobile device', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping-cart-main-header',
                'settings'              => 'eshopping_cart_whislist_mobile_disable',
                'priority'   => 12,
            ) ) );

$wp_customize->add_setting( 'eshopping_cart_account_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_account_mobile_disable', array(
                'label'                 => esc_html__('Check to disable account icon in mobile device', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping-cart-main-header',
                'settings'              => 'eshopping_cart_account_mobile_disable',
                'priority'   => 13,
            ) ) );

$wp_customize->add_setting( 'eshopping_cart_cart_mobile_disable', array(
                'default'               => false,
                'sanitize_callback'     => 'eshopping_cart_sanitize_checkbox',
            ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'eshopping_cart_cart_mobile_disable', array(
                'label'                 => esc_html__('Check to disable cart icon in mobile device', 'eshopping-cart'),
                'type'                  => 'checkbox',
                'section'               => 'eshopping-cart-main-header',
                'settings'              => 'eshopping_cart_cart_mobile_disable',
                'priority'   => 14,
            ) ) );

/****************/
//doc link
/****************/
$wp_customize->add_setting('eshopping_cart_main_header_doc_learn_more', array(
    'sanitize_callback' => 'eshopping_cart_sanitize_text',
    ));
$wp_customize->add_control(new EShopping_Cart_Misc_Control( $wp_customize, 'eshopping_cart_main_header_doc_learn_more',
            array(
        'section'    => 'eshopping-cart-main-header',
        'type'      => 'doc-link',
        'url'       => '#',
        'description' => esc_html__( 'To know more go with this', 'eshopping-cart' ),
        'priority'   =>100,
    )));

// exclude header category
function eshopping_cart_get_category_id($arr='',$all=true){
    $cats = array();
    foreach ( get_categories($arr) as $categories => $category ){
       
        $cats[$category->term_id] = $category->name;
     }
     return $cats;
  }
$wp_customize->add_setting('eshopping_cart_main_hdr_cat_txt', array(
        'default' => __('Category','eshopping-cart'),
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'eshopping_cart_sanitize_text',
        'transport'         => 'postMessage',
));
$wp_customize->add_control( 'eshopping_cart_main_hdr_cat_txt', array(
        'label'    => __('Category Text', 'eshopping-cart'),
        'section'  => 'eshopping_cart_exclde_cat_header',
         'type'    => 'text',
));
 if (class_exists( 'EShopping_Cart_Customize_Control_Checkbox_Multiple')) {
   $wp_customize->add_setting('eshopping_cart_exclde_category', array(
        'default'           => '',
        'sanitize_callback' => 'eshopping_cart_checkbox_explode'
    ));
    $wp_customize->add_control(new EShopping_Cart_Customize_Control_Checkbox_Multiple(
            $wp_customize,'eshopping_cart_exclde_category', array(
        'settings'=> 'eshopping_cart_exclde_category',
        'label'   => __( 'Choose Categories To Exclude', 'eshopping-cart' ),
        'section' => 'eshopping_cart_exclde_cat_header',
        'choices' => eshopping_cart_get_category_id(array('taxonomy' =>'product_cat'),true),
        ) 
    ));

}  