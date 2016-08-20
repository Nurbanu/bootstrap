<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dil Öğreniyorum</title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo("stylesheet_directory"); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo ("stylesheet_url"); ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
<?php wp_head(); ?>	<!--Sonradan eklenti dosyaların csslerin eklenmesini sağlmaktadır. -->

  </head>
  <body>
    <div class="ustkisim">
	<div class="container">
	<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
    </div>

        <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div>
</nav>
</div><!-- .container-->
</div><!-- ustkisim-->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
		<?php query_posts("cat=7&showposts=3"); ?>
		<?php $say=1; if (have_posts()) : ?>
		<?php while (have_posts()) : the_post();  ?>
    <div class="item <?php if($say==1) {echo 'active'; $say++;}  ?> ">
      <img src="https://placeholdit.imgix.net/~text?txtsize=83&txt=1000%C3%97500&w=1000&h=500" alt="...">
      <div class="carousel-caption">
        <h2><?php the_title(); ?></h2>
		<?php the_excerpt();?>
<br><a href="<?php the_permalink(); ?> " class="btn btn-primary" title="<?php the_title_attribute(); ?>">Devamı</a>

      </div>
    </div>
    <?php endwhile; ?>
		
	<?php else : ?>
	Bu kategoride makale bulunmuyor	
	<?php endif; ?>
    <?php wp_reset_query(); ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>