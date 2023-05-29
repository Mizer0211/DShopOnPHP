<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="style/loginstyle.css">
</head>
<body>
	<?php include('errors.php'); ?>
	<div class="content">
		<div class="register-div">
			<h2>Login</h2>
		</div>
		<form method="post" action="login.php">
			
			<div class="input-group">
  				<label>Username</label>
  				<input type="text" name="username" >
  			</div>

  			<div class="input-group">
  				<label>Password</label>
  				<input type="password" name="password">
  			</div>

  			<div class="input-group-button">
  				<button type="submit" class="btn" name="login_user">Login</button>
  			</div>
			
			<div class="signbtn">
				<p>Not yet a member? <a href="register.php">Sign up</a></p>
			</div>
  		</form>
	</div>
</body>
</html>