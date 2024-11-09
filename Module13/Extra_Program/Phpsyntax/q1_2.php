<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>User Information Table</h2>

<?php
// Sample user data
$users = [
    ['name' => 'Anjana', 'email' => 'abc@gmail.com', 'age' => 28],
    ['name' => 'Jay', 'email' => 'jay@gmail.in', 'age' => 34],
    ['name' => 'Sam', 'email' => 'sam@outlook.com', 'age' => 22],
    ['name' => 'Riya ', 'email' => 'riya@yahoo.com', 'age' => 30],
];

// Generate the HTML table
echo "<table>";
echo "<tr><th>Name</th><th>Email</th><th>Age</th></tr>"; // Table headers

foreach ($users as $user) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($user['name']) . "</td>";
    echo "<td>" . htmlspecialchars($user['email']) . "</td>";
    echo "<td>" . htmlspecialchars($user['age']) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>