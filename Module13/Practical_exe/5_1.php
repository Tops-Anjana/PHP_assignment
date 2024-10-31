<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>
<form action="#" method="post">
    <label for="number1">First Number:</label><br>
    <input type="number" id="number1" name="number1" required><br><br>
    
    <label for="number2">Second Number:</label><br>
    <input type="number" id="number2" name="number2" required><br><br>
    
    <label for="operator">Select Operator:</label><br>
    <select id="operator" name="operator" required>
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select><br><br>
    
    <input type="submit" value="Calculate">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") { // Retrieve the input values
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];
    $result = 0;

    // logic for calculation 
    if ($operator == '+') {
        $result = $number1 + $number2;
    } elseif ($operator == '-') {
        $result = $number1 - $number2;
    } elseif ($operator == '*') {
        $result = $number1 * $number2;
    } elseif ($operator == '/') {
        // Check for division by zero
        if ($number2 != 0) {
            $result = $number1 / $number2;
        } else {
            echo "<p>Division by zero is not allowed.</p>";
        }
    } else {
        echo "<p>Invalid operator selected.</p>";
    }
    if ($operator != '/' || $number2 != 0) {
        echo "<h3>Result: $result</h3>";
    }
}
?>
</body>
</html>