<?php
//anonymous function
$lambdaFunc= function(){
     echo "Hello World, I am Anonymus Function <br>";
};
$lambdaFunc();

//anonymous function with parameter
$lambdaFunc2= function($p){
     echo "Hello World, I am Anonymus Function $p <br>";
};
$lambdaFunc2(" with parameters");

//anonymous function using global variable
$y=34; //global variable
$lambdaFunc3= function($p){
     echo "Hello World, I am Anonymus Function with global variable $p";
};
$lambdaFunc3($y);

echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>