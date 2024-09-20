<?php
/**
 *  Optical Lens Shop: Block Patterns
 *
 * @package  Optical Lens Shop
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'optical-lens-shop',
		array( 'label' => __( 'Optical Lens Shop', 'optical-lens-shop' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'optical-lens-shop/banner-section',
		array(
			'title'      => __( 'Banner Section', 'optical-lens-shop' ),
			'categories' => array( 'optical-lens-shop' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner-image.png\",\"id\":4591,\"dimRatio\":0,\"focalPoint\":{\"x\":0.37,\"y\":0.5},\"minHeight\":550,\"isDark\":false,\"align\":\"full\",\"className\":\"optical-lens-shop-banner-section\"} -->\n<div class=\"wp-block-cover alignfull is-light optical-lens-shop-banner-section\" style=\"min-height:550px\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-4591\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/banner-image.png\" style=\"object-position:37% 50%\" data-object-fit=\"cover\" data-object-position=\"37% 50%\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns -->\n<div class=\"wp-block-columns\"><!-- wp:column {\"width\":\"50%\",\"className\":\"px-5\"} -->\n<div class=\"wp-block-column px-5\" style=\"flex-basis:50%\"><!-- wp:heading {\"level\":1,\"style\":{\"typography\":{\"fontSize\":\"40px\"}},\"textColor\":\"white\"} -->\n<h1 class=\"wp-block-heading has-white-color has-text-color\" style=\"font-size:40px\">HIGEST QUALITY GLASSES</h1>\n<!-- /wp:heading -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"backgroundColor\":\"black\",\"style\":{\"border\":{\"radius\":\"10px\"},\"typography\":{\"fontSize\":\"16px\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:16px\"><a class=\"wp-block-button__link has-black-background-color has-background wp-element-button\" style=\"border-radius:10px\">Shop Now</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"50%\"} -->\n<div class=\"wp-block-column\" style=\"flex-basis:50%\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'optical-lens-shop/products-section',
		array(
			'title'      => __( 'Products Section', 'optical-lens-shop' ),
			'categories' => array( 'optical-lens-shop' ),
			'content'    => "<!-- wp:group {\"className\":\"optical-lens-shop-new-product-section my-5\",\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group optical-lens-shop-new-product-section my-5\"><!-- wp:columns {\"className\":\"optical-lens-shop-new-product-section my-5\"} -->\n<div class=\"wp-block-columns optical-lens-shop-new-product-section my-5\"><!-- wp:column {\"width\":\"30.33%\",\"className\":\"optical-lens-shop-shopping-section\"} -->\n<div class=\"wp-block-column optical-lens-shop-shopping-section\" style=\"flex-basis:30.33%\"><!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/product-image.png\",\"id\":4575,\"dimRatio\":0,\"isDark\":false,\"fontSize\":\"small\"} -->\n<div class=\"wp-block-cover is-light has-small-font-size\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-4575\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/inc/block-patterns/images/product-image.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:heading {\"textAlign\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"30px\"}},\"textColor\":\"white\"} -->\n<h2 class=\"wp-block-heading has-text-align-center has-white-color has-text-color\" style=\"font-size:30px\">UPTO 20%OFF</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"16px\"}},\"textColor\":\"white\"} -->\n<p class=\"has-text-align-center has-white-color has-text-color\" style=\"font-size:16px\">FOR BOTH HIM AHD HER</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons {\"layout\":{\"type\":\"flex\",\"justifyContent\":\"center\"}} -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"textAlign\":\"center\",\"backgroundColor\":\"black\",\"style\":{\"typography\":{\"fontSize\":\"15px\"},\"border\":{\"radius\":\"6px\"}}} -->\n<div class=\"wp-block-button has-custom-font-size\" style=\"font-size:15px\"><a class=\"wp-block-button__link has-black-background-color has-background has-text-align-center wp-element-button\" style=\"border-radius:6px\">Shopping Now</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div></div>\n<!-- /wp:cover --></div>\n<!-- /wp:column -->\n\n<!-- wp:column {\"width\":\"70.66%\",\"className\":\"product-section\"} -->\n<div class=\"wp-block-column product-section\" style=\"flex-basis:70.66%\"><!-- wp:heading {\"level\":3,\"style\":{\"typography\":{\"textTransform\":\"capitalize\",\"fontSize\":\"40px\",\"fontStyle\":\"normal\",\"fontWeight\":\"600\"}}} -->\n<h3 class=\"wp-block-heading\" style=\"font-size:40px;font-style:normal;font-weight:600;text-transform:capitalize\">trending product</h3>\n<!-- /wp:heading -->\n\n<!-- wp:woocommerce/product-category {\"columns\":4,\"rows\":1,\"contentVisibility\":{\"title\":true,\"price\":true,\"rating\":true,\"button\":true},\"categories\":[25]} /--></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
		)
	);
}