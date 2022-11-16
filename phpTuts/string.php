<?php
$string= 'epshita is good girl';
//$string = strlen($string);      length of the string
//$string = str_word_count($string);    count the number of words in the string
//$string = strrev($string);    reverse the string
//$string = strpos($string, 'good');     given word start index in the giver string 
//$string = str_replace("good","great",$string);    replace the word.
$string = str_shuffle($string);
echo $string;