 

<?php
//write a php  script calculate area of triangle using heorins formula
$a=2;
$b=3;
$c=3;
$area=($a+$b+$c)/2;
$area_1=sqrt($area*($area-$a)*($area-$b)*($area-$c));
echo ("<h1 align=right>  perimeter of the triangl is : $area</h1>");
echo ("<br>The area is : $area_1");
?>