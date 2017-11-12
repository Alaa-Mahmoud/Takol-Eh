$(document).ready(function(){
    $(".resturant").click(function(){
     $(".menu").slideToggle("fast");   
    });
    
     $("#order1").click(  function appendText() {
          var txt1 = "<p class='a'></p>"; 
              $(".a").remove();
              $("#list").append(txt1);
         var txt2 = $("<p class='choosenMeal''></p><input class='numOfChoosen' type='number' value='1' max='30' min='0'</input>").text($("#order1").text()); 
              $(".a").empty().append(txt2);
     });
       $("#order2").click(  function appendText() {
          var txt1 = "<p class='b'></p>"; 
              $(".b").remove();
              $("#list").append(txt1);
         var txt2 = $("<p class='choosenMeal''></p><input class='numOfChoosen' type='number' value='1' max='30' min='0'</input>").text($("#order2").text()); 
              $(".b").empty().append(txt2);
     });
     $("#order3").click(  function appendText() {
          var txt1 = "<p class='c'></p>"; 
              $(".c").remove();
              $("#list").append(txt1);
         var txt2 = $("<p class='choosenMeal''></p><input class='numOfChoosen' type='number' value='1' max='30' min='0'</input>").text($("#order3").text()); 
              $(".c").empty().append(txt2);
     });
    $("#order4").click(  function appendText() {
          var txt1 = "<p class='d'></p>"; 
              $(".d").remove();
              $("#list").empty(".d").append(txt1);
         var txt2 = $("<p class='choosenMeal''></p><input class='numOfChoosen' type='number' value='1' max='30' min='0'</input>").text($("#order4").text()); 
              $(".d").empty().append(txt2);
     });
        
         
         
         /*function(){
          $(".left").text( $(".order").text());
         $(this).css({"background-color": "red"});}*/
     
         


     
    
    
  /* function appendText() {
    var txt2 = $("<p></p>").text($(".order").text()); =
    $("body").append(txt2);*/
    
      
});