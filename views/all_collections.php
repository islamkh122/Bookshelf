<div class="container-fluid pt-5" style="    max-width: initial;">
   <!-- modal -->
   <?php include (BookShelf_PLUGIN_FILE. '/views/details-modal.php'); ?>
   <!-- model  -->
   <div class="row px-xl-5">
      <!-- Shop Sidebar Start -->
      <?php
         include (BookShelf_PLUGIN_FILE. '/views/side_bar.php');
         
         
         
         ?>
      <!-- Shop Sidebar End -->
      <!-- Shop Product Start -->
      <div class="col-lg-9 col-md-12">
          
          
         <div class="text-center mb-3">
         </div>
         <div id="myTabContent" >
         <div id="collections"   >

            <?php 
               if ( $collection_id = absint(get_query_var('collection')) ) { 
                  $category = get_term($collection_id, 'book_category');
                  if ($category){
                     echo '<h3> Collection : '.$category->name.'</h3>';
                      
                     if ($category->term_group){
                        $user = get_userdata( $category->term_group );
                        $owner_name = $user->display_name;
   
                        echo '<h6> Collection Owner : '.$owner_name.'</h6>';
                     }
                     ?>
                     <div class="row pb-3">
                        <?= do_shortcode('[list_books  collection_id="'.$collection_id.'"]') ?>
                     </div>
                  <?php }
                  
               } else { ?>
                  <?=do_shortcode('[list_collections  ]')?>
            <?php } ?>
            
                 
            </div>
         </div>
          
      </div>
      <!-- Shop Product End -->
   </div>
</div>
<!-- 1300  -->