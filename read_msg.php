<?php
include_once 'connection.php';
 ?>
 <?php
  if(isset($_GET['id']))
  {
    $main_id =$_GET['id'];
    $sql_update=mysqli_query($con,"UPDATE message SET status=1 WHERE id='$main_id'");
  }


  ?>


<!DOCTYPE.html>
 

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" >
    <title>Hello, world!</title>
  </head>
  <body>
    <!--start of the nav bar-->
    
  </button>
<div class="container">
  <div class="row">
    <table class="table" style="margin-top: 10%;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sr. No.</th>
      <th scope="col">Name</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $sr_no =1;
    $sql_get = mysqli_query($con ,"SELECT * FROM message where status=0") ;
     while($main_result = mysqli_fetch_assoc($sql_get)) :

    ?>
    <tr>
      <th scope="row"><?php echo $sr_no++ ?></th>
      <td><?php echo $main_result['name']; ?></td>
      <td><?php echo $main_result['message']; ?></td>
      <td><?php echo $main_result['cr_date']; ?></td>
      <td><a href="delete.php?id=<?php echo $main_result['id'];?>" class="text-danger"><i class="fa fa-trash"></i></a></td>
    </tr>
    <tr>
 <?php 
 endwhile
  ?>
  </tbody>
</table>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
