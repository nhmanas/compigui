<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: home.php');
	}
	

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: home.php");
	}

?>
<?php $db = mysqli_connect('45.61.159.32', 'G3i5MrhORu', 'g89aY6ueL4', 'G3i5MrhORu'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	
</head>
<body>
	
		<h2>Home Page</h2>
	
	<hr>

		
		<?php if (isset($_SESSION['success'])) : ?>
			
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			
		<?php endif ?>

		
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<?php 
			$username=$_SESSION['username'];
		$cnt=mysqli_num_rows(mysqli_query($db, "select * from users where username='$username' AND pay='p'"));
		if($cnt>0){ 
		echo "You have access to program. Your payment has been done. </br>";
		$_SESSION['successpay'] = "You can download now.";
		}
		?>
		<?php if(isset($_SESSION['successpay'])): ?>
		<hr>
		<h4>
					<?php 
						echo $_SESSION['successpay']; 
					?>
				</h4>
		
		<p> <a href="download.php" style="color: blue;">Download</a> </p>
		<hr>
		<?php endif ?>
		
			<p> <a href="payment.php" style="color: blue;">Payment</a> </p>
			<p> <a href="changepass1.php" style="color: blue;">Account Settings</a> </p>
			<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
		<?php endif ?>
		
	</br></br></br>
		<a href="contact.php" style="color:gray;" target="_blank">Contact Us</a>
-
<a href="news.php" style="color:gray; " target="_blank">Latest News</a>
-
<a href="support.php" style="color:gray;" target="_blank">Support</a>
<h5>
Copyright © 2018 KompiCompany. All rights reserved.
</h5>
</body>
</html>