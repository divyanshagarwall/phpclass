<html>

<head></head>
<?php
if (isset($_POST['save'])) {
    $name = $_POST['uname'];
    $mail_data = $_POST['eml'];
    $connection_details = new mysqli('localhost', 'root', '', 'mysectionk');

    if (!$connection_details) {
        echo "failed";
    }
    $insert_query = "Insert INTO mytabk(usernam,email_add) VALUE('$name','$mail_data')";
    if ($connection_details->query($insert_query)) {
    } else {
    }
}
?>

<body>
    <form>
        <input type="text" name="uname"><br>
        <input type="text" name="eml"><br>
        <input type="submit" name="save" value="save">
    </form>
</body>

</html>