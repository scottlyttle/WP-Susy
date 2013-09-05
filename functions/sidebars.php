<?php 
// Set up a Sidebar
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => __('Sidebar Widgets','yabtfw' ),
		'id'   => 'sidebar-widgets',
		'description'   => __( 'These are widgets for the sidebar.','yabtfw' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));
}