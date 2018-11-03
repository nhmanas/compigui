<?php
$username=$_SESSION['username'];
$errors = array();
$db = mysqli_connect('sql300.epizy.com', 'epiz_22938615', 'qpo4FvYLjz', 'epiz_22938615_registration');

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
		$cnt=mysqli_num_rows(mysqli_query($db, "select * from selling where name='$username'"));
		if($cnt>0){ array_push($errors, "You have already payed."); }
		
		if (count($errors) == 0) {
			$pay='p';
			
			$query="INSERT INTO selling (name, pay)
					VALUES('$username', '$pay')";
			$payed=mysqli_query($db, $query);
			if($payed){
				echo "Payment has been done successfully";
			}
			else{
				echo "Failed.";
			}
					
		}
	}
?>