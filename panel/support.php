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
<link rel="stylesheet" type="text/css" href="style.css">

	<title>Support</title>
</head>
<body>
<a href="login.php" class="button"><span>Login</span></a>
-
<a href="register.php" class="button"><span>Sign Up</span></a>

<div align="Center">

	<h2 class="header">Support</h2><hr>
	<p class="text">Fill the form with your problem.(e.g. Lost my password, I can't access the program etc.)</p>
	<form method="post" action="support.php">
	<?php  if (count($s_errors) > 0) : ?>
	
		<?php foreach ($s_errors as $s_error) : ?>
			<p><?php echo $s_error ?></p>
		<?php endforeach ?>
	
	<?php  endif ?>
	<?php echo $mssg;?></br>
	<label class="text">Name:</label></br>
	<input type="text" name="s_name" size="24" ></br>
	<label class="text">Email:</label></br>
	<input type="email" name="s_email" size="24" ></br>
	<label class="text">Issue:</label></br>
	<select name="s_issue" class="select">
    <option value="password">Forgot Password</option>
    <option value="access">Can't access the program</option>
    <option value="payment">Payment issues</option>
    <option value="other">Other</option>
    </select></br>
	<label class="text">Content:</label></br>
	<textarea class="textarea" name="s_comment" rows="10" style="overflow:auto;resize:none" cols="24"></textarea></br>
	<button type="submit" name="issue" class="formbutton">Send</button>
	
	
	</form>
	<hr>
	</div>
	<a href="home.php" class="button"><span>Back to Home</span></a>
	</body>
	</html>