<!-- Write a script to display the current date and time in different formats -->
<?php
// Current date and time
$currentDateTime = date('Y-m-d H:i:s');  // Default format (e.g., 2024-11-06 15:30:45)
echo "Current Date and Time (Y-m-d H:i:s): " . $currentDateTime . "<br>";

// Display only the date in 'Month Day, Year' format (e.g., November 06, 2024)
echo "Current Date (Month Day, Year): " . date('F d, Y') . "<br>";

// Display the current time in 12-hour format with AM/PM (e.g., 03:30 PM)
echo "Current Time (12-hour format): " . date('h:i A') . "<br>";

// Display the current day of the week (e.g., Tuesday)
echo "Current Day of the Week: " . date('l') . "<br>";

// Display the current year (e.g., 2024)
echo "Current Year: " . date('Y') . "<br>";

// Display the current time in 24-hour format (e.g., 15:30)
echo "Current Time (24-hour format): " . date('H:i') . "<br>";

// Display the current date in ISO 8601 format (e.g., 2024-11-06)
echo "Current Date (ISO 8601): " . date('c') . "<br>";

// Display the current timestamp (number of seconds since January 1, 1970)
echo "Current Timestamp: " . time() . "<br>";
?>