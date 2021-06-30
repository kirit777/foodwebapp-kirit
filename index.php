<?php
session_start();
include 'conn.php';
						if (isset($_POST["login"])) {
							# code...
							$user_login = $_POST["user_login"];
							$user_password = $_POST["user_password"];
							$q = "SELECT * FROM `canteen_user` WHERE  `user_login` = '$user_login' AND `user_password` = '$user_password' ";
							$sel = mysqli_query($con , $q);
							if ($sel->num_rows > 0) {
								# code...
								$_SESSION["user_login"] = $user_login;

								echo '<script>alert("Login Successfull")</script>';
								echo "<script>
								window.location.href = 'home.php';
								</script>";
							}
							else{
								echo '<script>alert("Login Details Are Incorrect")</script>';
								echo "<script>
								window.location.href = 'index.php';
								</script>";	
							}
						}
					 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
    <link rel='stylesheet' type='text/css' media='screen' href='sass/index.css'>
    <script src='main.js'></script>
</head>
<body>
<div class="main_div d-flex align-items-center justify-content-center">
	<div class="login_div">
		<h1><span>C</span>an<span>T</span>een</h1>
		<h1><span>L</span>og<span>I</span>n</h1>
		<form action="" method="post">
			<div class="items">
			<label>Username:</label><input type="text" name="user_login" placeholder="Username" class="form-control" />
			</div>
			<div class="items">
			<label>Password:</label><input type="password" name="user_password" placeholder="Password" class="form-control" />
			</div>
			<div class="items">
			<button type="submit" name="login" >Login</button>
			<button type="button" data-toggle="modal" data-target="#register"> Register</button> 
			</div>
		</form>
	</div>
</div>
<!-- The Modal REgister starts-->
  <div class="modal" id="register">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal body -->
        <form action="lib/register.php" method="post">
        <div class="modal-body">
        	<button type="button" class="close" data-dismiss="modal">&times;</button>
          	<h1><span>R</span>egister</h1>
          	<div class="items">
          		<label>Username:</label>
          		<input type="text" id="input" name="user_login"/>
          	</div>
          	<div class="items">
          		<label>Passsword:</label>
          		<input type="password"  name="user_password" />
          	</div>
          	<div class="items">
          		<label>Confirm Passsword:</label>
          		<input type="password"  name="user_cpassword" />
          	</div>
          	<div class="items">
          		<input type="submit" id="register" name="register" value="Register" />
          		<input type="button" class="close" data-dismiss="modal" value="Login" />
          	</div>
        </div>
    	</form>
      
      </div>
    </div>
  </div>
  <!-- modal REgister ends-->
</body>
</html>