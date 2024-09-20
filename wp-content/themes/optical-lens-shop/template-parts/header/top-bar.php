<?php
/**
 * The template part for Top Header
 *
 * @package Optical Lens Shop 
 * @subpackage optical-lens-shop
 * @since optical-lens-shop 1.0
 */
?>
<!-- Top Header -->
<?php if( get_theme_mod( 'optical_lens_shop_topbar_hide_show', false) == 1 || get_theme_mod( 'optical_lens_shop_responsive_topbar_hide', false) == 1) { ?>
  <div class="top-header py-2">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-3 align-self-center">
            <?php if(get_theme_mod('optical_lens_shop_topbar_text1') != ''){ ?>
                <p class="topbar-text1 mb-lg-0 mb-md-0 mb-3 text-md-start text-center"><?php echo esc_html(get_theme_mod('optical_lens_shop_topbar_text1')); ?></p>
            <?php }?>
        </div>
        <div class="col-lg-3 col-md-2 mb-lg-0 mb-md-0 mb-3 align-self-center text-md-start text-center">
          <span class="call-box">
            <?php if(get_theme_mod('optical_lens_shop_phone_number') != ''){ ?>
              <span class="phone-number"><span class="calling-text">Call Now: </span><a href="tel:<?php echo esc_attr( get_theme_mod('optical_lens_shop_phone_number','') ); ?>"><?php echo esc_html(get_theme_mod('optical_lens_shop_phone_number',''));?></a></span>
            <?php }?>
          </span>
        </div>
        <div class="col-lg-3 col-md-4 mb-lg-0 mb-md-0 mb-3 align-self-center text-lg-end text-lg-end text-center">
          <?php if(class_exists('woocommerce')){ ?>
            <div class="currency-box d-md-inline-block me-3">
              <?php echo do_shortcode( '[woocommerce_currency_switcher_drop_down_box]' );?>
            </div>
          <?php } ?>
        </div>
        <div class="col-lg-2 col-md-3 mb-lg-0 mb-md-0 mb-3 align-self-center text-lg-end text-lg-end text-center">
          <?php if( class_exists( 'GTranslate' ) ) { ?>
            <div class="translate-lang position-relative d-md-inline-block me-3">
              <?php echo do_shortcode( '[gtranslate]' );?>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
<?php }?> 