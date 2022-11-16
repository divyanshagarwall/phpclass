<?php
$ser_name="localhost";
$ser_user_name="root";
$n1=$_POST["num_one"];
$n2=$_POST["num_two"];
$n3=$_POST["num_three"];
$n4=$_POST["num_four"];
$max = ($n1 < $n2 && $n1<$n3 && $n1 < $n4) ?  $n1 : (($n2 < $n3 && $n2 < $n4) ? $n2 : ($n3 < $n4 ? $n3 : $n4));
echo "The minumum number is $max";

mysqli_connect()// minimum 3 max 5 parameters 
?>