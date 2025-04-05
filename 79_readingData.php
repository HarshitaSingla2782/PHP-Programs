<?php
//reading data from a text file
$file = fopen("example.txt", "r") or exit("Unable to open file!");
//Output a line of the file until the end is reached
while(!feof($file))
{
    echo fgets($file). "<br>";
}
fclose($file);
echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>