<?php
  /* 1. Write a PHP script to : -  
   a) transform a string all uppercase letters.
   b) transform a string all lowercase letters.
   c) make a string's first character uppercase.
   d) make a string's first character of all the words uppercase. 
*/

$str1="hello akash sir";
$str2="HELLO AKASH SIR";
$str3="hello akash sir";
$str4="hello akash sir";

echo strtoupper($str1);
echo "<br>";
echo strtolower($str2);
echo "<br>";
echo ucfirst($str3);
echo "<br>";
echo ucwords($str4);
?>
