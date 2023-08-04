<div class="container-fluid pt-5" style="    max-width: initial;">
         <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <?php
            include (BookShelf_PLUGIN_FILE. '/views/side_bar.php');
            ?>
            
            <!-- Shop Sidebar End -->
            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-12">
                <!-- Rounded tabs -->
    <ul id="myTab" role="tablist" class="nav nav-tabs nav-pills flex-column flex-sm-row text-center bg-light border-0 rounded-nav px-0">
                    <li class="nav-item flex-sm-fill">
                <a id="books-tab" data-toggle="tab" href="#books" role="tab" aria-controls="books" aria-selected="true" 
				class="nav-link border-0 text-uppercase font-weight-bold active"  >My Books (23)</a>
            </li>
                <li class="nav-item flex-sm-fill">
            <a id="collections-tab" data-toggle="tab" href="#collections" role="tab" aria-controls="collections" aria-selected="false"   
			class="nav-link border-0 text-uppercase font-weight-bold ">My Collections (5)</a>
        </li>
		<li class="nav-item flex-sm-fill">
            <a id="wishlist-tab" data-toggle="tab" href="#wishlist" role="tab" aria-controls="wishlist" aria-selected="false"   
			class="nav-link border-0 text-uppercase font-weight-bold ">My Wishlist (32)</a>
        </li>
    </ul>
    <div class="text-center mb-3">

    </div>
    <div id="myTabContent" class="tab-content ">
        <div id="books" role="tabpanel" aria-labelledby="books-tab" class="tab-pane fade px-4 pb-5 show active show">
				<div class="row">
                    <?php include('add_new_book.php'); ?>
				<div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div></div>
        </div>
        <div id="collections" role="tabpanel" aria-labelledby="collections-tab" class="tab-pane fade px-4 pb-5 ">
				<div  class="col-12 pb-1 row-collection ">
					<div class="col-12 pb-1">
					<h3> Horror 2023</h3> </div><div class="col-12 pb-1">
					<h6>owned by mohamed samir and contain 23 book.</h6></div>
<div class="owl-carousel">
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
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
					 
					
					</div><div  class="col-12 pb-1 row-collection ">
					<div class="col-12 pb-1">
					<h3> Horror 2023</h3> </div><div class="col-12 pb-1">
					<h6>owned by mohamed samir and contain 23 book.</h6></div>
<div class="owl-carousel">
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
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
					 
					
					</div><div  class="col-12 pb-1 row-collection ">
					<div class="col-12 pb-1">
					<h3> Horror 2023</h3> </div><div class="col-12 pb-1">
					<h6>owned by mohamed samir and contain 23 book.</h6></div>
<div class="owl-carousel">
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
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
					 
					
					</div><div  class="col-12 pb-1 row-collection ">
					<div class="col-12 pb-1">
					<h3> Horror 2023</h3> </div><div class="col-12 pb-1">
					<h6>owned by mohamed samir and contain 23 book.</h6></div>
<div class="owl-carousel">
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
										<h6>Horro  </h6>
									</div>
								</div>
								<div class="card-footer d-flex justify-content-between bg-light border">
									<div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
									<a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
								</div>
							</div>
						</div>
						<div class="pb-1">
							<div class="card product-item border-0 mb-4">
								<div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
									<img class="img-fluid w-100" src="img/product-1.jpg" alt="">
									<div class="position-absolute book-genre">Horror</div>
									
								</div>
								<div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
									<h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
									<div class="d-flex justify-content-center">
										<h6>loream ipsum </h6><br>
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
        </div>
		<div id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab" class="tab-pane fade px-4 pb-5 ">
				<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div><div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
								<div class="position-absolute book-genre">Horror</div>
								
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                                <div class="d-flex justify-content-center">
                                    <h6>loream ipsum </h6><br>
									<h6>Horro  </h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <div class="btn btn-sm text-dark p-0 view-details"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To WishList</a>
                            </div>
                        </div>
                    </div></div>
        </div>
    </div>
            </div>
            <!-- Shop Product End -->
         </div>
      </div>