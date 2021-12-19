<?php
include_once 'connection.php';
 
 
  if(isset($_GET['id']))
  {
    $delete_id =$_GET['id'];
    $sql_delete=mysqli_query($con,"DELETE FROM message  WHERE id='$delete_id'");
    if($sql_delete)
    {
      header('location : C:\xampp1\htdocs\login\notify\delete.php');
    }
    else{
      echo mysqli_error($con);
    }
  }


  ?>

