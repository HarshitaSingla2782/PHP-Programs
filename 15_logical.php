<?php
//logical operators
$x = 100;  
$y = 50;

echo "LOGICAL OPERATORS <br>";
if ($x == 100 and $y == 50) {
     //And
    echo "Hello world!... I am AND operator";
    echo "<br>";
}

if ($x == 100 or $y == 80) {
     //Or
     echo "Hello world!... I am OR operator";
     echo "<br>";
}

if ($x == 100 xor $y == 80) {
     //Xor
     echo "Hello world!... I am XOR operator";
     echo "<br>";
}

if ($x == 100 && $y == 50) {
     //&&(And)
     echo "Hello world!... I am && operator";
     echo "<br>";
}

if ($x == 100 || $y == 80) {
     //||(Or))
     echo "Hello world!... I am || operator";
     echo "<br>";
}

if (!($x == 90)) {
     //!(Not)
     echo "Hello world!... I am ! operator";
     echo "<br><br>";
 }

echo "This program is done by Harshita Singla 0211BCA126";
?>  