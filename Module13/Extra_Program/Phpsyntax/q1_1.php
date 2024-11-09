<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Comment Demonstration</title>
</head>
<body>
<h2>PHP Comment Types</h2>
<?php
// Single-line comment: This line is for demonstration purposes
echo "<h3>Single-line Comments</h3>";
echo "Single-line comments start with // and continue to the end of the line.<br>";

// Multi-line comment: 
/*
   This is a multi-line comment.
   It can span multiple lines and is useful for longer explanations.
*/
echo "<h3>Multi-line Comments</h3>";
echo "Multi-line comments start with /* and end with */.<br>";

// Inline comment: This comment is on the same line as code
$number = 10; // This variable holds the number 10
echo "The number is: $number<br>";
# Display a message
echo "Comments are helpful for documenting code and explaining logic.<br>";
?>

</body>
</html>
