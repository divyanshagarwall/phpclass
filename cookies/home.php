<?php

$username= "puneet";
$password="surya@123";

session_start();


if(isset($_SESSION['user']))

{
    echo "welcome to home page";
    
}
else
{
    if($username == $_POST["uname"] and $password== $_POST["psw"]){
        $_SESSION['user']=$username;
        echo "<script> location.href='home.php'</script>";
        
    }else{
        echo "<script> alert('Invalid username and passsword')</script>";
        echo "<script> location.href='login.php'</script>";
    }

}
?>