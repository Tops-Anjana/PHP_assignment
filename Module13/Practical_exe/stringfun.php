<!-- Write a script to perform various string operations like concatenation, substring
 extraction, and string length determination. -->

 <?php
$string1 = "Hello";
$string2 = "World!";
$string3 = "This is a sample string ";

$concateString = $string1 . " " . $string2;  // Concatenate $string1 and $string2
echo "Concatenated String: " . $concateString . "<br>";

$substring = substr($string3, 10, 6); // Extracts 'sample' starting from position 10 with length 6
echo "Extracted Substring: " . $substring . "<br>";

$strLength = strlen($string3);  // Get the length of the string
echo "Length of String: " . $strLength . " characters.<br>";

?>