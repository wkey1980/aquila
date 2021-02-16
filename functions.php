<?php
/**
 * Theme Functions
 * 
 * @package aquila
 */
?>

<?php








function aquila_enqueue_scripts() {

    // Register Bootstrap Styles
    wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', array(), false, 'all' );

    // Register Bootstrap Scripts
    wp_register_script( 'bootstrap.js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', array( 'jquery' ), false, true );

    // Enqueue Bootstrap Styles
    wp_enqueue_style( 'bootstrap-css' );

    // Enqueue Bootstrap Scripts
    wp_enqueue_script( 'bootstrap.js' );




    // Register Theme Styles
    wp_register_style( 'style-css', get_template_directory_uri() . '/style.css', array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

    // Register Theme Scripts
    wp_register_script( 'main.js', get_template_directory_uri() . '/main.js', array(), filemtime( get_template_directory() . '/main.js' ), true ); 

    // Enqueue Theme Styles
    wp_enqueue_style( 'style-css' );

    // Enqueue Theme Scripts
    wp_enqueue_script( 'main.js' );
}
add_action( 'wp_enqueue_scripts', 'aquila_enqueue_scripts' );


?>