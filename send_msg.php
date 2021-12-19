<?php
include_once 'connection.php';
if(isset($_POST['send']))
{
	$name= $_POST['name'];
	$msg=  $_POST['msg'];
	$date= date('y-m-d h:i:s');
	$sql_insert =mysqli_query($con,"INSERT INTO message(name,message,cr_date) VALUES ('$name','$msg','$date')");
	// if($sql_insert)
	// {
	// 	echo "<script>alert('message sent successfully');</script>";
	// }
	// else
	// {
	// 	echo mysqli_error($con);
	// 	exit; 
	}
 mysqli_close($con);

?>
<!DOCTYPE.html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
	  // if($sql_insert)
	// {
	// 	echo "<script>alert('message sent successfully');</script>";
	// }
	// else
	// {
	// 	echo mysqli_error($con);
	// 	exit; 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    <title></title>

  <style>
    .left,
    .right {
        top: 50%;
        float: left;
        transform: translateY(125%);
    }

    .left {
        background: #337ab7;
        display: inline-block;
        white-space: nowrap;
        width: 50px;
        transition: width .5s;
    }

    .right {
        background: #fff;
        width: 350px;
        transition: width 1s;
        border-style: solid;
        border-color: #ccc;
        border-width: 1px;
    }

    .left:hover {
        width: 250px;
    }

    .item:hover {
        background-color: #222;
    }

    .left .fas {
        margin: 15px;
        width: 20px;
        color: #fff;
    }

    i.fas {
        font-size: 17px;
        vertical-align: middle !important;
    }

    .item {
        height: 50px;
        overflow: hidden;
        color: #fff;
    }
    .vl {
  border-left: 6px solid green;
  height: 500px;
  position: absolute;
  left: 50%;
  margin-left: -3px;
  top: 0;
}

</style>
  </head>
  <body>
  

     <div class="container" >
    	<div class="row v1">
    		<div class="col-md-6 v1" style="">
        <div class="left" style="float:left;">
    <div class="item">
        <i class="fas fa-fw fa-bars"></i>
    </div>
    <div class="item active" id="notifications">
        <i class="fas fa-bell"></i> Notifications
    </div>
    <div class="item">
        <i class="fas fa-calendar-plus"></i>About Events
    </div>
    
</div>  
        </div>
        <br>
    		<div class="col-md-6 v1">
    			<!-- <form method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    
  </div>
   
   <div class="form-group">
    <label for="exampleFormControlTextarea1"> Enter message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>
  
   <button type="submit" name="send" class="btn btn-primary">Submit</button>
</form>  -->
<div class="w3-container">
  
  <div class="w3-card-4" style="width:70%;margin-top: 20%;margin-right:40%%;">
    <header class="w3-container w3-blue">
      <h1>Notificaton Filling</h1>
    </header>
    <br><br>

    <div class="w3-container">
      <form method="POST">
  <div class="form-group">    
    <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">    
  </div>
  <br>   
   <div class="form-group">
    <textarea placeholder="Enter Message" class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
  </div>
  <br>   <button type="submit" name="send" class="btn btn-primary">ADD</button> 
   <button type="delete"  name="delete" class="btn btn-primary"><a href="read_msg.php" style="color:white; text-decoration: none;"> delete</a></button>   
</form> 
    </div>
    <br>

   
  </div>
</div>

    		</div>
    		
    	</div>
    </div>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
