<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  
    <link rel='stylesheet' type='text/css' media='screen' href='sass/header.css'>
    <script src='main.js'></script>
</head>
<nav class="navbar navbar-expand-lg">
        <div class="logo">
        	<a class="navbar-brand" id="a" href="#" onclick="ap()"><i class="fa fa-cutlery " aria-hidden="true">CanTeen</i></a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Nave" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></span>
        </button>
      
        <div class="collapse navbar-collapse" id="Nave">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active" title="Home">
              <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
             <li class="nav-item" title="My Account">
              <?php 
              $user_login = $_SESSION["user_login"];
              $q = "SELECT * FROM `canteen_user` WHERE `user_login` = '$user_login' ";
                    $result = mysqli_query($con , $q);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        
                       
                       $user_id = $row["user_id"];
                       $user_profile = $row["user_profile"];
                     }
                   }
            ?>
              <div id="img_box"><a class="nav-link" href="my_account.php"><img src="images/<?php echo($user_profile); ?>" class="img-fluid"></a></div>
            </li>
            <li class="nav-item" title="My Orders">
              <a class="nav-link" href="my_orders.php">My Orders</a>
            </li>
            <li class="nav-item" title="Menu">
                <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item" title="My Cart">
                <a class="nav-link" href="my_cart.php"><i class="fa fa-shopping-cart "></i></a>
            </li>
            <li class="nav-item" title="Log Out">
                <a class="nav-link" href="logout.php">LogOut</a>
            </li>
          </ul>
        </div>
      </nav>