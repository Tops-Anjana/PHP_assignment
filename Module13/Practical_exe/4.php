// Write a PHP program to determine if a number is even or odd using if conditions.
<htm>
<body>

<h2>Check If a Number Is Even or Odd</h2>

<form action="#" method="post">
    <label for="number">Enter a number:</label><br>
    <input type="number" id="number" name="number" required><br><br>
    <input type="submit" value="Check">
</form>
<?php
$number = $_POST['number'];


if ($number % 2 == 0) {
    echo "<p>$number is an even number.</p>";
} else {
    echo "<p>$number is an odd number.</p>";
}

?>
</html>