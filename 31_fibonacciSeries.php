<?php
//fibonacci series
echo "FIBONACCI SERIES <br>";
$n=10;
$num1 = 0;
$num2 = 1;
for ( $i = 0; $i < $n; $i++ ) {
     echo $num1 . " ";
     $num3 = $num1 + $num2;
     $num1 = $num2;
     $num2 = $num3;
}
echo "<br><br>";

echo "This program is done by Harshita Singla 0211BCA126";
?>