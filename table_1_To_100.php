<?php
$num=1;
echo"<table style='border: 2px solid black';border-collapse:collapse>";
for($row= 1;$row<=10;++$row)
{
    echo"<tr>";
    for($col= 1;$col<=10;++$col)
    {
        echo"<td style = 'border: 2px solid black'>";
    }
    echo"</tr>";
}
echo"</table>";