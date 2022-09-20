<?php

// $count = 1; //loop ounter initialization

// while($count <= 10) //test condition
// {
//     echo"$count = divyansh"."<br>";
//     $count++; //counter increament&decreament
// }

// do
// {
//     echo"$count = divyansh"."<br>";
//     $count++; //counter increament&decreament
// }
// while($count <= 100); //test condition




// $count = 1;
// for(; $count <= 100; $count++)
// {
//     echo $count."<br>";
// }


$num = 1;
echo "<table style='border: 2px solid black;'>";
for($row = 1; $row <= 10; ++$row)
{
    echo "<tr>";
    for($col = 1; $col <= 10; ++$col)
    {
        echo "<td>$num</td>";
        $num++;
    }
    echo "</tr>";
}
echo "</table>";