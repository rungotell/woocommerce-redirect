// REDIRECTS LOGGED OUT WOOCOMMERCE ACCESS
function woocommerce_redirect()
{
    if( ( !is_user_logged_in() && (is_woocommerce() || is_cart() || is_checkout() ) ) && (!is_wc_endpoint_url( 'lost-password' )) )
    {
        wp_redirect( home_url( '[YOUR REDIRECT PAGE HERE]' ) );
        exit();
    }
}
add_action( 'template_redirect', 'woocommerce_redirect' );
