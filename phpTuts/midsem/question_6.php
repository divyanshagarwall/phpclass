<?php
 
//  6. Write a PHP script to format values in currency style.  
//  Sample values : value1 = 65.45, value2 = 104.35
//  Expected Result : 169.80

$value_1=65.45;
$value_2=104.35;
echo sprintf("%1.2f",$value_1+$value_2);// this format specifier gives decimal value upto two point 
