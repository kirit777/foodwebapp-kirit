<?php
session_start();
include 'conn.php';
if (isset($_POST["update_acc"])) {
	# code...
	$user_id = $_POST["user_id"];
	$user_login = $_POST["user_login"];
	$user_password = $_POST["user_password"];
	$user_email = $_POST["user_email"];
	$user_contact = $_POST["user_contact"];
	$user_gender = $_POST["user_gender"];
	$user_birthday = $_POST["user_birthday"];

	$q = "UPDATE `canteen_user` SET `user_login`='$user_login',`user_password`='$user_password',`user_email`='$user_email',`user_contact`='$user_contact',`user_gender`='$user_gender',`user_birthday`='$user_birthday' WHERE `user_id` = '$user_id' ";

      $insert = mysqli_query($con,$q);
        if ($insert) {
          # code...

          
          echo '<script>alert("Account Updated ")</script>';

          echo "<script>
		window.location.href = '../my_account.php';
		</script>";
        }
        else{
            echo '<script>alert("Error Unable to Update  ")</script>';

            echo "<script>
      window.location.href = '../my_account.php';
      </script>"; 
        }

}
 ?>