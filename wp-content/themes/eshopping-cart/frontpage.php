<?php 
/**
 * Template Name: Homepage Template
 * @package testerwp
 * @subpackage eShopping Cart
 * @since 1.0.0
 */
get_header();?>

   <div class="bg-w">
         <div class="main-page">
            
               <?php
                    if( shortcode_exists( 'eshopping-cart' ) ){
                       do_shortcode("[eshopping-cart section='eshopping_cart_show_frontpage']");
                    }
               ?>
            
         </div>
   </div>

<?php get_footer();