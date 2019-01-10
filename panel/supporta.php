<?php 
	$mssg="";
	$s_name = "";
	$s_email= "";
	$s_errors=array();
	
	$db = mysqli_connect('sql7.freesqldatabase.com', 'sql7271816', 'vXcVpd6JZs', 'sql7271816');
	
	if(isset($_POST['issue'])){
		$s_name = mysqli_real_escape_string($db, $_POST['s_name']);
		$s_email = mysqli_real_escape_string($db, $_POST['s_email']);
		$s_issue = mysqli_real_escape_string($db, $_POST['s_issue']);
		$s_comment = mysqli_real_escape_string($db, $_POST['s_comment']);
		
		
		if (empty($s_name)) { array_push($s_errors, "Name is required"); }
		if (empty($s_email)) { array_push($s_errors, "E-mail is required"); }
		if (empty($s_issue)) { array_push($s_errors, "Issue is required"); }
		if (empty($s_comment)) { array_push($s_errors, "Please expain your issue"); }
		
		if (count($s_errors) == 0) {
			$s_querry="INSERT INTO issues (name, email, subject, msg)
					   VALUES ('$s_name', '$s_email', '$s_issue', '$s_comment')";
			if(mysqli_query($db,$s_querry))
			{
				
				$mssg="Your message successfully send.";
			}
			else
			{
				$mssg="Error";
			}
			
		}
	}
	mysqli_close($db);
	?>