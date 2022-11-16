<?php
function swap (&$a, &$b) {
    $a =$a+$b;
    $b =$a-$b;
    $a =$a-$b;
    echo $a ." ". $b ." ";

}
$a=10;
$b=20;
swap($a,$b);   
echo $a . " ". $b;   
?>