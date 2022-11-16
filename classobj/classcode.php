<?php

 class gla{  // it will not force you to put access ,modifier
   // $exam ="endterm";  //Parse error: syntax error, unexpected variable "$exam", expecting "function" or "const" in C:\xampp\htdocs\allphp\classobj\classcode.php on line 4  


  
  
   public $exam="endterm"; //you have to have the access modifier inside the class to make a property
  // echo $exam; // it is considered as name thats why not printing
   private $result="pass";

   $this //currrent class ke object ka reference krta h inside the class 

}

//echo $exam;  can not access the class without object 

$student_gla=new gla();
$student_two_gla= new gla;
//var_dump($student_two_gla); //object(gla)#2 (1) { ["exam"]=> string(7) "endterm" }
//var_dump($student_gla); //object(gla)#1 (2) { ["exam"]=> string(7) "endterm" }

//echo $student_gla -> exam;
/*echo $student_two_gla -> exam ="midterm";
$student_two_gla->exam="practical";
echo $student_gla->exam;
echo $student_two_gla->exam;
output:  midtermendtermpractical

*/




?>