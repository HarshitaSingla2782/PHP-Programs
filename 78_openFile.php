<?php
//opening a file
if (!(file_exists("welcome.txt"))){
    echo "could not open the file";
}
else{
    $text = fopen("welcome.txt","r");
    var_dump($text);
}
echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>