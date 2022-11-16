<?php
function hello($name){
  echo "Hello $name.<br>";
}

hello("Keshav"); 


/* TWO Argument : */

function hello($fname,$lname){
  echo "Hello $fname $lname.<br>";
}

hello("keshav","singh");

hello("shakti","singh");



/* Default Value : */

function hello($fname="First",$lname="Name"){
  echo "Hello $fname $lname.<br>";
}


/*  SUM function */

function sum($a,$b){
  echo $a + $b;
}

sum(10,20.50);


/* Passing with Variables */

$one = 10;
$two = 20.50;
sum($one,$two);
?>