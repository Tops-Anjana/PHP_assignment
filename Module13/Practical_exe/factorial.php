<!-- Write a function that finds the factorial of a number using recursion. -->
<?php
function factorial($n) {
    
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$number = 5;
echo "Factorial of $number is: " . factorial($number) . "<br>";
?>