<?php
include 'conn.php';
if (isset($_POST["delete_item"])) {
  $item_id = $_POST["item_id"];
  # code...
  $q = "DELETE FROM `canteen_item` WHERE `item_id` = '$item_id' ";

      $insert = mysqli_query($con,$q);
        if ($insert) {
          # code...

         
          echo '<script>alert("Item Deleted")</script>';

          echo "<script>
    window.location.href = '../food_item.php';
    </script>";
        }
        else{
            echo '<script>alert("Error Food Item Not Deleted")</script>';

            echo "<script>
      window.location.href = '../food_item.php';
      </script>"; 
        }
}
if (isset($_POST["edit_item"])) {
	# code...
  $item_id = $_POST["item_id"];
	$item_name = $_POST["item_name"];
	$item_price = $_POST["item_price"];
  $item_cat = $_POST["item_cat"];
  $item_details = $_POST["item_details"];
	$item_image = $_FILES['item_image']['name'];
      $target = "../../images/".basename($item_image);

      $q = "UPDATE `canteen_item` SET `item_name`='$item_name',`item_price`='$item_price',`item_cat`='$item_cat',`item_details`='$item_details',`item_image`='$item_image' WHERE `item_id` = '$item_id' ";

      $insert = mysqli_query($con,$q);
        if ($insert) {
          # code...

          move_uploaded_file($_FILES['item_image']['tmp_name'], $target);
          echo '<script>alert("Item Updated")</script>';

          echo "<script>
		window.location.href = '../food_item.php';
		</script>";
        }
        else{
            echo '<script>alert("Error Food Item Not Updated")</script>';

            echo "<script>
      window.location.href = '../food_item.php';
      </script>"; 
        }
         
        
}
 ?>