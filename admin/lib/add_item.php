<?php
include 'conn.php';
if (isset($_POST["add_item"])) {
	# code...
	$item_name = $_POST["item_name"];
	$item_price = $_POST["item_price"];
  $item_cat = $_POST["item_cat"];
  $item_details = $_POST["item_details"];
	$item_image = $_FILES['item_image']['name'];
      $target = "../../images/".basename($item_image);

      $q = "INSERT INTO `canteen_item`(`item_id`, `item_name`, `item_price`, `item_cat`, `item_details`, `item_image`) VALUES (null,'$item_name','$item_price','$item_cat','$item_details','$item_image')";

      $insert = mysqli_query($con,$q);
        if ($insert) {
          # code...

          move_uploaded_file($_FILES['item_image']['tmp_name'], $target);
          echo '<script>alert("New Item Added ")</script>';

          echo "<script>
		window.location.href = '../food_item.php';
		</script>";
        }
        else{
            echo '<script>alert("Error Food Item Not Added ")</script>';

            echo "<script>
      window.location.href = '../food_item.php';
      </script>"; 
        }
         
        
}
 ?>