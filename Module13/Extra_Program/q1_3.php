// Experiment with echo, print, and var_dump. Write a script that outputs different types of data using these function.

<!DOCTYPE html>
<html>
<body>
<h2>Output Using Echo, Print, and Var Dump</h2>
<?php
// Using echo
echo "<h3>Using echo:</h3>";
echo "This is a string.<br>";
echo "The current year is " . date("Y") . ".<br>";

$number = 42;
echo "The number is: $number<br>";

// Using print
print "<h3>Using print:</h3>";
print "This is another string output.<br>";
$float = 3.14;
print "The value of Pi is approximately : $float<br>";

// Using var_dump
echo "<h3>Using var_dump:</h3>";
var_dump($number); // integer
echo "<br>";
var_dump($float);  // float
?>
</body>
</html>