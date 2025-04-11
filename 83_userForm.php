<html>
     <head>
          <title>Selection Form</title>
          <style>
          form{
               border: 1px solid black;
               padding: 4px;  
          }
          </style>
     </head>
     <body>
          <form method="POST">
               <p>Plesse select your favourite car</p>
               <input type="radio" name="car" value="Toyota" id="toyota">
               <label for="toyota">Toyota</label><br>
               <input type="radio" name="car" value="Honda" id="honda">
               <label for="honda">Honda</label><br>
               <input type="radio" name="car" value="Ford" id="ford">
               <label for="ford">Ford</label><br>
               <input type="submit" value="Submit">
          </form>
          <?php
          if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['car'])){
               $car = htmlspecialchars($_POST['car']);
               echo "Your favourite car is " . $car;
          }
          echo "<br><br>";
          echo "This program is done by Harshita Singla 0211BCA126";
          ?>
     </body>
</html>