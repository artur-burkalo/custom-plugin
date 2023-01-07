<?php 

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
 * Custom styles for the WordPress admin login page
*/

add_action( 'login_enqueue_scripts', 'custom_login_styles' );
function custom_login_styles() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url(<?= esc_url( plugins_url( 'assets/images/custom-logo.svg', __DIR__ )) ; ?>);
        background-size: auto;
        width:100%;
        background-repeat: no-repeat;
        padding-bottom: 10px;
        }
    body {
        background: #fff !important;
    }
    #loginform, .message, #login_error {
        border-radius: 0px; 
    }
    #nav a, #backtoblog a{
        color: #000 !important ;
    } 
    </style>
<?php }

/*
 * Custom link for when you click on the logo in the WordPress admin login page
*/

add_filter('login_headerurl', 'custom_login_url');
function custom_login_url() {
    return '/';
}