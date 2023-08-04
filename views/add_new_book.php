<div class="col-md-12">
    <?php
        // chek submitted value
        session_start();
        if ( isset( $_SESSION['form_data']))
            $form_data = unserialize($_SESSION['form_data']);
        else $form_data=[];
     ?>
        <p>
                         
            <button class="btn btn-primary  ml-auto my-4 text-white d-block" type="button" data-toggle="collapse" data-target="#collapseExample"
                    aria-expanded="true" aria-controls="collapseExample">
              <i class="fa fa-plus mx-2"></i> add new book
            </button>
        </p>
        <div class="collapse show my-4" id="collapseExample">
            <div class="card card-body"> 
                 
               <?php if(isset($_GET['success'])): ?>
                    <div class="alert alert-success">
                        <h3>Congrats! Your Form Submitted Successfully.</h3>
                    </div>
                <?php endif; ?>
                  
                <?php if(isset($_GET['add_error'])): ?>
                    <div class="alert alert-danger">
                        Sorry! Unable to submit the form : <?=$_GET['add_error']?>
                    </div>
                <?php endif; ?>
                
                <form name="add_new_book" method="POST" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>"
                enctype="multipart/form-data" autocomplete="off" accept-charset="utf-8" style=" max-width: 400px; width: 100%; margin: 0 auto; ">
                    
                    <div class="form-group">
                        <label for="book_name">Book Title (*)</label> 
                        <input type="text" class="form-control" id="book_name" name="book_name"
                               value="<?= isset($form_data['book_name']) ? $form_data['book_name'] :'' ?>" required>
                        <div class="alert alert-danger show_error  my-1 p-2" style="display: none;"></div>
                    </div>
                    <div class="form-group">
                        <label for="book_author">Book Author (*)</label>
                        <input type="text" class="form-control" id="book_author" name="book_author" 
                               value="<?= isset($form_data['book_author']) ? $form_data['book_author'] :'' ?>" required>
                         <div class="alert alert-danger show_error  my-1 p-2" style="display: none;"></div>
                    </div>
                    <div class="form-group">
                        <label for="publication_year">Publication Year  (*)</label>
                        <input type="number" step=1 min="1900" max="2100" class="form-control" id="publication_year" name="publication_year"
                               value="<?= isset($form_data['publication_year']) ? $form_data['publication_year'] :'' ?>"  required>
                         <div class="alert alert-danger show_error  my-1 p-2" style="display: none;"></div>
                    </div>
                    <div class="form-group">
                        <label for="book_genre">Genre  (*)</label>
                        <select class="fstdropdown-select" name="book_genre" id="book_genre" name="book_genre"  required>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>other</option>
                        </select>
                         <div class="alert alert-danger show_error  my-1 p-2" style="display: none;"></div>
                    </div>
                    <div class="form-group  " style="display: none;">
                        <label for="book_genre_name">Genre Name (*)</label> 
                        <input type="text" class="form-control" id="book_genre_name" name="book_genre_name" 
                               value="<?= isset($form_data['book_genre_name']) ? $form_data['book_genre_name'] :'' ?>" >
                        <div class="alert alert-danger show_error  my-1 p-2" style="display: none;"></div>
                    </div>
                    <div class="form-group">
                        <label for="book_cover">Book Cover (*)</label>
                        <input type="file" accept="image/*" class="form-control-file" id="book_cover" name="book_cover"  required>
                        <div class="alert alert-danger show_error  my-1 p-2" style="display: none;"></div>
                    </div>
                    <div class="form-group">
                        <label for="book_cover">Book PDF</label>
                        <input type="file" accept="application/pdf" class="form-control-file" name="book_pdf"  id="book_pdf"  >
                        <div class="alert alert-danger show_error  my-1 p-2" style="display: none;"></div>
                    </div>
                    <div class="form-group">
                        <label for="book_description">Book Description</label>
                        <textarea class="form-control" id="book_description" name="book_description"  rows="3"
                        ><?= isset($form_data['book_description']) ? $form_data['book_description'] :'' ?></textarea>
                        <div class="alert alert-danger show_error  my-1 p-2" style="display: none;"></div>
                    </div>
                
                    <input type="hidden" name="action" value="add_new_book">
                
                    <input type="hidden" name="base_page"  value="<?=get_permalink()?>">
                
                    <div>
                        <button type="submit" id="add_new_book_btn" class="btn btn-primary mb-2" name="submit_btn">
                            Submit
                        </button>
                    </div> 
                
                </form>
                <!-- new registeration -->
            </div>
        </div>
</div>