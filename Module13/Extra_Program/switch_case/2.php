<!-- discount calculator -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discount Calculator</title>
</head>
<body>

<h1>Discount Calculation</h1>

<form method="POST">
    <label for="price">Enter the price of the product: $</label>
    <input type="number" name="price" id="price" step="0.01" required>
    <button type="submit">Calculate Discount</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $price = $_POST['price'];

        $discount = ($price > 500) ? 0.10 * $price : 0;

        $finalPrice = $price - $discount;

    echo "<h2>Results:</h2>";
    echo "<p>Original Price: $" . number_format($price, 2) . "</p>";
    echo "<p>Discount: $" . number_format($discount, 2) . "</p>";
    echo "<p>Final Price: $" . number_format($finalPrice, 2) . "</p>";
}
?>

</body>
</html>