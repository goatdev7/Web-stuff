//Jquery to search students in BSCS
$(document).ready(function(){
  $("#show").click(function(){
    $('#tab tr').each(function() {
    //storing row values in a variable
    var bs = $(this).find(".tds").html();
    //getting id of that row which has bscs
    var trid = $(this).closest('tr').attr('id');
    //comparing results 
    let text1 = bs;
    let text2 = "BSCS";
    let result = text1.localeCompare(text2);
    //if the bscs is found then this conditions gets true
    if(result==0){
      //we then highlight that row
      $("#"+trid).css({
        "background-color" :"yellow",
        "font-weight":"500"});
      }
      });
  });
  //Jquery no 2 to add empty row
  $("#add").click(function(){
    $("#tab tbody:last").append("<tr><td>  </td><td>      </td> <td>   </td> <td>     </td></tr>")
  });

});

