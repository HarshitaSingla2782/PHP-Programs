<?php
// * pattern
$rows = 8;

// loop to print the pattern
for ($i = $rows; $i > 0; $i--) {
    for ($j = 0; $j < ($i * 2 - 1); $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br><br>";

echo "This program is done by Harshita Singla 0211BCA126";
?>