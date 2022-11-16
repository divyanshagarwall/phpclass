
<?php
    $colors = [
        "red",
        "green",
        "blue"
      ];

foreach($colors as $value){
  echo $value . "<br>";
}

$age = [
        "bill" => 25,
        "steve" => 28,
        "elon" => 22,
      ];

foreach($age as $key => $value){
  echo "$key = $value <br>";
}

echo "<ul>";
foreach($age as $key => $value){
  echo "<li>$key = $value </li>";
}
echo "</ul>";
 
?>