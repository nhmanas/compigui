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
<link rel="stylesheet" type="text/css" href="style.css">
	<title>Admin Panel</title>
	
</head>
<body>

<<div align="center" class="transbox">
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
			<p> <a href="comments.php" class="button"><span>Read the comments</span></a> </p>
			<p> <a href="usercontrolpanel.php" class="button"><span>User control panel</span></a> </p>
			<p> <a href="https://cpanel.epizy.com/" class="button" target="_blank"><span>C-Panel</span></a> </p>
			<p> <a href="payments.php" class="button"><span>Payments</span></a> </p>
			<p> <a href="changepass2.php" class="button"><span>Change your password</span></a> </p>
			<p> <a href="admin.php?logout='1'" class="button"><span>Logout</span></a> </p>
		<?php endif ?>
		<style>
   div.transbox {
	text-align: center;
	padding: 30px;
	width:350px;
    height:562px;
    margin: auto;
    background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.7;
    filter: alpha(opacity=60); 
  
}
	</style>
	
		
</body>
</html>