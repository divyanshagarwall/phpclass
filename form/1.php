<html>

<head></head>
<?php
if (isset($_POST['save'])) {
    $uname = $_POST['uname'];
    $umail_data = $_POST['eml'];
    $connection_details = new mysqli('localhost', 'root','', 'mysectionk');

    if (!$connection_details) {
        echo "failed";
    }
    $insert_query = "INSERT INTO mytabk(name , mail_data) VALUES ('$uname','$umail_data')";
    if ($connection_details->query($insert_query)) {
        echo "Done";
    } else {
    }
}
?>

<body>
    <form action="" method="post">
        <input type="text" name="uname"><br>
        <input type="text" name="eml"><br>
        <input type="submit" name="save" value="save">
    </form>
</body>

</html>