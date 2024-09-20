<?php 

get_template_part( 'inc/admin-function');

//custom-style
get_template_part( 'inc/eshopping-cart-custom-style');

// theme-option
get_template_part( 'lib/texture-option/texture-option');

// customizer
get_template_part('customizer/models/class-eshopping-cart-singleton');
get_template_part('customizer/models/class-eshopping-cart-defaults-models');
get_template_part('customizer/repeater/class-eshopping-cart-repeater');

/*customizer*/

get_template_part('customizer/extend-customizer/class-eshopping-cart-wp-customize-panel');
get_template_part('customizer/extend-customizer/class-eshopping-cart-wp-customize-section');
get_template_part('customizer/customizer-radio-image/class/class-eshopping-cart-customize-control-radio-image');
get_template_part('customizer/customizer-range-value/class/class-eshopping-cart-customizer-range-value-control');

get_template_part('customizer/color/class-control-color');
get_template_part('customizer/customize-buttonset/class-control-buttonset');

get_template_part('customizer/background/class-eshopping-cart-background-image-control');

get_template_part('customizer/customizer-toggle/class-eshopping-cart-toggle-control');

get_template_part('customizer/custom-customizer');
get_template_part('customizer/customizer');

/******************************/
// woocommerce
/******************************/
get_template_part( 'inc/woocommerce/woo-core');
get_template_part( 'inc/woocommerce/woo-function');
get_template_part('inc/woocommerce/woocommerce-ajax');