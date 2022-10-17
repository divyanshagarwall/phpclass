<?php
$name = $_POST["name"];
$email = $_POST["email"];
$mob = $_POST["num"];
$mess = $_POST["message"];
$conn_detail = mysqli_connect("localhost","root","","demo");

if(!$conn_detail){
    die("Unable to connect").connect_error();
}

$querry_detail = "INSERT INTO form_detail(uname , uphone , uemail , umessage, regis)VALUES('$name','$mob','$email', '$mess', 0)";

if(mysqli_query($conn_detail,$querry_detail)){
    echo "Done";
}

else{
    echo "Error";

}