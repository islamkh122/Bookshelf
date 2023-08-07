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
         <?php if (is_user_logged_in()) { ?> 
         <?php 
         
            $count_my_books = count(get_posts(['author'=>get_current_user_id(), 'post_type'     => 'shelf_book','posts_per_page'=>-1]));
         ?>
         <!-- Rounded tabs -->
         <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav px-0">
            <li class="nav-item flex-sm-fill">
               <a id="books-tab" data-toggle="tab" href="#books" role="tab" aria-controls="books" aria-selected="true" 
                  class="nav-link border-0 text-uppercase font-weight-bold active"  
                  >My Books (<?=$count_my_books?>)</a>
            </li>
            <li class="nav-item flex-sm-fill">
               <a id="collections-tab" data-toggle="tab" href="#collections" role="tab" aria-controls="collections" aria-selected="false"   
                  class="nav-link border-0 text-uppercase font-weight-bold ">My Collections (<?=count(get_all_user_collection())?>)</a>
            </li>
            <li class="nav-item flex-sm-fill">
               <a id="wishlist-tab" data-toggle="tab" href="#wishlist" role="tab" aria-controls="wishlist" aria-selected="false"   
                  class="nav-link border-0 text-uppercase font-weight-bold ">My Wishlist (<?=count(get_all_user_wishlist())?>)</a>
            </li>
         </ul>
         <div class="text-center mb-3">
         </div>
         <div id="myTabContent" class="tab-content ">
            <div id="books" role="tabpanel" aria-labelledby="books-tab" class="tab-pane fade px-4 pb-5 show active show">
               <div class="row">
                  <?php include('add_new_book.php'); ?>
                  <?=do_shortcode('[list_books owner="'.get_current_user_id() .'"]')?>
               </div>
            </div>
            <div id="collections" role="tabpanel" aria-labelledby="collections-tab" class="tab-pane fade px-4 pb-5 ">
               <?=do_shortcode('[list_collections owner="'.get_current_user_id() .'"]')?>
                
            </div>
            <div id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab" class="tab-pane fade px-4 pb-5 ">
               <div class="row">
                  <?=do_shortcode('[list_wishlist owner="'.get_current_user_id() .'"]')?>
               </div>
            </div>
         </div>
         <?php } else { ?> 
         <div class="alert alert-danger"> you need to <a href="<?=wp_login_url(get_permalink())?>">login</a> first. </div>  
         <?php } ?>
      </div>
      <!-- Shop Product End -->
   </div>
</div>
<!-- 1300  -->