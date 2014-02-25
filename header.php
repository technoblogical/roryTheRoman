<!DOCTYPE html>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-desktop.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/neonizer.css">
		<?php wp_head(); ?> 
	</head>
	<body <?php body_class(); ?>>
		<?php get_sidebar( 'upper-widgets' ); ?>
		<header><div id='header' class='body-part'>
			<div id='company-info'>
				<p id='company-title'><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></p>
				<p id='company-motto'><?php bloginfo('description'); ?> </p>
			</div>
			<div id='header-image'
			<?php
			$isThereAHeaderImage=get_header_image();
			if (get_header_image())
			  { ?>
			  style='background-image:url("<?php header_image(); ?>");min-height:<?php echo get_custom_header()->height; ?>px;'
			  <?php }
			?>
			></div> <!-- #header-image -->
		</div></header>
		<nav><ul id='nav' class='body-part'>
			<?php wp_list_pages('title_li='); ?>
		</ul></nav>
		<article><div id='article' class='body-part'>
			<?php get_sidebar( 'left' ); ?>
			<?php get_sidebar( 'right' ); ?>