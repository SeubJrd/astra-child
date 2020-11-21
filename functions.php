<?php
/**
** activation theme
**/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/login/login-style.css' );
   }
   add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

?>













