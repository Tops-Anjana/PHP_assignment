// Create a PHP script to declare and initialize different types of variables (integer, float, string, boolean). Display them using echo.
<br>
<?php    //Defining variables in php : 
// Numeric variables - hold integers and decimal values
$age = 25;
$temperature = 98.6;
echo "<br>";
echo  " age=" . $age ."<br>";
 echo " Temperature=" . $temperature ."<br>";
// String variables - Store a sequence of characters enclosed in single or double quotes

$message = 'Hello, world!';
echo "Message=" .$message ."<br>";
 
// Boolean variables - only hold the values true and false
$is_true = true;
$is_false = false;

echo "true" . $is_true ."<br>";
echo "false" . $is_false ."<br>"; 

// Array variables - Store a collection of items, which can be of different types
$numbers = array(1, 2, 3, 4, 5);
$fruits = array('apple', 'banana', 'orange');

echo "array elements at index 3 = " . $numbers[3]."<br>";
echo " fruits array at index[2]= ". $fruits[2]; 

?>