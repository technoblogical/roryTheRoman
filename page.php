		<?php if ( wp_is_mobile() ) { ?>
			<?php get_header('mobile'); ?>
		<?php } else {  ?>
			<?php get_header(); ?>
		<?php } ?>
			<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        	<section><div class='section'>
        		<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        		<p class='the-author-meta'>Written by: <?php the_author_link(); ?></p>
        		<?php the_content(); ?>
        	</div></section>
        <?php endwhile; ?>
     	<?php endif; ?>
     		<div style='padding:0;margin:0;clear:both;'></div>
     		<div style='padding:0;margin:0;clear:both;'></div>
		<?php get_footer(); ?>