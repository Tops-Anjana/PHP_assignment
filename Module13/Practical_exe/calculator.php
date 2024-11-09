<!-- Create a calculator using user-defined function. -->
<html>
    <body>
        <form action="#" method="post">
            <label for="choice">Select an operation:</label><br>
            <input type="radio" name="choice" value="1" required> Add<br>
            <input type="radio" name="choice" value="2"> Subtract<br>
            <input type="radio" name="choice" value="3"> Multiply<br>
            <input type="radio" name="choice" value="4"> Divide<br><br>
            <label for="num1">Enter number1:</label>
            <input type="text" id="num1" name="num1" required>
            <label for="num2">Enter number2:</label>
            <input type="text" id="num2" name="num2" required>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
<?php
// Function for Addition
function add($a, $b) {
    return $a + $b;
}

// Function for Subtraction
function subtract($a, $b) {
    return $a - $b;
}

// Function for Multiplication
function multiply($a, $b) {
    return $a * $b;
}

// Function for Division
function divide($a, $b) {
    if ($b == 0) {
        return "Error: Division by zero is not allowed.";
    } else {
        return $a / $b;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $choice = $_POST['choice'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2']; 

switch ($choice) {
    case 1:
        $result = add($num1, $num2);
        echo "Result: $num1 + $num2 = $result\n";
        break;
    case 2:
        $result = subtract($num1, $num2);
        echo "Result: $num1 - $num2 = $result\n";
        break;
    case 3:
        $result = multiply($num1, $num2);
        echo "Result: $num1 * $num2 = $result\n";
        break;
    case 4:
        $result = divide($num1, $num2);
        echo "Result: $num1 / $num2 = $result\n";
        break;
    default:
        echo "Invalid choice! Please select a number between 1 and 4.\n";
        break;
    }
}
?>