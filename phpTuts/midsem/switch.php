<?php
$weekday = 7;

switch($weekday){
  case 1:
      echo "Today is Monday";
  break;
  case 2:
      echo "Today is Tuesday";
  break;
  case 3:
      echo "Today is Wednesday";
  break;
  case 4:
      echo "Today is Thursday";
  break;
  case 5:
      echo "Today is Friday";
  break;
  case 6:
      echo "Today is Saturday";
  break;
  case 7:
      echo "Today is Sunday";
  break;
  default:
      echo "Enter the correct weekday.";
}



$weekday = 3;

switch($weekday){
  case 1 : case 2 : case 3 :
      echo "Today is Monday";
      echo "<br>This is just test.";
      break;

  case 4 :
      echo "Today is Thursday";
      break;
  case 5 :
      echo "Today is Friday";
      break;
  case 6 :
      echo "Today is Saturday";
      break;
  case 7 :
      echo "Today is Sunday";
      break;
  default :
      echo "Enter the correct weekday.";
}



$age = 18;

switch($age){
  case ($age >= 15 && $age <=20) :
      echo "You are eligible.";
  break;
  case ($age >= 20 && $age <= 30) :
      echo "You are not eligible.";
  break;
  default :
      echo "Enter the valid age.";
} 
?>