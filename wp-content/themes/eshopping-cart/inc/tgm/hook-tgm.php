<?php
/**
 * Recommended plugins
 *
 * @package eshopping-cart
 */

if ( ! function_exists( 'eshopping_cart_recommended_plugins' ) ) :

    /**
     * Recommend plugins.
     *
     * @since 1.0.0
     */
    function eshopping_cart_recommended_plugins() {

        $plugins = array(              
          
            array(
                'name'     => esc_html__( 'Testerwp Ecommerce Companion', 'eshopping-cart' ),
                'slug'     => 'testerwp-ecommerce-companion',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'One Click Demo Import', 'eshopping-cart' ),
                'slug'     => 'one-click-demo-import',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'WooCommerce', 'eshopping-cart' ),
                'slug'     => 'woocommerce',
                'required' => false,
            ),
            array(
                'name'     => esc_html__( 'YITH WooCommerce Wishlist', 'eshopping-cart' ),
                'slug'     => 'yith-woocommerce-wishlist',
                'required' => false,
            ),
        );

        tgmpa( $plugins );

    }

endif;

add_action( 'tgmpa_register', 'eshopping_cart_recommended_plugins' );