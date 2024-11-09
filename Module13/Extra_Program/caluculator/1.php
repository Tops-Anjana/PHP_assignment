<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

<h1>Calculator</h1>

<form method="POST">
    <label for="num1">Enter the first number: </label>
    <input type="number" name="num1" id="num1" step="any" required><br><br>
    
    <label for="num2">Enter the second number (optional for sqrt): </label>
    <input type="number" name="num2" id="num2" step="any"><br><br>

    <label for="operation">Choose an operation: </label>
    <select name="operation" id="operation" required>
        <option value="add">Addition (+)</option>
        <option value="subtract">Subtraction (-)</option>
        <option value="multiply">Multiplication (*)</option>
        <option value="divide">Division (/)</option>
        <option value="modulus">Modulus (%)</option>
        <option value="exponential">Exponentiation (^)</option>
        <option value="sqrt">Square Root (√)</option>
    </select><br><br>

    <button type="submit">Calculate</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $num1 = $_POST['num1'];
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : null;
    $operation = $_POST['operation'];

    $result = null;

    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
        
            if ($num2 == 0) {
                $result = "Error: Division by zero!";
            } else {
                $result = $num1 / $num2;
            }
            break;
        case 'modulus':
            
            if ($num2 == 0) {
                $result = "Error: Modulus by zero!";
            } else {
                $result = $num1 % $num2;
            }
            break;
        case 'exponential':
            $result = pow($num1, $num2);
            break;
        case 'sqrt':
          
            if ($num1 < 0) {
                $result = "Error: Cannot take the square root of a negative number!";
            } else {
                $result = sqrt($num1);
            }
            break;
        default:
            $result = "Invalid operation!";
            break;
    }

  
    echo "<h2>Result:</h2>";
    echo "<p>$num1 ";
    if ($operation != 'sqrt') {
        echo "and $num2 ";
    }
    echo "with operation '$operation' results in: <strong>$result</strong></p>";
}
?>

</body>
</html>