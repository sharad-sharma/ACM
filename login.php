<?php
 $host="localhost";
 $user= "root";
 $password="";
 $db="demo";
 $conn = mysqli_connect($host,$user,$password,$db);
// mysql_select_db($db);
  if(isset($_POST['username'])){
    $uname= $_POST['username'];
    $password=$_POST['password'];
    $sql= "select * from loginform where user='".$uname."'AND pass='".$password."'";
    $result=mysqli_query($conn, 
    	$sql);
    if(mysqli_num_rows($result)==1)
    {
    	 header("Location: http://localhost/login/notify/send_msg.php");
    	exit();
    }
    else{
    	echo "Try correct username and password";
    	exit();
    }
  }


?>


<!DOCtype.html>
<html>
	<head>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		 <style>
      #count{
  border-radius:50%;
}

    </style>
		<title>login page</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		
<div class="w3-container">

  <div class="w3-card-4" style="width:50%;margin-left:400px;margin-top:100px;">
    <header class="w3-container w3-blue">
      <h1>Login Page</h1>
    </header>

    <div class="w3-container">
      <div id="frm">
			<form action="#" method="POST">
				<p>
					<label>Username:</label>
					<input type="text" id="user" name="username"/>
				</p>
				<p>
					<label>Password:</label>
					<input type="password" id="pass" name="password"/>
				</p>
				<p>
					
					<a href="send_msg.php"><input type="submit" id="btn" value="login"/></a>
				</p>
			
		</div>
    </div>

   
</div>
	</body>
</html>
