<?php

register_sidebar( array(
		'name'          => __( 'Widget del Footer' ),
		'id'            => 'sidebar-footer-uno',
		'description'   => __( 'Este widget es para el footer' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
) );

register_sidebar( array(
		'name'          => __( 'Widget del Footer dos' ),
		'id'            => 'sidebar-footer-dos',
		'description'   => __( 'Este widget es para el footer' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
) );
register_sidebar( array(
		'name'          => __( 'Widget del Footer tres' ),
		'id'            => 'sidebar-footer-tres',
		'description'   => __( 'Este widget es para el footer' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
) );





add_theme_support( 'post-thumbnails');
add_image_size( 'slider_thumbs', 470, 300, true );
//add_image_size( 'list_articles_thumbs', 250, 170, true );

?>
