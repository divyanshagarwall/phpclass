<?php
session_start();
if(!isset($_SESSION['uname']))
{
   echo "Hello";
}else
{
    $_SESSION['uname'] = 3;
}
?>