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
<?php $db = mysqli_connect('45.61.159.32', 'G3i5MrhORu', 'g89aY6ueL4', 'G3i5MrhORu'); ?>
<html>
<head>
	<title>Comments</title>
</head>
<body>
<form method="post" action="comments.php">
Enter a comment if you answered it or if it is invalid:</br>
<input type="text" name="c_id" >
<input type="submit" name="c_delete" value="Delete">
<?php
if (isset($_POST['c_delete'])) {
$c_id = $_POST['c_id'];
echo "</br>";
$c_query="SELECT * FROM issues where id='$c_id'";
$c_results = mysqli_query($db, $c_query);
if((mysqli_num_rows($c_results))>0){
	$c_delete="DELETE FROM issues where id='$c_id'";
	$c_del=mysqli_query($db, $c_delete);
	if($c_del){
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
<p> <a href="admin.php" style="color: blue;">Back</a> </p>
<h2>Message List:</h2>
<?php
	$query="SELECT * FROM issues";
	$sql=mysqli_query($db,$query);
	while($pull = mysqli_fetch_array($sql)){
	extract($pull);
 
	echo "------------------------ </br>";
	echo "ID: ".$id."</br>";
	echo "Name: ".$name."</br>";
	echo "E-mail: ".$email."</br>";
	echo "Subject: ".$subject."</br>";
	echo "Message: ".$msg."</br>";
	
	
 
}

	
?>

</body>
</html>