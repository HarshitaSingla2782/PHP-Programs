<?php
//demonstration of class and object
class Rectangle{
     //declare properties
     public $length=10;
     public $width=5;

     //method to get the perimeter
     public function getPerimeter(){
          return (2*($this -> length + $this -> width));
     }

     //method to get the area
     public function getArea(){
          return ($this -> length * $this -> width);
     }

     //show result
     public function showResult(){
          echo "Length of rectangle: " . $this -> length . "<br>";
          echo "Width of rectangle: " . $this -> width . "<br>";
          echo "Perimeter of rectangle: " . $this -> getPerimeter() . "<br>";
          echo "Area of rectangle: " . $this -> getArea();
     }
}
$rec= new Rectangle;
$rec -> showResult();

echo "<br><br>";
echo "This program is done by Harshita Singla 0211BCA126";
?>