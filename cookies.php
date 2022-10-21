<?php
// setcookie("hello",phpinfo(),time()+3600);
// setcookie("hello","roll 18 is present",time()+3600);
// setcookie("hello",get_current_user(),time()+3600);
setcookie("hello",getenv("REMORT_ADDR"),time()+3600);
if($_COOKIE['hello'])
{
    echo"the value of cookie is : ".$_COOKIE['hello'];
}
else{
    echo "first invoke a cookie";
}
?>