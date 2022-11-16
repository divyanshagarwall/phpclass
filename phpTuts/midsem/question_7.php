<?php
//7. Write a PHP script to generate simple random password 
//[do not use rand() function] from a given string.  
//Sample string : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'


//LOGIC :
//first we shuffle the giver data string then get a substring of a given password length 


// $length=7;
// $data='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
// echo substr(str_shuffle($data),0,$length);

function pass_gen($length){
    $data='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    return substr(str_shuffle($data),0,$length);//(shuffled array,start,length)

}
echo pass_gen(7);
