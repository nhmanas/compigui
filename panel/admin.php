<?php 
	session_start(); 

	if (!isset($_SESSION['admin'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['admin']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
</head>
<body>
	
		<h2>Admin Panel</h2>
	
	

		
		<?php if (isset($_SESSION['successadmin'])) : ?>
			
				<h3>
					<?php 
						echo $_SESSION['successadmin']; 
						unset($_SESSION['successadmin']);
					?>
				</h3>
			
		<?php endif ?>

		
		<?php  if (isset($_SESSION['admin'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['admin']; ?></strong></p>
			
			<p>This page is not available now.</p>
			<p> <a href="admin.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	
		
</body>
</html>