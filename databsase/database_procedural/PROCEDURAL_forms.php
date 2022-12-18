<?php
$id = $_POST['id'];
$username = $_POST['uname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$connection_details = mysqli_connect("localhost", "root", "", "paper");
if (!$connection_details) {
  die("Connection failed: " . mysqli_connect_error());
}
// insert--------------------------------------------------
if (isset($_POST['save'])) {
  $sql = "INSERT into forms(id,uname,contact,email) VALUES ('$id','$username','$contact','$email')";
  if (mysqli_query($connection_details, $sql)) {
    echo "<script>alert('new record inserted')</script>";
    // header("location:forms.html");
  }
}
// print-----------------------------------
if (isset($_POST['display'])) {
  $display_query = "SELECT * FROM forms ";
  $result = mysqli_query($connection_details, $display_query);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo $row["id"] . "  Name: " . $row["uname"] . " " . $row["contact"] . " " . $row["email"] . " " . "<br>";
      // header("location:forms.html");
    }
  } else {
    echo "0 results";
  }
}
// update-------------------------------------------------------------------------
if (isset($_POST['update'])) {
  $sql = "UPDATE forms SET uname='$username',contact='$contact',email='$email' WHERE id='$id'";
  if (mysqli_query($connection_details, $sql)) {
    echo "updated";
  }
}
// delete-----------------------------------------------------------------------------
if (isset($_POST['delete'])) {
  $delete = "DELETE FROM forms WHERE id='$id'";
  if (mysqli_query($connection_details, $delete)) {
    echo "Data deleted from table succesfully";
  } else {
    echo "data can not be deleted";
  }
}
?>