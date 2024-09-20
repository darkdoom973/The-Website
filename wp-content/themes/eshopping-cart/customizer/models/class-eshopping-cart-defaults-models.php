<?php
if ( ! defined( 'ABSPATH' ) ) exit; 
/**
 * This file stores all functions that return default content.
 *
 * @package  EShopping Cart
 */
/**
 * Class EShopping_Cart_Defaults_Models
 *
 * @package  EShopping Cart
 */
class EShopping_Cart_Defaults_Models extends EShopping_Cart_Singleton{
/**
	 * Get default values for features section.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	
	/**
	 * Get default values for features section.

	 * @access public
	 */
	public function get_feature_default() {
		return apply_filters(
			'eshopping_cart_highlight_default_content', json_encode(
				array(
					array(
						'icon_value' => 'fa-shopping-bag',
						'title'      => esc_html__( 'Free Shipping Worldwide', 'eshopping-cart' ),
						'subtitle'   => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod.', 'eshopping-cart' ),
						
					),
					array(
						'icon_value' => 'fa-money',
						'title'      => esc_html__( 'Money Back Guarantee', 'eshopping-cart' ),
						'subtitle'   => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod.', 'eshopping-cart' ),
						
					),
					array(
						'icon_value' => 'fa-user-plus',
						'title'      => esc_html__( '24/7 Customer Service', 'eshopping-cart' ),
						'subtitle'   => esc_html__( 'Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod.', 'eshopping-cart' ),
						
					),
				)
			)
		);
	}	
	
}