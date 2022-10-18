<?php
setcookie("hello",phpinfo(),time()+3600);
if($_COOKIE['hello'])
{
    echo"the value of cookie is : ".$_COOKIE['hello'];
}
else{
    echo "first invoke a cookie";
}
?>