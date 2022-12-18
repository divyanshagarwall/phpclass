<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $connection_details = mysqli_connect('localhost', 'root', '', 'testdb');
    if (isset($_POST['save'])) {
        $fname = $_POST['fname'];
        $femail = $_POST['sname'];
        $in_query = "INSERT INTO testtab(fname,femail) VALUES('$fname','$femail')";
        if (mysqli_query($connection_details, $in_query)) {
            echo "<h2 style=color:Green>RegistrationSuccessfull!!</h2>";
            header("refresh:3,url=data.php");
        } else {
            echo "<h2 style=color:red>Unable to register!!</h2>";
            header("refresh:3,url=data.php");
        }
    }
    if (isset($_POST['display'])) {
        $dis_query = "SELECT * FROM testtab";
        $result = mysqli_query($connection_details, $dis_query);
        if (mysqli_num_rows($result) > 0) {
            echo "<table>
<tr><th>Id</th><th>FirstName</th><th>Email</th></tr>";
            while ($data = mysqli_fetch_assoc($result)) {
                echo "<form action=data.php method= post><tr>";
                echo "<td><input type=text name=new_id value= '$data[id]' readonly></td>";
                echo "<td><input type=text name=new_fname value= '$data[fname]'></td>";
                echo "<td><input type=text name=new_femail value= '$data[femail]'></td>";
                echo "<td><input type=submit name =update value = update></td>";
                echo "<td><input type=submit name =delete value = delete></td></tr></form>";
            }
        } else {
            echo "<h2 style=color:red>No record found!!</h2>";
            header("refresh:3,url=data.php");
        }
    }
    if (isset($_POST['update'])) {
        $new_id = $_POST['new_id'];
        $new_fname = $_POST['new_fname'];
        $new_email = $_POST['new_femail'];
        $up_query = "UPDATE testtab SET fname ='$new_fname', femail = '$new_email' WHERE id = '$new_id'";
        if (mysqli_query($connection_details, $up_query)) {
            echo "<h2 style=color:green>1 record updated!!</h2>";
            header("refresh:3,url=data.php");
        } else {
            echo "<h2 style=color:red>Unable to update!!</h2>";
            header("refresh:3,url=data.php");
        }
    }
}
?>

<body>
    <form action="data.php" method="POST">
        <input type=text name=new_id value='$data[id]'>
        <input type=text name=new_fname value='$data[fname]'>
        <input type=text name=new_femail value='$data[femail]'>
        <input type=submit name=update value=update>
        <input type=submit name=delete value=delete>
    </form>
</body>