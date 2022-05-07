//Question 2 animation of the box
$(document).ready(function () {
  //going towards right
  $("#small").animate({ left: "+=587px" });
  //going down
  $("#small").animate({ top: "+=218px" });
  //going to left
  $("#small").animate({ left: "-=587px" });
  //going back up
  $("#small").animate({ top: "-=218px" });
});