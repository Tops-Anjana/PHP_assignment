<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Finder with Time Zone</title>
</head>
<body>

<h1>Find Current Day and Adjust for Time Zone</h1>

<form method="POST">
    <label for="timezone">Select Time Zone: </label>
    <select name="timezone" id="timezone" required>

        <option value="America/New_York">New York (America/New_York)</option>
        <option value="Europe/London">London (Europe/London)</option>
        <option value="Asia/Tokyo">Tokyo (Asia/Tokyo)</option>
        <option value="Australia/Sydney">Sydney (Australia/Sydney)</option>
        <option value="Europe/Paris">Paris (Europe/Paris)</option>
        <option value="Africa/Johannesburg">Johannesburg (Africa/Johannesburg)</option>
        <option value="UTC">UTC (Universal Time)</option>
    </select><br><br>
    
    <button type="submit">Check Day</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $timezone = $_POST['timezone'];

       $dateTime = new DateTime('now', new DateTimeZone($timezone));

    $dayOfWeek = $dateTime->format('l'); 
   
    echo "<h2>Current Day in $timezone:</h2>";
    echo "<p>Today is: $dayOfWeek</p>";

    if ($dayOfWeek == 'Sunday') {
        echo "<p><strong>Happy Sunday!</strong></p>";
    }
}
?>
</body>
</html>