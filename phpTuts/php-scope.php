<?php

$name='puneet';

function getname() {
    /* vriable by default declared as the local 
    in php to access the globally we need to specify them as the global */
    $name='epshita';
    echo $name;

}
echo $name.'<br>';
getname();
