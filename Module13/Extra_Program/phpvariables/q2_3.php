<!--global and Local Scope: Write a script that shows how global and local variables
 work. Use the global keyword inside a function to access a global variable.-->
<?php
  $x = 5;

function myTest() {
    $y= 20;  // local variables
    global $x ;
  $x = $x + $y;
}

myTest();
echo $x; // outputs 15

?>