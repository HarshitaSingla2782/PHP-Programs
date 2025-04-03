<?php
//set session values and access
session_start();
$_SESSION["firstname"]= "Harshita";
$_SESSION["lastname"]= "Singla";

echo "First name is " . $_SESSION["firstname"] . "<br>";
echo "Last name is " . $_SESSION["lastname"];
echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>