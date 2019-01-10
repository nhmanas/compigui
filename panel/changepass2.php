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
<?php include('changepass2a.php') ?>
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
    </head>
     
    <body>
    <div align="center" class="transbox">
         <?php if (isset($_SESSION['successadmin'])) : ?>
			
				<h3>
					<?php 
						echo $_SESSION['successadmin']; 
						unset($_SESSION['successadmin']);
					?>
				</h3>
			
		<?php endif ?>
		<?php  if (isset($_SESSION['admin'])) : ?>
        <h1 class="text">Change password</h1>
        <p>Welcome <strong><?php echo $_SESSION['admin']; ?></strong></p>
        <form action="" method="post">
         <?php include('errors.php'); ?>
            <p class="textt">
                <label for="current_password">Your current password</label>
                <br/>
                <input type="password" name="current_password" id="current_password" />
            </p>
             
            <p class="textt">
                <label for="new_password">Your new password</label>
                <br/>
                <input type="password" name="new_password" id="new_password" />
            </p>
			<p class="textt">
                <label for="confirm_password">Confirm your new password</label>
                <br/>
                <input type="password" name="confirm_password" id="confirm_password" />
            </p>
             
            <p>
                <button type="submit" class="button" name="change_password"><span>Change Password</span></button>	
            </p>
             
        </form>
		<p> <a href="admin.php" class="button"><span>Back</span></a> </p>
		<p> <a href="index.php?logout='1'" class="button"><span>Logout</span></a> </p>
		<?php endif ?>
        <style>
   div.transbox {
	text-align: center;
	padding: 30px;
	width:360px;
    height:600px;
    margin: auto;
    background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.7;
    filter: alpha(opacity=60); 
  
}
input[type=text] {
 
 border:  3px solid black;

 
}

.textarea {

 border:  3px solid black;

 
}
input[type=password] {

 border:  3px solid black;

 
}

.textt {
	
	font-family:arial,sans-serif;
	font-size: 16px;
	color:black;
	font-weight:bold;
}

.text {
    font-family:arial,sans-serif;
    font-size:25px;
    color:black;
    font-weight:bold;
}
</style>
    </body>
</html>