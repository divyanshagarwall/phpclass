<?php
 
 /*2. Write a PHP script to split the following string.  
 Sample string : '082307'
 Expected Output : 08:23:07 */

 // two things chunk_split : it splits the string into a series of smaller parts.
 // substr: it returns a part of a  string.


 $str_1= '082307';
 echo substr(  chunk_split($str_1,2,':'),0,-1);
 ?>