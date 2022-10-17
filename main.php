<?php
$connection = mysqli_connect("localhost","root","","demo")
if(isset($_POST['save']))
{

}
if(isset($_POST['display']))
{

}
$display_querry = "SELECT id,uname,contact from regis";
$data = mysqli_querry($connection,$display_querry);
if(mysqli_num_row($data)>0){
    echo "<table style='border:1px solid black>
    <tr><th>ID</th>
    <th>Username</th>
    <th>Contact</th></tr>";

while($result = mysqli_fetch_assoc($data))
{
    echo $result['id'];
    echo $result['uname'];
    echo $result['contact']."<br>";
}
echo "</table>";
}
else{
    echo "no record found";
}