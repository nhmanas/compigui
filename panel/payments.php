<?php 
	session_start(); 

	if (!isset($_SESSION['admin'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: home.php');
	}
?>
<!DOCTYPE html>
<?php $db = mysqli_connect('sql7.freesqldatabase.com', 'sql7271816', 'vXcVpd6JZs', 'sql7271816');
 ?>
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

	<title>Payments</title>
	
</head>
<body>

<div align="center" class="transbox">



<p> <a href="admin.php" class="button"><span>Back</span></a> </p>
<?php 
	$i=0;
	$query="SELECT * FROM users where pay='p'";
	$sql=mysqli_query($db,$query);
	while($pull = mysqli_fetch_array($sql)){
	extract($pull);
	$i++;}
	$salary=$i*70;
	echo "Total salary =".$salary. "TL"; ?>
<h2 class="textt">Paid User List</h2>
<?php
	
	$query="SELECT * FROM users where pay='p'";
	$sql=mysqli_query($db,$query);
	while($pull = mysqli_fetch_array($sql)){
	extract($pull);
	$pay="SELECT * FROM users where username='$username'";
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

	mysqli_close($db);
?>

<style>
   div.transbox {
	text-align: center;
	padding: 30px;
	width:360px;
    height:670px;
    margin: auto;
    background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.7;
    filter: alpha(opacity=60); 
  
}

.textt {
	
	font-family:arial,sans-serif;
	font-size: 25px;
	color:black;
	font-weight:bold;
}
	</style>

</body>
</html>