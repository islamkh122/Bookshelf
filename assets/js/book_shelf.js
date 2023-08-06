function setDrop() {
    if (!document.getElementById('third').classList.contains("fstdropdown-select"))
        document.getElementById('third').className = 'fstdropdown-select';
    setFstDropdown();
}
setFstDropdown();

// 

jQuery(document).on("click", '.close', function() {
    jQuery('#myModal').fadeOut();

});

jQuery(document).on("change", '#book_genre', function() {

    if (jQuery(this).val() == 'other') {
        jQuery('#book_genre_name').parents('.form-group').fadeIn();
    } else {
        jQuery('#book_genre_name').parents('.form-group').fadeOut();
    }
});
jQuery(document).on("change", '#book_collection', function() {

    if (jQuery(this).val() == 'other') {
        jQuery('#book_collection_name').parents('.form-group').fadeIn();
    } else {
        jQuery('#book_collection_name').parents('.form-group').fadeOut();
    }
});
// add_new_book_btn validate
jQuery(document).on("click", '#add_new_book_btn', function() {

    //  book_name book_author  publication_year book_genre book_cover
    jQuery('.show_error').fadeOut();
    has_error = false;

    if (jQuery('#book_name').val() == '') {
        addError('#book_name', 'book title cannot be empty.');
        has_error = true;
    }
    if (containsSpecialChars(jQuery('#book_name').val())) {
        addError('#book_name', 'book title cannot contain any special character.');
        has_error = true;
    }

    if (jQuery('#book_author').val() == '') {
        addError('#book_author', 'book author cannot be empty.');
        has_error = true;
    }
    if (containsSpecialChars(jQuery('#book_name').val())) {
        addError('#book_author', 'book author cannot contain any special character.');
        has_error = true;
    } 

    if (jQuery('#publication_year').val() == '') {
        addError('#publication_year', 'book publication year cannot be empty.');
        has_error = true;
    }
    publication_year = parseInt(jQuery('#publication_year').val());

    if (publication_year < 1900 || publication_year > 2100) {
        addError('#publication_year', 'book publication year cannot be before 1900 or after 20.');
        has_error = true;
    }

     
    if (jQuery('#book_genre').val() == '') {
        addError('#book_genre', 'book genre  cannot be empty.');
        has_error = true;
    }
    if (containsSpecialChars(jQuery('#book_genre').val())) {
        addError('#book_genre', 'book genre cannot contain any special character.');
        has_error = true;
    } 

    if (jQuery('#book_genre').val() == 'other') {
        if (jQuery('#book_genre_name').val() == '') {
                addError('#book_genre_name', 'book genre   cannot be empty.');
                has_error = true;
        }
        if (containsSpecialChars(jQuery('#book_genre_name').val())) {
            addError('#book_genre_name', 'book genre cannot contain any special character.');
            has_error = true;
        } 
    }

    if (containsSpecialChars(jQuery('#book_collection').val())) {
        addError('#book_collection', 'book collection cannot contain any special character.');
        has_error = true;
    } 

    if (jQuery('#book_collection').val() == 'other') {
        if (jQuery('#book_collection_name').val() == '') {
                addError('#book_collection_name', 'book collection   cannot be empty.');
                has_error = true;
        }
        if (containsSpecialChars(jQuery('#book_collection_name').val())) {
            addError('#book_collection_name', 'book collection cannot contain any special character.');
            has_error = true;
        } 
    }

    cover_image = document.getElementById("book_cover").files;
    if (cover_image.length === 0) {
        addError('#book_cover', 'book Cover cannot be empty.');
        has_error = true;
    } else {
        if (!(isFileImage(cover_image[0]))) {
            addError('#book_cover', 'book Cover must be image.');
            has_error = true;
        }
    }
    cover_image = document.getElementById("book_pdf").files;

    if (cover_image.length != 0) {


        if (cover_image[0].type != 'application/pdf') {
            addError('#book_pdf', 'book file  must be pdf.');
            has_error = true;
        }

    }

    if (containsSpecialChars(jQuery('#book_description').val())) {
        addError('#book_description', 'book description cannot contain any special character.');
        has_error = true;
    }

    if ((has_error)) {
        return false;
    }

});


function isFileImage(file) {
    return file && file['type'].split('/')[0] === 'image';
}

function containsSpecialChars(str) {
    const specialChars = /[`!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
    return specialChars.test(str);
}

function addError(selector, message) {
    jQuery(selector).parents('.form-group').find('.show_error').html(message);
    jQuery(selector).parents('.form-group').find('.show_error').fadeIn(message);

}

jQuery(document).ready(function(){
    jQuery(".row-collection .owl-carousel").owlCarousel({
      loop:true,
      dots:true,
      margin:10,
      autoplay:true ,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
           1000:{
              items:3
          },
      }
  });
  });

  //search_btn
  jQuery(document).on("click", '.search_btn', function() {
        var s_genre = jQuery('select[name=s_genre]').val();
        var s_text = jQuery('input[name=s_text]').val();

        var url =  new URL(window.location.href);
        url.searchParams.set('s_genre', s_genre);
        url.searchParams.set('s_text', s_text);

        url.searchParams.set('page', 1);

         

        window.location.replace(url);



  });

  // share link 
  jQuery(document).on("click", '.share-collection', function() {
    var textToCopy = jQuery(this).data('class');
    navigator.clipboard.writeText(textToCopy);
    jQuery(this).html(jQuery(this).html()+' ... link copied');

  });

  jQuery(document).on("click", '.toggle_wishlist', function() {
    var data = {
        'action': 'toggle_wishlist',
        'book_id': jQuery(this).data('class')
    };
    var elem = jQuery(this);
    console.log( elem);
    jQuery.post(ajax_url, data, function(response)   {
        
        if (response == 'removed'){
            elem.html('<i class="fas fa-heart text-primary mr-1"></i>Add To WishList');
        } else { console.log( elem);
            elem.html('<i class="fas fa-trash text-danger  mr-1"></i>Exit WishList');
        }
    });
});

jQuery(document).on("click", '.view-details', function() {
    // get book info by ajax

    jQuery('#myModal .book_title').text('-');
    jQuery('#myModal .cover_link').attr('src','#');
    jQuery('#myModal .book_author').text('-');
    jQuery('#myModal .book_genre').text('-');
    jQuery('#myModal .book_owner').text('-');
    jQuery('#myModal .book_collection').text('-');
    jQuery('#myModal .book_year').text('-');
    jQuery('#myModal .book_description').text('-');
    
    
    var data = {
        'action': 'get_single_book_details',
        'book_id': jQuery(this).data('class')
    };

    // since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
    jQuery.post(ajax_url , data, function(response) {
        var response_data = response.data.data;
        // console.log(response_data.title);
         jQuery('#myModal .book_title').text(response_data.title);
         jQuery('#myModal .cover_link').attr('src',response_data.cover_link);
         jQuery('#myModal .book_author').text(response_data.book_author);
         jQuery('#myModal .book_genre').text(response_data.book_genre);
         jQuery('#myModal .book_owner').text(response_data.owner_name);
         jQuery('#myModal .book_collection').text(response_data.book_collection);
         jQuery('#myModal .book_year').text(response_data.book_year);
         jQuery('#myModal .book_description').text(response_data.book_description);
         jQuery('#myModal .book_collection').html(response_data.book_collection);
         jQuery('#myModal .wishlist').html(response_data.wishlist);

         jQuery('#myModal .also_wishlist').html(response_data.also_wishlist);

          

         
         jQuery('#myModal').fadeIn();
    });

});