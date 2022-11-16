<?php
    $age = 20;

    
    if($age >= 18 && $age <= 21){
    echo "You are eligible.<br>";
    }
    echo "Here is other statement";

    
    if($age >= 18 and $age <= 21){
    echo "You are eligible.<br>";
    }
    echo "Here is other statement";

    
    if($age >= 18 || $age <= 21){
    echo "You are eligible.<br>";
    }

    
    if(!($age >= 18)){
    echo "You are eligible.<br>";
    }

    
    if($age >= 18 xor $age <= 21){
    echo "You are eligible.<br>";
    }
?>