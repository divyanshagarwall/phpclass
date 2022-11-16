<?php

// 9. Write a PHP script to find the first character that is different between two strings.  
// String1 : 'facebook'
// String2 : 'faceboll'

/*strspn= return the no. of characters found in a string that contains
     only characters from a specified cahrlist
     -> we xor two strings together , characters that are same will be null bytes("\0")
     -> then find the position of not null byte and return using strspn.
     */



    $str_1 = 'football';
    $str_2 = 'footboll';
    $position = strspn($str_1 ^ $str_2, "\0");
    printf('First difference between two strings at position %d: "%s" vs "%s"',
    $position+1, $str_1[$position], $str_2[$position]);
 
    
  

?>
   