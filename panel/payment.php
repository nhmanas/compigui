<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
?>
<?php include('paymenta.php') ?>
<!DOCTYPE html>
<html>
<head>
		<title>Payment</title>
</head>
<body>
		<?php  if (isset($_SESSION['username'])) : ?>
		<?php 
		$cnt=mysqli_num_rows(mysqli_query($db, "select * from selling where name='$username'"));
		if($cnt>0){ 
		echo "You have already payed.You don't need to buy again :) ";}
		?>
		<h2>Enter your credit card informations</h2>
		<form method="post" action="payment.php">
		<?php include('errors.php'); ?>
		<h3>Name:</h3>
			<input type="text" name="name"  >
		<h3>Card number:</h3>
			<input type="text" name="card1" size='4' maxlength='4' >
			<input type="text" name="card2" size='4' maxlength='4' >
			<input type="text" name="card3" size='4' maxlength='4' >
			<input type="text" name="card4" size='4' maxlength='4' >
		<h3>Validity date:</h3>
			<input type="text" name="date1" size='2' maxlength='2' >
			<input type="text" name="date2" size='4' maxlength='4' >
		<h3>CVV:</h3>
			<input type="text" name="cvv" size='3' maxlength='3' >
		</br></br>
		<button type="submit"  name="pay">Pay</button>
		<p> <a href="index.php" style="color: blue;">Back</a> </p>
		
		</form>
		<?php endif ?>
</body>
</html>