<?php

require get_template_directory() . '/helper/Utils.php';
require get_template_directory() . '/api/custom_endpoint.php';

function twg_register_style() {
    $theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'twg-style', get_stylesheet_uri(), array(), $theme_version );
    wp_enqueue_style( 'twg-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', null, $theme_version, 'all' );

    wp_enqueue_style( 'twg-assets-style', get_template_directory_uri() . '/assets/css/style.css', null, $theme_version, 'all' );
}
add_action( 'wp_enqueue_scripts', 'twg_register_style');

function twg_register_script() {
    $theme_version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script( 'twg-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), $theme_version );
    wp_enqueue_script( 'twg-js', get_template_directory_uri() . '/assets/js/script.js', array(), $theme_version );
    wp_script_add_data( 'twg-jquery', 'strategy', 'defer' );
    wp_script_add_data( 'twg-js', 'strategy', 'defer' );
}
add_action( 'wp_enqueue_scripts', 'twg_register_script' );

function twg_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'twg' ),
		'footer'   => __( 'Footer Menu', 'twg' ),
        'footer2'   => __( 'Footer 2 Menu', 'twg' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'twg_menus' );

add_theme_support( 'custom-logo' );

function twg_custom_setup() {
    add_theme_support( 'post-thumbnails' );

	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'twg_custom_setup' );

function twg_menu_items($items, $args) {
    // Check if this is the primary menu
    if ($args->theme_location == 'primary') {
        // You can manipulate the menu items here
        // For example, you can add a class to each menu item
        $items = str_replace('<li', '<li class="nav-item"', $items);
    }

    return $items;
}
add_filter('wp_nav_menu_items', 'twg_menu_items', 10, 2);

function twg_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer 1', 'twg' ),
        'id' => 'footer-1',
        'description' => __( 'Widgets in this area will be shown in the sidebar.', 'theme_name' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer 2', 'twg' ),
        'id' => 'footer-2',
        'description' => __( 'Widgets in this area will be shown in the sidebar.', 'theme_name' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    // Add more widget areas if needed
}
add_action( 'widgets_init', 'twg_widgets_init' );

function twg_allow_svg_upload( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'twg_allow_svg_upload' );