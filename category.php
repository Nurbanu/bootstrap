<?php get_header(); ?>

<div class="container ">
	
	<ul class="kategoriler">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li>
			<div class="col-lg-4">
			<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail("istenilen");
			
			} 
		
			else{ ?>
				<img src="<?php bloginfo("stylesheet_directory"); ?> /images/foto.jpg"  alt="thumbnail">
			<?php }
		?>
			</div>
			<div class="col-lg-8">
				<a href="<?php the_permalink();?>" title=" <?php the_title_attribute(); ?>"> <?php the_title(); ?>(<small><?php the_time('F jS, Y');  ?></small>)</a>
			<p class="text-nuted"> <?php the_excerpt(); ?></p>
			
			</div>
			<div class="clearfix"></div>
			
			</li>
			
		<?php endwhile; else : ?>
		<p><?php _e( 'Bulunmadı' ); ?></p>
		<?php endif; ?>
	</ul>
</div>

<?php get_footer(); ?>