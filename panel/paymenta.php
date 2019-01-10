<?php
$username=$_SESSION['username'];
$errors = array();
$db = mysqli_connect('sql7.freesqldatabase.com', 'sql7271816', 'vXcVpd6JZs', 'sql7271816');

	if (isset($_POST['pay'])) {
		$card1=$_POST['card1'];
		$card2=$_POST['card2'];
		$card3=$_POST['card3'];
		$card4=$_POST['card4'];
		$card="$card1$card2$card3$card4";
		$date1=$_POST['date1'];
		$date2=$_POST['date2'];
		$cvv=$_POST['cvv'];
		$name=$_POST['name'];
		$date="$date1$date2";
		
		if ((empty($card1))||(empty($card2))||(empty($card3))||(empty($card4))) { array_push($errors, "Invalid card number."); }
		if (empty($name)) { array_push($errors, "Name is required"); }
		if ((empty($date1))||(empty($date2))) { array_push($errors, "Invalid date"); }
		if (empty($cvv)) { array_push($errors, "Invalid cvv"); }
		$result=ctype_digit($card);
		if(!$result){array_push($errors, "Card number must be only numbers."); }
		$result1=ctype_digit($cvv);
		if(!$result1){array_push($errors, "Cvv must be only numbers."); }
		$result2=ctype_digit($date);
		if(!$result2){array_push($errors, "Date must be only numbers."); }
		$cnt=mysqli_num_rows(mysqli_query($db, "select * from users where username='$username' AND pay='p'"));
		if($cnt>0){ array_push($errors, "You have already payed."); }
		
		if (count($errors) == 0) {
			$pay='p';
			
			$queryp="UPDATE users SET pay='p' WHERE username='$username'";
			$payed=mysqli_query($db, $queryp);
			if($payed){
				echo "Payment has been done successfully";
				header('location: index.php');
			}
			else{
				echo "Failed.";
			}
					
		}
	}
	mysqli_close($db);
?>