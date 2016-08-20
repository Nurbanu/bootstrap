<?php get_header(); ?>


<div class="container ">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h1><?php the_title(); ?></h1>
<p><?php the_content(); ?></p>

<?php endwhile; else : ?>
<p><?php _e( 'Bulunamadı.' ); ?></p>
<?php endif;  ?>
</div>



<?php get_footer(); ?>