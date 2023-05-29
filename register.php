<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style/rregisterstyle.css">
	<title>Registration</title>
</head>
<body>
	<?php include('errors.php'); ?>
	<div class="content">

		<div class="register-div">
			<h2>Register</h2>
		</div>

		<form method="post" action="register.php">
			
			<div class="input-group">
  			  <label>Username</label>
  			  <input type="text" name="username" value="<?php echo $username; ?>">
  			</div>
  			<div class="input-group">
  			  <label>Email</label>
  			  <input type="email" name="email" value="<?php echo $email; ?>">
  			</div>

  			<div class="input-group">
  			  <label>Pasword</label>
  			  <input type="password" name="password_1">
  			</div>

  			<div class="input-group">
  			  <label>Confirm password</label>
  			  <input type="password" name="password_2">
  			</div>

  			<div class="input-group-button">
				<button type="submit" class="btn" name="reg_user">Register</button>
  			</div>

			<div class="signbtn">
				<p>Already a member? <a href="login.php">Sign in</a></p>
			</div>
  		</form>	
	</div>
</body>
</html>