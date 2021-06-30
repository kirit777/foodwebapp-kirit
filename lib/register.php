<?php
include 'conn.php'; 
					if (isset($_POST["register"])) {
						# code...
						$user_login = $_POST["user_login"];
						$user_password = $_POST["user_password"];
						$user_cpassword = $_POST["user_cpassword"];

						#check if password are same
						if ($user_password == $user_cpassword) {
							# check if user already exists
							$q = "SELECT * FROM `canteen_user` WHERE  `user_login` = '$user_login' ";
							$sel = mysqli_query($con , $q);
							if ($sel->num_rows > 0) {
								# code...
								echo '<script>alert("User Already Exists ")</script>';
								echo "<script>
										window.location.href = '../index.php';
										</script>";
							}
							else{
								$q = "INSERT INTO `canteen_user`(`user_id`, `user_login`, `user_password`) VALUES (null,'".$user_login."','".$user_password."')";
								$ins = mysqli_query($con , $q);
								if ($ins) {
									# code...
									echo '<script>alert("Registration Completed ")</script>';
									echo "<script>
										window.location.href = '../index.php';
										</script>";		
								}
								else{
									echo($ins);
								}
							}
						}
						else{
							echo '<script>alert("Password are not matched")</script>'; 
							
						}
					}
?>