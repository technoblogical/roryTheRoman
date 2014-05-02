<!DOCTYPE html>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-mobile.css">
		<!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/neonizer.css"> -->
	  <title><?php if ( is_home() ) {
	      bloginfo('name'); ?> | <?php bloginfo('description');
	    } else {
	       wp_title('') ?> | <?php bloginfo('name');
	    } ?>
	  </title>
		<?php wp_head(); ?> 
	</head>
	<body>
		<nav><ul id='nav'>
			<?php wp_list_pages('title_li='); ?>
		</ul></nav>
		<?php get_sidebar( 'mobile-upper-widgets' ); ?>
		<header><div id='header' class='body-part'>
			<div id='company-info'>
				<p id='company-title'><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></p>
				<p id='company-motto'><?php bloginfo('description'); ?> </p>
			</div>
		</div></header>
		<article><div id='article'  class='body-part'>
			<?php get_sidebar( 'mobile-widebar' ); ?>