<!-- Nested Conditions: Write a script that uses nested if-else conditions to categorize a
number as positive, negative, or zero, and also check if it's an even or odd number -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="#" method="POST">
            <label for="number" name="number:">Number</label>
            <input type="number" name="number" required>
            <input type="submit" name="submit" value="Submit">
            </form>
</body>
</html>
<?php
if(isset($_POST['number'])){
$number = $_POST['number'];
if ($number > 0) {
        if ($number % 2 == 0) {
        echo "$number is positive and even.";
    } else {
        echo "$number is positive and odd.";
    }
} elseif ($number < 0) {
    
    if ($number % 2 == 0) {
        echo "$number is negative and even.";
    } else {
        echo "$number is negative and odd.";
    }
} else {
       echo "$number is zero, and it is neither positive nor negative, and it's neither even nor odd.";
}
}
?>
