<div class="card product-item border-0 mb-4">
        <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
            <img class="img-fluid w-100" src="<?= $thumbnail ?>" alt="">
            <div class="position-absolute book-genre"><?=get_post_meta($id ,'book_genre',true) ?></div>
            
        </div>
        <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
            <h6 class="text-truncate mb-3"><?=$single_book->post_title ?></h6>
            <div class="d-flex justify-content-center">
                <p><?=get_post_meta($id ,'book_author',true) ?></p><br>
                
            </div>
            <div class="d-flex justify-content-center">
                
                <p><?=$owner_name ?> </p>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between bg-light border">
        <div class="btn btn-sm text-dark p-0 view-details" data-class="<?=$id ?>"><i class="fas fa-eye text-primary mr-1"></i>View Detail</div>
        <?php 
         
            if ( $user->ID != get_current_user_id() || 1  ) { 
                if (  ! get_wishlist( get_current_user_id() , $id )){ ?>

                    <div class="btn btn-sm text-dark p-0 toggle_wishlist"   data-class="<?=$id ?>">
                        <i class="fas fa-heart text-primary mr-1"></i>Add To WishList</div>
                <?php  } else { ?>

                    <div class="btn btn-sm   p-0 toggle_wishlist" data-class="<?=$id ?>">
                    <i class="fas fa-trash text-danger  mr-1"></i>Exit WishList</div>
                    <?php  }
            }
        ?>
            
        

        </div>
</div>