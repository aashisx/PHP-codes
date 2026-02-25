<?php

// Set timezone
date_default_timezone_set("Asia/Kathmandu");

echo "<h3>Different Date Formats</h3>";

// Default format
echo "Default (Y-m-d): " . date("Y-m-d") . "<br>";

// Change to DD-MM-YYYY
echo "DD-MM-YYYY: " . date("d-m-Y") . "<br>";

// Month name format
echo "Month Name Format: " . date("F d, Y") . "<br>";

// With day name
echo "With Day Name: " . date("l, d M Y") . "<br>";

// 12-hour time
echo "12-hour Time: " . date("h:i:s A") . "<br>";

// 24-hour time
echo "24-hour Time: " . date("H:i:s") . "<br>";

echo "<h3>Formatting Custom Date</h3>";

// Custom date
$mydate = "2026-03-15";

// Change format of custom date
echo "Original Date: " . $mydate . "<br>";
echo "Changed Format (d/m/Y): " . date("d/m/Y", strtotime($mydate));

?>