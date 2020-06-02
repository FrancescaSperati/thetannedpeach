$(document).ready(function(){
    var a=0;
    $('#sym2').hide();
    $('#sym4').hide();
    $('#sym6').hide();
  
  
    $("#btn-sld").click(function(){
      if(a==0){
        $("#sym2").show();
        $("#sym4").show();
        $("#sym6").show();
        
        $("#sym1").hide();
        $("#sym3").hide();
        $("#sym5").hide();
        a=1;
      }else{
        $("#sym1").show();
        $("#sym3").show();
        $("#sym5").show();
        
        $("#sym2").hide();
        $("#sym4").hide();
        $("#sym6").hide();
        a=0;
      }
    });
});
  