<!-- : Reverse a string without using built-in functions. -->
<?php
$ori_str = "Hello, World!";

$rev_str = "";

for ($i = strlen($ori_str) - 1; $i >= 0; $i--) {
        $rev_str .= $ori_str[$i];
}
// print string.
echo "Original String: " . $ori_str . "<br>";
echo "Reversed String: " . $rev_str . "<br>";
?>