<?php

$username=$_SESSION['admin'];
$errors = array();
$db = mysqli_connect('localhost', 'root', '', 'registration');

	if (isset($_POST['change_password'])) {
		$password_1 = mysqli_real_escape_string($db, $_POST['current_password']);
		$password_2 = mysqli_real_escape_string($db, $_POST['new_password']);
		$password_3 = mysqli_real_escape_string($db, $_POST['confirm_password']);
	
		if (empty($password_1)) { array_push($errors, "Password is required"); }
		if (empty($password_2)) { array_push($errors, "New password is required"); }
		if (empty($password_3)) { array_push($errors, "Password confirm is required"); }
		$password=md5($password_1);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) != 1) { array_push($errors, "Password is wrong."); }
		if ($password_2 != $password_3) {
			array_push($errors, "The two passwords do not match");
		}
		if (count($errors) == 0) {
			$password_2 = md5($password_2);
			
			$query = "UPDATE users SET password='$password_2' WHERE username='$username'";
			
			if (mysqli_query($db, $query)) {
				echo "Your password has been changed successfully";
			} else {
				echo "Error updating record: " . mysqli_error($db);
			}
		}
	}
?>