<?php
//bitwise operator
echo "BITWISE OPERATORS <br>";
$a = 5;
$b = 3;

echo "a = $a (Binary: " . decbin($a) . ")<br>";
echo "b = $b (Binary: " . decbin($b) . ")<br><br>";

echo "a & b (AND) = " . ($a & $b) . "<br>"; 
echo "a | b (OR) = " . ($a | $b) . "<br>";
echo "a ^ b (XOR) = " . ($a ^ $b) . "<br>";
echo "~a (NOT) = " . (~$a) . "<br>";
echo "a << 1 (Left Shift) = " . ($a << 1) . "<br>";
echo "a >> 1 (Right Shift) = " . ($a >> 1);

echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>