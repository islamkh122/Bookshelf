<?php
    $all_book_link = get_page_permalink_from_name('All Books');
    $books_collections_link = get_page_permalink_from_name('Books Collections');
    $my_shelf_link = get_page_permalink_from_name('My Shelf');
?>

<div class="col-lg-3 col-md-12">
               <!-- side  -->
               <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                  <hr>
                  <ul class="nav nav-pills flex-column mb-auto">
                    <?php if($all_book_link){ ?>
                     <li class="nav-item">
                        <a href="<?=$all_book_link?>" class="nav-link  <?= $all_book_link == get_permalink() ? 'active' : '' ?>" aria-current="page">
                        All Books    
                        </a>
                     </li>
                     <?php } ?>
                     <?php if($books_collections_link){ ?>
                     <li class="nav-item">
                        <a href="<?=$books_collections_link?>" class="nav-link <?= $books_collections_link == get_permalink() ? 'active' : '' ?>" aria-current="page">
                        Collections
                        </a>
                     </li>
                     <?php } ?>
                     <?php if($my_shelf_link){ ?>
                     <li>
                        <a href="<?=$my_shelf_link?>" class="nav-link link-dark <?= $my_shelf_link == get_permalink() ? 'active' : '' ?>">
                        My shelf
                        </a>
                     </li>
                      <?php } ?>
                  </ul>
                  <hr>
               </div>
            </div>