<?php
// Define the date and location coordinates
$date = strtotime("today"); // Current date
$latitude = 40.7128; // Latitude for New York City
$longitude = -74.0060; // Longitude for New York City
$zenith = 90; // Standard zenith for sunrise

// Calculate sunrise time
$sunrise = date_sunrise($date, SUNFUNCS_RET_STRING, $latitude, $longitude, $zenith, 0);

// Display the results
echo "Sunrise time in New York City today is: $sunrise";

echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>