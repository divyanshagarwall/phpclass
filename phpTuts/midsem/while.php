<?php
$a = 1;

 while($a <= 10){ 
  echo "Good Night<br>";
  $a = $a + 1; 
} 

while($a <= 20){ 
  echo $a . ") Good Night<br>";
  $a = $a++; 
}


$a = 10;
while($a >= 1){ 
  echo $a . ") Good Night<br>";
    $a--; 
}

echo "<ul>";
while($a >= 1){
  echo "<li>".$a . ") Good Night</li>";
  $a = $a - 1;
}
echo "</ul>";


while($a <= 10){ 
  echo "Good Night<br>";
  $a = $a + 2; 
}
?>