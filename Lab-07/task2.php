<?php
////Making connection 

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbase="labdb";
  $con = mysqli_connect($servername,$username,$password,$dbase); 
  if (!$con){
    die('Could not connect:'. mysqli_error()); 
  }
    echo 'Connected successfully';
    echo "<br>";
    ////Creating Table in database
    //  $quer="CREATE TABLE `labdb`.`empno3` ( `EMP_IDNO` INT(11) NOT NULL ,
    //   `EMP_FNAME` VARCHAR(11) NOT NULL , `EMP_LNAME` VARCHAR(11) NOT NULL ,
    //    `EMP_DEPT` INT(11) NOT NULL ) ENGINE = InnoDB";
    //    mysqli_query($con,$quer);    

    ////Instering values into in table :
    // $r1="INSERT INTO `empno3` (`EMP_IDNO`, `EMP_FNAME`,
    //  `EMP_LNAME`, `EMP_DEPT`) VALUES ('127323', 'Michale ', 'Robin ', '57'),
    // ('526689', 'Carlos', 'Snares', '63'), 
    // ('843795', 'Enric', 'Dosio', '57'),
    // ('328717', 'Jhon ', 'Snares', '63'),
    //  ('444527', 'Jospeh ', 'Dosni', '47'),
    // ('659831', 'Zanifer ', 'Emily', '47'),
    //  ('847674', 'Kuleswar', 'Sitraman ', '57'),
    // ('748681', 'Henry ', 'Gabriel ', '47'), 
    // ('555953', 'Alex', 'Manuel', '57')";
    //  $results=mysqli_query($con,$r1);
    //  $disply="SELECT * FROM `empno3` WHERE emp_dept = 57 OR emp_dept = 63";
   // //Arranging in Dscending Order:
     $disply="SELECT * FROM `empno3` AS `e` WHERE e.emp_dept = 57 OR e.emp_dept = 63 ORDER BY e.EMP_DEPT DESC";
     $result=mysqli_query($con,$disply);
     if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo "ID is  : " . $row["EMP_IDNO"] . " - Name: " . $row["EMP_FNAME"]. " " . $row["EMP_LNAME"]. " - Department:  " . $row["EMP_DEPT"]. "<br>";
        }
      } 
      else {
        echo "0 results";
      }
      echo "<br> Now Arranging them in Ascending order by FNAME <br>";
      ////Arranging in Ascending order by First name:
      $disply2="SELECT * FROM `empno3` AS `e` WHERE e.emp_dept = 57 OR e.emp_dept = 63 ORDER BY e.EMP_FNAME ASC";
      $result2=mysqli_query($con,$disply2);
      if (mysqli_num_rows($result2) > 0) {
         while($row2 = mysqli_fetch_assoc($result2)) {
           echo "ID is  : " . $row2["EMP_IDNO"] . " - Name: " . $row2["EMP_FNAME"]. " " . $row2["EMP_LNAME"]. " - Department:  " . $row2["EMP_DEPT"]. "<br>";
         }
       } 
       else {
         echo "0 results";
       }
////Closeing connection 
    mysqli_close($con);
?>