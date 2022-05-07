<html>
  <head>
    <title>PHP LAB</title>
  </head>
  <body>
    <?php echo '<p>First PHP Lab Tasks</p>';
    //Student Arrays in PHP:
    $stu=array("Isaac","Alex","Brian","Bajwa","Matts");
    echo "<br>";
    echo "The students are: ";
    echo "<br>";
    //running for loop till array length
    for ($j=0;$j<=sizeof($stu);$j++){
      echo $stu[$j];
      echo "<br>";
    }
    //Question 2
    $sum = 0;
    for($i=1; $i<=30; $i++){
      //adding all integers
      $sum +=$i;
    }
    echo "<br>";
    echo "The sum of the numbers 0 to 30 is $sum"."\n";
    //Question 3
    echo "<br>";
    $name=["I","s","a","a","c"];
    $arr=array();
    for ($i=0;$i<sizeof($name);$i++){
      $new=ord($name[$i]);
      $new+=3;
      //echo $new;
      $chr=chr($new);
      $name[$i]=$chr;
      //echo "New array is :",$name[$i];
    }
    //Printing array
    echo "ISAAC in array is converted to : ";
    for ($j=0;$j<=sizeof($name);$j++){
      echo $name[$j];
    }
    //Question 4
    echo "<br>";
    echo "<br>";
    echo "Stars: <br>";
    //variable for loops
    $n=5;
    //outer loop will run
    for($i=1; $i<=$n; $i++){
      //inner loop will run
      for($j=1; $j<=$i; $j++)
      {
        //We will write star in j loop 
        echo " * ";
      }
      //outer loop will give us new line 
      echo "<br>";
      }
      //Similarly we will be decrementing from n to 1
    for($i=$n; $i>=1; $i--)
    {
      for($j=1; $j<=$i; $j++)
      {
        //stars again will be written using j loop
        echo " * ";
      }
      //i llop for lines
      echo "<br>";
      }
    //Question 6
    echo "<br>";
    //defining function 
    function sum($var1,$var2){
      //for loop for adding nums
      for ($i=$var1;$i<=$var2;$i++){
        //numbers are added to next number till range
        $count+=$i;
      }
      //printing the results
      echo "Sum of nums between $var1 and $var2 is : ", $count;
    }
    //calling function
    sum(4,9);
    //Question 5
    echo "<br>";
    echo "<br>";
    /*Option 1 we get the inpiut from user:
    $str1 = readline('Enter a string: ');
    $comp=readline('Enter a sub-string to compare: ');
    */
    $str1="This is a sample hardcoded input but we can als get it from user";
    $comp="sample";
    //if else conditions will be used for comaprison 
    //inbuilt strpos will be used here
    //input of strpos is string and sub-string, return values is boolean
    if (strpos($str1,$comp) !== false) {
    echo 'The desired word is present.';
    }
    else{
    echo 'The desired word is not present.';
    }
    //Question 7
    echo "<br>";
    //variable for sum storage
    $n=0;
    //defining function
    function avg($array=array()){
      //checkpoint to restricting the size of array
      if (sizeof($array)==4){
      //running loop till 4 as len of lists is restricted to 4
      for ($i=0;$i<=4;$i++){
        $n=$n+$array[$i];
      }
      //After addition we will divide the sum with len of list
      $ag=$n/4;
      echo "<br>";
      //Displaying results
      echo "Average is : ",$ag;
      }
      else{
        echo "<br>";
        echo "Array size must be 4!!";
      }
    }
    //Caaling fucntion with sample input
    avg([1,2,3,4])

     ?> 
  </body>
</html>