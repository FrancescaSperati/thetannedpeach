
$(document).ready(function(){
    countBag();
});

function countBag(){
    $.get("assets/snippets/count_bag.php")
        .done(function(data){
            $('#count_bag').html(data);
    });
}