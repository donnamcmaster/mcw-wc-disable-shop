<?php
/*
Plugin Name: McWebby WC Disable Shop Ordering
Plugin URI: https://www.donnamcmaster.com/
Description: Causes the WooCommerce "add to cart" buttons from your online store to be disabled to prevent purchases.
Version: 00.01.00
Author: Donna McMaster
Author URI: https://www.donnamcmaster.com/
License: GNU GPU v3
*/

if ( !defined( 'ABSPATH' ) ) {
	exit;
}

/*
 *	Class Name: MCW_WC_Disable_Ordering
 */

class MCW_WC_Disable_Ordering {

	public static function orders_disabled () {
		return true;
	}

	public static function remove_add_to_cart_actions () {
		// removes Add to Cart button from product in list (e.g., category)
		remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

		// removes Add to Cart button from single product
		remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
	}
} // end class

add_action( 'init', function() {
	MCW_WC_Disable_Ordering::remove_add_to_cart_actions();
});
