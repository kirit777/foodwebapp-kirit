<h1><span>P</span>izzas</h1>	
<div class="main_div  d-flex">

<?php 
	include 'conn.php';
		               $item_cat = "Pizza";
						 $q = "SELECT * FROM `canteen_item` WHERE `item_cat` = '$item_cat' ";
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

	<div class="card p_card">
		<div class="card-header">
			<h2><?php echo($item_name); ?></h2>
		</div>
		<div class="card-body">
			<div class="img_box card-img">
				<img class="img-fluid" src="images/<?php echo($item_image); ?>">
			</div>
			<label><?php echo($item_price); ?>₹</label>
			<p><?php echo($item_details); ?></p>
		</div>
		<div class="card-footer">
			<form action="item.php" method="post"><input hidden="true" type="text" name="item_id" value="<?php echo($item_id); ?>"><button type="submit" name="view" class="btn btn-info">View</button></form>

			<form action="lib/add_order.php" method="post"><input hidden="true" type="text" name="item_id" value="<?php echo($item_id); ?>"><button type="submit" name="add_order" class="btn btn-success">Order Now</button></form>
		</div>
	</div>

	<?php
			}
		}
	?>
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