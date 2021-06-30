<?php
session_start();
include 'conn.php';
						if (isset($_POST["login"])) {
							# code...
							$user_login = $_POST["user_login"];
							$user_password = $_POST["user_password"];
							$q = "SELECT * FROM `canteen_admin` WHERE  `admin_login` = '$user_login' AND `admin_password` = '$user_password' ";
							$sel = mysqli_query($con , $q);
							if ($sel->num_rows > 0) {
								# code...
								$_SESSION["admin_login"] = $user_login;

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
	
    <link rel='stylesheet' type='text/css' media='screen' href='sass/index.css?v=<?php echo time(); ?>'>
    <script src='main.js'></script>
</head>
<body>
<div class="main_div d-flex align-items-center justify-content-center">
	<div class="login_div">
		<h1><span>L</span>ogin</h1>
		<form action="" method="post">
			<div class="items">
				<input type="text" name="user_login" placeholder="Username" class="form-control" />
			</div>
			<div class="items">
				<input type="passeord" name="user_password" placeholder="Password" class="form-control" />
			</div>
			<div class="items">
			<button type="submit" name="login">Login</button>
			</div>
		</form>
	</div>
</div>
</body>
</html>