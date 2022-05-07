//Question 1
$(document).ready(function(){
  //when middle box is hovered 
  $("#small").mouseenter(function(){
    //colour is chnaged 
    $("#small").css("background-color", "orange");
    $("#temp").html("Mouse entered");
  });
  $("#small").click(function(){
    //when box is clicked it disappers
    $("#small").hide();
    $("#temp").html("Box is clicked");
  });
});
