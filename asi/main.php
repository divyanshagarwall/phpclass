<form method="get">
    Guess the number between 1-100:
    <input name="n"/>
    <button>Check</button>
</form>

<?php
session_start();
// $mynumber =rand(0,100);
 define("x",rand(1,100));
 $_SESSION["n"]=x;

if(isset($_GET["n"]) && isset($_SESSION["n"])){
    if(x==$_GET["n"])
    {
        echo "Guess is correct";
    }
    elseif(x > $_GET["n"] ){
        echo "Guess is lower";
    }
    elseif(x < $_GET["n"]){
        echo "Guess is higher";
    }
}


?>
