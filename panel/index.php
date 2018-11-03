<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<?php $db = mysqli_connect('sql300.epizy.com', 'epiz_22938615', 'qpo4FvYLjz', 'epiz_22938615_registration'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
</head>
<body>
	
		<h2>Home Page</h2>
	
	

		
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
		$cnt=mysqli_num_rows(mysqli_query($db, "select * from selling where name='$username'"));
		if($cnt>0){ 
		echo "You have access to program. Your payment has been done. ";}
		?>
			<p> <a href="payment.php" style="color: blue;">Payment</a> </p>
			<p> <a href="changepass1.php" style="color: blue;">Change your password</a> </p>
			<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
		<?php endif ?>
	
		
</body>
</html>