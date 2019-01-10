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
<link rel="stylesheet" type="text/css" href="style.css">

	<title>Become a member of Kompi</title>
	<style>
	div.transbox {
	text-align: center;
	padding: 30px;
	width:250px;
  height:665px;
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
}

.text {
	font-family:arial,sans-serif;
	font-size: 16px;
	color:black;
	font-weight:bold;

}

.textt {
	font-family:arial,sans-serif;
	font-size:15px;
	color:red;
	font-weight:bold;
}

.formbutton {
	background-color: black;
    border: none;
    color: red;
    padding: 8px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 13px;
    margin: 3px 1px;
	cursor: pointer;
	border-radius: 14px;
	font-family:arial,sans-serif;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);


}

input[type=textt] {
 
 border:  3px solid black;
}
input[type=password] {
 
 border:  3px solid black;
}

input[type=date] {
	border: 3px solid black;
	width:170px;

}
</style>
</head>
<body>
	<div align="center" class="transbox"> 
	
		<font><h2 class="header">Register</h2></font>
	
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		
			<label class="text">Username:</label></br>
			<input type="text" name="username" ></br>
			<label class="text">Your name:</label></br>
			<input type="text" name="name" ></br>
			<label class="text">City:</label></br>
			<input type="text" name="city" ></br>
			
		    <label class="text">Date of Birth:</label></br>
			<input type="date" name="bday"></br>
		
			<label class="text">Email:</label></br>
			<input type="email" name="email"></br>
		
		
			<label class="text">Password:</label></br>
			<input type="password" name="password_1"></br>
		
		
			<label class="text">Confirm password:</label></br>
			<input type="password" name="password_2"></br>
		
			<label class="textt"><input type="checkbox" name="news"/> I want to know latest news about Kompi.</label></br>
			<button type="submit" class="formbutton" name="reg_user">Register</button>
		
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
<h5 style="color:white;"> </br>
Copyright © 2018 KompiCompany. All rights reserved.
</h5>
</body>
</html>