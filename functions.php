<?php
/**
* Enqueues child theme stylesheet, loading first the parent theme stylesheet.
*/
function themify_custom_enqueue_child_theme_styles()
{
	wp_enqueue_style( 'parent-theme-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'app', get_stylesheet_directory_uri() . '/js/app.js' );
}

add_action( 'wp_enqueue_scripts', 'themify_custom_enqueue_child_theme_styles' );

register_sidebar(array(
    'id'            => 'front-page-header-fourth',
    'name'          => __( 'Header - Fourth Front Page Sidebar' , 'iioc' ),
    'description'   => __( 'Content for right front page header Sidebar' , 'iioc' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));
register_sidebar(array(
    'id'            => 'front-page-header-fifth',
    'name'          => __( 'Header - Fifth Front Page Sidebar' , 'iioc' ),
    'description'   => __( 'Content for right front page header Sidebar' , 'iioc' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));
register_sidebar(array(
    'id'            => 'front-page-header-sixth',
    'name'          => __( 'Header - Sixth Front Page Sidebar' , 'iioc' ),
    'description'   => __( 'Content for right front page header Sidebar' , 'iioc' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));