<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: home.php');
	}
?>
<?php include('paymenta.php') ?>
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

		<title>Payment</title>
</head>
<body>
        <div align="center" class="transbox"> 
			
		<?php  if (isset($_SESSION['username'])) : ?>
		<?php 
		$db = mysqli_connect('sql7.freesqldatabase.com', 'sql7271816', 'vXcVpd6JZs', 'sql7271816');
		$cnt=mysqli_num_rows(mysqli_query($db, "select * from users where username='$username' AND pay='p'"));
		if($cnt>0){ 
		echo "You have already payed.You don't need to buy again :) ";}
		?>
		<h2 class="headerr">Enter your credit card informations</h2>
		<form method="post" action="payment.php">
		<?php include('errors.php'); ?>
		<h3 class="textt">Name:</h3>
			<input type="text" name="name"  >
		<h3 class="textt">Card number:</h3>
			<input type="text" name="card1" size='4' maxlength='4' >
			<input type="text" name="card2" size='4' maxlength='4' >
			<input type="text" name="card3" size='4' maxlength='4' >
			<input type="text" name="card4" size='4' maxlength='4' >
		<h3 class="textt">Validity date:</h3>
			<input type="text" name="date1" size='2' maxlength='2' >
			<input type="text" name="date2" size='4' maxlength='4' >
		<h3 class="textt">CVV:</h3>
			<input type="text" name="cvv" size='3' maxlength='3' >
		</br></br>
		<p class="textt" style="color:gold;">Only 70 TL</p>
		<button type="submit" class="button" name="pay">Pay</button>
		<p> <a href="index.php" class="button"><span>Back</span></a> </p>
		
		</form>
		<?php endif ?>
		</br></br>
		<a href="contact.php" style="color:gray;" target="_blank">Contact Us</a>
-
<a href="news.php" style="color:gray; " target="_blank">Latest News</a>
-
<a href="support.php" style="color:gray;" target="_blank">Support</a>
<h5 style="color:gold;"><br><br>
Copyright © 2018 KompiCompany. All rights reserved.
</h5>
<?php mysqli_close($db) ?>
<style>
	.headerr {
		font-family:arial,sans-serif;
	    font-weight:bold;
	    font-size: 35px;
	    color:black;
        -webkit-text-fill-color: white;
        -webkit-text-stroke-width: 2px;
        -webkit-text-stroke-color: black;
	}

	div.transbox {
	text-align: center;
	padding: 30px;
	width:400px;
    height:970px;
    margin: auto;
    background-color: #ffffff;
    border: 1px solid black;
    opacity: 0.7;
    filter: alpha(opacity=60); 
  
}
.textt {
	font-family:arial,sans-serif;
	font-size:20px;
	color:black;
	font-weight:bold;
}
	</style>
</body>
</html>