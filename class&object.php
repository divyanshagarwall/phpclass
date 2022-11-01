<?php

 class gla{
    public $exam = "endterm";
    private $result = "pass";
 }
 $stu_gla = new gla();
 $stu_two_gla = new gla;
 echo $stu_gla->exam;
 echo $stu_two_gla->exam = "midterm";
 $stu_two_gla->exam= "practical";
 echo $stu_gla->exam;
 echo $stu_two_gla->exam;

 ?>