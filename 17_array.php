<?php
//array operators
echo "ARRAY OPERATORS <br>";
//array
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow"); 
print_r($x + $y); // union of $x and $y
echo "<br>";
var_dump($x == $y);//equality of $x and $y
echo "<br>";
var_dump($x === $y);// identity of $x and $y
echo "<br>";
var_dump($x != $y);//inequality of $x and $y
echo "<br>";
var_dump($x <> $y);//inequality of $x and $y
echo "<br>";
var_dump($x !== $y);//non identity of $x and $y
echo "<br><br>";

echo "This program is done by Harshita Singla 0211BCA126";
?>