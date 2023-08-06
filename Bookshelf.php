<?php
/*
Plugin Name:  Bookshelf Plugin
Plugin URI:   https://github.com/islamkh122/Bookshelf
Description:  Once upon a time, in a land known as 'Webville', citizens were book lovers. They read and shared books with each other all the time. But, as the number of books grew, it became hard for them to manage their collections. They needed a way to keep track of all the books they had, the ones they had lent out, and the ones they wished to get. 

Our hero, an innovative full-stack developer, was touched by their plight and decided to help. He planned to create a magical artefact, a WordPress plugin named 'Bookshelf'. This plugin would allow the citizens to maintain an online record of their book collections, share their collection with friends, and add books they wished to buy to a wishlist. 

It's my turn to take the role of the developer hero and help the citizens of Webville!
.
Version:      1.0
Author:       Islam Khamis
Author URI:   https://www.behance.net/islamkhami48e8
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  book-shelf
*/
 
if ( ! defined( 'BookShelf_PLUGIN_FILE' ) ) {
	define( 'BookShelf_PLUGIN_FILE', plugin_dir_path( __FILE__ ));
}
if ( ! defined( 'BookShelf_PLUGIN_URL' ) ) {
	define( 'BookShelf_PLUGIN_URL', plugin_dir_url( __FILE__ ));
}

// seeting and create plugin pages 
include( plugin_dir_path( __FILE__ ) . 'inc/settings.php');
    
register_activation_hook(__FILE__, 'add_my_custom_pages');

include( plugin_dir_path( __FILE__ ) . 'inc/shortcodes.php');
include( plugin_dir_path( __FILE__ ) . 'inc/template_functions.php');

include( plugin_dir_path( __FILE__ ) . 'inc/ajax_functions.php');


// add css / js files
function wpse_load_plugin_css() {
    $plugin_url = BookShelf_PLUGIN_URL;
    wp_enqueue_style( 'all-min-css', $plugin_url . 'assets/css/all.min.css' );
    wp_enqueue_style( 'fstdropdown-min-css', $plugin_url . 'assets/css/fstdropdown.min.css' );
    wp_enqueue_style( 'book_shelf_style-css', $plugin_url . 'assets/css/book_shelf_style.css?v=2.2.2' );
    wp_enqueue_style( 'owl.carousel.min-css', $plugin_url . 'assets/css/owl.carousel.min.css' );
    
    wp_enqueue_script('bootstrabe-bundle-script', $plugin_url . 'assets/js/bootstrap.bundle.min.js',  array( 'jquery' ));
    wp_enqueue_script('fstdropdown-script', $plugin_url . 'assets/js/fstdropdown.min.js',  array( 'jquery' ));
    wp_localize_script( 'ajax-script', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' )  ) );
    wp_enqueue_script('owl-carousel-script', $plugin_url . 'assets/js/owl.carousel.min.js',  array( 'jquery' ));

    wp_enqueue_script('book_shelf-script', $plugin_url . 'assets/js/book_shelf.js?v=1.5.6',  array( 'jquery' ));
     
}
add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );

function ti_custom_javascript() {
    ?>
        <script>
             var ajax_url = '<?= admin_url('admin-ajax.php')?>';
            
        </script>
    <?php
}
add_action('wp_head', 'ti_custom_javascript');
