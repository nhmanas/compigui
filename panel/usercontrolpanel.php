<?php 
	session_start(); 

	if (!isset($_SESSION['admin'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: home.php');
	}
?>
<!DOCTYPE html>
<?php $db = mysqli_connect('45.61.159.32', 'G3i5MrhORu', 'g89aY6ueL4', 'G3i5MrhORu'); ?>
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

	<title>User Control Panel</title>
	
</head>
<body>
<form method="post" action="usercontrolpanel.php">
Enter an id if you want to delete an account:</br>
<input type="text" name="id" >
<input type="submit" name="delete" value="Delete">
<?php
if (isset($_POST['delete'])) {
$id=$_POST['id'];
echo "</br>";
$query="SELECT * FROM users where id='$id'";
$results = mysqli_query($db, $query);
if((mysqli_num_rows($results))>0){
	$delete="DELETE FROM users where id='$id'";
	$del=mysqli_query($db, $delete);
	if($del){
		echo "Successfully deleted.";
	}
	else{
		echo "Fail";
	}
}
else{
	echo "ID not found.";
}
}
?>
</br>
Enter an id if you want to promote an account as an admin:</br>
<input type="text" name="id2" >
<input type="submit" name="promote" value="Promote">
<?php
if (isset($_POST['promote'])) {
$id=$_POST['id2'];
echo "</br>";
$query="SELECT * FROM users where id='$id'";
$results = mysqli_query($db, $query);
if((mysqli_num_rows($results))>0){
	$promote="UPDATE users SET level='1' where id='$id'";
	$prom=mysqli_query($db, $promote);
	if($prom){
		echo "Successfully promoted.";
	}
	else{
		echo "Fail";
	}
}
else{
	echo "ID not found.";
}
}
?>
</form>
<p> <a href="admin.php" style="color: blue;">Back</a> </p>
<h2>User List:</h2>
<?php
	$query="SELECT * FROM users";
	$sql=mysqli_query($db,$query);
	while($pull = mysqli_fetch_array($sql)){
	extract($pull);
 
	echo "------------------------ </br>";
	echo "ID: ".$id."</br>";
	echo "Username: ".$username."</br>";
	echo "LEVEL: ".$level."</br>";
	echo "Name: ".$name."</br>";
	echo "City: ".$city."</br>";
	echo "Birthday: ".$bday."</br>";
	echo "E-mail: ".$email."</br>";
	$pay="SELECT * FROM users where username='$username' AND pay='p'";
	$pquery=mysqli_query($db,$pay);
	if((mysqli_num_rows($pquery))>0){
		echo "User paid. </br>";
	}
	else{
		echo "User didn't pay. </br>";
	}
 
}

	
?>

</body>
</html>