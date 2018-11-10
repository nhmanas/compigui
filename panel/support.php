<?php include('supporta.php') ?>
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

	<title>Support</title>
</head>
<body>
<a href="login.php" style="color:blue;">Login</a>
-
<a href="register.php" style="color:blue;">Sign Up</a>

<div align="Center">
</br></br></br>
	<h2>Support</h2><hr>
	<p>Fill the form with your problem.(e.g. Lost my password, I can't access the program etc.)</p>
	<form method="post" action="support.php">
	<?php  if (count($s_errors) > 0) : ?>
	
		<?php foreach ($s_errors as $s_error) : ?>
			<p><?php echo $s_error ?></p>
		<?php endforeach ?>
	
	<?php  endif ?>
	<?php echo $mssg;?></br>
	Name:</br>
	<input type="text" name="s_name" size="24" ></br>
	E-mail:</br>
	<input type="email" name="s_email" size="24" ></br>
	Issue: </br>
	<select name="s_issue" >
    <option value="password">Forgot Password</option>
    <option value="access">Can't access the program</option>
    <option value="payment">Payment issues</option>
    <option value="other">Other</option>
    </select></br>
	Content:</br>
	<textarea name="s_comment" rows="10" style="overflow:auto;resize:none" cols="24"></textarea></br>
	<button type="submit" name="issue">Send</button>
	
	
	</form>
	<hr>
	</div>
	<a href="home.php" style="color:blue;">Back to Home</a>
	</body>
	</html>