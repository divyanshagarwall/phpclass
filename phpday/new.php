<?php


for($i=1;$i<=150;$i++){
    if($i%3==0 && $i%5==0){
        echo "rahul pradhan";
    }elseif($i%3==0){
        echo "rahul";
    }elseif($i%5==0){
        echo "pradhan";
    }else{
        echo "$i";
    }
}