<?php
class test{
    public $data;
    public $count;
    public function __construct($val1,$val2){
        echo ($this -> init(30)."class");
        $this -> count=$val1;


        
    }
    public function init($num){
        echo "welcome";
        $this-> data=$num;
    }
    public function __destruct(){
        echo $this -> data + $this -> count;
    }
}

$obj_test=new test(40,30,40);
echo $obj_test -> data;
$obj_test-> __destruct();
$obj_test-> count=20;
$obj_test -> __destruct();

//  welcomeclass30705050