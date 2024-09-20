<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'optical_lens_shop_before_slider' ); ?>

  <?php if( get_theme_mod( 'optical_lens_shop_slider_hide_show', false) == 1 || get_theme_mod( 'optical_lens_shop_resp_slider_hide_show', true) == 1) { ?>
    <section id="slider">
      <?php if(get_theme_mod('optical_lens_shop_slider_type', 'Default slider') == 'Default slider' ){ ?>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'optical_lens_shop_slider_speed',4000)) ?>">
          <?php $optical_lens_shop_pages = array();
            for ( $count = 1; $count <= 3; $count++ ) {
              $mod = intval( get_theme_mod( 'optical_lens_shop_slider_page' . $count ));
              if ( 'page-none-selected' != $mod ) {
                $optical_lens_shop_pages[] = $mod;
              }
            }
            if( !empty($optical_lens_shop_pages) ) :
              $args = array(
                'post_type' => 'page',
                'post__in' => $optical_lens_shop_pages,
                'orderby' => 'post__in'
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                $i = 1;
          ?>
          <div class="carousel-inner" role="listbox">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
                } else{?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/slider.png" alt="" />
                <?php } ?>
                <div class="carousel-caption">
                  <div class="inner_carousel">
                    <?php if( get_theme_mod('optical_lens_shop_slider_small_heading') != '' ){ ?>
                      <span class="slider-heading-text"><?php echo esc_html(get_theme_mod('optical_lens_shop_slider_small_heading',''));?></span>
                    <?php }?>
                    <h1 class="wow slideInLeft delay-1000" data-wow-duration="2s"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    <?php
                      $optical_lens_shop_button_text = get_theme_mod('optical_lens_shop_slider_button_label', 'Shop Now');
                      $optical_lens_shop_button_link = get_theme_mod('optical_lens_shop_slider_button_url', '');
                      if (empty($optical_lens_shop_button_link)) {
                        $optical_lens_shop_button_link = get_permalink();
                      }
                      if ($optical_lens_shop_button_text || !empty($optical_lens_shop_button_link)) { ?>
                        <div class ="slider-btn wow slideInLeft delay-1000">
                          <a href="<?php echo esc_url($optical_lens_shop_button_link); ?>" class="button redmor">
                          <?php echo esc_html($optical_lens_shop_button_text); ?>
                            <span class="screen-reader-text"><?php echo esc_html($optical_lens_shop_button_text); ?></span>
                          </a>
                        </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            <?php $i++; endwhile;
            wp_reset_postdata();?>
          </div>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
          endif;?>
          <?php if(get_theme_mod('optical_lens_shop_slider_arrow_hide_show', true)){?>
            <a class="carousel-control-prev" data-bs-target="#carouselExampleInterval" data-bs-slide="prev" role="button">
              <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('optical_lens_shop_slider_prev_icon','fas fa-angle-left')); ?>"></i></span>
            </a>
            <a class="carousel-control-next" data-bs-target="#carouselExampleInterval" data-bs-slide="next" role="button">
              <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('optical_lens_shop_slider_next_icon','fas fa-angle-right')); ?>"></i></span>
            </a>
          <?php }?>
        </div>
      <?php } else if(get_theme_mod('optical_lens_shop_slider_type', 'Advance slider') == 'Advance slider'){?>
        <?php echo do_shortcode(get_theme_mod('optical_lens_shop_advance_slider_shortcode')); ?>
      <?php } ?>
    </section>
  <?php }?>

  <?php do_action( 'optical_lens_shop_after_slider' ); ?>

  <!-- Product Section -->

  <?php if( get_theme_mod( 'optical_lens_shop_product_hide_show') != '' && get_theme_mod( 'optical_lens_shop_product_banner_page') != '' && get_theme_mod( 'optical_lens_shop_product_page') != ''   ) { ?>
    <section id="product-section" class="product-section pt-lg-5 pt-md-4 pt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
            <div class="product mx-md-0 mx-lg-0 mx-2">
              <?php $optical_lens_shop_product_page = array();
                for ( $count = 0; $count <= 0; $count++ ) {
                  $mod = absint( get_theme_mod( 'optical_lens_shop_product_banner_page' ));
                  if ( 'page-none-selected' != $mod ) {
                    $optical_lens_shop_product_banner_pages[] = $mod;
                  }
                }
                if( !empty($optical_lens_shop_product_banner_pages) ) :
                  $args = array(
                    'post_type' => 'page',
                    'post__in' => $optical_lens_shop_product_banner_pages,
                    'orderby' => 'post__in'
                  );
                  $query = new WP_Query( $args );
                  if ( $query->have_posts() ) :
                    $i = 1;
                ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="product-box" role="listbox">
                      <?php the_post_thumbnail(); ?>
                      <div class="product-content">
                        <h2 class="text-center"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <p class="text-center mb-4"><?php $optical_lens_shop_excerpt = get_the_excerpt(); echo esc_html( optical_lens_shop_string_limit_words( $optical_lens_shop_excerpt, esc_attr(get_theme_mod('optical_lens_shop_slider_excerpt_number','5')))); ?></p>
                        <?php if ( get_theme_mod('optical_lens_shop_product_button_label','Shopping Now') != '' ) {?>
                          <div class ="product-btn text-center">
                            <a href="<?php echo esc_url(get_theme_mod('optical_lens_shop_product_button_url',false));?>"><?php echo esc_html(get_theme_mod('optical_lens_shop_product_button_label','Shopping Now'));?><span class="screen-reader-text"><?php esc_html_e( 'Shopping Now','optical-lens-shop');?></span></a>
                          </div>
                        <?php }?>
                      </div>
                    </div>
                <?php $i++; endwhile;
                  wp_reset_postdata();?>
                <?php else : ?>
                  <div class="no-postfound"></div>
                <?php endif;
                endif;?>
            </div>
          </div>
          <div class="col-lg-9 col-md-8 col-12 pt-md-0 py-5">
            <?php if( get_theme_mod('optical_lens_shop_product_heading_product') != ''){ ?>
              <h3 class=""><?php echo esc_html(get_theme_mod('optical_lens_shop_product_heading_product'));?></h3>
            <?php }?>
            <div class="row">
              <?php if ( class_exists( 'WooCommerce' ) && get_theme_mod('optical_lens_shop_product_page') != '' ) {?>
                <?php $args = array(
                  'post_type' => 'product',
                  'product_cat' => get_theme_mod('optical_lens_shop_product_page'),
                  'order' => 'ASC',
                  'hide_empty' => 0,
                );
                $loop = new WP_Query( $args );
                  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                  <div class="col-lg-4 col-md-6 pt-0 pb-4 px-1 product-main-div">
                    <div class="main-product-section mx-md-0 mx-lg-0 mx-2">
                      <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                        <h4 class="mt-3"><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h4>
                        <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_rating ( $loop->post, $product ); } ?>
                        <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>



                        <div class="pro-icons">
                          <div class="d-flex align-items-center justify-content-center">
                            <?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?>
                            <?php if(defined('YITH_WCWL')){ ?>
                            <a class="wishlist_view ms-2 d-flex" href="<?php echo YITH_WCWL()->get_wishlist_url(); ?>" title="<?php esc_attr_e('Wishlist','optical-lens-shop'); ?>"><i class="far fa-heart"></i>
                            </a>
                          <?php }?>
                          </div>
                        </div>


                    </div>
                  </div>
                <?php endwhile; wp_reset_query(); ?>
                <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php }?>

<?php do_action( 'optical_lens_shop_after_product_section' ); ?>

  <div id="content-vw" class="entry-content py-3">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
