<?php

function load_assets(){
 /*
    wp_enqueue_style('name of style sheet variable', 'href')
    wp_enqueue_script('name of jscript variable', 'href')
*/
    wp_enqueue_style( 'load-main-styles', get_stylesheet_uri());
    
    wp_enqueue_script( 'load-font-awesome', 'https://use.fontawesome.com/b32cb84b30.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'responsive-nav', get_template_directory_uri() . '/js/responsive-nav.js', array(), '1.0.0', true );
    wp_enqueue_script( 'load-mouse-trap', '//cdnjs.cloudflare.com/ajax/libs/mousetrap/1.4.6/mousetrap.min.js');

}

add_action('wp_enqueue_scripts', 'load_assets');

function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 128,
		'width'                => 128,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

// Register custom post types
function create_post_types() {
    // Make post type called 'Services'
    register_post_type( 'Services',
        array(
            'labels' => array(
                'name'=> 'Services',
                'singular_name' => 'Service'
             ),
            'public' => true,
            'has_archive' => false,
        )
    );

    // Make post type called 'News'
    register_post_type( 'News',
        array(
            'labels' => array(
                'name'=> 'News',
                'singular_name' => 'News'
             ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'news'),
        )
    );

    // Make post type called 'Gallery'
    register_post_type( 'Gallery',
        array(
            'labels' => array(
                'name'=> 'Gallery',
                'singular_name' => 'Gallery'
             ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'gallery'),
        )
    );    
}
add_action( 'init', 'create_post_types' );
