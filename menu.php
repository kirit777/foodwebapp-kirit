<?php
session_start();
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
include 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>CanTeen | Menu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
    <link rel='stylesheet' type='text/css' media='screen' href='sass/main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='sass/footer.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='sass/home.css?v=<?php echo time(); ?>'>
    <script src='main.js'></script>
</head>
<body>
<header><?php include 'header.php'; ?></header>
<div>
	<?php include 'lib/filter.php'; ?>
</div>
<footer><?php include 'footer.php'; ?></footer>
</body>
</html>