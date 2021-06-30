<?php 
session_start();
include 'conn.php';
if (isset($_POST["add_order"])) {
	# code...
	$item_id = $_POST["item_id"];
  $user_login = $_SESSION["user_login"];
  	

      $q = "INSERT INTO `canteen_orders`(`order_id`, `user_login`, `item_id`) VALUES (null,'$user_login','$item_id')";

      $insert = mysqli_query($con,$q);
        if ($insert) {
          # code...

          
          echo '<script>alert("New Order Recived ")</script>';

          echo "<script>
		window.location.href = '../home.php';
		</script>";
        }
        else{
            echo '<script>alert("Error Not Ordered")</script>';

            echo "<script>
      window.location.href = '../home.php';
      </script>"; 
        }
         
        
}

if (isset($_POST["add_cart"])) {
  # code...
  $item_id = $_POST["item_id"];
  $user_login = $_SESSION["user_login"];
    

      $q = "INSERT INTO `canteen_cart`(`cart_id`, `user_login`, `item_id`) VALUES (null,'$user_login','$item_id')";

      $insert = mysqli_query($con,$q);
        if ($insert) {
          # code...

          
          echo '<script>alert("Added To Cart ")</script>';

          echo "<script>
    window.location.href = '../home.php';
    </script>";
        }
        else{
            echo '<script>alert("Error")</script>';

            echo "<script>
      window.location.href = '../home.php';
      </script>"; 
        }
         
        
}
 ?>