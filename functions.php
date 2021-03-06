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
	'id'            => 'front-page-header-announcement',
	'name'          => __( 'Header - announcement section' , 'iioc' ),
	'description'   => __( 'Content for right front page header Sidebar' , 'iioc' ),
	'before_widget' => '<div id="%1$s" class="widget %2$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'
));
function add_search_to_wp_menu ( $items, $args )
{
	if( 'header' === $args -> theme_location )
	{
		$items .= '<li class="menu-item search">';
		$items .= '<form class="navbar-form" role="search" action="' . esc_url( home_url( '/' ) ) . '" method="get" id="searchform">';
		$items .= '<div class="input-group add-on">';
		$items .= '<input type="text" class="form-control" placeholder="Search" name="s" id="keywords">';
		$items .= '<div class="input-group-btn">';
		$items .= '<button class="btn btn-default" type="submit"><i class="icon-search-5"></i></button>';
		$items .= '</div>';
		$items .= '</div>';
		$items .= '</form>';
		$items .= '</li>';
	}
	return $items;
}

add_filter('wp_nav_menu_items','add_search_to_wp_menu',10,2);