
print_r(): Displays the structure of the array in a readable format.
<?php
$array = [1, 2, 3, 4, 5];
print_r($array);
?>
var_dump(): Displays detailed information about the array (type and value).
<?php
$array = [1, 2, 3, 4, 5];
var_dump($array);
?>
foreach loop: Iterates over the array and displays each element individually.
<?php
$array = [1, 2, 3, 4, 5];

foreach ($array as $value) {
    echo $value . "<br>";
}
?>
implode(): Converts the array to a string by joining elements with a delimiter.
<?php
$array = [1, 2, 3, 4, 5];
echo implode(", ", $array);
?>
json_encode(): Converts the array to a JSON string.
<?php
$array = [1, 2, 3, 4, 5];
echo json_encode($array);
?>