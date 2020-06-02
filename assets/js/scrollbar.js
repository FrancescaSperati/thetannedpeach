//transparent scrollbar
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll > 10) {
    $(".make_transparent").removeClass("transparent");
    $(".make_transparent").addClass("bg-dark");

  } else {
    $(".make_transparent").addClass("transparent");
    $(".make_transparent").removeClass("bg-dark");
  }
});

$(document).ready( function(){

  $( "#searchbar" ).focusin(function() {
    $( "#searchicon" ).addClass('searchicon_focus');
  });

  $( "#searchbar" ).focusout(function() {
    $( "#searchicon" ).removeClass('searchicon_focus');
  });

});
