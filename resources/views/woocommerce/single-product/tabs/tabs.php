<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>

	
	<?php $i = 1 ?>


	<div id="accordion">
	<?php while ( $i <= count($product_tabs) ): ?>
		<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
			<?php if ($i == 1) {
				$val = 'true';
				$open = 'wide-open';
				$show = 'show';
			} else {
				$val = 'false';
				$open = 'collapsed';
				$show = '';
			} ?>
	        <div class="full-wide <?php echo $open; ?>" data-toggle="collapse" data-target="#collapse<?php echo $i ?>" aria-expanded="<?php echo $val; ?>"aria-controls="collapse<?php echo $i ?>">
	              
		              <h3 class="mb-2">
						<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
		              </h3>
			
	              <svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
	              </svg>

	              <svg class="bi bi-chevron-up" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	                <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 01.708 0l6 6a.5.5 0 01-.708.708L8 5.707l-5.646 5.647a.5.5 0 01-.708-.708l6-6z" clip-rule="evenodd"/>
	              </svg>
	        </div>

	        <div id="collapse<?php echo $i ?>" class="collapse <?php echo $show; ?>" aria-labelledby="heading1">
	          <p>
	            <?php
					if ( isset( $product_tab['callback'] ) ) {
						call_user_func( $product_tab['callback'], $key, $product_tab );
					}
				?>
	          </p>
	        </div>
	        <hr>
		 <?php $i++ ?>
        <?php endforeach; ?>
	<?php endwhile; ?>
	</div>
	<?php do_action( 'woocommerce_product_after_tabs' ); ?>


<?php endif; ?>