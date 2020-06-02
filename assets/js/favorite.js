    // found is needed to store the array from the favorite table
    var found;
    $(document).ready(function(){
      //hide this [?? maybe better way for this ??]
      $('.count').hide();

      //check from the DB to fill hearts on items already favorite
      checkFavItems(user_id);
      //count is needed to fill the red pill badge for the number on the nav bar
      countFav();
      

      $('.fav').click(function(){
          checkFavItems(user_id);
          countFav();
      });

      //on hover check if already favorite
      hoverFav();
      
    });

    var isFavorite = false;
    function hoverFav(){
      //boolean to check if the item hovered is already favorite
      $('.fav').hover(
        //on mouse enter
        function(){
          //get id of this specific element
          var id = $(this).attr("id");
          //compare it with the elements in the found array
          //if(jQuery.inArray(id, found) > -1){
          if( $(this).text() == "favorite" ){
            isFavorite = true;
            //delete favorite record if hear is clicked
            $('#'+id).click(function(){
              deleteFavItem(id, user_id);
            });
          } else {
            //interactive effect if not already filled
            $(this).text("favorite");
            isFavorite = false;
            //add record in the DB on click
            $('#'+id).click(function(){
              favItem(id, user_id);
            });
          }
        },
        //on mouse leave
        function(){
          if(!isFavorite){
            //replace the heart with the empty
            $(this).text("favorite_border");
          }
        }
      );
    }

    function favItem(item_id, user_id){
      //give alert if user doesn't exists and prompt login / sign up modal
      if(user_id == null || user_id === "")
      {
        alert("You must have an account before proceeding.");
        $("#accountModal").modal();
      }
      else {
        $.ajax({
          url: 'favourite.php',
          type: "GET",
          data: { item_id: item_id, user_id: user_id },
          success: function(result) {
            checkFavItems(user_id);
            countFav();
            isFavorite = true;
          },
          error: function(err) {
            console.log(err);
          }
        });
      }
    }

    function checkFavItems(user_id){
      if(user_id == "" || user_id == null)
      {
        alert("User ID not valid");
      }else {
        $.ajax({
          url: 'assets/snippets/find_favourite.php',
          type: "GET",
          data: { user_id: user_id },
          success: function(result) {
            //parse json from the DB
            found = JSON.parse(result);
              $('.found_fav').each(function(i){
                if(jQuery.inArray($(this).val(), found) > -1){
                  $('#'+ $(this).val() ).text("favorite");
                } else {
                  $('#'+ $(this).val() ).text("favorite_border");
                }
              });
          },
          error: function(err) {
            console.log(err);
          }
        });
      }
    }
    
    //count html with count for badge
    function countFav(){
      $.get('assets/snippets/count_fav.php')
          .done(function( result ){
          $('#count_fav').html(result);
      });
    }

    function deleteFavItem(item_id, user_id){
      if(user_id == "" || user_id == null)
      {
        alert("User ID not valid");
      }
      else {
        $.ajax({
          url: 'assets/snippets/delete_fav.php',
          type: "GET",
          data: { item_id: item_id, user_id: user_id },
          success: function(result) {
            checkFavItems(user_id);
            countFav();
            isFavorite = false;
            $("#rowfav-"+item_id).remove();
          },
          error: function(err) {
            console.log(err);
          }
        });
      }
    }

    function openNav(){
      $('#favSidenav').css("width", "400px");
      $('#cover').show();
      $.get("assets/snippets/sidebar_items.php")
        .done(function(result){
          $('.sidebar').html(result);
        }); 
    }

    function closeNav() {
      $('#favSidenav').css("width", "0");
      $('#cover').hide();
    }