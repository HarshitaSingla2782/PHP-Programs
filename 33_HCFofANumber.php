<?php
// finding HCF of two numbers
$num1 = 36;
$num2 = 60;
while ($num1 != $num2) {
    if ($num1 > $num2) {
        $num1 -= $num2;
    } else {
        $num2 -= $num1;
    }
}

echo "The HCF is: " . $num1;
echo "<br><br>";

echo "This program is done by Harshita Singla 0211BCA126";
?>