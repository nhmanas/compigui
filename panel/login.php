<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Kompi Family</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" >
<style>
.video-container {
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  width: 100%;
  height: 100%; 
  overflow: hidden;
}
.video-container video {
  
  min-width: 100%; 
  min-height: 100%; 

  
  width: auto;
  height: auto;


  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
div.transbox {
	text-align: center;
	padding: 30px;
	width:250px;
  height:220px;
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
<div class="video-container">
<video autoplay muted loop >
  <source src="https://raw.githubusercontent.com/nhmanas/compigui/master/bg.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
</div>



</br></br></br></br>
	<div align="center" class="transbox"> 
<font ><h2>Login</h2></font>
		<form method="get" action="login.php">
		<?php include('errors.php'); ?>

			<font ="white">Username:</font></br>
			<input type="text" name="username" ></br>
			<font >Password:</font></br>
			<input type="password" name="password"></br>
			<button type="submit"  name="login_user">Login</button>		
		<p>
			<font >Not yet a member?</font></br> <a href="register.php">Sign up</a>
			</br>
		</p>
		<link rel="stylesheet" type="text/css" href="login.css" />
	</form>
	</div>	
</body>
</html>