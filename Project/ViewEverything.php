
<?php

include('View_All.php');
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Operations</title>
<link rel="stylesheet" type="text/css" href="tabelStyle.css">
<link rel="stylesheet" type="text/css" href="styleLinks.css">
</head>

<table border="1">
  <caption> All Users , Admin Keys :

    <?php
        foreach($fetchCount as $da){
          echo $da['nrofkeys'];
        }
    ?>

  </caption>
  <thead>
  <tr>
    <th>S.N</th>
    <th>username</th>
    <th>mail</th>

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
    <td><?php echo $data['value']; ?></td>
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


</body>
</html>
