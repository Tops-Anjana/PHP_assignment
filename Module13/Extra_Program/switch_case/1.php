<!--  Month Display: Create a program using switch case that takes a number (1-12) and
displays the corresponding month -->

<?php
$monthNumber = 3; 

switch ($monthNumber) {
    case 1:
        echo "January";
        break;
    case 2:
        echo "February";
        break;
    case 3:
        echo "March";
        break;
    case 4:
        echo "April";
        break;
    case 5:
        echo "May";
        break;
    case 6:
        echo "June";
        break;
    case 7:
        echo "July";
        break;
    case 8:
        echo "August";
        break;
    case 9:
        echo "September";
        break;
    case 10:
        echo "October";
        break;
    case 11:
        echo "November";
        break;
    case 12:
        echo "December";
        break;
    default:
        echo "Invalid month number! Please enter a number between 1 and 12.";
        break;
}
?>