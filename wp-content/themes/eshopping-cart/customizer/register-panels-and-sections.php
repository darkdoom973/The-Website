<?php
/**
 * Register customizer panels & sections.
 */
/*************************/
/*WordPress Default Panel*/
/*************************/
/**
 * Category Section Customizer Settings
 */
if(!function_exists('eshopping_cart_get_category_list')){
function eshopping_cart_get_category_list($arr='',$all=true){
    $cats = array();
    foreach ( get_categories($arr) as $categories => $category ){
       
        $cats[$category->slug] = $category->name;
     }
     return $cats;
  }
}

$eshopping_cart_shop_panel_default = new EShopping_Cart_WP_Customize_Panel( $wp_customize,'eshopping-cart-panel-default', array(
    'priority' => 1,
    'title'    => __( 'WordPress Default', 'eshopping-cart' ),
  ));
$wp_customize->add_panel($eshopping_cart_shop_panel_default);
$wp_customize->get_section( 'title_tagline' )->panel = 'eshopping-cart-panel-default';
$wp_customize->get_section( 'static_front_page' )->panel = 'eshopping-cart-panel-default';
$wp_customize->get_section( 'custom_css' )->panel = 'eshopping-cart-panel-default';

$wp_customize->add_setting('eshopping_cart_home_page_setup', array(
    'sanitize_callback' => 'eshopping_cart_sanitize_text',
    ));
$wp_customize->add_control(new EShopping_Cart_Misc_Control( $wp_customize, 'eshopping_cart_home_page_setup',
            array(
        'section'    => 'static_front_page',
        'type'      => 'doc-link',
        'url'       => '#',
        'description' => esc_html__( 'To know more go with this', 'eshopping-cart' ),
        'priority'   =>100,
    )));
/************************/
// Background option
/************************/
$eshopping_cart_shop_bg_option = new  EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping-cart-bg-option', array(
    'title' =>  __( 'Background', 'eshopping-cart' ),
    'panel' => 'eshopping-cart-panel-default',
    'priority' => 10,
  ));
$wp_customize->add_section($eshopping_cart_shop_bg_option);

/*************************/
/*Layout Panel*/
/*************************/

//blog
$eshopping_cart_section_blog_group = new  EShopping_Cart_WP_Customize_Section( $wp_customize,'eshopping-cart-section-blog-group', array(
    'title' =>  __( 'Blog', 'eshopping-cart' ),
    'panel' => 'eshopping-cart-panel-layout',
    'priority' => 2,
  ));
$wp_customize->add_section($eshopping_cart_section_blog_group);

$eshopping_cart_section_footer_group = new  EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping-cart-section-footer-group', array(
    'title' =>  __( 'Footer', 'eshopping-cart' ),
    'panel' => 'eshopping-cart-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section( $eshopping_cart_section_footer_group);
// sidebar
$eshopping_cart_section_sidebar_group = new  EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping-cart-section-sidebar-group', array(
    'title' =>  __( 'Sidebar', 'eshopping-cart' ),
    'panel' => 'eshopping-cart-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section($eshopping_cart_section_sidebar_group);
// Scroll to top
$eshopping_cart_move_to_top = new  EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping-cart-move-to-top', array(
    'title' =>  __( 'Move To Top', 'eshopping-cart' ),
    'panel' => 'eshopping-cart-panel-layout',
    'priority' => 3,
  ));
$wp_customize->add_section($eshopping_cart_move_to_top);
//above-footer
$eshopping_cart_above_footer = new  EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping-cart-above-footer',array(
    'title'    => __( 'Above Footer','eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-layout',
        'section'  => 'eshopping-cart-section-footer-group',
        'priority' => 1,
));
$wp_customize->add_section( $eshopping_cart_above_footer);
//widget footer
$eshopping_cart_shop_widget_footer = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-widget-footer', array(
    'title'    => __('Widget Footer','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-layout',
    'section'  => 'eshopping-cart-section-footer-group',
    'priority' => 5,
));
$wp_customize->add_section( $eshopping_cart_shop_widget_footer);
//Bottom footer
$eshopping_cart_shop_bottom_footer = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-bottom-footer', array(
    'title'    => __('Below Footer','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-layout',
    'section'  => 'eshopping-cart-section-footer-group',
    'priority' => 5,
));
$wp_customize->add_section( $eshopping_cart_shop_bottom_footer);
// rtl
$eshopping_cart_rtl = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping-cart-rtl', array(
    'title' =>  __( 'RTL', 'eshopping-cart' ),
    'panel' => 'eshopping-cart-panel-layout',
    'priority' => 6,
));
$wp_customize->add_section($eshopping_cart_rtl);
/*************************/
/* Preloader */
/*************************/
$wp_customize->add_section( 'eshopping-cart-pre-loader' , array(
    'title'      => __('Preloader','eshopping-cart'),
    'priority'   => 30,
) );
/*************************/
/* Social   Icon*/
/*************************/
$eshopping_cart_social_header = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping-cart-social-icon', array(
    'title'    => __( 'Social Icon', 'eshopping-cart' ),
    'priority' => 30,
  ));
$wp_customize->add_section( $eshopping_cart_social_header );
/*************************/
/* Frontpage Panel */
/*************************/
$wp_customize->add_panel( 'eshopping-cart-panel-frontpage', array(
                'priority' => 5,
                'title'    => __( 'Frontpage Sections', 'eshopping-cart' ),
) );

$eshopping_cart_top_slider_section = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_top_slider_section', array(
    'title'    => __( 'Top Slider', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_top_slider_section );

$eshopping_cart_feature_banner_section = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_feature_banner_section', array(
    'title'    => __( 'Featured Banner', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_feature_banner_section );

$eshopping_cart_cat_slide_section = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_cat_slide_section', array(
    'title'    => __( 'Woo Category', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$eshopping_cart_category_tab_section = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_category_tab_section', array(
    'title'    => __( 'Tabbed Product Carousel', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_category_tab_section );



$wp_customize->add_section( $eshopping_cart_cat_slide_section );
// ribbon
$eshopping_cart_ribbon = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_ribbon', array(
    'title'    => __( 'Ribbon', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_ribbon );
$eshopping_cart_product_tab_image = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_product_tab_image', array(
    'title'    => __( 'Product Tab Image Carousel', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_product_tab_image );

$eshopping_cart_product_slide_section = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_product_slide_section', array(
    'title'    => __( 'Product Carousel', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_product_slide_section );

$eshopping_cart_banner = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_banner', array(
    'title'    => __( 'Banner', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_banner );

$eshopping_cart_product_slide_list = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_product_slide_list', array(
    'title'    => __( 'News & Blogs', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_product_slide_list );



$eshopping_cart_highlight = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_highlight', array(
    'title'    => __( 'Features', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_highlight );

$eshopping_cart_brand = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_brand', array(
    'title'    => __( 'Brand', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_brand );

$eshopping_cart_product_big_feature = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_product_big_feature', array(
    'title'    => __( 'Big Featured Product', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_product_big_feature );
$eshopping_cart_product_cat_list = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_product_cat_list', array(
    'title'    => __( 'Tabbed Product List Carousel', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_product_cat_list );
$eshopping_cart_1_custom_sec = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_1_custom_sec', array(
    'title'    => __( 'First Custom Section', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_1_custom_sec );

$eshopping_cart_2_custom_sec = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_2_custom_sec', array(
    'title'    => __( 'Second Custom Section', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_2_custom_sec );

$eshopping_cart_3_custom_sec = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_3_custom_sec', array(
    'title'    => __( 'Third Custom Section', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_3_custom_sec );

$eshopping_cart_4_custom_sec = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping_cart_4_custom_sec', array(
    'title'    => __( 'Fourth Custom Section', 'eshopping-cart' ),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 4,
  ));
$wp_customize->add_section( $eshopping_cart_4_custom_sec );
//section ordering
$eshopping_cart_section_order = new EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-section-order', array(
    'title'    => __('Section Ordering', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-frontpage',
    'priority' => 6,
));
$wp_customize->add_section($eshopping_cart_section_order);
/******************/
// Color Option
/******************/
$wp_customize->add_panel( 'eshopping-cart-panel-color-background', array(
        'priority' => 22,
        'title'    => __( 'Total Color & BG Options', 'eshopping-cart' ),
    ) );
// Section gloab color and background
$wp_customize->add_section('eshopping-cart-gloabal-color', array(
    'title'    => __('Global Colors', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'priority' => 1,
));
//header
$eshopping_cart_header_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-header-color', array(
    'title'    => __('Header', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $eshopping_cart_header_color );
$eshopping_cart_abv_header_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-abv-header-clr', array(
    'title'    => __('Above Header','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-header-color',
    'priority' => 1,
));
$wp_customize->add_section( $eshopping_cart_abv_header_clr);

$eshopping_cart_main_header_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-main-header-clr', array(
    'title'    => __('Main Header','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-header-color',
    'priority' => 2,
));
$wp_customize->add_section( $eshopping_cart_main_header_clr);

$eshopping_cart_below_header_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-below-header-clr', array(
    'title'    => __('Below Header','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-header-color',
    'priority' => 3,
));
$wp_customize->add_section( $eshopping_cart_below_header_clr);

$eshopping_cart_icon_header_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-icon-header-clr', array(
    'title'    => __('Square Icon','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-header-color',
    'priority' => 4,
));
$wp_customize->add_section( $eshopping_cart_icon_header_clr);
$eshopping_cart_menu_header_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-menu-header-clr', array(
    'title'    => __('Main Menu','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-header-color',
    'priority' => 4,
));
$wp_customize->add_section( $eshopping_cart_menu_header_clr);

$eshopping_cart_sticky_header_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-sticky-header-clr', array(
    'title'    => __('Sticky Header','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-header-color',
    'priority' => 2,
));
$wp_customize->add_section($eshopping_cart_sticky_header_clr);


$eshopping_cart_mobile_pan_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-mobile-pan-clr', array(
    'title'    => __('Mobile','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-header-color',
    'priority' => 2,
));
$wp_customize->add_section($eshopping_cart_mobile_pan_clr);

$eshopping_cart_canvas_pan_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-canvas-pan-clr', array(
    'title'    => __('Off Canvas Sidebar','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-header-color',
    'priority' => 2,
));
$wp_customize->add_section($eshopping_cart_canvas_pan_clr);

$eshopping_cart_main_header_header_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-main-header-header-clr', array(
    'title'    => __('Header','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-main-header-clr',
    'priority' => 2,
));
$wp_customize->add_section($eshopping_cart_main_header_header_clr);

// main-menu
$eshopping_cart_main_header_menu_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-main-header-menu-clr', array(
    'title'    => __('Main Menu','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-main-header-clr',
    'priority' => 2,
));
$wp_customize->add_section($eshopping_cart_main_header_menu_clr);

// header category
$eshopping_cart_main_header_cat_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-main-header-cat-clr', array(
    'title'    => __('Category','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-main-header-clr',
    'priority' => 3,
));
$wp_customize->add_section($eshopping_cart_main_header_cat_clr);
// header search
$eshopping_cart_main_header_srch_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-main-header-srch-clr', array(
    'title'    => __('Search','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-main-header-clr',
    'priority' => 4,
));
$wp_customize->add_section($eshopping_cart_main_header_srch_clr);
//Shop Icon
$eshopping_cart_main_header_shp_icon = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-main-header-shp-icon', array(
    'title'    => __('Shop Icon','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-main-header-clr',
    'priority' => 5,
));
$wp_customize->add_section($eshopping_cart_main_header_shp_icon);
/****************/
//Sidebar
/****************/
$eshopping_cart_sidebar_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-sidebar-color', array(
    'title'    => __('Sidebar', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $eshopping_cart_sidebar_color );
/****************/
//footer
/****************/
$eshopping_cart_footer_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-footer-color', array(
    'title'    => __('Footer', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'priority' => 1,
));
$wp_customize->add_section( $eshopping_cart_footer_color );

$eshopping_cart_abv_footer_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-abv-footer-clr', array(
    'title'    => __('Above Footer','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-footer-color',
    'priority' => 1,
));
$wp_customize->add_section( $eshopping_cart_abv_footer_clr);

$eshopping_cart_footer_widget_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-footer-widget-clr', array(
    'title'    => __('Footer Widget','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-footer-color',
    'priority' => 2,
));
$wp_customize->add_section($eshopping_cart_footer_widget_clr);

$eshopping_cart_btm_footer_clr = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-btm-footer-clr', array(
    'title'    => __('Bottom Footer','eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-footer-color',
    'priority' => 3,
));
$wp_customize->add_section( $eshopping_cart_btm_footer_clr);

/****************/
//Woocommerce color
/****************/
$eshopping_cart_woo_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-woo-color', array(
    'title'    => __('Woocommerce', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'priority' => 6,
));
$wp_customize->add_section( $eshopping_cart_woo_color );
// product
$eshopping_cart_woo_prdct_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-woo-prdct-color', array(
    'title'    => __('Product', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-woo-color',
    'priority' => 1,
));
$wp_customize->add_section( $eshopping_cart_woo_prdct_color );
// shopping cart
$eshopping_cart_woo_cart_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-woo-cart-color', array(
    'title'    => __('Shopping Cart', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-woo-color',
    'priority' => 1,
));
$wp_customize->add_section( $eshopping_cart_woo_cart_color );

// sale
$eshopping_cart_woo_prdct_sale_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-woo-prdct-sale-color', array(
    'title'    => __('Sale Badge', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-woo-color',
    'priority' => 2,
));
$wp_customize->add_section( $eshopping_cart_woo_prdct_sale_color );
// single product
$eshopping_cart_woo_prdct_single_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-woo-prdct-single-color', array(
    'title'    => __('Single Product', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-woo-color',
    'priority' => 3,
));
$wp_customize->add_section( $eshopping_cart_woo_prdct_single_color );

/*************************/
// Frontpage
/*************************/
$eshopping_cart_front_page_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-front-page-color', array(
    'title'    => __('Frontpage', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'priority' => 4,
));
$wp_customize->add_section($eshopping_cart_front_page_color);

$eshopping_cart_top_slider_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-top-slider-color', array(
    'title'    => __('Top Slider', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 1,
));
$wp_customize->add_section($eshopping_cart_top_slider_color);

$eshopping_cart_cat_slider_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-cat-slider-color', array(
    'title'    => __('Woo Category', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 2,
));
$wp_customize->add_section($eshopping_cart_cat_slider_color);

$eshopping_cart_product_slider_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-product-slider-color', array(
    'title'    => __('Product Carousel', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 3,
));
$wp_customize->add_section($eshopping_cart_product_slider_color);

$eshopping_cart_product_cat_slide_tab_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-product-cat-slide-tab-color', array(
    'title'    => __('Tabbed Product Carousel', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 3,
));
$wp_customize->add_section($eshopping_cart_product_cat_slide_tab_color);

$eshopping_cart_product_list_slide_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-product-list-slide-color', array(
    'title'    => __('News & Blogs', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 4,
));
$wp_customize->add_section($eshopping_cart_product_list_slide_color);

$eshopping_cart_product_list_tab_slide_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-product-list-tab-slide-color', array(
    'title'    => __('Tabbed Product List Carousel', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 5,
));
$wp_customize->add_section($eshopping_cart_product_list_tab_slide_color);

$eshopping_cart_banner_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-banner-color', array(
    'title'    => __('Banner', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($eshopping_cart_banner_color);

$eshopping_cart_ribbon_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-ribbon-color', array(
    'title'    => __('Ribbon', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($eshopping_cart_ribbon_color);

$eshopping_cart_brand_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-brand-color', array(
    'title'    => __('Brand', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($eshopping_cart_brand_color);

$eshopping_cart_highlight_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-highlight-color', array(
    'title'    => __('Highlight', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($eshopping_cart_highlight_color);
$eshopping_cart_tabimgprd_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-tabimgprd-color', array(
    'title'    => __('Product Tab Image', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($eshopping_cart_tabimgprd_color);
$eshopping_cart_big_featured_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-big-featured-color', array(
    'title'    => __('Big Featured Product', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($eshopping_cart_big_featured_color);
/****************/
//custom section
/****************/
$eshopping_cart_custom_one_color = new EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-custom-one-color', array(
    'title'    => __('Custom Section', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($eshopping_cart_custom_one_color);

$eshopping_cart_custom_two_color = new EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-custom-two-color', array(
    'title'    => __('Custom Section Two', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($eshopping_cart_custom_two_color);

$eshopping_cart_custom_three_color = new EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-custom-three-color', array(
    'title'    => __('Custom Section Three', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($eshopping_cart_custom_three_color);


$eshopping_cart_custom_four_color = new EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-custom-four-color', array(
    'title'    => __('Custom Section Four', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'section'  => 'eshopping-cart-front-page-color',
    'priority' => 6,
));
$wp_customize->add_section($eshopping_cart_custom_four_color);

// pan color
$eshopping_cart_pan_color = new  EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-pan-color', array(
    'title'    => __('Pan / Mobile Menu Color', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'priority' => 5,
));
$wp_customize->add_section( $eshopping_cart_pan_color);
/*********************/
// Page Content Color
/*********************/
$eshopping_cart_custom_page_content_color = new EShopping_Cart_WP_Customize_Section($wp_customize,'eshopping-cart-page-content-color', array(
    'title'    => __('Content Color', 'eshopping-cart'),
    'panel'    => 'eshopping-cart-panel-color-background',
    'priority' => 2,
));
$wp_customize->add_section($eshopping_cart_custom_page_content_color);
/******************/
// Shop Page
/******************/
$eshopping_cart_woo_shop = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping-cart-woo-shop', array(
    'title'    => __( 'Product Style', 'eshopping-cart' ),
     'panel'    => 'woocommerce',
     'priority' => 2,
));
$wp_customize->add_section( $eshopping_cart_woo_shop );

$eshopping_cart_woo_single_product = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping-cart-woo-single-product', array(
    'title'    => __( 'Single Product', 'eshopping-cart' ),
     'panel'    => 'woocommerce',
     'priority' => 3,
));
$wp_customize->add_section($eshopping_cart_woo_single_product );

$eshopping_cart_woo_cart_page = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping-cart-woo-cart-page', array(
    'title'    => __( 'Cart Page', 'eshopping-cart' ),
     'panel'    => 'woocommerce',
     'priority' => 4,
));
$wp_customize->add_section($eshopping_cart_woo_cart_page);

$eshopping_cart_woo_shop_page = new EShopping_Cart_WP_Customize_Section( $wp_customize, 'eshopping-cart-woo-shop-page', array(
    'title'    => __( 'Shop Page', 'eshopping-cart' ),
     'panel'    => 'woocommerce',
     'priority' => 4,
));
$wp_customize->add_section($eshopping_cart_woo_shop_page);