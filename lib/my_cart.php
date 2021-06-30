<?php 
//session_start();
?>
<div class="main_div">
	<h2>My Orders</h2>
<table >
	<tr>
		
		<td><label> Name</label></td>
		<td><label> Price</label></td>
		<td><label> Category</label></td>
		<td><label>Details</label></td>
		<td><label>Image</label></td>
		
		<td><label>Edit</label></td>
		<td><label>Delete</label></td>
	</tr>
<?php 
	include 'conn.php';
					$user_login = $_SESSION["user_login"];
						$q = "SELECT * FROM `canteen_cart` WHERE  `user_login` = '$user_login' ";
	                  $result = mysqli_query($con , $q);

	                  if ($result->num_rows > 0) {
	                    // output data of each row
	                    while($row = $result->fetch_assoc()) {
	                      
	                     
	                     $cart_id = $row["cart_id"];
	                     $item_id = $row["item_id"];
	                     


						 $q = "SELECT * FROM `canteen_item` WHERE  `item_id` = '$item_id' ";
	                  $result1 = mysqli_query($con , $q);

	                  if ($result1->num_rows > 0) {
	                    // output data of each row
	                    while($row = $result1->fetch_assoc()) {
	                      
	                     
	                     $item_id = $row["item_id"];
	                     $item_name = $row["item_name"];
	                     $item_price = $row["item_price"];
	                     $item_cat = $row["item_cat"];
	                     $item_details = $row["item_details"];
	                     $item_image = $row["item_image"];
	                   
	                  		
?>

	<tr>
		
		<td><label><?php echo($item_name); ?></label></td>
		<td><label><?php echo($item_price); ?></label></td>
		<td><label><?php echo($item_cat); ?></label></td>
		<td><label><?php echo($item_details); ?></label></td>
		<td><div class="img_box card-img">
			<img class="img-fluid" src="images/<?php echo($item_image); ?>">
		</div></td>
		
		<td>
			<form action="lib/add_order.php" method="post"><input hidden="true" type="text" name="item_id" value="<?php echo($item_id); ?>"><button type="submit" name="add_order" class="btn btn-success">Order Now</button></form>
		</td>
		<td>
			<form action="lib/cancel_order.php" method="post"><input hidden="true" type="text" name="cart_id" value="<?php echo($cart_id); ?>"><button type="submit" name="remove_cart" class="btn btn-success">Remove</button></form></td>	
	</tr>
	<?php
					}
				}
			}
		}
	?>
</table>
</div>

<!--
<div class="container border border-danger">
	<h2><?php echo($item_name); ?></h2>
	<h2><?php echo($item_price); ?></h2>
	<h2><?php echo($item_cat); ?></h2>
	<p><?php echo($item_details); ?></p>
	<div>
		<img src="../images/<?php echo($item_image); ?>">
	</div>
</div>	-->