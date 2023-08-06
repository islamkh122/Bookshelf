<?php
function shelf_books_func( $atts ){
    
    ob_start();
    include (BookShelf_PLUGIN_FILE. '/views/all_books.php');
    $return_string = ob_get_clean();
    return $return_string;
    
}
add_shortcode( 'shelf_books', 'shelf_books_func' );

function shelf_my_shelf_func( $atts ){
    
    ob_start();
    include (BookShelf_PLUGIN_FILE. '/views/shelf_my_shelf.php');
    $return_string = ob_get_clean();
	return $return_string;
}
add_shortcode( 'shelf_my_shelf', 'shelf_my_shelf_func' );

//single_book
add_shortcode( 'single_book', 'single_book_func' );

function single_book_func( $attributes ){
        $atts = shortcode_atts(array(
            'ID' => false, 
    ), $attributes);

    if ( $id = $atts['ID']){
        
        $single_book = get_post( $id );
        if ($single_book) {
            $user = get_userdata( $single_book->post_author);
            $owner_name = $user->display_name;
            $thumbnail = (get_the_post_thumbnail_url($id));
            $thumbnail = $thumbnail ? $thumbnail   : BookShelf_PLUGIN_URL.'/assets/imgs/cover.svg';

            ob_start();
            include (BookShelf_PLUGIN_FILE. '/views/single_book.php');
            $return_string = ob_get_clean();
            return $return_string;

        }
        
    }

}

//list_books
add_shortcode( 'list_books', 'list_books_func' );

function list_books_func( $attributes ){

    global $wpdb;
    $atts = shortcode_atts(array(
            'owner' => false, 
            'collection_id' => false, 
    ), $attributes);

    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 

    

    $args = array(
        'orderby'       =>  'post_date',
        'order'         =>  'DESC',
        'post_type'     =>'shelf_book',
        'posts_per_page' => 12,
        'paged'         => $paged,
    );

    if ($atts['owner']){
            $args['author'] =  $atts['owner'] ; 
    }
    if ($atts['collection_id']){
        $args['tax_query'] =  array(
            array(
                'taxonomy' => 'book_category',
                'field' => 'term_id',
                'terms' => $atts['collection_id'],
            ),
        ) ; 
        
    }

    if (isset($_GET['s_genre'])){
        $s_genre = preg_replace( '/[^a-zA-Z0-9 ]/m',   '',$_GET['s_genre']);
        if (!empty($s_genre) ){
            $args['meta_key'] = 'book_genre';
            $args['meta_query'] = array(
                                        array(
                                            'key' => 'book_genre',
                                            'value' => $s_genre,
                                            'compare' => '=',
                                        )
                                );
        }
        
    }

    if (isset($_GET['s_text'])){
        $s_text = preg_replace( '/[^a-zA-Z0-9 ]/m',   '',$_GET['s_text']);
        /*$args['title'] = $s_text;*/
        if (!empty($s_text)){
             
            // get by post title 
            $query = $wpdb->prepare(" SELECT ID FROM {$wpdb->posts} WHERE post_title LIKE %s AND post_type = %s AND post_status = %s ", 
                        '%' . $s_text . '%', 'shelf_book', 'publish');
            $posts_by_title = $wpdb->get_col($query);
            // get by post author 
            $query = $wpdb->prepare("SELECT `wp_posts`.id from `wp_posts` left join `wp_postmeta` on `wp_posts`.id = `wp_postmeta`.`post_id` 
            where (`wp_postmeta`.`meta_key` ='book_author' or `wp_postmeta`.`meta_key` ='publication_year' )
            and `wp_postmeta`.`meta_value` LIKE '%".$s_text."%'");
            $posts_by_author = $wpdb->get_col($query);
             

            $combinedArray = array_merge($posts_by_title, $posts_by_author);

            $args['post__in'] = $combinedArray;
            // Execute the query and get the post IDs.
            #$post_ids = $wpdb->get_col($query);
        }
        

        
    }

     
    $list_books = new WP_Query( $args);
    $str = '';
    if ($list_books->have_posts()){
        
        foreach($list_books->posts as $book)
            $str .= '<div class="col-lg-4 col-md-6 col-sm-12 pb-1">'.single_book_func(['ID'=>$book->ID]).'</div>';

            $str .= '<div class="pagenat_routes pagination justify-content-center mb-3 ">'.paginate_links( array(
                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'total'        => $list_books->max_num_pages,
                'current'      => max( 1, get_query_var( 'paged' ) ),
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'plain',
                'end_size'     => 3,
                'mid_size'     => 1,
                'prev_next'    => true,
                'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Books', 'text-domain' ) ),
                'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Books', 'text-domain' ) ),
                'add_args'     => false,
                'add_fragment' => '',
            ) ).'</div>';
         
        
    }
    return $str; 

}

// list_wishlist
add_shortcode( 'list_wishlist', 'list_wishlist_func' );

function list_wishlist_func( $attributes ){
        $atts = shortcode_atts(array(
            'owner' => false, 
        ), $attributes);

        if ($atts['owner']){
                $wishlist = get_all_user_wishlist() ; 
        }
        $str ='';
        foreach ( $wishlist as $book   ) 
                $str .= '<div class="col-lg-4 col-md-6 col-sm-12 pb-1">'.single_book_func(['ID'=>$book['post_id']]).'</div>';

        return $str ; 

}
// list_collections
add_shortcode( 'list_collections', 'list_collections_func' );

function list_collections_func( $attributes ){
    $atts = shortcode_atts(array(
            'owner' => false, 
            'collection_id'=>false ,
    ), $attributes);

    if ($atts['owner']){
            $collections_list = get_all_user_collection() ; 
    } else {
        $collections_array  = get_all_collection();
        $collections_list   = $collections_array['categories'];
        $total_terms        = $collections_array['total_terms'];
        $total_pages        = $collections_array['total_pages'];
        $current_page        = $collections_array['current_page'];
        
    }
     
     
     
     
    if (count($collections_list)){
        $str = '';
        foreach($collections_list as $collection_id => $collection){
            $args = array(
                'post_type'=>'shelf_book',
                /*'meta_key' => 'book_collection',
                'meta_query' => array(
                    array(
                        'key' => 'book_collection',
                        'value' => $collection['meta_value'],
                        'compare' => '=',
                    )
                )*/
                'tax_query' => array(
                    array(
                        'taxonomy' => 'book_category',
                        'field' => 'term_id',
                        'terms' => $collection_id,
                    ),
                ),
             );
            $collection_books =  new WP_Query($args);
             
            if ( $collection_books->post_count ){
                $first_collection_book = (reset($collection_books->posts));
                 
                $user = get_userdata( $first_collection_book->post_author);
                $owner_name = $user->display_name;
    
                $str .= '<div  class="col-12 pb-1 row-collection ">
                            <div class="col-12 pb-1">
                                <h3> '.$collection .'</h3> 
                            </div>
                            <div class="col-12 pb-1">
                                <h6>owned by '.$owner_name.' and contain '.$collection_books->post_count.' book.</h6>
                            </div>
                            <div class="owl-carousel">';
                foreach ( $collection_books->posts as $book   ) 
                    $str .= '<div class="pb-1">'.single_book_func(['ID'=>$book->ID]).'</div>';
                $str .= '            </div>
                        </div>';
            }
           
        }
        
        // pagenation 
        if (isset($total_pages) && $total_pages > 1) {
            $str .= '<div class="pagination pagenat_routes">';
            for ($i = 1; $i <= $total_pages; $i++) {
                $current_class = ($i === $current_page) ? 'current' : '';
                $str .= '<a href="?paged=' . $i . '" class="page-numbers ' . $current_class . '">' . $i . '</a>';
            }
            $str .= '</div>';
        }

        return $str; 
    }

}

//shelf_collections

add_shortcode( 'shelf_collections', 'shelf_collections_func' );

function shelf_collections_func(  ){
    $collection_id = get_query_var('collection');
    if ($collection_id && false)
        return '..............';
    else {
        ob_start();
        include (BookShelf_PLUGIN_FILE. '/views/all_collections.php');
        $return_string = ob_get_clean();
        return $return_string;
    }
}