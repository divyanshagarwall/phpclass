<?php
session_start();
if(isset($_SESSION['user']))
{

    echo "WELCOME "."<h3 align = right style='color:red'>".$_SESSION['user']."</h3>";
    echo "you are now on product screen <br>";
        echo "<a href=home.php>Click here for home page</a>";
        echo "<br><a href =logout.php><input type=submit name=logout value=logout></a>";
    }
else{
    
       
        echo "<script>location.href='login.php'</script>";
    }

?>