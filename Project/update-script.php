<?php

$db = mysqli_connect('localhost', 'root', '', 'loginpage');


if(isset($_GET['edit'])){

    $id= $_GET['edit'];
  $editData= edit_data($db, $id);
}

if(isset($_POST['update']) && isset($_GET['edit'])){

  $id= $_GET['edit'];
    update_data($db,$id);


}
function edit_data($db, $id)
{
 $query= "SELECT * FROM users WHERE id= $id";
 $exec = mysqli_query($db, $query);
 $row= mysqli_fetch_assoc($exec);
 return $row;
}

// update data query
function update_data($db, $id){

    $username= legal_input($_POST['username']);
      $email_address= legal_input($_POST['email_address']);


      $query="UPDATE users
            SET username='$username',
                email='$email_address'
               WHERE id=$id";

      $exec= mysqli_query($db,$query);

      if($exec){
         header('location:user-tabel.php');

      }else{
         $msg= "Error: " . $query . "<br>" . mysqli_error($db);
         echo $msg;
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
