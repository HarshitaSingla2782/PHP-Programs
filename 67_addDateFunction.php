<?php
//add date function
$date= date_create("2025-03-13");
date_add($date, date_interval_create_from_date_string("10 days"));
echo date_format($date, "Y- m- d");
 
echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>