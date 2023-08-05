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
    $result = $wpdb->get_results( 'SELECT `wp_postmeta`.`meta_value` FROM `wp_posts` 
    left join `wp_postmeta` on  `wp_posts`.id = `wp_postmeta`.`post_id` 
    WHERE `wp_posts`.`post_author`='.get_current_user_id().' and `wp_postmeta`.`meta_key`="book_collection";' , ARRAY_A);
    return ($result);
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