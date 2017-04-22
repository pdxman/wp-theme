<?php

//add menu support
add_action( 'init', 'register_my_menus' );

//register menu
function register_my_menus() {
register_nav_menus(
array(
'header-menu' => __( 'Header Menu' )
)
);
}

//add featured images
add_theme_support('post-thumbnails');


// adds widget support
function arphabet_widgets_init() {

	register_sidebar( array(
		'name' => 'Home right sidebar',
		'id' => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

// add read more to excerpt
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

//change number of character in excerpt
function custom_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 199 );


  
?>