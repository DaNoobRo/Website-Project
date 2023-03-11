<?php

$db = mysqli_connect('localhost', 'root', '', 'loginpage');

$fetchData= fetch_data($db);
$fetchCount= fetch_Count($db);

// fetch query
function fetch_data($db){
  $query="SELECT * from vusers ORDER BY username DESC";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){

    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;

  }else{
    return $row=[];
  }
}

function fetch_Count($db){
  $query="SELECT * from existing_keys ";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){

    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;

  }else{
    return $row=[];
  }
}

?>
