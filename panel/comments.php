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

	<title>Comments</title>
</head>
<body>
<div align="center" class="transbox">
<form method="post" action="comments.php">
Enter a comment if you answered it or if it is invalid:</br>
<input type="text" name="c_id" >
<input type="submit" class="buttonn" name="c_delete" value="Delete">
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
<p> <a href="admin.php" class="button"><span>Back</span></a> </p>
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

	mysqli_close($db);
?>

<style>
   div.transbox {
	text-align: center;
	padding: 30px;
	width:350px;
    height:562px;
    margin: auto;
    background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.7;
    filter: alpha(opacity=60); 
  
}

.buttonn {
	background-color: black;
    border: none;
    color: red;
    padding: 8px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
	cursor: pointer;
	border-radius: 14px;
	font-family:arial,sans-serif;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	</style>

</body>
</html>