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

	<title>Welcome to Kompi Family</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" >
<style>
body{
	background-color:black;
}
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
.text {
	font-family:arial,sans-serif;
	font-size: 16px;
	color:black;
	font-weight:bold;

}
input[type=text] {
 
 border:  3px solid black;

 
}
input[type=password] {
 
 border:  3px solid black;

 
}
div.transbox {
	text-align: center;
	padding: 30px;
	width:250px;
  height:320px;
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
.header {
	font-family:arial,sans-serif;
	font-weight:bold;
	font-size: 40px;
	color: black;
  -webkit-text-fill-color: white; /* Will override color (regardless of order) */
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: black;
}
</style>
</head>
<body>
<div class="video-container">
<video autoplay muted loop >
  <source src="https://raw.githubusercontent.com/nhmanas/compigui/master/bg.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
</div>



</br></br></br></br></br>
	<div align="center" class="transbox"> 
<font ><h2 class="header">Login</h2></font>
		<form method="post" action="login.php">
		<?php include('errors.php'); ?>

			<label class="text">Username:</label></br>
			<input type="text" name="username" ></br>
			<label class="text">Password:</label></br>
			<input type="password" name="password"></br>
			<button type="submit"  name="login_user" class="formbutton">Login</button>		
		<p>
			<font >Not yet a member?</font></br> <a href="register.php">Sign up</a>
			</br>
		</p>
		<link rel="stylesheet" type="text/css" href="login.css" />
	</form>
	</div>	
	</br></br></br></br>
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