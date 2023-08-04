 function setDrop() {
                    if (!document.getElementById('third').classList.contains("fstdropdown-select"))
                        document.getElementById('third').className = 'fstdropdown-select';
                    setFstDropdown();
                }
                setFstDropdown();
         	
         	// 
         	jQuery('.view-details').click(function(){
         		jQuery('#myModal').fadeIn();
         	
         	});
         	jQuery('.close').click(function(){
         		jQuery('#myModal').fadeOut();
         	
         	});
 
jQuery(document).on("change", '#book_genre', function(){
     
    if (jQuery(this).val() == 'other') {
        jQuery('#book_genre_name').parents('.form-group').fadeIn();
    } else {
        jQuery('#book_genre_name').parents('.form-group').fadeOut();
    }
});
// add_new_book_btn validate
 jQuery(document).on("click", '#add_new_book_btn', function(){

    //  book_name book_author  publication_year book_genre book_cover
    jQuery('.show_error').fadeOut();
    has_error = false ;
    
    if (jQuery('#book_name').val() == '') {
        addError('#book_name','book title cannot be empty.');
        has_error = true ;
    }
    if (containsSpecialChars(jQuery('#book_name').val()) ) {
        addError('#book_name','book title cannot contain any special character.');
        has_error = true ;
    }
    
    if (jQuery('#book_author').val() == '') {
        addError('#book_author','book author cannot be empty.');
        has_error = true ;
    }
    if (containsSpecialChars(jQuery('#book_name').val()) ) {
        addError('#book_author','book author cannot contain any special character.');
        has_error = true ;
    }
    
    if (jQuery('#publication_year').val() == '') {
        addError('#publication_year','book publication year cannot be empty.');
        has_error = true ;
    }
    publication_year = parseInt(jQuery('#publication_year').val());
     
    if ( publication_year < 1900 || publication_year > 2100    ) {
        addError('#publication_year','book publication year cannot be before 1900 or after 20.');
        has_error = true ;
    }
     
    cover_image = document.getElementById("book_cover").files ; 
    if (cover_image.length === 0  ) {
        addError('#book_cover','book Cover cannot be empty.');
        has_error = true ;
    } else {
        if (!(isFileImage(cover_image[0]))) {
           addError('#book_cover','book Cover must be image.');
            has_error = true ;
        }
    }
    cover_image = document.getElementById("book_pdf").files ;
     
    if (cover_image.length != 0  ) {
        
         
        if (cover_image[0].type != 'application/pdf') {
            addError('#book_pdf','book file  must be pdf.');
            has_error = true ;
        }
        
    }
    
    if (containsSpecialChars(jQuery('#book_description').val()) ) {
        addError('#book_description','book description cannot contain any special character.');
        has_error = true ;
    }
    
    if ((has_error)) {
        return false ; 
    }
    
});
 
 
 function isFileImage(file) {
    return file && file['type'].split('/')[0] === 'image';
}

 function containsSpecialChars(str) {
  const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
  return specialChars.test(str);
}
 
 function addError(selector , message) {
    jQuery(selector).parents('.form-group').find('.show_error').html(message);
    jQuery(selector).parents('.form-group').find('.show_error').fadeIn(message);
    
 }