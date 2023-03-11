<?php

include('read-script.php');
?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Operations</title>
<link rel="stylesheet" type="text/css" href="tabelStyle.css">
<link rel="stylesheet" type="text/css" href="styleLinks.css">
</head>
<body>


<div class="table-data">

<table border="1">
  <caption> Users  <a href="user-tabel.php">Refresh</a></caption>
  <thead>
  <tr>
    <th>S.N</th>
    <th>Username</th>
    <th>Email Address</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
</thead>
<tbody>

  <?php
    if(count($fetchData)>0){
    $sn=1;
    foreach($fetchData as $data){

  ?>
  <tr>
    <td><?php echo $sn; ?></td>
    <td><?php echo $data['username']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><a href="update-form.php?edit=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete-script.php?delete=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>

  <?php
    $sn++; }
    }else{
  ?>
  <tr>
    <td colspan="7">No Data Found</td>
  </tr>
  <?php
    }
    ?>
  </tbody>
</table>
</div>

</body>
</html>
