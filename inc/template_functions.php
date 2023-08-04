<?php

function get_page_permalink_from_name($page_name) {
    global $post;
    global $wpdb;
    $pageid_name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '" . $page_name . "' LIMIT 0, 1");
    if ($pageid_name)
        return get_permalink($pageid_name);
    else return false;
}

// add new book
add_action( 'admin_post_nopriv_add_new_book', 'add_new_book_form' );

add_action( 'admin_post_add_new_book', 'add_new_book_form' );

function add_new_book_form(){
    session_start();
    $_SESSION['form_data'] = serialize( $_POST );
    // validate
    $book_name = preg_replace( '/[^a-zA-Z0-9 ]/m',   '',$_POST['book_name']);
    $book_author = preg_replace( '/[^a-zA-Z0-9 ]/m',   '',$_POST['book_author']);
    $publication_year = preg_replace( '/[^a-zA-Z0-9 ]/m',   '',$_POST['publication_year']);
    $book_genre = preg_replace( '/[^a-zA-Z0-9 ]/m',   '',$_POST['book_genre']);
    $book_genre_name = preg_replace( '/[^a-zA-Z0-9 ]/m',   '',$_POST['book_genre_name']);
    $book_description = preg_replace( '/[^a-zA-Z0-9 ]/m',   '',$_POST['book_description']);
    $action = $_POST['action'];
    $base_page = $_POST['base_page'];
    
    if ($base_page != get_page_permalink_from_name('My Shelf')  ){
        wp_redirect($base_page.'?add_error=wrong request page.'); 
    }
    if ($action != 'add_new_book'  ){
        wp_redirect($base_page.'?add_error=wrong request.'); 
    } 
    if (empty($book_name) || empty($book_author)|| empty($publication_year)|| empty($book_genre) ){
        wp_redirect($base_page.'?add_error=some required fields are empty.'); 
    }
    if ($publication_year  < 1900 || $publication_year  > 2100   ){
        wp_redirect($base_page.'?add_error=wrong publication year.'); 
    }
    
    // check files 
    if (!isset($_FILES['book_cover'])){
        wp_redirect($base_page.'?add_error=book cover year.'); 
     
    }
    
    $info = getimagesize($_FILES['book_cover']['tmp_name']);
    if ($info === FALSE) {
       die("Unable to determine image type of uploaded file");
    }
    
    if (  ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) {
       wp_redirect($base_page.'?add_error=book cover not jpeg/png.'); 
    }
    
    if ($_FILES['book_cover']['size'] > ( 4 * 1024 * 1024)){
       wp_redirect($base_page.'?add_error=book cover is bigger than 4 mega.'); 
    }
    
    if (isset($_FILES['book_pdf'])){
        
        if ( $_FILES['book_pdf']['type'] != 'application/pdf'){
            wp_redirect($base_page.'?add_error=book file is not pdf.'); 
        }
        
        if ($_FILES['book_pdf']['size'] > ( 10 * 1024 * 1024)){
            wp_redirect($base_page.'?add_error=book file is bigger than 10 mega.'); 
         }
     
    }
    
    // upload files 
    require_once( ABSPATH . 'wp-admin/includes/file.php' );
    $sideload = wp_handle_sideload( $_FILES['book_cover'] , array( 'test_form'   => false   ) );
    $attachment_id = wp_insert_attachment(
            array(
                'guid'           => $sideload[ 'url' ],
                'post_mime_type' => $sideload[ 'type' ],
                'post_title'     => basename( $sideload[ 'file' ] ),
                'post_content'   => $book_description,
                'post_status'    => 'inherit',
            ),
            $sideload[ 'file' ]
        );
    
    
    if( is_wp_error( $attachment_id ) || ! $attachment_id ) {
		wp_redirect($base_page.'?add_error=Error uploading files .'); 
	}
    
    require_once( ABSPATH . 'wp-admin/includes/image.php' );

	wp_update_attachment_metadata(
		$attachment_id,
		wp_generate_attachment_metadata( $attachment_id, $sideload[ 'file' ] )
	);
    
    // insert book 
    // insert book shelf
    $new_book = array(
                      'post_author'=>get_current_user_id() ,
                      'post_title'=>$book_name,
                      'post_status'=>'publish',
                      'post_type'     => 'shelf_book',
                      );
    $book_id = wp_insert_post($new_book   );
    
    set_post_thumbnail( $book_id, $attachment_id );
    
    // meta
    update_post_meta($book_id,'book_author',$book_author);
    update_post_meta($book_id,'publication_year',$publication_year);
    update_post_meta($book_id,'book_genre', $book_genre_name !='' ? $book_genre_name : $book_genre);
 
    
    
    var_dump($attachment_id);
    die ();
}