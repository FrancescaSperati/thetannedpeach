$(document).ready(function(){
    $('.search-box input[type="text"]').keyup(function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("search_bar.php", {term: inputVal})
              .done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }

        // Set search input value on click of result item
        $(document).on("click", ".result a", function(){
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });


});
