<?php
$name=$_POST['uname'];
$passwr=$_POST['pwd'];
$connection= mysqli_connect("localhost","root","","seekhliya");
if(!$connection){
    die("problem in connection");
}

if(isset($_POST['save'])){
    $insert_query="INSERT INTO sbkuch(uname,passw) VALUES ('$name','$passwr')";
    if (mysqli_query($connection,$insert_query)){
        echo "successful";
        header("refresh:5","url=form.html");
    }else{
        echo "unable to register";
    }
}
if(isset($_POST['display'])){
    $displa_query="SELECT id,uname,passw from sbkuch";
    $result = mysqli_query($connection,$displa_query);
    if(mysqli_num_rows($result)>0)
    {
        while($data=mysqli_fetch_assoc($result)){
            echo $data['id']." ";
            echo $data['uname']." ";
            echo $data ['passw']."<br>";


        }

    }else{
        echo "no record found";
    }
}




?>