<html>
     <head>
          <title>Student Marks</title>
          <style>
               table{
                    width: 50%;
                    border-collapse: collaplse;
                    margin: 20px 0;
               }
               th, td{
                    padding: 10px;
                    border: 1px solid black;
               }
          </style>
     </head>
     <body>
          <?php
          //associative array of subjects and marks using HTML table
          $marks=["Maths"=>89, "English"=>78, "Science"=>88, "History"=>77, "Computer"=>90];

          //calculate total marks
          $total=array_sum($marks);

          //calculate percentage
          $percentage=($total/(count($marks)*100))*100;

          echo "<h2>STUDENT MARKS REPORT</h2>";
          echo "<table>";
          echo "<tr>
          <th>Subject</th>
          <th>Marks</th>
          </tr>";

          //display each subject and itss marks
          foreach($marks as $subject=>$mark){
               echo "<tr>
               <td>$subject</td>
               <td>$mark</td>
               </tr>";
          }

          //display total and percentage
          echo "<tr>
          <th>Total Marks</th>
          <th>$total</th>
          </tr>";
          echo "<tr>
          <th>Percentage</th>
          <th>" . number_format($percentage, 2) . "%</th>
          </tr>";
          echo "</table>";

          echo "<br><br>";
          echo "This program is done by Harshita Singla 0211BCA126";
          ?>
     </body>
</html>