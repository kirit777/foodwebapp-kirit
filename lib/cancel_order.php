<?php
include 'conn.php'; 
if (isset($_POST["cancel_order"])) {
  $order_id = $_POST["order_id"];
  $order_status = "Canceled";
  # code...
  $q = "UPDATE `canteen_orders` SET `order_status`='$order_status' WHERE `order_id` = '$order_id' ";

      $insert = mysqli_query($con,$q);
        if ($insert) {
          # code...

         
          echo '<script>alert("Order Canceled")</script>';

          echo "<script>
    window.location.href = '../my_orders.php';
    </script>";
        }
        else{
            echo '<script>alert("Error Order Can not Be Cancel")</script>';

            echo "<script>
      window.location.href = '../my_orders.php';
      </script>"; 
        }
}
if (isset($_POST["remove_cart"])) {
  $cart_id = $_POST["cart_id"];
  # code...
  $q = "DELETE FROM `canteen_cart` WHERE `cart_id` = '$cart_id' ";

      $insert = mysqli_query($con,$q);
        if ($insert) {
          # code...

         
          echo '<script>alert("Item Removed From Cart")</script>';

          echo "<script>
    window.location.href = '../my_cart.php';
    </script>";
        }
        else{
            echo '<script>alert("Error Unable To Remove Item From Cart")</script>';

            echo "<script>
      window.location.href = '../my_cart.php';
      </script>"; 
        }
}
?>