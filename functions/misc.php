<?php
// Register editor stylesheet
function register_editor_stylesheet() {
    add_editor_style( 'css/editor-style.css' );
}
add_action( 'init', 'register_editor_stylesheet' );