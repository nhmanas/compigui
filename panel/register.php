<?php include('server.php') ?>
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

	<title>Become a member of Kompi</title>
	<style>
	div.transbox {
	text-align: center;
	padding: 30px;
	width:250px;
  height:500px;
  margin: auto;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.7;
  filter: alpha(opacity=60); 
  
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
</style>
</head>
<body>
	<div align="center" class="transbox"> 
	<!--<link rel="stylesheet" type="text/css" href="login.css" />-->
		<h2>Register</h2>
	
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		
			Username:</br>
			<input type="text" name="username" ></br>
			Your name:</br>
			<input type="text" name="name" ></br>
			City:</br>
			<input type="text" name="city" ></br>
			
		    Date of Birth: </br>
			<input type="date" name="bday"></br>
		
			Email:</br>
			<input type="email" name="email"></br>
		
		
			Password:</br>
			<input type="password" name="password_1"></br>
		
		
			Confirm password:</br>
			<input type="password" name="password_2"></br>
		
			<label><input type="checkbox" name="news"/> I want to know latest news about Kompi.</label></br>
			<button type="submit" class="btn" name="reg_user">Register</button>
		
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
		
	</form>
	</div>
	
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