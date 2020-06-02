$(function(){  
 $("#propic1").on({
  mouseenter: function(){
      $(this).attr('src','assets/images/about-us/about-us01a.jpg');
    },
    mouseleave: function(){
      $(this).attr('src','assets/images/about-us/about-us01.jpg');
    }
    });
        
     $("#propic2").on({
     mouseenter: function(){
      $(this).attr('src','assets/images/about-us/about-us02a.jpg');
    },
    mouseleave: function(){
      $(this).attr('src','assets/images/about-us/about-us02.jpg');
    }
    });
        
     $("#propic3").on({
     mouseenter: function(){
      $(this).attr('src','assets/images/about-us/about-us03a.jpg');
    },
    mouseleave: function(){
      $(this).attr('src','assets/images/about-us/about-us03.jpg');
    }
    });

  });