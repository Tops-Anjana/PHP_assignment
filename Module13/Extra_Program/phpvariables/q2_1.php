//  Write a script that declares variables of different types and converts
them into other types (e.g., integer to float, string to integer). Display the type and
value before and after.
<br>

<?php
$num=1254;               // integer
$str = "30";           // String
$f=12.34;              // float

echo "num=" . $num."<br>";
echo "string = " . $str . "<br>";
echo "float=". $f ."<br>";

$str = intval($str);   // Convert string to integer
$castedFloat = (float)$num ;        // Integer to Float
$castedInteger = (int)$f;          // Float to Integer

echo "num=" . $str ."<br>";
echo $castedFloat ."<br>";
echo $castedInteger . "<br>";
?>