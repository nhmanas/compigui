<?php 
	session_start(); 

	if (!isset($_SESSION['admin'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['admin']);
		header("location: login.php");
	}
?>
<?php include('changepass2a.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Change password</title>
    </head>
     
    <body>
         <?php if (isset($_SESSION['successadmin'])) : ?>
			
				<h3>
					<?php 
						echo $_SESSION['successadmin']; 
						unset($_SESSION['successadmin']);
					?>
				</h3>
			
		<?php endif ?>
		<?php  if (isset($_SESSION['admin'])) : ?>
        <h1>Change password</h1>
        <p>Welcome <strong><?php echo $_SESSION['admin']; ?></strong></p>
        <form action="" method="post">
         <?php include('errors.php'); ?>
            <p>
                <label for="current_password">Your current password</label>
                <br/>
                <input type="password" name="current_password" id="current_password" />
            </p>
             
            <p>
                <label for="new_password">Your new password</label>
                <br/>
                <input type="password" name="new_password" id="new_password" />
            </p>
			<p>
                <label for="confirm_password">Confirm your new password</label>
                <br/>
                <input type="password" name="confirm_password" id="confirm_password" />
            </p>
             
            <p>
                <button type="submit"  name="change_password">Change Password</button>	
            </p>
             
        </form>
		<p> <a href="admin.php" style="color: blue;">Back</a> </p>
		<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
		<?php endif ?>
         
    </body>
</html>