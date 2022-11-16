<?php
$a=20;
$b=10;
$c=1;
if($a>$b && $a>$c)
{
echo "Greater value is a=".$a;
}
else if($b>$a && $b>$c)
{
echo "Greater value is b=".$b;
}
else if($c>$a && $c>$b)
{
echo "Greater value is c=".$c;
}
else
{
echo"Dont Enter Equal Values";
}
?>