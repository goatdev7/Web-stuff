<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "labdb";
  $con = mysqli_connect($servername,$username,$password,$database); 
  $myq="SELECT type, MIN(price) FROM product4 GROUP BY type;";
    $result=mysqli_query($con,$myq);
     if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        while($row = mysqli_fetch_assoc($result)) {
          echo $row["type"] . " - $ " . $row["MIN(price)"]. "<br>";
        }
      } 
      else {
        echo "0 results";
      }
          
    mysqli_close($con);
      ?>
