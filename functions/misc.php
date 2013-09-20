<?php
// Register editor stylesheet
function register_editor_stylesheet() {
    add_editor_style( 'css/editor-style.css' );
}
add_action( 'init', 'register_editor_stylesheet' );

// Custom login page logo
function theme_login_logo() {
    echo 
    '<style type="text/css">
        .login h1 a { 
            background-image:url('.get_bloginfo('template_directory').'/img/login-logo.png) !important; 
            background-size: 274px auto !important;
            height: 125px !important;
            width: 320px !important;
        }
    </style>';
}
add_action('login_head', 'theme_login_logo');

// WordPress Change Login page logo link
function change_login_page_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'change_login_page_url' );