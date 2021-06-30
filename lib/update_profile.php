<?php
session_start();
include 'conn.php';
if (isset($_POST["update_profile"])) {
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
	$user_profile = $_FILES['user_profile']['name'];
      $target = "../images/".basename($user_profile);

	$q = "UPDATE `canteen_user` SET `user_profile`='$user_profile' WHERE `user_id` = '$user_id' ";

      $insert = mysqli_query($con,$q);
        if ($insert) {
          # code...

           move_uploaded_file($_FILES['user_profile']['tmp_name'], $target);
          echo '<script>alert("Profile Photo Updated ")</script>';

            echo "<script>
    		 window.location.href = '../my_account.php';
    		 </script>";
        }
        else{
            echo '<script>alert("Error Unable to Update Profile Photo ")</script>';

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
       <input type="file" name="user_profile" class="form-control">
       <button type="submit" class="btn btn-primary" name="update_profile">Update</button>
     </form>
   </div>
 </div>
 </body>
 </html>