<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css" />
	<![endif]-->
	
	<!-- Make sure to create a custom build of Modernizr before launching! -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">
		<header id="header">
			<a class="logo" href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>
			<nav id="main-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
		</header>
		
		<div role="main">