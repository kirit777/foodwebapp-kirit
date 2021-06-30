<?php
include 'conn.php';
if (isset($_POST["status"])) {
	# code...
	$order_status = $_POST["order_status"];
	$order_id = $_POST["order_id"];
	
	$q = "UPDATE `canteen_orders` SET `order_status`='$order_status' WHERE `order_id` = '$order_id' ";

      $insert = mysqli_query($con,$q);
        if ($insert) {
          # code...

         
          echo '<script>alert("Order Status Updated")</script>';

          echo "<script>
    window.location.href = '../orders.php';
    </script>";
        }
        else{
            echo '<script>alert("Error Order Status Can not Be Updated")</script>';

            echo "<script>
      window.location.href = '../orders.php';
      </script>"; 
        }
}
if (isset($_POST["cancel_order"])) {
  $order_id = $_POST["order_id"];
  # code...
  $q = "DELETE FROM `canteen_orders` WHERE  `order_id` = '$order_id' ";

      $insert = mysqli_query($con,$q);
        if ($insert) {
          # code...

         
          echo '<script>alert("Order Canceled")</script>';

          echo "<script>
    window.location.href = '../orders.php';
    </script>";
        }
        else{
            echo '<script>alert("Error Order Can not Be Cancel")</script>';

            echo "<script>
      window.location.href = '../orders.php';
      </script>"; 
        }
}