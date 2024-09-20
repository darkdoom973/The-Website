<?php
 /**
  * Title: Latest Product
  * Slug: swiftstore/latest-product
  * Categories: swiftstore
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"80px","bottom":"40px","right":"4.2vw","left":"4.2vw"},"blockGap":"var:preset|spacing|20"},"border":{"width":"0px","style":"none"}},"backgroundColor":"background","className":"","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-background-background-color has-background" style="border-style:none;border-width:0px;padding-top:80px;padding-right:4.2vw;padding-bottom:40px;padding-left:4.2vw"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}},"className":"wp-block-group-heading","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide wp-block-group-heading" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","align":"full"} -->
<div class="wp-block-columns alignfull are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.333%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.333%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading -->
<h2><?php echo esc_html__( 'New Arrivals', 'swiftstore' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"primary","className":"is-style-default"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-default"/>
<!-- /wp:separator --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.3333%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.3333%"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button is-style-underline"} -->
<div class="wp-block-button is-style-button is-style-underline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'See All', 'swiftstore' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"30px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:30px"><!-- wp:woocommerce/product-new {"columns":4,"rows":2,"alignButtons":true,"categories":[],"contentVisibility":{"image":true,"title":true,"price":true,"rating":true,"button":true},"stockStatus":["","instock","outofstock","onbackorder"],"align":"wide"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
