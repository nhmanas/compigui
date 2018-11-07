<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
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
</body>
</html>