<?php
//arraysorting in alphabetical ascending order
//defining an array
$fruits=array("Mango", "Apple", "Banana", "Orange", "Grapes");

//displaying the arrays
echo "<b>Original array before sorting:</b><br>";
foreach($fruits as $Fruits){
     echo "$Fruits<br>";
}

echo "<br><b>Sorted array:</b><br>";
sort($fruits);
foreach($fruits as $fruit){
     echo "$fruit<br>";
}
echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>