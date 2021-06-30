<?php
session_start();
include 'conn.php';
if (isset($_POST["update_banner"])) {
	# code...
  $var = $_SESSION["user_login"];
             $q = "SELECT * FROM `canteen_user` WHERE `user_login` = '$var' ";
                    $result = mysqli_query($con , $q);

                    if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                        
                       
                       $user_id = $row["user_id"];
                     }
                   }

	/*$user_id = $_POST["user_id"];*/
	$user_banner = $_FILES['user_banner']['name'];
      $target = "../images/".basename($user_banner);

	$q = "UPDATE `canteen_user` SET `user_banner`='$user_banner' WHERE `user_id` = '$user_id' ";

      $insert = mysqli_query($con,$q);
        if ($insert) {
          # code...

           move_uploaded_file($_FILES['user_banner']['tmp_name'], $target);
          echo '<script>alert("Banner Photo Updated ")</script>';

            echo "<script>
    		 window.location.href = '../my_account.php';
    		 </script>";
        }
        else{
            echo '<script>alert("Error Unable to Update Banner Photo ")</script>';

            echo "<script>
      window.location.href = '../my_account.php';
      </script>"; 
        }

}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title>Update Profile</title>
 </head>
 <body>
 <div class="main_div">
   <div class="">
     <form action="" method="post" enctype="multipart/form-data">
       <input type="file" name="user_banner" class="form-control">
       <button type="submit" class="btn btn-primary" name="update_banner">Update</button>
     </form>
   </div>
 </div>
 </body>
 </html>