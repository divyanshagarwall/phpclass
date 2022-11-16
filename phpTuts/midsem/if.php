<?php
    $a = 3;
    $b = 10;

    if($a < $b){
        echo "A is Smaller" ; 
    }
    echo "Here is other statement";


    if($a == $b){
        echo "A is Smaller" ; 
    }
    echo "Here is other statement";


    if($a === $b){
        echo "A is Smaller" ; 
    }
    echo "Here is other statement";

    
    if($a == $b):
        echo "A is Smaller<br>" ; 
        echo "A is Smaller<br>" ;
    endif;
    echo "Here is other statement";
?>