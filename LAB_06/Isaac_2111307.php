<html>
  <head>
    <title>PHP LAB-6</title>
  </head>
  <body>
  <?php
  //Function is defined to trim, strip and remove html special characters using buit-in funtions
  function test($inp_data){
    //for html special chrs
    $inp_data = htmlspecialchars($inp_data);
    //for triming 
    $inp_data = trim($inp_data);
    //for stripsplash
    $inp_data = stripslashes($inp_data);
    //returning cleaned data
    return $inp_data;
  }

// all variables for later use
$firstname ="";
$lastname ="";
$rollno ="";
$email = "";
$website ="";
$comment ="";
//If we are recived data input from from
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //Checking for First name field
  if (empty($_POST["fname"])) {
    $fempty = "Firstname is required";
  }
  //If not empty then providing it to testing fucntion
  else{
    $firstname = test($_POST["fname"]);
    // now first name is compared to check if there are any reegular expressions still left 
    if (!preg_match("/^[a-zA-Z ]*$/",$firstname)){
      //error message variable ferror
      $ferror = "Only letters/white space allowed";
      }
    }
  //Similarly for the Last anme
  if (empty($_POST["lname"])) {
    //Empty check
    $lempty = "Last Name is required";
    }
    //and for other reg. exps
  else{
    $lastname = test($_POST["lname"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$lastname)){
      $lerror = "Only letters/white space allowed";
      }
    }
  //Now roll number is checked only if its empty 
  if (empty($_POST["rollno"])) {
    $rempty = "Roll number is required";
    }
  //Checking for invalid roll number entry
  else{
    $rollno=test($_POST["rollno"]);
    if (!filter_var($rollno,FILTER_VALIDATE_INT)){
      $rerror="Invalid Roll Number";
    }
  }

  //Now email is also checked with same pattern 
  if (empty($_POST["email"])) {
    $eempty =  "Email is required";
  }
  //IF its not empty then is it valid pattern added or not 
  else{
    $email = test($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $emailerr = "Invalid email entered";
    }
  }
//Now website is being checked
 $website = test($_POST["website"]);
 //If its length is not zero means it has entered then check if its a valid url pattern
 $web=strlen($website);
 if($web>0){
   //using built-in functions 
   if (!filter_var($website, FILTER_VALIDATE_URL)) {
      $urlerror = "Invalid URL";
   }
 }
 $comment = test($_POST["comment"]);
}
?>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <label>
  First Name:<sup style="color:red;">*</sup>
  </label>
  <input type="text" name="fname" id="first">
    <!--checking for validation-->
    <?php 
    if($ferror){
      echo $ferror;
      }
    // for empty fields
    if($fempty){
      echo $fempty;
      }
    ?>
  <br> </br>
  <label>
  Last Name:<sup style="color:red;">*</sup>
  </label>
    <input type="text" name="lname" id="last" >
        <!--checking for validation-->
      <?php
        //if there is some unwanted character then it will display error
        if($lerror){
            echo $lerror;
          }
            // for empty fields
        if($lempty){
            echo $lempty;
          }
      ?>
    <br> </br>
    <label>
      Roll Number:<sup style="color:red;">*</sup>
    </label>
        <input type="text" name="rollno" id="rnumber" >
      <?php 
        if($rempty){
          echo $rempty;
        }
        ?>


        <br> </br>
        <label>
            Email:<sup style="color:red;">*</sup>
        </label>
            <input type="text" name="email" id="inemail" >
      
        <?php 
            if($emailerr){
              echo $emailerr;
            }
            if($eempty){
              echo $eempty;
            }
        ?>

        <br> </br>
        <label>
            Website:
        </label>
            <input type="text" name="website" id="inwebsite">
        <?php 

        if ($urlerror){
          echo $urlerror;
        }
        ?>

        <br> </br>
        <label>
            Comments:
        </label>
            <textarea name="comment" id="inputComment" rows="4" cols="10"></textarea>
        <br> </br>
    <input type="submit" value="Submit">
    </form>
  </body>
</html>