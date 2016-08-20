<?php 

	add_theme_support( 'post-thumbnails' ); 
	
	add_image_size( 'istenilen', 360, 185, array( 'left', 'top' ) );
	add_image_size( 'rastgele', 390, 390, array( 'left', 'top' ) );
	
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'tema' ),
) );

 register_sidebar( array(
        'name' => __( 'sag bilesen', 'tema' ),
        'id' => 'sidebar-right',
        'description' => __( 'sağ tarafta gözüken bileşen alanı', 'tema' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
    ) );
	
?>