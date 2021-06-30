<?php
session_start();
 //Checking For Session
	if ($_SESSION["admin_login"]) {
		
	}
	else
	{
		echo '<script>alert("No Valid User")</script>';
		              echo "<script>
		                window.location.href = 'index.php';
		                </script>";
	}//Checking For Session Ends
include 'conn.php';
$item_id = $_POST["item_id"];
$q = "SELECT * FROM `canteen_item` WHERE `item_id` = '$item_id' ";
	                  $result = mysqli_query($con , $q);

	                  if ($result->num_rows > 0) {
	                    // output data of each row
	                    while($row = $result->fetch_assoc()) {
	                      
	                     
	                     $item_id = $row["item_id"];
	                     $item_name = $row["item_name"];
	                     $item_price = $row["item_price"];
	                     $item_cat = $row["item_cat"];
	                     $item_details = $row["item_details"];
	                     $item_image = $row["item_image"];
	                   }
	               }
?>
<!DOCTYPE html>
<html>
<head>
	<title>CanTeen | <?php echo($item_name); ?> </title>
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
<div class="main_item_div">
	<div class="row no-gutters">
		<div class="col-lg-3 col-md-3 col-sm-10 col-12">
			<div class="img_box">
				<a href="../images/<?php echo($item_image); ?>" target="_blank"><img class="img-fluid" src="../images/<?php echo($item_image); ?>"></a>
			</div>
		</div><!--First Colom Ends--->
		<div class="col-lg-9 col-md-9 col-sm-10 col-12">
			<div class="text">
				<div class="center">
					<div>
						<h2><?php echo($item_name); ?></h2>
						<label><?php echo($item_price); ?>₹</label><hr>
						<label>Details</label><p><?php echo($item_details); ?></p>
					</div><hr>
					<div>
						<button class="btn"><?php echo($item_cat); ?></button>
					</div>
				</div>
			</div>
		</div><!--sencond Colom Ends--->
	</div>
</div>
</body>
</html>
<!--
<td><label><?php echo($item_id); ?></label></td>
		<td><label><?php echo($item_name); ?></label></td>
		<td><label><?php echo($item_price); ?></label></td>
		<td><label><?php echo($item_cat); ?></label></td>
		<td><label><?php echo($item_details); ?></label></td>
		<td><div class="img_box card-img">
			<img class="img-fluid" src="../images/<?php echo($item_image); ?>">
		</div></td> -->