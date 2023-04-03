<?php 
function my_custom_menu() {
    register_nav_menu('main-nav',__( 'Main Navigation' ));
    register_nav_menu('footer-1',__( 'Footer Space 1' ));
    register_nav_menu('footer-2',__( 'Footer Space 2' ));
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/assets/bootstrap/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
add_action( 'init', 'my_custom_menu' );
add_theme_support( 'post-thumbnails' );
add_image_size( 'banner', 1200, 400 );

add_theme_support( 'editor-color-palette', array(
    array(
        'name'  => esc_attr__( 'White', 'themeLangDomain' ),
        'slug'  => 'white',
        'color' => '#fff',
    ),
    array(
        'name'  => esc_attr__( 'Black', 'themeLangDomain' ),
        'slug'  => 'ufl-black',
        'color' => '#231f20',
    ),
    array(
        'name'  => esc_attr__( 'Grey', 'themeLangDomain' ),
        'slug'  => 'ufl-grey',
        'color' => '#58595b',
    ),
    array(
        'name'  => esc_attr__( 'maroon', 'themeLangDomain' ),
        'slug'  => 'ufl-maroon',
        'color' => '#ab1b42',
    ),

    array(
        'name'  => esc_attr__( 'Background Cream', 'themeLangDomain' ),
        'slug'  => 'ufl-cream',
        'color' => '#fffbd3',
    ),
    array(
        'name'  => esc_attr__( 'Background Green', 'themeLangDomain' ),
        'slug'  => 'ufl-green',
        'color' => '#a0c33b',
    ),
    array(
        'name'  => esc_attr__( 'Background Yellow', 'themeLangDomain' ),
        'slug'  => 'ufl-yellow',
        'color' => '#febe10',
    ),
  

    array(
        'name'  => esc_attr__( 'Background Aqua', 'themeLangDomain' ),
        'slug'  => 'ufl-aqua',
        'color' => '#00accd',
    ),
    array(
        'name'  => esc_attr__( 'Background Blue', 'themeLangDomain' ),
        'slug'  => 'ufl-blue',
        'color' => '#3c3a73',
    ),


    array(
        'name'  => esc_attr__( 'Large Header red', 'themeLangDomain' ),
        'slug'  => 'large-header-red',
        'color' => '#e1295a',
    ),
    array(
        'name'  => esc_attr__( 'Large Header green', 'themeLangDomain' ),
        'slug'  => 'large-header-green',
        'color' => '#667f3c',
    ),
    array(
        'name'  => esc_attr__( 'Large Header yellow', 'themeLangDomain' ),
        'slug'  => 'large-header-yellow',
        'color' => '#b36206',
    ),
    array(
        'name'  => esc_attr__( 'Large Header pink', 'themeLangDomain' ),
        'slug'  => 'large-header-pink',
        'color' => '#e30b7c',
    ),
    array(
        'name'  => esc_attr__( 'Large Header aqua', 'themeLangDomain' ),
        'slug'  => 'large-header-aqua',
        'color' => '#0381a2',
    ),

   

    array(
        'name'  => esc_attr__( 'Small Header red', 'themeLangDomain' ),
        'slug'  => 'small-header-red',
        'color' => '#b0123d',
    ),
    array(
        'name'  => esc_attr__( 'Small Header green', 'themeLangDomain' ),
        'slug'  => 'small-header-green',
        'color' => '#4f5f28',
    ),
    array(
        'name'  => esc_attr__( 'Small Header yellow', 'themeLangDomain' ),
        'slug'  => 'small-header-yellow',
        'color' => '#8b4702',
    ),
    array(
        'name'  => esc_attr__( 'Small Header pink', 'themeLangDomain' ),
        'slug'  => 'small-header-pink',
        'color' => '#ae0167',
    ),
    array(
        'name'  => esc_attr__( 'Small Header aqua', 'themeLangDomain' ),
        'slug'  => 'small-header-aqua',
        'color' => '#0f607f',
    ),
    array(
        'name'  => esc_attr__( 'Small Header blue', 'themeLangDomain' ),
        'slug'  => 'small-header-blue',
        'color' => '#3c3a73',
    ),
) );


?>