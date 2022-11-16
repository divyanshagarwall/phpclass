<?php

// define is the function in which its a key value pair as first value is the constant name and the scnd value is the value of the constant.

define("Name","epshita");
echo Name;

// we can not mutate the const value if we do it will throww the error

echo Name='puneet';
echo Name; // error


// the latest way to write the const are:-

const Name='epshita';
echo Name;