<?php get_header(); ?>

<div class="container ">
	
	<div class="col-lg-8 single ">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<p class="help-block"><?php _e( 'Kategori:' ); ?> <?php the_category( ', ' ); ?> <?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></p>
	<p><?php the_content(); ?></p>
	<?php endwhile; ?>
		
	<?php else : ?>
	Bu kategoride makale bulunmuyor	
	<?php endif; ?>
	</div>
	
<div class="col-lg-4 widgets">
	<?php get_sidebar(); ?>
</div>


</div>

<?php get_footer(); ?>