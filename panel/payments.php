<?php 
	session_start(); 

	if (!isset($_SESSION['admin'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<?php $db = mysqli_connect('localhost', 'root', '', 'registration'); ?>
<html>
<head>
	<title>Payments</title>
	
</head>
<body>



<p> <a href="admin.php" style="color: blue;">Back</a> </p>
<?php 
	$i=0;
	$query="SELECT * FROM selling";
	$sql=mysqli_query($db,$query);
	while($pull = mysqli_fetch_array($sql)){
	extract($pull);
	$i++;}
	$salary=$i*70;
	echo "Total salary =".$salary. "TL"; ?>
<h2>Paid User List:</h2>
<?php
	
	$query="SELECT * FROM selling";
	$sql=mysqli_query($db,$query);
	while($pull = mysqli_fetch_array($sql)){
	extract($pull);
	$pay="SELECT * FROM users where username='$name'";
	$pquery=mysqli_query($db,$pay);
	
	while($pull = mysqli_fetch_array($pquery)){
	extract($pull);
	echo "------------------------ </br>";
	echo "ID: ".$id."</br>";
	echo "Username: ".$username."</br>";
	echo "Name: ".$name."</br>";
	echo "City: ".$city."</br>";
	echo "Birthday: ".$bday."</br>";
	echo "E-mail: ".$email."</br>";
	}
	
	
 
}

	
?>

</body>
</html>