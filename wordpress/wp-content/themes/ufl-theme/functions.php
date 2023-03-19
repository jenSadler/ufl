<?php 
function my_custom_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/assets/bootstrap/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
add_action( 'init', 'my_custom_menu' );
?>