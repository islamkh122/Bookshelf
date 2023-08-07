<?php

function get_page_permalink_from_name($page_name) {
    global $post;
    global $wpdb;
    $pageid_name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_title = '" . $page_name . "' LIMIT 0, 1");
    if ($pageid_name)
        return get_permalink($pageid_name);
    else return false;
}



// get_all_user_genres
function get_all_user_genres(){
    global $wpdb;    
    $result = $wpdb->get_results( 'SELECT DISTINCT meta_value FROM `wp_postmeta` WHERE `meta_key`="book_genre";' , ARRAY_A);
    return ($result);
     
}

// get_all_user_collection
function get_all_user_collection(){
     
    global $wpdb;

    $term_group = get_current_user_id(); // Replace 1 with the desired term_group value you want to query

    $sql = $wpdb->prepare(
        "SELECT t.term_id, t.slug FROM {$wpdb->terms} AS t
        INNER JOIN {$wpdb->term_taxonomy} AS tt ON t.term_id = tt.term_id
        WHERE tt.taxonomy = 'book_category' AND t.term_group = %d",
        $term_group
    );

     $categories = $wpdb->get_results($sql , ARRAY_A);
     
     $books_category = array();
     foreach($categories as $cat){
        
         $books_category[$cat['term_id']] = $cat['slug'];
     }
        
     return $books_category;
}

function get_all_collection(){
    $taxonomy = 'book_category';

    $taxonomy = 'book_category';
    $terms_per_page = 12;
    $current_page = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
     

    $args = array(
        'taxonomy' => $taxonomy,
        'hide_empty' => true,
        'number' => $terms_per_page,
        'offset' => ($current_page - 1) * $terms_per_page,
    );

    $categories = get_terms( $args );
     
    $books_category = array();
     foreach($categories as $cat){
         
         $books_category[$cat->term_id] = $cat->slug;
     }

    $total_terms = wp_count_terms($taxonomy);
    $total_pages = ceil($total_terms / $terms_per_page);
          
    return array(
        'categories'=> $books_category ,
        'total_terms'=> $total_terms ,
        'total_pages'=> $total_pages ,
        'current_page'=>$current_page,
        
    );
}

//in_wishlist
function get_wishlist($user_id , $book_id){
    global $wpdb;    
    $result = $wpdb->get_results( 'SELECT * FROM `wp_postmeta` 
                                        WHERE  
                                        `wp_postmeta`.`meta_key`="book_wishlist" 
                                        and `wp_postmeta`.`post_id`="'.$book_id.'" 
                                        and `wp_postmeta`.`meta_value`="'.$user_id.'" 
                                        LIMIT 1
                                        ;' , ARRAY_A);

    if ( ! empty($result) ) 
            return $result[0]['meta_id'];

    return false ;
}



// get_all_user_wishlist
function get_all_user_wishlist(){
    global $wpdb;    
    $result = $wpdb->get_results( 'SELECT `wp_postmeta`.`post_id` 
    From `wp_postmeta`
    WHERE `wp_postmeta`.`meta_value`='.get_current_user_id().' and `wp_postmeta`.`meta_key`="book_wishlist";' , ARRAY_A);
    return ($result);
}

function get_meta_id_by_post_id_and_value($post_id, $meta_key, $meta_value) {
    // Get all meta data for the post with the specified ID.
    global $wpdb;
    $results = $wpdb->get_results('SELECT * FROM `wp_postmeta` WHERE `post_id`="'.$post_id.'" and 
    `meta_key`="'.$meta_key.'" and `meta_value`="'.$meta_value.'"', ARRAY_A);
    
    if (isset($results[0]) && isset($results[0]['meta_id']))
        return $results[0]['meta_id'];
    return null;
}


function book_category($category_name , $user_id= false  ) {
    if (!$user_id)
        $user_id=get_current_user_id();
    // Check if the book category exists
    $category_exists = term_exists($category_name, 'book_category');

    // If the category doesn't exist, create it
    if (!$category_exists) {
        $category_args = array(
            'slug' => sanitize_title($category_name),
            'description' => 'This is a book category named ' . $category_name,
            //'term_group'=>get_current_user_id(),
        );

        $category = wp_insert_term($category_name, 'book_category', $category_args);
        $category_id = $category['term_id'] ;
        $ret = wp_update_term($category_id, 'book_category', array('term_group' => $user_id));
         

        // Insert the new book category using wp_insert_term()
        return $category_id  ;
         

         
    } else {
        return $category_exists;
    }
}
 
 