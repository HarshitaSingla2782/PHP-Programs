<?php
//calculating digits in a given number
function counting($n){
     return strlen(abs($n));
}
$n=1239;
echo "Number of digits in $n are " . counting($n);
echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>