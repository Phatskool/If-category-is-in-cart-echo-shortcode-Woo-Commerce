<?php

add_action('woocommerce_before_cart', 'if_cat_is_in_cart');
function if_cat_is_in_cart() {
	$category_is_in_cart = false;     
	foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
		if (has_term( 'Ταμειακές μηχανές- Συρτάρια', 'product_cat', $category_is_in_cart['product_id'])) {
			$category_is_in_cart = true;
			break;
		}
	}
	if ($category_is_in_cart) {
		echo do_shortcode( '[contact-form-7 id="1022" title="Φόρμα επικοινωνίας 1"]' );
	}
}
?>