<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chess Board</title>
    <style>
        table { 
            border-collapse: collapse; 
            border: 6px solid black; 
        }
        td { 
            width: 60px; 
            height: 60px; 
            border: 1px solid black; 
        }
        .white { background-color: white; }
        .black { background-color: black; }
    </style>
</head>
<body>
<table>
<?php
//plain chess board
for ($row = 0; $row < 8; $row++) {
    echo "<tr>";
    for ($col = 0; $col < 8; $col++) {
        $class = (($row + $col) % 2 == 0) ? "white" : "black";
        echo "<td class='{$class}'></td>";
    }
    echo "</tr>";
}
echo "This program is done by Harshita Singla 0211BCA126";
echo "<br><br>";
?>
</table>
</body>
</html>