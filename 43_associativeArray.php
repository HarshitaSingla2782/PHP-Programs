<html>
     <head>
          <title>Associative Array</title>
</head>
<body>
     <?php
     //associative array
     $salaries= array("Roshan"=>2000, "Twinkle"=>1000, "Zara"=>500);
     echo "Salary of Roshan is" . $salaries['Roshan'] . "<br>";
     echo "Salary of Twinkle is" . $salaries['Twinkle'] . "<br>";
     echo "Salary of Zara is" . $salaries['Zara'] . "<br>";
     echo "<br><br>";

     $salaries['Roshan']= "high";
     $salaries['Qadir']= "medium";
     $salaries['Twinkle']= "low";
     echo "Salary of Roshan is " . $salaries['Roshan'] . "<br>";
     echo "Salary of Qadir is " . $salaries['Qadir'] . "<br>";
     echo "Salary of Twinkle is " . $salaries['Twinkle'];
     echo "<br><br>";
     echo "This program is done by Harshita Singla 0211BCA126";
     ?>
</body>
</html>