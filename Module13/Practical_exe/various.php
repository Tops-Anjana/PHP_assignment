// Various Patterns: Generate different patterns using loops.
<!-- pattern 1: 
*****
****
***
**
* -->
<?php
$rows = 5;
for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>"; // New line after each row
}
?>

<!-- pattern 2:
     *
    ***
   *****
  *******
 ********* -->
<?php
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    // Print leading spaces
    for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
    // Print stars
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>

<!-- Pattern 3:-
*********
 *******
  *****
   ***
    * -->
<?php
$rows = 5;
for ($i = $rows; $i >= 1; $i--) {
    // Print leading spaces
    for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
    // Print stars
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>

<!-- Pattern 4:-
    *
   ***
  *****
 *******
*********
 *******
  *****
   ***
    *
-->
<?php
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
       for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
     for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = $rows - 1; $i >= 1; $i--) {
      for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    echo "<br>";
}
?>
<!-- Pattern 5:- 
 

*****
*   *
*   *
*   *
***** -->
<?php
$size = 5;
for ($i = 1; $i <= $size; $i++) {
    for ($j = 1; $j <= $size; $j++) {
        if ($i == 1 || $i == $size || $j == 1 || $j == $size) {
            echo "*";  // Print star for borders
        } else {
            echo " ";  // Empty space for inner part
        }
    }
    echo "<br>";
}
?>


<!-- pattern 6: 
    1 
   1 2 
  1 2 3 
 1 2 3 4 
1 2 3 4 5
-->

<?php
$rows = 5;
for ($i = 1; $i <= $rows; $i++) {
    for ($j = $i; $j < $rows; $j++) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo $k . " ";
    }
    echo "<br>";
}
?>

