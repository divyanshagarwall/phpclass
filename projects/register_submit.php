<?php
    $db_hostname ="127.0.0.1";
    $db_username ="root";
    $db_password ="--";
    $db_name ="test";

    $conn= mysqli_connect ($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "connection failed: ".mysqli_connect_error();
        exit;
    }


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql= "INSERT INTO users (name, email,password) values ('$name','$email','$password')";
    $result =mysqli_query($conn,$sql);
    if(!$result){
        echo "error: ".mysqli_error($conn);
        exit;
    }

    echo "Registration successful";
    mysqli_close($conn);


   // echo $name . "<br/>";
   // echo $email . "<br/>";
   // echo $password . "<br/>";
?>