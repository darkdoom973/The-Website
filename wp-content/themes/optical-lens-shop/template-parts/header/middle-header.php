<?php
/**
 * The template part for Middle Header
 *
 * @package Optical Lens Shop 
 * @subpackage optical-lens-shop
 * @since optical-lens-shop 1.0
 */
?>
 
<!-- Middle Header -->
<div class="middle-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 mb-lg-0 mb-md-3 mb-0 align-self-center text-lg-start text-md-start text-center">
        <div class="logo">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <?php if( get_theme_mod('optical_lens_shop_logo_title_hide_show',true) == 1){ ?>
                      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php } ?>
                  <?php else : ?>
                    <?php if( get_theme_mod('optical_lens_shop_logo_title_hide_show',true) == 1){ ?>
                      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php } ?>
                  <?php endif; ?>
                <?php endif; ?>
                <?php
                  $description = get_bloginfo( 'description', 'display' );
                  if ( $description || is_customize_preview() ) :
                ?>
                <?php if( get_theme_mod('optical_lens_shop_tagline_hide_show',false) == 1){ ?>
                  <p class="site-description mb-0">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php } ?>
            <?php endif; ?>
          </div>
      </div>
      <div class="col-lg-5 col-md-8 mb-lg-0 mb-md-3 mb-0 align-self-center text-lg-end search-icon">
        <?php if(class_exists('woocommerce')){ ?>
          <?php get_product_search_form(); ?>
        <?php } ?>
      </div>
      <div class="col-lg-1 col-md-3 col-3 align-self-center text-lg-end text-center">
        <?php if( get_theme_mod( 'optical_lens_shop_cart_hide_show', true) == 1) { ?>
          <?php if(class_exists('woocommerce')){ ?>
            <span class="cart_no">
              <a href="<?php if(function_exists('wc_get_cart_url')){ echo esc_url(wc_get_cart_url()); } ?>" title="<?php esc_attr_e( 'shopping cart','optical-lens-shop' ); ?>"><i class="fas fa-shopping-cart me-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Shopping Cart','optical-lens-shop' );?></span></a>
              <span class="cart-value"> <?php echo esc_html(wp_kses_data( WC()->cart->get_cart_contents_count() ));?></span>
            </span>
          <?php } ?>
        <?php }?>
      </div>
      <div class="col-lg-1 col-md-3 col-3 align-self-center text-lg-end text-center">
        <?php if( get_theme_mod( 'optical_lens_shop_wishlist_hide_show', true) == 1) { ?>
          <div class="wishlist">
            <?php if(class_exists('woocommerce')){ ?>
              <?php if(defined('YITH_WCWL')){ ?>
                <a class="wishlist_view" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>" title="<?php esc_attr_e('Wishlist','optical-lens-shop'); ?>"><i class="far fa-heart me-2"></i><?php $wishlist_count = YITH_WCWL()->count_products(); ?><span class="wishlist-counter"><?php echo $wishlist_count; ?></span>
                </a>
              <?php }?>
            <?php }?>
          </div>
        <?php }?>
      </div>
      <div class="col-lg-1 col-md-3 col-3 align-self-center text-lg-end text-center">
        <?php if( get_theme_mod( 'optical_lens_shop_tracking_order_hide_show', true) == 1) { ?>
          <?php if(class_exists('woocommerce')){ ?>
                <div class="order-track position-relative">
                  <span><i class="fas fa-truck me-2"></i></span>
                  <div class="order-track-hover text-left">
                    <?php echo do_shortcode('[woocommerce_order_tracking]','optical-lens-shop'); ?>
                  </div>
                </div>
              <?php }?>
        <?php }?>
      </div>
      <div class="col-lg-1 col-md-3 col-3 align-self-center text-lg-end text-center">
        <?php if( get_theme_mod( 'optical_lens_shop_my_account_hide_show', true) == 1) { ?>
          <div class="account">
            <?php if(class_exists('woocommerce')){ ?>
              <?php if ( is_user_logged_in() ) { ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('My Account','optical-lens-shop'); ?>"><i class="far fa-user me-2"></i><span class="icon-text"></a>
              <?php }
              else { ?>
                <a href="<?php echo esc_url( get_permalink( get_option('woocommerce_myaccount_page_id') ) ); ?>" title="<?php esc_attr_e('Login / Register','optical-lens-shop'); ?>"><i class="far fa-user me-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Login / Register','optical-lens-shop' );?></span></a>
              <?php } ?>
            <?php }?>
          </div>
        <?php }?>
      </div>
    </div>     
  </div>
</div>

<div class="middle-header-sec <?php if( get_theme_mod( 'optical_lens_shop_sticky_header', false) == 1 || get_theme_mod( 'optical_lens_shop_stickyheader_hide_show', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <div class="container ">
    <div class="menu-section">
      <div class="col-lg-12 align-self-center">
        <?php get_template_part('template-parts/header/navigation'); ?>
      </div>
    </div>
  </div>
</div>