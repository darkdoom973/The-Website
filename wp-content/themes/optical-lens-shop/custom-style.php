<?php

	$optical_lens_shop_custom_css= "";

	/*-------------------- First Highlight Color -------------------*/

	$optical_lens_shop_first_color = get_theme_mod('optical_lens_shop_first_color');

	if($optical_lens_shop_first_color != false){
		$optical_lens_shop_custom_css .='.principle-box:hover .principle-box-inner-img, .more-btn a, #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, #footer input[type="submit"], #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .scrollup i:hover, #sidebar .custom-social-icons a,#footer .custom-social-icons a, #sidebar h3,  #sidebar .widget_block h3, #sidebar h2, .pagination span, .pagination a, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, .scrollup i, .pagination a:hover, .pagination .current, #sidebar .tagcloud a:hover, #main-product button.tablinks.active, .main-product-section .pro-button, .main-product-section:hover .the_timer, nav.woocommerce-MyAccount-navigation ul li:hover, #preloader, .event-btn-1 a, .event-btn-2 a:hover, .middle-header .cart-value, .middle-header .wishlist-counter, #slider .slider-btn a:hover, .product-btn a:hover, #sidebar label.wp-block-search__label, .bradcrumbs span, .bradcrumbs a, .post-categories li a, .bradcrumbs a, .post-categories li a, .wp-block-tag-cloud a:hover, .bradcrumbs a:hover, .post-categories li a:hover, .wp-block-button__link{';
			$optical_lens_shop_custom_css .='background: '.esc_attr($optical_lens_shop_first_color).';';
		$optical_lens_shop_custom_css .='}';
	}

	if($optical_lens_shop_first_color != false){
		$optical_lens_shop_custom_css .='.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wc-block-components-order-summary-item__quantity,#sidebar .custom-social-icons a:hover, #footer .custom-social-icons a:hover, #footer input[type="submit"]:hover,.wc-block-grid__product-onsale,.toggle-nav i{';
			$optical_lens_shop_custom_css .='background: '.esc_attr($optical_lens_shop_first_color).'!important;';
		$optical_lens_shop_custom_css .='}';
	}

	if($optical_lens_shop_first_color != false){
		$optical_lens_shop_custom_css .='a, .main-header span.donate a:hover, .main-header span.volunteer a:hover, .main-header span.donate i:hover, .main-header span.volunteer i:hover, .box-content h3, .box-content h3 a, .woocommerce-message::before,.woocommerce-info::before,.post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .main-navigation ul li.current_page_item, .main-navigation li a:hover,.countdowntimer .count, .main-navigation ul ul li a:hover, .main-navigation li a:focus, .main-navigation ul ul a:focus, .main-navigation ul ul a:hover, p.site-title a:hover, .logo h1 a:hover, #slider .inner_carousel h1 a:hover, .post-navigation span.meta-nav:hover, #footer .wp-block-button.aligncenter, .wp-block-calendar a, #footer .wp-block-button.aligncenter, .wp-block-calendar a:hover,.post-main-box:hover h3 a, #sidebar ul li a:hover, #footer li a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .post-navigation a:hover, .post-navigation a:focus{';
			$optical_lens_shop_custom_css .='color: '.esc_attr($optical_lens_shop_first_color).';';
		$optical_lens_shop_custom_css .='}';
	}

	if($optical_lens_shop_first_color != false){
		$optical_lens_shop_custom_css .='.middle-header .woocommerce-product-search{';
			$optical_lens_shop_custom_css .='border:1px solid '.esc_attr($optical_lens_shop_first_color).';';
		$optical_lens_shop_custom_css .='}';
	}
	if($optical_lens_shop_first_color != false){
		$optical_lens_shop_custom_css .='.wc-block-grid__product-onsale{';
			$optical_lens_shop_custom_css .='border-color:'.esc_attr($optical_lens_shop_first_color).'!important;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_custom_css .='}';

	/*--------------------- Grid Posts Posts -------------------*/

	$optical_lens_shop_display_grid_posts_settings1 = get_theme_mod( 'optical_lens_shop_display_grid_posts_settings1','Into Blocks');
    if($optical_lens_shop_display_grid_posts_settings1 == 'Without Blocks'){
		$optical_lens_shop_custom_css .='.grid-post-main-box{';
			$optical_lens_shop_custom_css .='box-shadow: none !important; border: none; margin:30px 0;';
		$optical_lens_shop_custom_css .='}';
	}


	/*---------------------------Width Layout -------------------*/

	$optical_lens_shop_theme_lay = get_theme_mod( 'optical_lens_shop_width_option','Full Width');
    if($optical_lens_shop_theme_lay == 'Boxed'){
		$optical_lens_shop_custom_css .='body{';
			$optical_lens_shop_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='.scrollup i{';
			$optical_lens_shop_custom_css .='right: 100px;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='.row.outer-logo{';
			$optical_lens_shop_custom_css .='margin-left: 0px;';
		$optical_lens_shop_custom_css .='}';
	}else if($optical_lens_shop_theme_lay == 'Wide Width'){
		$optical_lens_shop_custom_css .='body{';
			$optical_lens_shop_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='.scrollup i{';
			$optical_lens_shop_custom_css .='right: 30px;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='.row.outer-logo{';
			$optical_lens_shop_custom_css .='margin-left: 0px;';
		$optical_lens_shop_custom_css .='}';
	}else if($optical_lens_shop_theme_lay == 'Full Width'){
		$optical_lens_shop_custom_css .='body{';
			$optical_lens_shop_custom_css .='max-width: 100%;';
		$optical_lens_shop_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$optical_lens_shop_slider_height = get_theme_mod('optical_lens_shop_slider_height');
	if($optical_lens_shop_slider_height != false){
		$optical_lens_shop_custom_css .='#slider img{';
			$optical_lens_shop_custom_css .='height: '.esc_attr($optical_lens_shop_slider_height).';';
		$optical_lens_shop_custom_css .='}';
	}

	/*----------------- Slider Content Layout -------------------*/

	$optical_lens_shop_theme_lay = get_theme_mod( 'optical_lens_shop_slider_content_option','Left');
    if($optical_lens_shop_theme_lay == 'Left'){
		$optical_lens_shop_custom_css .='#slider .carousel-caption{';
			$optical_lens_shop_custom_css .='text-align:left; left: 15%;';
		$optical_lens_shop_custom_css .='}';
	}else if($optical_lens_shop_theme_lay == 'Center'){
		$optical_lens_shop_custom_css .='#slider .carousel-caption{';
			$optical_lens_shop_custom_css .='text-align:center; right: 25%; left: 25%;';
		$optical_lens_shop_custom_css .='}';
	}else if($optical_lens_shop_theme_lay == 'Right'){
		$optical_lens_shop_custom_css .='#slider .carousel-caption{';
			$optical_lens_shop_custom_css .='text-align:center; right: 10%; left: 50%;';
		$optical_lens_shop_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$optical_lens_shop_slider_content_padding_top_bottom = get_theme_mod('optical_lens_shop_slider_content_padding_top_bottom');
	$optical_lens_shop_slider_content_padding_left_right = get_theme_mod('optical_lens_shop_slider_content_padding_left_right');
	if($optical_lens_shop_slider_content_padding_top_bottom != false || $optical_lens_shop_slider_content_padding_left_right != false){
		$optical_lens_shop_custom_css .='#slider .carousel-caption{';
			$optical_lens_shop_custom_css .='top: '.esc_attr($optical_lens_shop_slider_content_padding_top_bottom).'; bottom: '.esc_attr($optical_lens_shop_slider_content_padding_top_bottom).';left: '.esc_attr($optical_lens_shop_slider_content_padding_left_right).';right: '.esc_attr($optical_lens_shop_slider_content_padding_left_right).';';
		$optical_lens_shop_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$optical_lens_shop_theme_lay = get_theme_mod( 'optical_lens_shop_slider_opacity_color','');
	if($optical_lens_shop_theme_lay == '0'){
		$optical_lens_shop_custom_css .='#slider img{';
			$optical_lens_shop_custom_css .='opacity:0';
		$optical_lens_shop_custom_css .='}';
		}else if($optical_lens_shop_theme_lay == '0.1'){
		$optical_lens_shop_custom_css .='#slider img{';
			$optical_lens_shop_custom_css .='opacity:0.1';
		$optical_lens_shop_custom_css .='}';
		}else if($optical_lens_shop_theme_lay == '0.2'){
		$optical_lens_shop_custom_css .='#slider img{';
			$optical_lens_shop_custom_css .='opacity:0.2';
		$optical_lens_shop_custom_css .='}';
		}else if($optical_lens_shop_theme_lay == '0.3'){
		$optical_lens_shop_custom_css .='#slider img{';
			$optical_lens_shop_custom_css .='opacity:0.3';
		$optical_lens_shop_custom_css .='}';
		}else if($optical_lens_shop_theme_lay == '0.4'){
		$optical_lens_shop_custom_css .='#slider img{';
			$optical_lens_shop_custom_css .='opacity:0.4';
		$optical_lens_shop_custom_css .='}';
		}else if($optical_lens_shop_theme_lay == '0.5'){
		$optical_lens_shop_custom_css .='#slider img{';
			$optical_lens_shop_custom_css .='opacity:0.5';
		$optical_lens_shop_custom_css .='}';
		}else if($optical_lens_shop_theme_lay == '0.6'){
		$optical_lens_shop_custom_css .='#slider img{';
			$optical_lens_shop_custom_css .='opacity:0.6';
		$optical_lens_shop_custom_css .='}';
		}else if($optical_lens_shop_theme_lay == '0.7'){
		$optical_lens_shop_custom_css .='#slider img{';
			$optical_lens_shop_custom_css .='opacity:0.7';
		$optical_lens_shop_custom_css .='}';
		}else if($optical_lens_shop_theme_lay == '0.8'){
		$optical_lens_shop_custom_css .='#slider img{';
			$optical_lens_shop_custom_css .='opacity:0.8';
		$optical_lens_shop_custom_css .='}';
		}else if($optical_lens_shop_theme_lay == '0.9'){
		$optical_lens_shop_custom_css .='#slider img{';
			$optical_lens_shop_custom_css .='opacity:0.9';
		$optical_lens_shop_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$optical_lens_shop_slider_image_overlay = get_theme_mod('optical_lens_shop_slider_image_overlay', true);
	if($optical_lens_shop_slider_image_overlay == false){
		$optical_lens_shop_custom_css .='#slider img{';
			$optical_lens_shop_custom_css .='opacity:1;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_slider_image_overlay_color = get_theme_mod('optical_lens_shop_slider_image_overlay_color', true);
	if($optical_lens_shop_slider_image_overlay_color != false){
		$optical_lens_shop_custom_css .='#slider{';
			$optical_lens_shop_custom_css .='background-color: '.esc_attr($optical_lens_shop_slider_image_overlay_color).';';
		$optical_lens_shop_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$optical_lens_shop_resp_slider = get_theme_mod( 'optical_lens_shop_resp_slider_hide_show',true);
	if($optical_lens_shop_resp_slider == true && get_theme_mod( 'optical_lens_shop_slider_hide_show', false) == false){
    	$optical_lens_shop_custom_css .='#slider{';
			$optical_lens_shop_custom_css .='display:none;';
		$optical_lens_shop_custom_css .='} ';
	}
    if($optical_lens_shop_resp_slider == true){
    	$optical_lens_shop_custom_css .='@media screen and (max-width:575px) {';
		$optical_lens_shop_custom_css .='#slider{';
			$optical_lens_shop_custom_css .='display:block;';
		$optical_lens_shop_custom_css .='} }';
	}else if($optical_lens_shop_resp_slider == false){
		$optical_lens_shop_custom_css .='@media screen and (max-width:575px) {';
		$optical_lens_shop_custom_css .='#slider{';
			$optical_lens_shop_custom_css .='display:none;';
		$optical_lens_shop_custom_css .='} }';
		$optical_lens_shop_custom_css .='@media screen and (max-width:575px){';
		$optical_lens_shop_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
			$optical_lens_shop_custom_css .='margin-top: 45px;';
		$optical_lens_shop_custom_css .='} }';
	}

	$optical_lens_shop_resp_sidebar = get_theme_mod( 'optical_lens_shop_sidebar_hide_show',true);
    if($optical_lens_shop_resp_sidebar == true){
    	$optical_lens_shop_custom_css .='@media screen and (max-width:575px) {';
		$optical_lens_shop_custom_css .='#sidebar{';
			$optical_lens_shop_custom_css .='display:block;';
		$optical_lens_shop_custom_css .='} }';
	}else if($optical_lens_shop_resp_sidebar == false){
		$optical_lens_shop_custom_css .='@media screen and (max-width:575px) {';
		$optical_lens_shop_custom_css .='#sidebar{';
			$optical_lens_shop_custom_css .='display:none;';
		$optical_lens_shop_custom_css .='} }';
	}

	$optical_lens_shop_resp_scroll_top = get_theme_mod( 'optical_lens_shop_resp_scroll_top_hide_show',true);
	if($optical_lens_shop_resp_scroll_top == true && get_theme_mod( 'optical_lens_shop_hide_show_scroll',true) == false){
    	$optical_lens_shop_custom_css .='.scrollup i{';
			$optical_lens_shop_custom_css .='visibility:hidden !important;';
		$optical_lens_shop_custom_css .='} ';
	}
    if($optical_lens_shop_resp_scroll_top == true){
    	$optical_lens_shop_custom_css .='@media screen and (max-width:575px) {';
		$optical_lens_shop_custom_css .='.scrollup i{';
			$optical_lens_shop_custom_css .='visibility:visible !important;';
		$optical_lens_shop_custom_css .='} }';
	}else if($optical_lens_shop_resp_scroll_top == false){
		$optical_lens_shop_custom_css .='@media screen and (max-width:575px){';
		$optical_lens_shop_custom_css .='.scrollup i{';
			$optical_lens_shop_custom_css .='visibility:hidden !important;';
		$optical_lens_shop_custom_css .='} }';
	}

	/*-------------- Copyright Alignment ----------------*/

	$optical_lens_shop_copyright_alingment = get_theme_mod('optical_lens_shop_copyright_alingment');
	if($optical_lens_shop_copyright_alingment != false){
		$optical_lens_shop_custom_css .='.copyright p{';
			$optical_lens_shop_custom_css .='text-align: '.esc_attr($optical_lens_shop_copyright_alingment).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_copyright_background_color = get_theme_mod('optical_lens_shop_copyright_background_color');
	if($optical_lens_shop_copyright_background_color != false){
		$optical_lens_shop_custom_css .='#footer-2{';
			$optical_lens_shop_custom_css .='background-color: '.esc_attr($optical_lens_shop_copyright_background_color).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_footer_background_color = get_theme_mod('optical_lens_shop_footer_background_color');
	if($optical_lens_shop_footer_background_color != false){
		$optical_lens_shop_custom_css .='#footer{';
			$optical_lens_shop_custom_css .='background-color: '.esc_attr($optical_lens_shop_footer_background_color).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_footer_widgets_heading = get_theme_mod( 'optical_lens_shop_footer_widgets_heading','Left');
    if($optical_lens_shop_footer_widgets_heading == 'Left'){
		$optical_lens_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$optical_lens_shop_custom_css .='text-align: left;';
		$optical_lens_shop_custom_css .='}';
	}else if($optical_lens_shop_footer_widgets_heading == 'Center'){
		$optical_lens_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$optical_lens_shop_custom_css .='text-align: center;';
		$optical_lens_shop_custom_css .='}';
	}else if($optical_lens_shop_footer_widgets_heading == 'Right'){
		$optical_lens_shop_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$optical_lens_shop_custom_css .='text-align: right;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_footer_widgets_content = get_theme_mod( 'optical_lens_shop_footer_widgets_content','Left');
    if($optical_lens_shop_footer_widgets_content == 'Left'){
		$optical_lens_shop_custom_css .='#footer .widget{';
		$optical_lens_shop_custom_css .='text-align: left;';
		$optical_lens_shop_custom_css .='}';
	}else if($optical_lens_shop_footer_widgets_content == 'Center'){
		$optical_lens_shop_custom_css .='#footer .widget{';
			$optical_lens_shop_custom_css .='text-align: center;';
		$optical_lens_shop_custom_css .='}';
	}else if($optical_lens_shop_footer_widgets_content == 'Right'){
		$optical_lens_shop_custom_css .='#footer .widget{';
			$optical_lens_shop_custom_css .='text-align: right;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_copyright_font_size = get_theme_mod('optical_lens_shop_copyright_font_size');
	if($optical_lens_shop_copyright_font_size != false){
		$optical_lens_shop_custom_css .='#footer-2 a, #footer-2 p{';
			$optical_lens_shop_custom_css .='font-size: '.esc_attr($optical_lens_shop_copyright_font_size).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_copyright_alingment = get_theme_mod('optical_lens_shop_copyright_alingment');
	if($optical_lens_shop_copyright_alingment != false){
		$optical_lens_shop_custom_css .='#footer-2 p{';
			$optical_lens_shop_custom_css .='text-align: '.esc_attr($optical_lens_shop_copyright_alingment).';';
		$optical_lens_shop_custom_css .='}';
	}
	$optical_lens_shop_copyright_padding_top_bottom = get_theme_mod('optical_lens_shop_copyright_padding_top_bottom');
	if($optical_lens_shop_copyright_padding_top_bottom != false){
		$optical_lens_shop_custom_css .='#footer-2{';
			$optical_lens_shop_custom_css .='padding-top: '.esc_attr($optical_lens_shop_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($optical_lens_shop_copyright_padding_top_bottom).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_footer_padding = get_theme_mod('optical_lens_shop_footer_padding');
	if($optical_lens_shop_footer_padding != false){
		$optical_lens_shop_custom_css .='#footer{';
			$optical_lens_shop_custom_css .='padding: '.esc_attr($optical_lens_shop_footer_padding).' 0;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_footer_background_image = get_theme_mod('optical_lens_shop_footer_background_image');
	if($optical_lens_shop_footer_background_image != false){
		$optical_lens_shop_custom_css .='#footer{';
			$optical_lens_shop_custom_css .='background: url('.esc_attr($optical_lens_shop_footer_background_image).');';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_theme_lay = get_theme_mod( 'optical_lens_shop_img_footer','scroll');
	if($optical_lens_shop_theme_lay == 'fixed'){
		$optical_lens_shop_custom_css .='#footer{';
			$optical_lens_shop_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$optical_lens_shop_custom_css .='}';
	}elseif ($optical_lens_shop_theme_lay == 'scroll'){
		$optical_lens_shop_custom_css .='#footer{';
			$optical_lens_shop_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_footer_img_position = get_theme_mod('optical_lens_shop_footer_img_position','center center');
	if($optical_lens_shop_footer_img_position != false){
		$optical_lens_shop_custom_css .='#footer{';
			$optical_lens_shop_custom_css .='background-position: '.esc_attr($optical_lens_shop_footer_img_position).'!important;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_copyright_font_weight = get_theme_mod('optical_lens_shop_copyright_font_weight');
	if($optical_lens_shop_copyright_font_weight != false){
		$optical_lens_shop_custom_css .='.copyright p, .copyright a{';
			$optical_lens_shop_custom_css .='font-weight: '.esc_attr($optical_lens_shop_copyright_font_weight).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_copyright_text_color = get_theme_mod('optical_lens_shop_copyright_text_color');
	if($optical_lens_shop_copyright_text_color != false){
		$optical_lens_shop_custom_css .='.copyright p, .copyright a{';
			$optical_lens_shop_custom_css .='color: '.esc_attr($optical_lens_shop_copyright_text_color).';';
		$optical_lens_shop_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$optical_lens_shop_site_title_font_size = get_theme_mod('optical_lens_shop_site_title_font_size');
	if($optical_lens_shop_site_title_font_size != false){
		$optical_lens_shop_custom_css .='.logo h1, .logo p.site-title{';
			$optical_lens_shop_custom_css .='font-size: '.esc_attr($optical_lens_shop_site_title_font_size).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_site_tagline_font_size = get_theme_mod('optical_lens_shop_site_tagline_font_size');
	if($optical_lens_shop_site_tagline_font_size != false){
		$optical_lens_shop_custom_css .='.logo p.site-description{';
			$optical_lens_shop_custom_css .='font-size: '.esc_attr($optical_lens_shop_site_tagline_font_size).';';
		$optical_lens_shop_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$optical_lens_shop_preloader_bg_color = get_theme_mod('optical_lens_shop_preloader_bg_color');
	if($optical_lens_shop_preloader_bg_color != false){
		$optical_lens_shop_custom_css .='#preloader{';
			$optical_lens_shop_custom_css .='background-color: '.esc_attr($optical_lens_shop_preloader_bg_color).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_preloader_border_color = get_theme_mod('optical_lens_shop_preloader_border_color');
	if($optical_lens_shop_preloader_border_color != false){
		$optical_lens_shop_custom_css .='.loader-line{';
			$optical_lens_shop_custom_css .='border-color: '.esc_attr($optical_lens_shop_preloader_border_color).'!important;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_preloader_bg_img = get_theme_mod('optical_lens_shop_preloader_bg_img');
	if($optical_lens_shop_preloader_bg_img != false){
		$optical_lens_shop_custom_css .='#preloader{';
			$optical_lens_shop_custom_css .='background: url('.esc_attr($optical_lens_shop_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$optical_lens_shop_custom_css .='}';
	}
	
	/*----------------Social Icons Settings ------------------*/

	$optical_lens_shop_social_icon_font_size = get_theme_mod('optical_lens_shop_social_icon_font_size');
	if($optical_lens_shop_social_icon_font_size != false){
		$optical_lens_shop_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$optical_lens_shop_custom_css .='font-size: '.esc_attr($optical_lens_shop_social_icon_font_size).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_social_icon_padding = get_theme_mod('optical_lens_shop_social_icon_padding');
	if($optical_lens_shop_social_icon_padding != false){
		$optical_lens_shop_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$optical_lens_shop_custom_css .='padding: '.esc_attr($optical_lens_shop_social_icon_padding).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_social_icon_width = get_theme_mod('optical_lens_shop_social_icon_width');
	if($optical_lens_shop_social_icon_width != false){
		$optical_lens_shop_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$optical_lens_shop_custom_css .='width: '.esc_attr($optical_lens_shop_social_icon_width).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_social_icon_height = get_theme_mod('optical_lens_shop_social_icon_height');
	if($optical_lens_shop_social_icon_height != false){
		$optical_lens_shop_custom_css .='#sidebar .custom-social-icons i, #footer-2 .custom-social-icons i{';
			$optical_lens_shop_custom_css .='height: '.esc_attr($optical_lens_shop_social_icon_height).';';
		$optical_lens_shop_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$optical_lens_shop_scroll_to_top_font_size = get_theme_mod('optical_lens_shop_scroll_to_top_font_size');
	if($optical_lens_shop_scroll_to_top_font_size != false){
		$optical_lens_shop_custom_css .='.scrollup i{';
			$optical_lens_shop_custom_css .='font-size: '.esc_attr($optical_lens_shop_scroll_to_top_font_size).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_scroll_to_top_padding = get_theme_mod('optical_lens_shop_scroll_to_top_padding');
	$optical_lens_shop_scroll_to_top_padding = get_theme_mod('optical_lens_shop_scroll_to_top_padding');
	if($optical_lens_shop_scroll_to_top_padding != false){
		$optical_lens_shop_custom_css .='.scrollup i{';
			$optical_lens_shop_custom_css .='padding-top: '.esc_attr($optical_lens_shop_scroll_to_top_padding).';padding-bottom: '.esc_attr($optical_lens_shop_scroll_to_top_padding).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_scroll_to_top_width = get_theme_mod('optical_lens_shop_scroll_to_top_width');
	if($optical_lens_shop_scroll_to_top_width != false){
		$optical_lens_shop_custom_css .='.scrollup i{';
			$optical_lens_shop_custom_css .='width: '.esc_attr($optical_lens_shop_scroll_to_top_width).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_scroll_to_top_height = get_theme_mod('optical_lens_shop_scroll_to_top_height');
	if($optical_lens_shop_scroll_to_top_height != false){
		$optical_lens_shop_custom_css .='.scrollup i{';
			$optical_lens_shop_custom_css .='height: '.esc_attr($optical_lens_shop_scroll_to_top_height).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_scroll_to_top_border_radius = get_theme_mod('optical_lens_shop_scroll_to_top_border_radius');
	if($optical_lens_shop_scroll_to_top_border_radius != false){
		$optical_lens_shop_custom_css .='.scrollup i{';
			$optical_lens_shop_custom_css .='border-radius: '.esc_attr($optical_lens_shop_scroll_to_top_border_radius).'px;';
		$optical_lens_shop_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$optical_lens_shop_theme_lay = get_theme_mod( 'optical_lens_shop_blog_layout_option','Default');
    if($optical_lens_shop_theme_lay == 'Default'){
		$optical_lens_shop_custom_css .='.post-main-box{';
			$optical_lens_shop_custom_css .='';
		$optical_lens_shop_custom_css .='}';
	}else if($optical_lens_shop_theme_lay == 'Center'){
		$optical_lens_shop_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$optical_lens_shop_custom_css .='text-align:center;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='.post-info{';
			$optical_lens_shop_custom_css .='margin-top:10px;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='.post-info hr{';
			$optical_lens_shop_custom_css .='margin:15px auto;';
		$optical_lens_shop_custom_css .='}';
	}else if($optical_lens_shop_theme_lay == 'Left'){
		$optical_lens_shop_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$optical_lens_shop_custom_css .='text-align:Left;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='.post-info hr{';
			$optical_lens_shop_custom_css .='margin-bottom:10px;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='.post-main-box h2{';
			$optical_lens_shop_custom_css .='margin-top:10px;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='.service-text .more-btn{';
			$optical_lens_shop_custom_css .='display:inline-block;';
		$optical_lens_shop_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$optical_lens_shop_blog_page_posts_settings = get_theme_mod( 'optical_lens_shop_blog_page_posts_settings','Into Blocks');
    if($optical_lens_shop_blog_page_posts_settings == 'Without Blocks'){
		$optical_lens_shop_custom_css .='.post-main-box{';
			$optical_lens_shop_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$optical_lens_shop_custom_css .='}';
	}

	// featured image dimention
	$optical_lens_shop_blog_post_featured_image_dimension = get_theme_mod('optical_lens_shop_blog_post_featured_image_dimension', 'default');
	$optical_lens_shop_blog_post_featured_image_custom_width = get_theme_mod('optical_lens_shop_blog_post_featured_image_custom_width',250);
	$optical_lens_shop_blog_post_featured_image_custom_height = get_theme_mod('optical_lens_shop_blog_post_featured_image_custom_height',250);
	if($optical_lens_shop_blog_post_featured_image_dimension == 'custom'){
		$optical_lens_shop_custom_css .='.post-main-box img{';
			$optical_lens_shop_custom_css .='width: '.esc_attr($optical_lens_shop_blog_post_featured_image_custom_width).'; height: '.esc_attr($optical_lens_shop_blog_post_featured_image_custom_height).';';
		$optical_lens_shop_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$optical_lens_shop_featured_image_border_radius = get_theme_mod('optical_lens_shop_featured_image_border_radius', 0);
	if($optical_lens_shop_featured_image_border_radius != false){
		$optical_lens_shop_custom_css .='.box-image img, .feature-box img{';
			$optical_lens_shop_custom_css .='border-radius: '.esc_attr($optical_lens_shop_featured_image_border_radius).'px;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_featured_image_box_shadow = get_theme_mod('optical_lens_shop_featured_image_box_shadow',0);
	if($optical_lens_shop_featured_image_box_shadow != false){
		$optical_lens_shop_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$optical_lens_shop_custom_css .='box-shadow: '.esc_attr($optical_lens_shop_featured_image_box_shadow).'px '.esc_attr($optical_lens_shop_featured_image_box_shadow).'px '.esc_attr($optical_lens_shop_featured_image_box_shadow).'px #cccccc;';
		$optical_lens_shop_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$optical_lens_shop_button_letter_spacing = get_theme_mod('optical_lens_shop_button_letter_spacing',14);
	$optical_lens_shop_custom_css .='.post-main-box .more-btn a{';
		$optical_lens_shop_custom_css .='letter-spacing: '.esc_attr($optical_lens_shop_button_letter_spacing).';';
	$optical_lens_shop_custom_css .='}';

	$optical_lens_shop_button_border_radius = get_theme_mod('optical_lens_shop_button_border_radius');
	if($optical_lens_shop_button_border_radius != false){
		$optical_lens_shop_custom_css .='.post-main-box .more-btn a{';
			$optical_lens_shop_custom_css .='border-radius: '.esc_attr($optical_lens_shop_button_border_radius).'px !important;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_button_top_bottom_padding = get_theme_mod('optical_lens_shop_button_top_bottom_padding');
	$optical_lens_shop_button_left_right_padding = get_theme_mod('optical_lens_shop_button_left_right_padding');
	if($optical_lens_shop_button_top_bottom_padding != false || $optical_lens_shop_button_left_right_padding != false){
		$optical_lens_shop_custom_css .='.post-main-box .more-btn a{';
			$optical_lens_shop_custom_css .='padding-top: '.esc_attr($optical_lens_shop_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($optical_lens_shop_button_top_bottom_padding).'!important;padding-left: '.esc_attr($optical_lens_shop_button_left_right_padding).'!important;padding-right: '.esc_attr($optical_lens_shop_button_left_right_padding).'!important;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_button_font_size = get_theme_mod('optical_lens_shop_button_font_size',14);
	$optical_lens_shop_custom_css .='.post-main-box .more-btn a{';
		$optical_lens_shop_custom_css .='font-size: '.esc_attr($optical_lens_shop_button_font_size).';';
	$optical_lens_shop_custom_css .='}';

	$optical_lens_shop_theme_lay = get_theme_mod( 'optical_lens_shop_button_text_transform','Capitalize');
	if($optical_lens_shop_theme_lay == 'Capitalize'){
		$optical_lens_shop_custom_css .='.post-main-box .more-btn a{';
			$optical_lens_shop_custom_css .='text-transform:Capitalize;';
		$optical_lens_shop_custom_css .='}';
	}
	if($optical_lens_shop_theme_lay == 'Lowercase'){
		$optical_lens_shop_custom_css .='.post-main-box .more-btn a{';
			$optical_lens_shop_custom_css .='text-transform:Lowercase;';
		$optical_lens_shop_custom_css .='}';
	}
	if($optical_lens_shop_theme_lay == 'Uppercase'){
		$optical_lens_shop_custom_css .='.post-main-box .more-btn a{';
			$optical_lens_shop_custom_css .='text-transform:Uppercase;';
		$optical_lens_shop_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$optical_lens_shop_single_blog_comment_title = get_theme_mod('optical_lens_shop_single_blog_comment_title', 'Leave a Reply');
	if($optical_lens_shop_single_blog_comment_title == ''){
		$optical_lens_shop_custom_css .='#comments h2#reply-title {';
			$optical_lens_shop_custom_css .='display: none;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_single_blog_comment_button_text = get_theme_mod('optical_lens_shop_single_blog_comment_button_text', 'Post Comment');
	if($optical_lens_shop_single_blog_comment_button_text == ''){
		$optical_lens_shop_custom_css .='#comments p.form-submit {';
			$optical_lens_shop_custom_css .='display: none;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_comment_width = get_theme_mod('optical_lens_shop_single_blog_comment_width');
	if($optical_lens_shop_comment_width != false){
		$optical_lens_shop_custom_css .='#comments textarea{';
			$optical_lens_shop_custom_css .='width: '.esc_attr($optical_lens_shop_comment_width).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_single_blog_post_navigation_show_hide = get_theme_mod('optical_lens_shop_single_blog_post_navigation_show_hide',true);
	if($optical_lens_shop_single_blog_post_navigation_show_hide != true){
		$optical_lens_shop_custom_css .='.post-navigation{';
			$optical_lens_shop_custom_css .='display: none;';
		$optical_lens_shop_custom_css .='}';
	}

	// Header Background Color
	$optical_lens_shop_header_background_color = get_theme_mod('optical_lens_shop_header_background_color');
	if($optical_lens_shop_header_background_color != false){
		$optical_lens_shop_custom_css .='.middle-header{';
			$optical_lens_shop_custom_css .='background-color: '.esc_attr($optical_lens_shop_header_background_color).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_header_img_position = get_theme_mod('optical_lens_shop_header_img_position','center top');
	if($optical_lens_shop_header_img_position != false){
		$optical_lens_shop_custom_css .='.middle-header{';
			$optical_lens_shop_custom_css .='background-position: '.esc_attr($optical_lens_shop_header_img_position).'!important;';
		$optical_lens_shop_custom_css .='}';
	}

	// toggle bg color 
	$optical_lens_shop_resp_menu_toggle_btn_bg_color = get_theme_mod('optical_lens_shop_resp_menu_toggle_btn_bg_color');
	if($optical_lens_shop_resp_menu_toggle_btn_bg_color != false){
		$optical_lens_shop_custom_css .='.toggle-nav i{';
			$optical_lens_shop_custom_css .='background-color: '.esc_attr($optical_lens_shop_resp_menu_toggle_btn_bg_color).'!important;';
		$optical_lens_shop_custom_css .='}';
	}

/*----------------Woocommerce Products Settings ------------------*/

	$optical_lens_shop_related_product_show_hide = get_theme_mod('optical_lens_shop_related_product_show_hide',true);
	if($optical_lens_shop_related_product_show_hide != true){
		$optical_lens_shop_custom_css .='.related.products{';
			$optical_lens_shop_custom_css .='display: none;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_products_padding_top_bottom = get_theme_mod('optical_lens_shop_products_padding_top_bottom');
	if($optical_lens_shop_products_padding_top_bottom != false){
		$optical_lens_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$optical_lens_shop_custom_css .='padding-top: '.esc_attr($optical_lens_shop_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($optical_lens_shop_products_padding_top_bottom).'!important;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_products_padding_left_right = get_theme_mod('optical_lens_shop_products_padding_left_right');
	if($optical_lens_shop_products_padding_left_right != false){
		$optical_lens_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$optical_lens_shop_custom_css .='padding-left: '.esc_attr($optical_lens_shop_products_padding_left_right).'!important; padding-right: '.esc_attr($optical_lens_shop_products_padding_left_right).'!important;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_products_box_shadow = get_theme_mod('optical_lens_shop_products_box_shadow');
	if($optical_lens_shop_products_box_shadow != false){
		$optical_lens_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$optical_lens_shop_custom_css .='box-shadow: '.esc_attr($optical_lens_shop_products_box_shadow).'px '.esc_attr($optical_lens_shop_products_box_shadow).'px '.esc_attr($optical_lens_shop_products_box_shadow).'px #ddd;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_products_border_radius = get_theme_mod('optical_lens_shop_products_border_radius', 0);
	if($optical_lens_shop_products_border_radius != false){
		$optical_lens_shop_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$optical_lens_shop_custom_css .='border-radius: '.esc_attr($optical_lens_shop_products_border_radius).'px;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_products_btn_padding_top_bottom = get_theme_mod('optical_lens_shop_products_btn_padding_top_bottom');
	if($optical_lens_shop_products_btn_padding_top_bottom != false){
		$optical_lens_shop_custom_css .='.woocommerce a.button{';
			$optical_lens_shop_custom_css .='padding-top: '.esc_attr($optical_lens_shop_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($optical_lens_shop_products_btn_padding_top_bottom).' !important;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_products_btn_padding_left_right = get_theme_mod('optical_lens_shop_products_btn_padding_left_right');
	if($optical_lens_shop_products_btn_padding_left_right != false){
		$optical_lens_shop_custom_css .='.woocommerce a.button{';
			$optical_lens_shop_custom_css .='padding-left: '.esc_attr($optical_lens_shop_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($optical_lens_shop_products_btn_padding_left_right).' !important;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_products_button_border_radius = get_theme_mod('optical_lens_shop_products_button_border_radius', 0);
	if($optical_lens_shop_products_button_border_radius != false){
		$optical_lens_shop_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$optical_lens_shop_custom_css .='border-radius: '.esc_attr($optical_lens_shop_products_button_border_radius).'px;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_woocommerce_sale_position = get_theme_mod( 'optical_lens_shop_woocommerce_sale_position','right');
    if($optical_lens_shop_woocommerce_sale_position == 'left'){
		$optical_lens_shop_custom_css .='.woocommerce ul.products li.product .onsale{';
			$optical_lens_shop_custom_css .='left: -10px !important; right: auto !important;';
		$optical_lens_shop_custom_css .='}';
	}else if($optical_lens_shop_woocommerce_sale_position == 'right'){
		$optical_lens_shop_custom_css .='.woocommerce ul.products li.product .onsale{';
			$optical_lens_shop_custom_css .='left: auto !important; right: 0 !important;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_woocommerce_sale_font_size = get_theme_mod('optical_lens_shop_woocommerce_sale_font_size');
	if($optical_lens_shop_woocommerce_sale_font_size != false){
		$optical_lens_shop_custom_css .='.woocommerce span.onsale{';
			$optical_lens_shop_custom_css .='font-size: '.esc_attr($optical_lens_shop_woocommerce_sale_font_size).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_woocommerce_sale_padding_top_bottom = get_theme_mod('optical_lens_shop_woocommerce_sale_padding_top_bottom');
	if($optical_lens_shop_woocommerce_sale_padding_top_bottom != false){
		$optical_lens_shop_custom_css .='.woocommerce span.onsale{';
			$optical_lens_shop_custom_css .='padding-top: '.esc_attr($optical_lens_shop_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($optical_lens_shop_woocommerce_sale_padding_top_bottom).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_woocommerce_sale_padding_left_right = get_theme_mod('optical_lens_shop_woocommerce_sale_padding_left_right');
	if($optical_lens_shop_woocommerce_sale_padding_left_right != false){
		$optical_lens_shop_custom_css .='.woocommerce span.onsale{';
			$optical_lens_shop_custom_css .='padding-left: '.esc_attr($optical_lens_shop_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($optical_lens_shop_woocommerce_sale_padding_left_right).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_woocommerce_sale_border_radius = get_theme_mod('optical_lens_shop_woocommerce_sale_border_radius', 100);
	if($optical_lens_shop_woocommerce_sale_border_radius != false){
		$optical_lens_shop_custom_css .='.woocommerce span.onsale{';
			$optical_lens_shop_custom_css .='border-radius: '.esc_attr($optical_lens_shop_woocommerce_sale_border_radius).'px;';
		$optical_lens_shop_custom_css .='}';
	}

	/*---------------- Grid Posts Settings ------------------*/

	$optical_lens_shop_grid_featured_image_border_radius = get_theme_mod('optical_lens_shop_grid_featured_image_border_radius', 0);
	if($optical_lens_shop_grid_featured_image_border_radius != false){
		$optical_lens_shop_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img{';
			$optical_lens_shop_custom_css .='border-radius: '.esc_attr($optical_lens_shop_grid_featured_image_border_radius).'px;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_grid_featured_image_box_shadow = get_theme_mod('optical_lens_shop_grid_featured_image_box_shadow',0);
	if($optical_lens_shop_grid_featured_image_box_shadow != false){
		$optical_lens_shop_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$optical_lens_shop_custom_css .='box-shadow: '.esc_attr($optical_lens_shop_grid_featured_image_box_shadow).'px '.esc_attr($optical_lens_shop_grid_featured_image_box_shadow).'px '.esc_attr($optical_lens_shop_grid_featured_image_box_shadow).'px #cccccc;';
		$optical_lens_shop_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$optical_lens_shop_sticky_header_padding = get_theme_mod('optical_lens_shop_sticky_header_padding');
	if($optical_lens_shop_sticky_header_padding != false){
		$optical_lens_shop_custom_css .='.header-fixed{';
			$optical_lens_shop_custom_css .='padding: '.esc_attr($optical_lens_shop_sticky_header_padding).'!important;';
		$optical_lens_shop_custom_css .='}';
	}

	// menus
	$optical_lens_shop_topbar_padding_top_bottom = get_theme_mod('optical_lens_shop_topbar_padding_top_bottom');
	if($optical_lens_shop_topbar_padding_top_bottom != false){
		$optical_lens_shop_custom_css .='#topbar{';
			$optical_lens_shop_custom_css .='padding-top: '.esc_attr($optical_lens_shop_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($optical_lens_shop_topbar_padding_top_bottom).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_navigation_menu_font_size = get_theme_mod('optical_lens_shop_navigation_menu_font_size');
	if($optical_lens_shop_navigation_menu_font_size != false){
		$optical_lens_shop_custom_css .='.main-navigation a{';
			$optical_lens_shop_custom_css .='font-size: '.esc_attr($optical_lens_shop_navigation_menu_font_size).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_navigation_menu_font_weight = get_theme_mod('optical_lens_shop_navigation_menu_font_weight','500');
	if($optical_lens_shop_navigation_menu_font_weight != false){
		$optical_lens_shop_custom_css .='.main-navigation a{';
			$optical_lens_shop_custom_css .='font-weight: '.esc_attr($optical_lens_shop_navigation_menu_font_weight).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_theme_lay = get_theme_mod( 'optical_lens_shop_menu_text_transform','Capitalize');
	if($optical_lens_shop_theme_lay == 'Capitalize'){
		$optical_lens_shop_custom_css .='.main-navigation a{';
			$optical_lens_shop_custom_css .='text-transform:Capitalize;';
		$optical_lens_shop_custom_css .='}';
	}
	if($optical_lens_shop_theme_lay == 'Lowercase'){
		$optical_lens_shop_custom_css .='.main-navigation a{';
			$optical_lens_shop_custom_css .='text-transform:Lowercase;';
		$optical_lens_shop_custom_css .='}';
	}
	if($optical_lens_shop_theme_lay == 'Uppercase'){
		$optical_lens_shop_custom_css .='.main-navigation a{';
			$optical_lens_shop_custom_css .='text-transform:Uppercase;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_header_menus_color = get_theme_mod('optical_lens_shop_header_menus_color');
	if($optical_lens_shop_header_menus_color != false){
		$optical_lens_shop_custom_css .='.main-navigation a{';
			$optical_lens_shop_custom_css .='color: '.esc_attr($optical_lens_shop_header_menus_color).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_header_menus_hover_color = get_theme_mod('optical_lens_shop_header_menus_hover_color');
	if($optical_lens_shop_header_menus_hover_color != false){
		$optical_lens_shop_custom_css .='.main-navigation a:hover{';
			$optical_lens_shop_custom_css .='color: '.esc_attr($optical_lens_shop_header_menus_hover_color).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_header_submenus_color = get_theme_mod('optical_lens_shop_header_submenus_color');
	if($optical_lens_shop_header_submenus_color != false){
		$optical_lens_shop_custom_css .='.main-navigation ul ul a{';
			$optical_lens_shop_custom_css .='color: '.esc_attr($optical_lens_shop_header_submenus_color).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_header_submenus_hover_color = get_theme_mod('optical_lens_shop_header_submenus_hover_color');
	if($optical_lens_shop_header_submenus_hover_color != false){
		$optical_lens_shop_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$optical_lens_shop_custom_css .='color: '.esc_attr($optical_lens_shop_header_submenus_hover_color).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_menus_item = get_theme_mod( 'optical_lens_shop_menus_item_style','None');
    if($optical_lens_shop_menus_item == 'None'){
		$optical_lens_shop_custom_css .='.main-navigation a{';
			$optical_lens_shop_custom_css .='';
		$optical_lens_shop_custom_css .='}';
	}else if($optical_lens_shop_menus_item == 'Zoom In'){
		$optical_lens_shop_custom_css .='.main-navigation a:hover{';
			$optical_lens_shop_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important;';
		$optical_lens_shop_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$optical_lens_shop_theme_lay = get_theme_mod( 'optical_lens_shop_footer_template','optical_lens_shop-footer-one');
    if($optical_lens_shop_theme_lay == 'optical_lens_shop-footer-one'){
		$optical_lens_shop_custom_css .='#footer{';
			$optical_lens_shop_custom_css .='';
		$optical_lens_shop_custom_css .='}';

	}else if($optical_lens_shop_theme_lay == 'optical_lens_shop-footer-two'){
		$optical_lens_shop_custom_css .='#footer{';
			$optical_lens_shop_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$optical_lens_shop_custom_css .='color:#000;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='#footer ul li::before{';
			$optical_lens_shop_custom_css .='background:#000;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$optical_lens_shop_custom_css .='border: 1px solid #000;';
		$optical_lens_shop_custom_css .='}';

	}else if($optical_lens_shop_theme_lay == 'optical_lens_shop-footer-three'){
		$optical_lens_shop_custom_css .='#footer{';
			$optical_lens_shop_custom_css .='background: #232524;';
		$optical_lens_shop_custom_css .='}';
	}
	else if($optical_lens_shop_theme_lay == 'optical_lens_shop-footer-four'){
		$optical_lens_shop_custom_css .='#footer{';
			$optical_lens_shop_custom_css .='background: #f7f7f7;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$optical_lens_shop_custom_css .='color:#000;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='#footer ul li::before{';
			$optical_lens_shop_custom_css .='background:#000;';
		$optical_lens_shop_custom_css .='}';
		$optical_lens_shop_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$optical_lens_shop_custom_css .='border: 1px solid #000;';
		$optical_lens_shop_custom_css .='}';
	}
	else if($optical_lens_shop_theme_lay == 'optical_lens_shop-footer-five'){
		$optical_lens_shop_custom_css .='#footer{';
			$optical_lens_shop_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$optical_lens_shop_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$optical_lens_shop_button_footer_heading_letter_spacing = get_theme_mod('optical_lens_shop_button_footer_heading_letter_spacing',1);
	$optical_lens_shop_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$optical_lens_shop_custom_css .='letter-spacing: '.esc_attr($optical_lens_shop_button_footer_heading_letter_spacing).'px;';
	$optical_lens_shop_custom_css .='}';

	$optical_lens_shop_button_footer_font_size = get_theme_mod('optical_lens_shop_button_footer_font_size','30');
	$optical_lens_shop_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
		$optical_lens_shop_custom_css .='font-size: '.esc_attr($optical_lens_shop_button_footer_font_size).'px;';
	$optical_lens_shop_custom_css .='}';

	$optical_lens_shop_theme_lay = get_theme_mod( 'optical_lens_shop_button_footer_text_transform','Capitalize');
	if($optical_lens_shop_theme_lay == 'Capitalize'){
		$optical_lens_shop_custom_css .='#footer h3{';
			$optical_lens_shop_custom_css .='text-transform:Capitalize;';
		$optical_lens_shop_custom_css .='}';
	}
	if($optical_lens_shop_theme_lay == 'Lowercase'){
		$optical_lens_shop_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$optical_lens_shop_custom_css .='text-transform:Lowercase;';
		$optical_lens_shop_custom_css .='}';
	}
	if($optical_lens_shop_theme_lay == 'Uppercase'){
		$optical_lens_shop_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$optical_lens_shop_custom_css .='text-transform:Uppercase;';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_footer_heading_weight = get_theme_mod('optical_lens_shop_footer_heading_weight','600');
	if($optical_lens_shop_footer_heading_weight != false){
		$optical_lens_shop_custom_css .='#footer h3, a.rsswidget.rss-widget-title{';
			$optical_lens_shop_custom_css .='font-weight: '.esc_attr($optical_lens_shop_footer_heading_weight).';';
		$optical_lens_shop_custom_css .='}';
	}

	$optical_lens_shop_responsive_preloader_hide = get_theme_mod('optical_lens_shop_responsive_preloader_hide',false);
	if($optical_lens_shop_responsive_preloader_hide == true && get_theme_mod('optical_lens_shop_loader_enable',false) == false){
		$optical_lens_shop_custom_css .='@media screen and (min-width:575px){
			#preloader{';
			$optical_lens_shop_custom_css .='display:none !important;';
		$optical_lens_shop_custom_css .='} }';
	}

	if($optical_lens_shop_responsive_preloader_hide == false){
		$optical_lens_shop_custom_css .='@media screen and (max-width:575px){
			#preloader{';
			$optical_lens_shop_custom_css .='display:none !important;';
		$optical_lens_shop_custom_css .='} }';
	}

	// top bar show /hide responsive media

	$optical_lens_shop_responsive_topbar_hide = get_theme_mod('optical_lens_shop_responsive_topbar_hide',false);
	if($optical_lens_shop_responsive_topbar_hide == true && get_theme_mod('optical_lens_shop_topbar_hide_show',false) == false){
		$optical_lens_shop_custom_css .='@media screen and (min-width:575px){
			.top-header{';
			$optical_lens_shop_custom_css .='display:none !important;';
		$optical_lens_shop_custom_css .='} }';
	}

	if($optical_lens_shop_responsive_topbar_hide == false){
		$optical_lens_shop_custom_css .='@media screen and (max-width:575px){
			.top-header{';
			$optical_lens_shop_custom_css .='display:none !important;';
		$optical_lens_shop_custom_css .='} }';
	}

	$optical_lens_shop_bradcrumbs_alignment = get_theme_mod( 'optical_lens_shop_bradcrumbs_alignment','Left');
    if($optical_lens_shop_bradcrumbs_alignment == 'Left'){
    	$optical_lens_shop_custom_css .='@media screen and (min-width:768px) {';
		$optical_lens_shop_custom_css .='.bradcrumbs{';
			$optical_lens_shop_custom_css .='text-align:start;';
		$optical_lens_shop_custom_css .='}}';
	}else if($optical_lens_shop_bradcrumbs_alignment == 'Center'){
		$optical_lens_shop_custom_css .='@media screen and (min-width:768px) {';
		$optical_lens_shop_custom_css .='.bradcrumbs{';
			$optical_lens_shop_custom_css .='text-align:center;';
		$optical_lens_shop_custom_css .='}}';
	}else if($optical_lens_shop_bradcrumbs_alignment == 'Right'){
		$optical_lens_shop_custom_css .='@media screen and (min-width:768px) {';
		$optical_lens_shop_custom_css .='.bradcrumbs{';
			$optical_lens_shop_custom_css .='text-align:end;';
		$optical_lens_shop_custom_css .='}}';
	}