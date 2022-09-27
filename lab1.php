<?php
$val_one = $_POST['num_one'];
$val_two = $_POST['num_two'];
$val_three = $_POST['num_three'];
$val_four = $_POST['num_four'];

$min = ($val_one < $val_two && $val_one < $val_three && $val_one < $val_four ) ?
            $val_one : (($val_two < $val_three && $val_two < $val_four) ?
            $val_two : ($val_three < $val_four ? $val_three : $val_four));

echo "Minimum Number ",$min;