<!-- Find and display the number of odd and even elements in an array -->
<?php

$array = [11, 27, 35, 42, 53, 67, 76, 84, 91, 100];

$oddCount = 0;
$evenCount = 0;


foreach ($array as $number) {
    if ($number % 2 == 0) {
        $evenCount++;  
    } else {
        $oddCount++;   
    }
}

echo "Number of even numbers: $evenCount<br>";
echo "Number of odd numbers: $oddCount";
?>