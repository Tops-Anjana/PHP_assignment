<?php
// Write a script that finds the current day. If it is Sunday, print "Happy Sunday."
// Get the current day of the week
$currentDay = date('l'); // 'l' (lowercase 'L') returns the full textual representation of the day

// Check if the current day is Sunday
if ($currentDay === 'Sunday') {
    echo "<p>Happy Sunday!</p>";
} else {
    echo "<p>Today is $currentDay.</p>";
}
?>