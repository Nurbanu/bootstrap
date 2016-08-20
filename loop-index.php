<div class="container icerik"> 

	<div class="row">
		<?php query_posts("cat=-2&showposts=3&orderby=rand"); ?>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="col-lg-4 anasayfamanset">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail('rastgele', array('class' => 'img-responsive img-circle')); } else { echo '<img src="http://www.placehold.it/390x390" class="img-responsive img-circle ">'; }?>
			
			<h2><?php the_title(); ?></h2>
			<?php the_excerpt();?>
			<a href="<?php the_permalink(); ?>" class="btn btn-default" title="<?php the_title_attribute(); ?>">Devamı</a>
		</div>		
			
		<?php endwhile; ?>
		
		<?php else : ?>
		Bu kategoride makale bulunmuyor	
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	</div><!--.row-->
	
	<hr>
	
	<?php query_posts("cat=2"); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div class="row">
			<div class="col-lg-8">
			<h1><?php the_title(); ?></h1>
			<?php the_excerpt();?>
			<p><a href="<?php the_permalink(); ?>" class="btn-btn-primary"title="<?php the_title_attribute(); ?>">  Devamı </a> </p>
		    </div>
		    <div class="col-lg-4"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('istenilen', array('class' => 'img-responsive')); } else { echo '<img src="http://www.placehold.it/390x200" class=" img-responsive">'; }?></div>
		</div><!--.row-->
		
	
	
	<?php endwhile; ?>
		
	<?php else : ?>
	Bu kategoride makale bulunmuyor	
	<?php endif; ?>
	<?php wp_reset_query(); ?>
</div> 
	
	