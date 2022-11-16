<?php 
//setcookie("hello","roll 45 is present",time()+3600); //current user() shows the device value 
//setcookie("hello",get_current_user(),time()+3600); //current user() shows the device current user 
//setcookie("hello",getenv("REMOTE_ADDR"),time()+3600); //current user() shows the device ip 
setcookie("hello",getenv("REMOTE_ADDR"),time()+3600); //current user() shows the device current user 
if($_COOKIE['hello']){
    echo "the value of cooie is : ".$_COOKIE['hello'];
}else{
    echo "first invoke a cookie";   


}

    // to destroy manually
  //  echo "the value of cooie is : ".$_COOKIE['hello'];
    //setcookie('hello','',time()-3600);


    
?>