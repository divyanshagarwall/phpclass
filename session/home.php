<?php
$username = "divyansh";
$pwd = "admin";
session_start();
if(isset($_SESSION['user']))
{
    echo "Welcome to home page";
}
else
{
    if($username == $_POST["username"] and $password== $_POST["pwd"])
    {
        echo "<script> location.href= 'home.php'</script>";
    }
    else
    {
        echo "<script> alert('Invalid Username and passowrd')</script>";
        echo "<script> location.href='login.php'</script>";
    }
}