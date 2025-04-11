<?php
//opening a text file & write some conent into it
$filename = "introduction.txt";
$myfile = fopen($filename, "w") or die("Unable to open file!");
$txt = "Hello World<br>";
fwrite($myfile, $txt);
$txt = "Hello World<br>";
fwrite($myfile, $txt);
fclose($myfile);

if(file_exists($filename))
{
   $filesize = filesize($filename);
   $content = "Hello! I am Harshita Singla a student of BVIMR,  New Delhi. I am pursuing BCA program and currently studying in final semester, final year.";
   echo $content;
}
else
{
   echo "File $filename does not exist";
}
echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>