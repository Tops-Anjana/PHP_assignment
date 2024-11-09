<!-- FizzBuzz Program: Write a program using a for loop that prints numbers from 1 to
 100. But for multiples of 3, print "Fizz" instead of the number, for multiples of 5 print "Buzz", and for multiples of both 3 and 5 print "FizzBuzz". -->

 <?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz\n";
    } elseif ($i % 3 == 0) {
        echo "Fizz\t";
    } elseif ($i % 5 == 0) {
        echo "Buzz\t";
    } else {
        echo $i . "\t";
    }
}
?>