<?php
//reversed array
$originalArray = array(1, 2, 3, 4, 5);
$reversedArray = array();

$length = count($originalArray);
for ($i = $length - 1; $i >= 0; $i--) {
    $reversedArray[] = $originalArray[$i];
}

echo "Original Array: ";
print_r($originalArray);
echo "<br>Reversed Array: ";
print_r($reversedArray);

echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>
