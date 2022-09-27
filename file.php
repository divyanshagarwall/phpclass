<?php
$val_one = $_POST['num_one'];
$val_two = $_POST['num_two'];
$result = $val_one + $val_two;
echo "The sum of two number $val_one and $val_two is :<input type=text value=$result readonly>";