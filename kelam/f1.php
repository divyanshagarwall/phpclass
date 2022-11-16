<?php
$ser_name="localhost";
$ser_user_name="root";
$name = $_POST['username'];
$contact=$_POST['Contactnumber'];

$connection=mysqli_connect("localhost","root","","form_day1");
if(!$connection){
    die("unable to connect");

}
$insert="INSERT INTO registration(name,contact) VALUES('$name','$contact')"   ;

if(mysqli_query($connection,$insert)){
    echo " registration successfull";
}else{
    echo "not";
}

?>