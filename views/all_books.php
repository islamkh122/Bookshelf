<div class="container-fluid pt-5" style="    max-width: initial;">
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
                                 <select class='fstdropdown-select' id="first">
                                    <option value="">Select Genre</option>
                                    <option value="1">1   First   2</option>
                                    <option value="2">Second</option>
                                    <option value="3">Third</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-3 my-2">
                              <div  class="select-holder">
                                 <select class='fstdropdown-select' id="second">
                                    <option value="">Select Tag</option>
                                    <option value="1">four</option>
                                    <option value="2">five </option>
                                    <option value="3">six</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-3 my-2">
                              <form action="">
                                 <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search by Title , Author Or Publication Year">
                                    <div class="input-group-append">
                                       <span class="input-group-text bg-transparent text-primary">
                                       <i class="fa fa-search"></i>
                                       </span>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="col-md-3 my-2">
                              <div class="dropdown ml-4">
                                 <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                 Sort by
                                 </button>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                     <div class="card product-item border-0 mb-4">
                        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                           <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                           <div class="position-absolute book-genre">Horror</div>
                        </div>
                        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                           <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                           <div class="d-flex justify-content-center">
                              <h6>loream ipsum </h6>
                              <br>
                              <h6>Horro  </h6>
                           </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between bg-light border">
                           <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                           <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Shop Product End -->
         </div>
      </div>