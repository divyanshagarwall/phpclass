<?php

$colors = array('red', 'yellow', 'blue', 'green');

echo $colors[0]."<br>";


$colors = ['red', 'yellow', 'blue', 'green']; /* ----- IInd way */


echo "<pre>";
print_r($colors);
echo "</pre>";

$colors[0] = "red";  /* --------- IIIrd way */
$colors[1] = "green"
$colors[2] = "yellow";
$colors[3] = "blue";

echo "<ul>";  /* --------- Loop Method */
for($i = 0 ; $i < 4 ; $i++){
   echo "<li>$i</li>";
}
echo "</ul>"; 

?>