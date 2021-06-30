<?php
session_start();
include 'conn.php';
 //Checking For Session
	if ($_SESSION["user_login"]) {
		
	}
	else
	{
		echo '<script>alert("No Valid User")</script>';
		              echo "<script>
		                window.location.href = 'index.php';
		                </script>";
	}//Checking For Session Ends
					/*account Info Starts*/
					$var = $_SESSION["user_login"];
						 $q = "SELECT * FROM `canteen_user` WHERE `user_login` = '$var' ";
	                  $result = mysqli_query($con , $q);

	                  if ($result->num_rows > 0) {
	                    // output data of each row
	                    while($row = $result->fetch_assoc()) {
	                      
	                     
	                     $user_id = $row["user_id"];
	                     $user_login = $row["user_login"];
	                     $user_password = $row["user_password"];
	                     $user_email = $row["user_email"];
	                     $user_contact = $row["user_contact"];
	                     $user_gender = $row["user_gender"];
	                     $user_birthday = $row["user_birthday"];
	                     $user_profile = $row["user_profile"];
	                     $user_banner = $row["user_banner"];
	                     
	                    }
	                 }/*account Info ends*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>CanTeen | My Account </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
        <link rel='stylesheet' type='text/css' media='screen' href='sass/home.css?v=<?php echo time(); ?>'>
    <link rel='stylesheet' type='text/css' media='screen' href='sass/header.css?v=<?php echo time(); ?>'>
    <script src='main.js'></script>
</head>
<body>
<header><?php include 'header.php'; ?></header>
<section>
	<div class="main_div_account">
	<div class="banner_image">
				<a href="lib/update_banner.php"><img src="images/<?php echo($user_banner); ?>" class="img-fluid"></a>
			</div>
			<div class="profile_image">
				<div id="center_div">
					<a href="lib/update_profile.php"><img src="images/<?php echo($user_profile); ?>" class="img-fluid"></a>
				</div>
			</div>
	<div class="row no-gutters">
		<div class="col-lg-2 col-md-2 col-sm-10 col-12">
			
			
		</div><!--First Colom Ends--->
		<div class="col-lg-10 col-md-10 col-sm-10 col-12">
			<div class="add_item">
				<h1><span>A</span>ccount <span>I</span>nfo</h1>
				<form action="lib/update_acc.php" method="post" enctype="multipart/form-data">
					<input type="text" hidden name="user_id" placeholder="user_id" class="form-control" value="<?php echo($user_id); ?>" />
				<input type="text" name="user_login" placeholder="user_login" class="form-control" value="<?php echo($user_login); ?>" />

				<input type="text" name="user_password" placeholder="user_password" class="form-control" value="<?php echo($user_password); ?>" />

				<input type="text" name="user_email" placeholder="user_email" class="form-control" value="<?php echo($user_email); ?>" />

				<input type="text" name="user_contact" placeholder="user_contact" class="form-control" value="<?php echo($user_contact); ?>" />

				<select name="user_gender" class="form-control">
					<option><?php echo($user_gender); ?></option>
					<option>Male</option>
					<option>Female</option>
				</select>
				

				<input type="text" name="user_birthday" placeholder="user_birthday" class="form-control" value="<?php echo($user_birthday); ?>" />

				<button type="submit" name="update_acc">Update</button>
				</form>
			</div>
		</div><!--sencond Colom Ends--->
	</div>
</div>
</section>
<section>
	<!--<footer><?php include 'footer.php'; ?></footer> -->
</section>
</body>
</html>