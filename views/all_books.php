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
               <div class="row pb-3">
                  <div class="col-12 pb-1">
                     <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="row header-search w-100">
                           <div class="col-md-3 my-2">
                              <div class="select-holder">
                                 <select class='fstdropdown-select' id="first" name="s_genre">
                                    <option value="">Select Genre</option>
                                    <?php  foreach( get_all_user_genres() as $genre) {?>
                                    <option 
                                    value="<?=$genre['meta_value'] ?>"
                                    <?= (isset($_GET['s_genre']) && $_GET['s_genre'] == $genre['meta_value']) ? 'selected': ''?>
                                    ><?=$genre['meta_value']?></option>
                                    <?php } ?>
                                 </select>
                              </div>
                           </div>
                           
                           <div class="col-md-6 my-2">
                              <form action="">
                                 <div class="input-group">
                                    <input type="text" class="form-control"  name="s_text" 
                                    placeholder="Search by Title , Author Or Publication Year"
                                    value="<?= (isset($_GET['s_text'])  ) ? $_GET['s_text']: ''?>">
                                    <div class="input-group-append">
                                       <span class="input-group-text bg-transparent text-primary search_btn" style=" cursor: pointer; ">
                                       <i class="fa fa-search"></i>
                                       </span>
                                    </div>
                                 </div>
                              </form>
                           </div>
                            
                        </div>
                     </div>
                  </div>
                  <?=do_shortcode('[list_books  ]')?>
                  
               </div>
            </div>
            <!-- Shop Product End -->
         </div>
      </div>