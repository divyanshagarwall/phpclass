<?php
session_start();
if(isset($_SESSION['uname']))
{
    echo "hello";
}
