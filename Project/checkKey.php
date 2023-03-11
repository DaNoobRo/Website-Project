

<?php

session_start();

$key="";
$db = mysqli_connect('localhost', 'root', '', 'loginpage');

if (isset($_POST['admin_check'])){

  $key=mysqli_real_escape_string($db, $_POST['key']);

  $check_exists="SELECT * FROM `admin_keys` WHERE admin_keys.key='$key'";
  $result = mysqli_query($db, $check_exists);
  $admin = mysqli_fetch_assoc($result);

  if ($admin) { // if admin exists
    header('location:adminInterface.php');
  }

}

?>
