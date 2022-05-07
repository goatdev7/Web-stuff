<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>First PHP Tasks</p>';
    //Declaring variables:
    $var1;
    $var2;
    //storing values using assignment operators:
    $var1=5;
    echo $var1;
    //line breaker:
    echo "<br>";
    //intializing variables using assignment operator:
    $x=10;
    echo $x;
    //Adding two numbers in PHP:
    echo "<br>";
    $sum=$var1 +$x;
    echo "Sum is :",$sum;
    //Subtracting:
    $sub=$sum-$var1;
    echo"<br>";
    echo "Subtracting answer: ",$sub;
    //Multiplying:
    $mul=$var1 * $sub;
    echo"<br>";
    echo "Multiplying 5 and 10 answer: ",$mul;
    //Dividing:
    $div=$x/$var1;
    echo"<br>";
    echo "Dividing 10 by 5 gives : ",$div;
    //Incrementing:
    $var1=$var1+1;
    echo"<br>";
    echo "Incremented var1 by 1 gives : ",$var1;
    //Decrementing:
    $x=$x-1;
    echo"<br>";
    echo "Decremented x by 1 gives : ",$x;
    //Loops in PHP
    //While loop:
    echo "<br>";
    echo "While Loop using $x: ";
    echo "<br>";
    //while condition
    while($x >= 4) {
      echo "The number is: $x <br>";
      $x--;
      } 
    //Do-While loop:
    echo "<br>";
    echo "Do-While Loop using $var1: ";
    echo "<br>";
    //first work is defined 
    do {
      echo "The number is: $var1 <br>";
      $var1--;
      //then condition
      } while ($var1 >= 1);
    //For Loop:
    echo "<br>";
    echo "For Loop: ";
    echo "<br>";
    //for loop till 10 
    for ($i = 0; $i <= 10; $i++) {
      echo "The number i is: $i <br>";
      }
    //If-Else condition:
    echo "<br>";
    //if condition
    if ($var1==1){
      echo "Condition is True!! (var1==0)";
    }
    //else condition 
    else{
      echo "Condition is not True!!!(var1!=0)";
    }
    //Arrays in PHP:
    $stu=array("Isaac","Alex","Brian","Bajwa","Matts");
    echo "<br>";
    echo "The students are: ";
    echo "<br>";
    //running for loop till array length
    for ($j=0;$j<=sizeof($stu);$j++){
      echo $stu[$j];
      echo "<br>";
    }

    
     ?> 
  </body>
</html>