<?php
calss test{
    public $data;// 
    public $count;
    public function __construct(){
        echo "hi ishika this is a constructor";
    }
}
$obj_test_one= new test;
$obj_test_two= new test();
$obj_test_one -> __construct; // distructor will not run for this because we invoked not self done

public function __destruct(){
    echo "out";
}



calss test{
    public $data;// 
    public $count;
    public function __construct(){
        echo "hi ishika this is a constructor";
        $this -> __destruct();
    }
}
$obj_test_one= new test;
$obj_test_two= new test();
$obj_test_one -> __construct

public function __destruct(){
    echo "out";
}


//output: "hi ishika this is a constructor"
//out
//output: "hi ishika this is a constructor"
//out
//output: "hi ishika this is a constructor"
//out
//out  self construct ke liye 2 baar destruct 
//out



calss test{
    public $data;// 
    public $count;
    public function __construct(){
        echo "hi ishika this is a constructor";
        $this -> __destruct();
    }
}
$obj_test_one= new test;
$obj_test_one -> __destruct;
$obj_test_two= new test();
$obj_test_one -> __construct

public function __destruct(){
    echo "out";
}

