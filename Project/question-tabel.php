<?php

include('read-questions-script.php');
?>

<!--The head and style sheets used-->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Operations</title>
<link rel="stylesheet" type="text/css" href="tabelStyle.css">
<link rel="stylesheet" type="text/css" href="styleLinks.css">
</head>
<body>

<!--Tabel-->

<table border="1">
  <caption> Questions  <a href="question-tabel.php">Refresh</a></caption>
  <thead>
  <tr>
    <th>S.N</th>
    <th>Question</th>
    <th>Option</th>

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
    <td><?php echo $data['question']; ?></td>
    <td><?php echo $data['option']; ?></td>
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
