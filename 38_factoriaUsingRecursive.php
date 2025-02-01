<?php
//factorial using recursive function
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } 
    return $n * factorial($n - 1);
}
$number = 5;
echo "Factorial of $number is: " . factorial($number);
echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>