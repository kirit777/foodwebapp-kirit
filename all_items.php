<div class="main_div">
	<h1><span>A</span>ll <span>I</span>tems</h1>
<table >
	<tr>
		<td><label>Item Id</label></td>
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
						 $q = "SELECT * FROM `canteen_item`";
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
	                   
	                  
?>

	<tr>
		<td><label><?php echo($item_id); ?></label></td>
		<td><label><?php echo($item_name); ?></label></td>
		<td><label><?php echo($item_price); ?></label></td>
		<td><label><?php echo($item_cat); ?></label></td>
		<td><label><?php echo($item_details); ?></label></td>
		<td><div class="img_box card-img">
			<img class="img-fluid" src="images/<?php echo($item_image); ?>">
		</div></td>
		<td>
			<form action="item.php" method="post"><input hidden="true" type="text" name="item_id" value="<?php echo($item_id); ?>"><button type="submit" name="view" class="btn btn-info">View</button></form>
		</td>
		<td>
			<form action="lib/add_order.php" method="post"><input hidden="true" type="text" name="item_id" value="<?php echo($item_id); ?>"><button type="submit" name="add_order" class="btn btn-success">Order Now</button></form>

			<form action="lib/add_order.php" method="post"><input hidden="true" type="text" name="item_id" value="<?php echo($item_id); ?>"><button type="submit" name="add_cart" class="btn btn-danger">Add To Cart</button></form>
		</td>


	</tr>
	<?php
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