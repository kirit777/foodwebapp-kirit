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
	<title>CanTeen | Edit | <?php echo($item_name); ?> </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
    <link rel='stylesheet' type='text/css' media='screen' href='sass/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='sass/footer.css'>
    <script src='main.js'></script>
</head>
<body>
<header><?php include 'header.php'; ?></header>
<form action="lib/edit_item.php" method="post" enctype="multipart/form-data">
<div class="main_div">
	<div class="row no-gutters">
		<div class="col-lg-3 col-md-3 col-sm-10 col-12">
			<div class="img_box">
				<img class="img-fluid" src="../images/<?php echo($item_image); ?>">
				<input type="file" name="item_image" class="form-control">
			</div>
		</div><!--First Colom Ends--->
		<div class="col-lg-9 col-md-9 col-sm-10 col-12">
			<div>
				<input type="text" name="item_id" hidden="true" value="<?php echo($item_id); ?>" >
				<h2>Name :</h2><input type="text" name="item_name" value="<?php echo($item_name); ?>" class="form-control">
				<input type="text" name="item_price" value="<?php echo($item_price); ?>" class="form-control"><hr>
				<label>Details</label><textarea name="item_details" class="form-control"><?php echo($item_details); ?></textarea>
			</div><hr>
			<div>
				<input type="text" name="item_cat" value="<?php echo($item_cat); ?>" class="form-control">
			</div>
			<hr>
			<div>
				<button name="edit_item" class="btn btn-success" type="submit">Update</button>
			</div>
		</div><!--sencond Colom Ends--->
	</div>
</div>
</form>
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