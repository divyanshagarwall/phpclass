<?php

class test{
    public function work(){
        echo $this -> data ='new'

    }
}

$val=new test();
echo $val -> data;
$val->work();
echo $val -> data;
$new_val=new test();
// $new_val -> data;
echo $new_val -> data;
?>