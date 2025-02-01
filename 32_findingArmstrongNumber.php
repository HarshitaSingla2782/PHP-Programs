<?php
//checking whether the number is armstrong or not
$num=205;
$total=0;
$x=$num;
while($x!=0){
     $rem=$x%10;
     $total=$total + $rem * $rem * $rem;
     $x=$x/10;
}
if($num==$total){
     echo "Yes it is an Armstrong number"; 
}
else{
     echo "No it is not an Armstrong number"; 
}
echo "<br><br>";

echo "This program is done by Harshita Singla 0211BCA126";
?>