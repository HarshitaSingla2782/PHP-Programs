<?php
//finding biggest number without using array function
// defining an array
$numbers = [1, 5, 2, 7, 3, 9, 4, 6];

$max = $numbers[0];

// Loop through the array elements
for ($i = 1; $i < 8; $i++) {
    if ($numbers[$i] > $max) {
        $max = $numbers[$i];
    }
}
echo "The biggest number is: " . $max;
echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>