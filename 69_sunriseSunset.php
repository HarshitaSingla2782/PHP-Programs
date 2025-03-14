<?php
echo "New Delhi, India<br>";
echo("Date: " . date("D M d Y"));
echo("<br>Sunrise time: ");
echo(date_sunrise(time(),SUNFUNCS_RET_STRING,28.6139,77.2090,90,5.5));
echo("<br>Sunset time: ");
echo(date_sunset(time(),SUNFUNCS_RET_STRING,28.6139,77.2090,90,5.5));

echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>