<?php
//opening a text file & write some conent into it
$filename = "example2.txt";
$myfile = fopen($filename, "w") or die("Unable to open file!");
$txt = "John Doe<br>";
fwrite($myfile, $txt);
$txt = "John Smith<br>";
fwrite($myfile, $txt);
fclose($myfile);

if(file_exists($filename))
{
   $filesize = filesize($filename);
   $msg = "File  created with name $filename ";
   $msg .= "containing $filesize bytes";
   echo $msg;
}
else
{
   echo "File $filename does not exist";
}
echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>