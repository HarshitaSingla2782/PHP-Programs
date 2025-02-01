<?php
//odbject type
// Class definition
class greeting{
     // properties
     public $str = "Hello World!";
        
     // methods
     function show_greeting(){
          return $this->str;
     }
}
     
// Create object from class
$message = new greeting;
var_dump($message);
echo "<br><br>";

echo "This program is done by Harshita Singla 0211BCA126"
?>