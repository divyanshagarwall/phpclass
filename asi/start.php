<?php
$number=$_POST["number"];
define("x",rand(1,10));
if(isset($_POST['submit'])){
    echo x;
    if($number==x){
        echo "your prediction is correct";
    }
    elseif($number>x){
        echo "your number is higher";    
    }
    else{
        echo "your number is lower";
    }
}
?>