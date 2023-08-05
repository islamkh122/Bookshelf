<?php 
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
    $book_collection = preg_replace( '/[^a-zA-Z0-9 ]/m',   '',$_POST['book_collection']);
    $book_collection_name = preg_replace( '/[^a-zA-Z0-9 ]/m',   '',$_POST['book_collection_name']);
    $book_description = preg_replace( '/[^a-zA-Z0-9 ]/m',   '',$_POST['book_description']);
    $action = $_POST['action'];
    $base_page = $_POST['base_page'];

    
    
    if ($base_page != get_page_permalink_from_name('My Shelf')  ){
        wp_redirect($base_page.'?add_error=wrong request page.'); 
    }
    if ($action != 'add_new_book'  ){
        wp_redirect($base_page.'?add_error=wrong request.'); 
    } 
    if (empty($book_name) || empty($book_author)|| empty($publication_year)|| empty($book_genre)
     || ($book_genre =='other' && empty($book_genre_name) ) || ($book_collection =='other' && empty($book_collection_name) ) ){
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
    
    if (isset($_FILES['book_pdf']) && !empty($_FILES['book_pdf']['name'])  ){
        
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
                      'post_content'   => $book_description,
                      'post_type'     => 'shelf_book',
                      );
    $book_id = wp_insert_post($new_book   );
    
    
    //die ();
    set_post_thumbnail( $book_id, $attachment_id );
    
    // meta
    update_post_meta($book_id,'book_author',$book_author);
    update_post_meta($book_id,'publication_year',$publication_year);
    update_post_meta($book_id,'book_genre', $book_genre_name !='' ? $book_genre_name : $book_genre);
    if (!empty($book_collection))
        update_post_meta($book_id,'book_collection', $book_collection_name !='' ? $book_collection_name : $book_collection);
    
    
    unset($_SESSION['form_data']);
    wp_redirect($base_page.'?add_seccess='.$book_name); 
}



// get single book full details 
add_action( 'wp_ajax_get_single_book_details', 'get_single_book_details_handler' );
add_action( 'wp_ajax_nopriv_get_single_book_details', 'get_single_book_details_handler' );

function get_single_book_details_handler(){
    if (isset ($_POST['book_id']) && intval($_POST['book_id']) > 0){
        $id = intval($_POST['book_id']);
        $single_book = get_post( $id );
        $user = get_userdata( $single_book->post_author);
        $owner_name = $user->display_name;
         
        $thumbnail = (get_the_post_thumbnail_url($id));
        $thumbnail = $thumbnail ? $thumbnail   : BookShelf_PLUGIN_URL.'/assets/imgs/cover.svg';
        if ($single_book) {

            $wishlist = '';
            if ( get_wishlist(get_current_user_id() , $id) ) {
                $wishlist = '<div class="btn btn-sm   p-0 toggle_wishlist" data-class="'.$id .'">
                <i class="fas fa-trash text-danger  mr-1"></i>Exit WishList</div>';
            } else {
                $wishlist = '<div class="btn btn-sm text-dark p-0 toggle_wishlist"   data-class="'.$id .'">
                <i class="fas fa-heart text-primary mr-1"></i>Add To WishList</div>';
            }

            $also_wishlist ='';
            $book_wishlist = get_post_meta($id , 'book_wishlist');
            if ($book_wishlist){
                $also_wishlist = '<div class="my-4 alert alert-info">'.count($book_wishlist).' also has added this to thair wishlist</div>';
            }


            $details = array(
                'title'=>$single_book->post_title,
                'cover_link'=>$thumbnail,
                'book_genre'=>get_post_meta($id ,'book_genre',true),
                'book_author'=>get_post_meta($id ,'book_author',true),
                'book_year'=>get_post_meta($id ,'publication_year',true),
                'book_collection'=>get_post_meta($id ,'book_collection',true),
                'owner_name'=>$owner_name,
                'book_description'=>$single_book->post_content,
                'wishlist'=>$wishlist,
                'also_wishlist'=>$also_wishlist,
            );
            $response = array('data'=>$details);
            return wp_send_json_success($response);
        }
    }

    die ;
}

// toggle_wishlist
add_action( 'wp_ajax_toggle_wishlist', 'toggle_wishlist_handler' );
add_action( 'wp_ajax_nopriv_toggle_wishlist', 'toggle_wishlist_handler' );

function toggle_wishlist_handler(){
    if (intval( $_POST['book_id'] ) > 0){
        $book_id = intval( $_POST['book_id'] ) ; 
        if ( $meta_id = get_wishlist( get_current_user_id() , $book_id ) ){
            delete_metadata_by_mid('post',$meta_id);
            echo 'removed';
        } else {
            add_post_meta($book_id , 'book_wishlist',get_current_user_id() );
            echo 'added';
        }
    }

    die ;
    
}