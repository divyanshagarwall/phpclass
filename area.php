<!-- write  a php script to calculate area of triangle using heroins formula -->

<?php
$num_1=5;
$num_2=6;
$num_3=7;
$prmt=($num_1+$num_2+$num_3)/2;
$area=sqrt($prmt*($prmt-$num_1)*($prmt-$num_2)*($prmt-$num_3));
echo("the perimeter of a tringle is :$prmt");
echo("<br>the area of a tringle is :$area");
?>