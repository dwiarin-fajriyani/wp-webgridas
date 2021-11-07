<?php
/**
 * Functions for Woocommerce features
 *
 * @package Gutener
 */

/**
* Add a wrapper div to product
* @since Gutener 1.0.0
*/

function gutener_before_shop_loop_item(){
	echo '<div class="product-inner">';
}

add_action( 'woocommerce_before_shop_loop_item', 'gutener_before_shop_loop_item', 9 );

function gutener_after_shop_loop_item(){
	echo '</div>';
}

/**
* After shop loop item
* @since Gutener 1.0.0
*/

add_action( 'woocommerce_after_shop_loop_item', 'gutener_after_shop_loop_item', 11 );

/**
* Hide default page title
* @since Gutener 1.0.0
*/
function gutener_woo_show_page_title(){
    return false;
}
add_filter( 'woocommerce_show_page_title', 'gutener_woo_show_page_title' );

/**
* Change number or products per row to 3
* @since Gutener 1.0.0
*/
if ( !function_exists( 'gutener_loop_columns' ) ) {
	function gutener_loop_columns() {
		return 3; // 3 products per row
	}
}
add_filter( 'loop_shop_columns', 'gutener_loop_columns' );

/**
* Add buttons in compare and wishlist
* @since Gutener 1.0.0
*/
if (!function_exists('gutener_compare_wishlist_buttons')) {
    function gutener_compare_wishlist_buttons() {
        $double = '';
        if ( function_exists( 'yith_woocompare_constructor' ) && function_exists( 'YITH_WCWL' ) ) {
            $double = ' d-compare-wishlist';
        }
        ?>
        <div class="product-compare-wishlist<?php echo esc_attr( $double ); ?>">
            <?php
            if ( function_exists( 'yith_woocompare_constructor' ) ) {
                global $product, $yith_woocompare;
                $product_id = !is_null($product) ? yit_get_prop($product, 'id', true) : 0;
                // return if product doesn't exist
                if ( empty( $product_id ) || apply_filters( 'yith_woocompare_remove_compare_link_by_cat', false, $product_id ) )
                    return;
                $url = is_admin() ? "#" : $yith_woocompare->obj->add_product_url( $product_id );
                ?>
                <div class="product-compare">
                    <a class="compare" rel="nofollow" data-product_id="<?php echo absint( $product_id ); ?>" href="<?php echo esc_url($url); ?>" title="<?php esc_attr_e('Compare', 'gutener'); ?>">
                        <i class="fas fa-sync"></i>
                        <?php esc_html_e( 'Compare', 'gutener' ); ?>
                    </a>
                </div>
                <?php
            }
            if ( function_exists( 'YITH_WCWL' ) ) {
                ?>
                <div class="product-wishlist">
                    <?php echo do_shortcode( '[yith_wcwl_add_to_wishlist]' ) ?>
                </div>
                <?php
            }
            ?>
        </div>
        <?php
    }
    add_action( 'woocommerce_after_shop_loop_item', 'gutener_compare_wishlist_buttons', 15 );
}

/**
* Change number of products that are displayed per page (shop page)
* @since Gutener 1.0.0
*/
function gutener_loop_shop_per_page( $cols ) {
    // $cols contains the current number of products per page based on the value stored on Options –> Reading
    // Return the number of products you wanna show per page.
    $cols = get_theme_mod( 'woocommerce_product_per_page', 9 );
    return $cols;
}
add_filter( 'loop_shop_per_page', 'gutener_loop_shop_per_page', 20 );

/**
 * Check if WooCommerce is activated and is shop page.
 *
 * @return bool
 * @since Gutener 1.0.0
 */
if( !function_exists( 'gutener_wooCom_is_shop' ) ){
    function gutener_wooCom_is_shop() {
        if ( class_exists( 'woocommerce' ) ) {  
            if ( is_shop()  ) {
                return true;
            }
        }else{
            return false;
        }
    }
    add_action( 'wp', 'gutener_wooCom_is_shop' );
}

/**
 * Check if WooCommerce is activated and is cart page.
 *
 * @return bool
 * @since Gutener 1.0.0
 */
if( !function_exists( 'gutener_wooCom_is_cart' ) ){
    function gutener_wooCom_is_cart() {
        if ( class_exists( 'woocommerce' ) ) {  
            if ( is_cart()  ) {
                return true;
            }
        }else{
            return false;
        }
    }
    add_action( 'wp', 'gutener_wooCom_is_cart' );
}

/**
 * Check if WooCommerce is activated and is checkout page.
 *
 * @return bool
 * @since Gutener 1.0.0
 */
if( !function_exists( 'gutener_wooCom_is_checkout' ) ){
    function gutener_wooCom_is_checkout() {
        if ( class_exists( 'woocommerce' ) ) {  
            if ( is_checkout()  ) {
                return true;
            }
        }else{
            return false;
        }
    }
    add_action( 'wp', 'gutener_wooCom_is_checkout' );
}

/**
 * Check if WooCommerce is activated and is account page.
 *
 * @return bool
 * @since Gutener 1.0.0
 */
if( !function_exists( 'gutener_wooCom_is_account_page' ) ){
    function gutener_wooCom_is_account_page() {
        if ( class_exists( 'woocommerce' ) ) {  
            if ( is_account_page()  ) {
                return true;
            }
        }else{
            return false;
        }
    }
    add_action( 'wp', 'gutener_wooCom_is_account_page' );
}