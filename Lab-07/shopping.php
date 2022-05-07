<h3>Products</h3>
<!-- Creating a form for getting values -->
    <form action=""  method="POST">
<table>
    <tr>
    <td>id</td>
    <td>name</td>
    <td>type</td>
    <td>price</td>
   </tr>
   <!-- //Creating 8 rows -->
   <tr>
     <td><input type="number"  name = "r1id" ></td>
     <td><input type="text"  name = "r1name" ></td>
     <td><input type="text"  name = "r1type" ></td>
     <td><input type="number" step="0.01" min="0" max="1000" name = "r1price" ></td>
   </tr>
   <tr>
   <td><input type="number"  name = "r2id" ></td>
     <td><input type="text" name = "r2name" ></td>
     <td><input type="text" name = "r2type" ></td>
     <td><input type="number" step="0.01" min="0" max="1000" name = "r2price"></td>
  </tr>
  <tr>
  <td><input type="number"name="r3id" ></td>
     <td><input type="text" name = "r3name" ></td>
     <td><input type="text" name = "r3type" ></td>
     <td><input type="number" step="0.01"  min="0" max="1000"name = "r3price" ></td>
 </tr>
 <tr>
  <td><input type="number"name="r4id" ></td>
     <td><input type="text" name = "r4name" ></td>
     <td><input type="text" name = "r4type" ></td>
     <td><input type="number" step="0.01"  min="0" max="1000"name = "r4price" ></td>
 </tr>
 <tr>
  <td><input type="number"name="r5id" ></td>
     <td><input type="text" name = "r5name" ></td>
     <td><input type="text" name = "r5type" ></td>
     <td><input type="number" step="0.01" min="0" max="1000" name = "r5price" ></td>
 </tr>
 <tr>
  <td><input type="number"name="r6id" ></td>
     <td><input type="text" name = "r6name" ></td>
     <td><input type="text" name = "r6type" ></td>
     <td><input type="number" step="0.01" min="0" max="1000" name = "r6price" ></td>
 </tr>
 <tr>
  <td><input type="number"name="r7id" ></td>
     <td><input type="text" name = "r7name" ></td>
     <td><input type="text" name = "r7type" ></td>
     <td><input type="number" step="0.01" min="0" max="1000" name = "r7price" ></td>
 </tr>
 <tr>
  <td><input type="number"name="r8id" ></td>
     <td><input type="text" name = "r8name" ></td>
     <td><input type="text" name = "r8type" ></td>
     <td><input type="number" step="0.01" min="0" max="1000" name = "r8price" ></td>
 </tr>
</table>
<input type="submit" name= "submit"value="Submit Values" >

<!-- <input type="button" value="Min Price" onclick="window.location.href='new3.php'" /> -->

</form>
<button onclick="window.location.href='budget.php'">Min Price</button>

<?php
//For storing form values
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //defining variables for each row and each column 
    $row1_col1 = $_POST['r1id'];
    $row1_col2 = $_POST['r1name'];
    $row1_col3 = $_POST['r1type'];
    $row1_col4 = $_POST['r1price'];
    $row2_col1 = $_POST['r2id'];
    $row2_col2 = $_POST['r2name'];
    $row2_col3 = $_POST['r2type'];
    $row2_col4 = $_POST['r2price'];
    $row3_col1 = $_POST['r3id'];
    $row3_col2 = $_POST['r3name'];
    $row3_col3 = $_POST['r3type'];
    $row3_col4 = $_POST['r3price'];
    $row4_col1 = $_POST['r4id'];
    $row4_col2 = $_POST['r4name'];
    $row4_col3 = $_POST['r4type'];
    $row4_col4 = $_POST['r4price'];
    $row5_col1 = $_POST['r5id'];
    $row5_col2 = $_POST['r5name'];
    $row5_col3 = $_POST['r5type'];
    $row5_col4 = $_POST['r5price'];
    $row6_col1 = $_POST['r6id'];
    $row6_col2 = $_POST['r6name'];
    $row6_col3 = $_POST['r6type'];
    $row6_col4 = $_POST['r6price'];
    $row7_col1 = $_POST['r7id'];
    $row7_col2 = $_POST['r7name'];
    $row7_col3 = $_POST['r7type'];
    $row7_col4 = $_POST['r7price'];
    $row8_col1 = $_POST['r8id'];
    $row8_col2 = $_POST['r8name'];
    $row8_col3 = $_POST['r8type'];
    $row8_col4 = $_POST['r8price'];
// Creating the connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "labdb";
  $con = mysqli_connect($servername,$username,$password,$database); 
  if (!$con){
    die('Could not connect:'. mysqli_error()); 
  }
      // echo 'Connected successfully!!'; 
      // $tab = "CREATE TABLE `Product4` 
      // (`id` INT(11) NOT NULL ,  
      // `name` VARCHAR(11) NOT NULL ,  
      // `type` VARCHAR(11) NOT NULL ,  
      // `price` FLOAT(10.00) NOT NULL)";
      // mysqli_query($con,$tab);
      $sql = "INSERT INTO `Product4` (`id`, `name`, `type`, `price`) VALUES 
      ('$row1_col1', '$row1_col2 ', '$row1_col3', '$row1_col4'),
      ('$row2_col1', '$row2_col2 ', '$row2_col3', '$row2_col4'),
      ('$row3_col1', '$row3_col2 ', '$row3_col3', '$row3_col4'),
      ('$row4_col1', '$row4_col2 ', '$row4_col3', '$row4_col4'),
      ('$row5_col1', '$row5_col2 ', '$row5_col3', '$row5_col4'),
      ('$row6_col1', '$row6_col2 ', '$row6_col3', '$row6_col4'),     
      ('$row7_col1', '$row7_col2 ', '$row7_col3', '$row7_col4'),
      ('$row8_col1', '$row8_col2 ', '$row8_col3', '$row8_col4')
      ";
      //running sql querry
    $run=mysqli_query($con,$sql);

    
    mysqli_close($con);
}
    ?>
