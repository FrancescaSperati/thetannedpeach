$(document).ready(function() {
    $( '#amount' ).val( "$40 - $120" );
    $( '#slider' ).slider({
      animate: 300,
      range: true,
      min: 0,
      max: 300,
      values: [ 40, 120 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );

        // While sliding check for each product if the price is in range
       // If it's in range show the product else hide it
        $('.single_product').each(function(){
          var price = $(this).data('price');
          if( price >= ui.values[0] && price <= ui.values[1]){
            $(this).show();
          } else{
            $(this).hide();
          }
        });
      }
    });

    $('#btnReset').click(function(){
      $( '#slider' ).slider({ values: [ 40, 120 ] });
      $( '#amount' ).val( "$40 - $120" );
    });

    $('.icn_price').click(function(){
      $('.icn_price').fadeOut(function(){
        $('.icn_price').text(($('.icn_price').text() == 'keyboard_arrow_down') ? 'keyboard_arrow_up' : 'keyboard_arrow_down').fadeIn();
      });
    });

    $('.icn_cat').click(function(){
      $('.icn_cat').fadeOut(function(){
        $('.icn_cat').text(($('.icn_cat').text() == 'keyboard_arrow_down') ? 'keyboard_arrow_up' : 'keyboard_arrow_down').fadeIn();
      });
    });

    $('.icn_size').click(function(){
      $('.icn_size').fadeOut(function(){
        $('.icn_size').text(($('.icn_size').text() == 'keyboard_arrow_down') ? 'keyboard_arrow_up' : 'keyboard_arrow_down').fadeIn();
      });
    });
});


  var str_categories = "";
  var str_sizes = "";

  // The size string global variable are reset to empty, the selectAll is set to true
  // Check all checkbox, if any is selected set selectAll to false and append the value with "-"
  // This will be used as a separator to be exploded in PHP and have all the value in an array
  // Set the All checkbox based on the selectAll variable


  $('.sizes').change(function() {

    var selectAll = true;
    str_sizes = "";
    $('.sizes').each( function(){
      if( $(this).is(":checked") ) {
          selectAll = false;
          str_sizes += $(this).val();
          str_sizes += "-";
      }
    });

    $( "#allSizes").prop("checked", selectAll);
    ajax_refresh_prod();

  });

  // Check the status of the checkbox id allSizes
  // If it's selected remove the selection from all the checkbox below

  $('#allSizes').change(function() {
    if( $(this).is(":checked") ) {
        $( ".sizes").prop("checked", false);
        str_sizes = "";
    } else {
      $(this).prop("checked", true);
    }
    ajax_refresh_prod();
  });

  // The categories string global variable are reset to empty, the selectAll is set to true
  // Check all checkbox, if any is selected set selectAll to false and append the value with "-"
  // This will be used as a separator to be exploded in PHP and have all the value in an array
  // Set the All checkbox based on the selectAll variable

  $('.categories').change(function() {

    var catAll = true;
    str_categories = "";
    $('.categories').each( function(){
      if( $(this).is(":checked") ) {
        catAll = false;
        str_categories += $(this).val();
        str_categories += "-";
      }else{
        console.log(catAll);
      }
  });

  $( "#allCat").prop("checked", catAll);
  ajax_refresh_prod();

  });

  // Check the status of the checkbox id allSizes
  // If it's selected remove the selection from all the checkbox below

  $('#allCat').change(function() {
  if( $(this).is(":checked") ) {
      $( ".categories").prop("checked", false);
      str_categories = "";
  } else {
    $(this).prop("checked", true);
  }
  ajax_refresh_prod();
  });

  // AJAX get call to the all_prod snippet passing categories and sizes
  // on success:  refresh the product section
  // on error:    log the error

  function ajax_refresh_prod(){
    console.log('c: ' + str_categories);
    console.log('s: ' + str_sizes);

    $.ajax({
      url: 'all_prod.php',
      type: "GET",
      data: { categories : str_categories, sizes : str_sizes },
      dataType: "html",
      success: function(result) {
        $('#filter_prods').html(result);
        checkFavItems(user_id);
        countFav();
      },
      error: function(err) {
        console.log(err);
      }
    });


}
