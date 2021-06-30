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
?>
<!DOCTYPE html>
<html>
<head>
	<title>CanTeen | Food Items </title>
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
<div class="main_div">
	<div class="row no-gutters">
		<div class="col-lg-2 col-md-2 col-sm-10 col-12">
			<div class="add_item">
				<h2><span>A</span>dd New <span>F</span>ood Item</h2>
				<form action="lib/add_item.php" method="post" enctype="multipart/form-data">
				<input type="text" name="item_name" placeholder="Item Name" class="form-control" />
				<input type="text" name="item_price" placeholder="Item Price" class="form-control" />
				<input type="text" name="item_cat" placeholder="Item Category" class="form-control" />
				<textarea name="item_details" placeholder="Item Details" class="form-control"></textarea>
				<input type="file" name="item_image" class="form-control" />
				<button type="submit" name="add_item">Add</button>
				</form>
			</div>
		</div><!--First Colom Ends--->
		<div class="col-lg-10 col-md-10 col-sm-10 col-12">
			<?php include 'all_item.php'; ?>
		</div><!--sencond Colom Ends--->
	</div>
</div>
</body>
</html>