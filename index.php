		<?php if ( wp_is_mobile() ) { ?>
			<?php get_header('mobile'); ?>
		<?php } else {  ?>
			<?php get_header(); ?>
		<?php } ?>
			<?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        	<section><div class='section'>
        		<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.?>
							<?php
								$thumb_id = get_post_thumbnail_id();
								$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail', true);
							?>
							<div class='thumbnail-on-display' style='background-image:url(" <?php echo $thumb_url[0]; ?>");'></div>
						<?php } ?>
        		<p class='the-author-meta'>Written by: <?php the_author_link(); ?></p>
        		<?php the_excerpt(); ?>
        	</div></section>
        <?php endwhile; ?>
     	<?php endif; ?>
     		<div style='padding:0;margin:0;clear:both;'></div>
     		<ul id='older-button-newer-button'>
     			<li id="newer-button">
     			<?php posts_nav_link('</li><li id="older-button">','Newer Posts','Older Posts'); ?>
     			</li>
     		</ul>
     		<div style='padding:0;margin:0;clear:both;'></div>
		<?php get_footer(); ?>