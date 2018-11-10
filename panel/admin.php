<?php 
	session_start(); 

	if (!isset($_SESSION['admin'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: home.php');
	}
	

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['admin']);
		header("location: home.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129052302-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129052302-1');
</script>
	<title>Admin Panel</title>
	
</head>
<body>


		<h2>Admin Panel</h2>
	<hr>
	

		
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
			
			<h4>You can control everything here.</h4>
			<p> <a href="comments.php" style="color: blue;">Read the comments</a> </p>
			<p> <a href="usercontrolpanel.php" style="color: blue;">User control panel</a> </p>
			<p> <a href="https://cpanel.epizy.com/" style="color: blue;" target="_blank">C-Panel</a> </p>
			<p> <a href="payments.php" style="color: blue;">Payments</a> </p>
			<p> <a href="changepass2.php" style="color: blue;">Change your password</a> </p>
			<p> <a href="admin.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	
		
</body>
</html>