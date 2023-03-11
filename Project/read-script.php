<?php

$db = mysqli_connect('localhost', 'root', '', 'loginpage');

$fetchData= fetch_data($db);

// fetch query
function fetch_data($db){
  $query="SELECT * from vnormalusers ORDER BY id DESC";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){

    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;

  }else{
    return $row=[];
  }
}
?>
