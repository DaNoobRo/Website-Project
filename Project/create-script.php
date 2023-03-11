<?php

$db = mysqli_connect('localhost', 'root', '', 'loginpage');


if(isset($_POST['create'])){

      $msg=insert_data($db);

}

// insert query
function insert_data($db){

      $username= legal_input($_POST['username']);
      $email_address= legal_input($_POST['email_address']);
      $pass= md5(legal_input($_POST['pass']));


      $query="INSERT INTO users (username,email,password) VALUES ('$username','$email_address','$pass')";
      $exec= mysqli_query($db,$query);
      if($exec){

        $msg="Data was created sucessfully";
        return $msg;

      }else{
        $msg= "Error: " . $query . "<br>" . mysqli_error($db);
      }
}

// convert illegal input to legal input
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;
}
?>
