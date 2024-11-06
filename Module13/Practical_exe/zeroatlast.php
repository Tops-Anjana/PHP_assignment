<!-- Write a script to shift all zero values to the bottom of an array -->
<?php
$array = [0, 15, 12, 0, 38, 0, 44, 59, 0];
function shiftZerosToBottom(&$array) {
    $nonZeroIndex = 0; 
       foreach ($array as $key => $value) {
        if ($value != 0) {
            $array[$nonZeroIndex] = $value;
                     if ($key != $nonZeroIndex) {
                $array[$key] = 0;
            }
            $nonZeroIndex++;
        }
    }
}
shiftZerosToBottom($array);
// print array.
echo "Array after shifting zeros to the bottom: <br>";
print_r($array);

?>