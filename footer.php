			<div style='padding:0;margin:0;clear:both;'></div>
		</div></article>
		<aside><div id='bottom-aside' class='body-part'>
			<?php if ( !wp_is_mobile() ) { ?>
				<?php get_sidebar( 'desktop-widebar' ); ?>
				<?php get_sidebar( 'desktop-not-widebar' ); ?>
			<?php } ?>
		</div></aside>
		<footer><div id='footer' class='body-part'>
     Copyright 
      <script type="text/javascript">
       var technoblogicalCopyrightDate=new Date();
       document.write(technoblogicalCopyrightDate.getFullYear());
      </script>
     by <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a><br/>
     Design by <a href="http://www.technoblogical.com/">Chris Walker</a>
		</div></footer>
			<?php if ( !wp_is_mobile() ) { ?>
				<?php get_sidebar( 'lower-widgets' ); ?>
			<?php } else { ?>
				<?php get_sidebar( 'mobile-lower-widgets' ); ?>
			<?php } ?>
	</body>
	<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/sporting-javascript.js"></script> -->
	<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/dumb-gallery.js"></script> -->
	<script type="text/javascript">
		$("#nav-button").click(function(){
			$("#nav").slideToggle();
		})
	</script>
	<?php wp_footer(); ?> 
</html>
