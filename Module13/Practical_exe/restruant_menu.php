<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu</title>
</head>
<body>

<h2>Restaurant Food Category</h2>
<form action="#" method="post">
    <label for="category">Select Food Category:</label><br>
    <select id="category" name="category" required>
        <option value="starter">Starter</option>
        <option value="main_course">Main Course</option>
        <option value="dessert">Dessert</option>
    </select><br><br>
    <input type="submit" value="Show Dishes">
</form>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the selected category
    $category = $_POST['category'];
    switch ($category) {
        case 'starter':
            echo "<h3>Starters:</h3>";
            echo "<ul>
                    <li>Garlic Bread</li>
                    <li>Paneer Chilly</li>

                  </ul>";
            break;
        case 'main_course':
            echo "<h3>Main Courses:</h3>";
            echo "<ul>
                    <li>Grilled Chicken</li>
                    <li>Dal Fry</li>
                    <li>Mix Veg</li>
                  </ul>";
            break;
        case 'dessert':
            echo "<h3>Desserts:</h3>";
            echo "<ul>
                    <li>Chocolate Lava Cake</li>
                    <li>Red Velvet</li>
                    <li>Cheesecake</li>
                  </ul>";
            break;
        default:
            echo "<p>Invalid category selected.</p>";
    }
}
?>
</body>
</html>