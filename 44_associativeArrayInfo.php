<?php
//disply info. using associative array
$marks=array("English"=>70, "Maths"=>68, "Science"=>88, "History"=>66, "Computer"=>80);
$total_marks=array_sum($marks);
$total_subjects= count($marks);
$total_possible_marks=$total_subjects*100;
$percentage= ($total_marks/$total_possible_marks)*100;
echo "Total Marks= $total_marks <br>";
echo "Percentage= " . number_format($percentage,2). "% <br>";
echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>