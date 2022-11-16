<?php
 
for($a = 1; $a <= 10; $a++){
  if($a == 3){    
    goto a;
  }

  echo "Number : " . $a . "<br>";
}

echo "Hello";
echo " World";

a:
echo "Here is label A.";
?>