<?php

function reverse(int $num){
    $rev_num =0 ;
    if($num ==1) return 1;
    while($num >1 ){
        $rem = $num % 10;
        $rev_num = ($rev_num*10)+$rem;
        $num /= 10;
    }
    return $rev_num;
}

$num=$_POST["num_one"];
$rev = reverse($num);
if(($num*$num)== reverse($rev*$rev)) {echo $num. "is Adam number";}
else {echo $num."is not Adam number";}

?>

