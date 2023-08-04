<?php
function shelf_books_func( $atts ){
    
    if (is_user_logged_in()){
        ob_start();
        include (BookShelf_PLUGIN_FILE. '/views/all_books.php');
        $return_string = ob_get_clean();
        return $return_string;
    } else {
        return  '<div class="alert alert-danger">sorry you need to login first.</div>';
    }
    
}
add_shortcode( 'shelf_books', 'shelf_books_func' );

function shelf_my_shelf_func( $atts ){
    
    if (is_user_logged_in()){
    ob_start();
    include (BookShelf_PLUGIN_FILE. '/views/shelf_my_shelf.php');
    $return_string = ob_get_clean();
	return $return_string;
    } else {
        return  '<div class="alert alert-danger">sorry you need to login first.</div>';
    }
}
add_shortcode( 'shelf_my_shelf', 'shelf_my_shelf_func' );

