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
<?php $db = mysqli_connect('sql7.freesqldatabase.com', 'sql7271816', 'vXcVpd6JZs', 'sql7271816');
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

	<title>Home</title>
	
</head>
<body>
        <div align="center" class="transbox">
		<h2 class="header">Home Page</h2>
	
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
			<p class="header">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
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
		
		<p class="text"> <a href="https://github.com/nhmanas/compigui" class="button"><span>Download</span></a> </p>
		<hr>
		<?php endif ?>
		
			<p class="text"> <a href="payment.php" class="button"><span>Payment</span></a> </p>
			<p class="text"> <a href="changepass1.php" class="button"><span>Account Settings</span></a> </p>
			<p class="text"> <a href="index.php?logout='1'" class="button"><span>Logout</span></a> </p>
		<?php endif ?>
		
	<br><br>
		<a href="contact.php" style="color:gray;" target="_blank">Contact Us</a>
-
<a href="news.php" style="color:gray; " target="_blank">Latest News</a>
-
<a href="support.php" style="color:gray;" target="_blank">Support</a>
<h5 style="color:red;"><br><br>
Copyright © 2018 KompiCompany. All rights reserved.
</h5>
<?php mysqli_close($db); ?>
<style>
   div.transbox {
	text-align: center;
	padding: 30px;
	width:350px;
    height:730px;
    margin: auto;
    background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.7;
    filter: alpha(opacity=60); 
  
}
	</style>
</body>
</html>