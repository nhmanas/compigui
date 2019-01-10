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
<?php include('changepass1a.php') ?>
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

        <title>Change password</title>
        <style>
            div.transbox {
	text-align: center;
	padding: 30px;
	width:320px;
   height:915px;
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

h2 {
    font-family:arial,sans-serif;
	font-weight:bold;
	font-size: 30px;
	color: black;
  -webkit-text-fill-color: white; 
  -webkit-text-stroke-width: 2px;
  -webkit-text-stroke-color: black;
}

p{
    font-family:arial,sans-serif;
	font-size: 16px;
	color:black;
	font-weight:bold;

}

input[type=password] {
 
 border:  3px solid black;
 width:250px;

 
}

.textarea {

 border:  3px solid black;

 
}
input[type=email] {

 border:  3px solid black;

 
}

 </style>
    </head>
     
    <body>
        <div align="center" class="transbox"> 
         <?php if (isset($_SESSION['success'])) : ?>
			
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			
		<?php endif ?>
		<?php  if (isset($_SESSION['username'])) : ?>
		<p ><h2>Welcome to your account settings <strong><?php echo $_SESSION['username']; ?></strong></h2></p>
        <hr>
		<h3>Change password</h3>
        
        <form action="" method="post">
         <?php include('errors.php'); ?>
            <p>
                <label for="current_password">Your current password:</label>
                <br/>
                <input type="password" name="current_password" id="current_password" />
            </p>
             
            <p>
                <label for="new_password">Your new password:</label>
                <br/>
                <input type="password" name="new_password" id="new_password" />
            </p>
			<p>
                <label for="confirm_password">Confirm your new password:</label>
                <br/>
                <input type="password" name="confirm_password" id="confirm_password" />
            </p>
             
            <p>
                <button type="submit"  name="change_password">Change Password:</button>	
            </p>
			<hr>
             <h3>Delete your account</h3>
			 <?php  if (count($errors2) > 0) : ?>
	
		<?php foreach ($errors2 as $error2) : ?>
			<p><?php echo $error2 ?></p>
		<?php endforeach ?>
	
<?php  endif ?>
			  <p>
                <label for="current_password">Your current password:</label>
                <br/>
                <input type="password" name="current_password2" id="current_password2" />
				<p>
                <button type="submit" class="button" name="deleteacc"><span>Delete</span></button>	
            </p>
            </p>
			 
        </form>
		<hr>
		
		
		<p> <a href="index.php" class="button"><span>Back</span></a> </p>
		<p> <a href="index.php?logout='1'" class="button"><span>Logout</span></a> </p>
		<?php endif ?>
         
		<a href="contact.php" style="color:gray;" target="_blank">Contact Us</a>
-
<a href="news.php" style="color:gray; " target="_blank">Latest News</a>
-
<a href="support.php" style="color:gray;" target="_blank">Support</a>
<h5 style=color:red;>
Copyright © 2018 KompiCompany. All rights reserved.
</h5>
    </body>
</html>