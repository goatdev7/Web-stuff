
*/
//Q1
//Can also be done by using prompt in JS
//Fucntion will be called on submit click
function othername() {
  //variables for recieving inputs from user
    var input = document.getElementById("userInput").value;
    var input2 = document.getElementById("userInput2").value;
    var input3 = document.getElementById("userInput3").value;
    //Displaying output using document.write
    //Can also be done by alert, console.log etc
    document.write("Your FYP is:"+" "+input);
    document.write(" Your FYP Domain is:"+" "+input2);
    document.write(" Your FYP Partner is:"+" "+input3);
}
//Q2
//On click the cal() fucntion will be called
function cal(){
  //getting user input
  const num=document.getElementById("table").value;
  //Run loop till 10
  for(let i = 1; i <= 10; i++) {
    // multiply i with number
    const result = i * num;
    // display the result using console.log
    //Can also be done using document.write
    console.log(`${num} * ${i} = ${result}`);
  }
}

//Q3
//Form Validation
function check(){
  //We here declare three variables which will get input values
  var pass1 = document.getElementById('fname').value;
  var pass2 = document.getElementById('lname').value;
  var pass3=document.getElementById('pass').value;
  //Then these variables are for error messages
  var msg=document.getElementById('error');
  var msg2=document.getElementById('error2');
  var msg3=document.getElementById('error3');

//If field is empty then error message will be displayed
  if(pass1.length ==0){
    msg.innerHTML="*Required Field";
  }
//Otherwise no message will be displayed
  else{

    msg.innerHTML=""
  }
//If field is empty then error message will be displayed
  if(pass2.length ==0){
    msg2.innerHTML="*Required Field";
  }
//Otherwise no message will be displayed
  else{
    msg2.innerHTML=""
  }
//Checking password length and dispalying error if length is smaller
  if(pass3.length<5){
    msg3.innerHTML="*Password should be of 6 characters"
  }
//Otherwise no message will be displayed
  else{
    msg3.innerHTML=""
  }
}
//Question 4
//Calculate area will be triggered on click of button find area
function area(){
  //getting user input
  const num=document.getElementById("num1").value;
  const num2=document.getElementById("num2").value; 
  //Applying Area=side*side formula 
  const area=num*num2;
  //Dispalying the result
  console.log("Area is :"+` ${area}`);
}


//Question5 
//on click adds following functions will be triggered
//declaring variable and array 
var array=Array();
var i=0;
//for getting array
function adds(){
  //writing elements on respective indices
  array[i] = document.getElementById("snum").value;
  //incrementing the values of i for next index
  i++;
  //erasing the input field to get next value for array
  document.getElementById("snum").value = "";
}
//Will be triggered on Sort button clicl
function sorts(){
  //This function sorts the list/array
  //document.write("Sorted array is :"+" "+array.sort())
  console.log("Given array is:"+" "+array);
  console.log("Sorted array is: "+" "+array.sort());
}