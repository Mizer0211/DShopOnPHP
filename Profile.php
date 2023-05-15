<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
    unset($_SESSION['email']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/pprofilestyle.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="/foto/icon/Icon.ico">
    <title>Profile</title>
</head>
<body>
    <div class="content">
            <header>
                <div class="navmenu">
                    <nav class="navbar">
                        <ul class="flex-container space-between">
                            <li class="flex-item"><a class="navigation" href="Desktop_Shop.php">Veikals</a></li>
                            <li class="flex-item"><a class="navigation" href="Service.php">Serviss</a></li>
                            <li class="flex-item"><a class="navigation" href="Delivery.php">Piegade</a></li>
                            <li class="flex-item"><a class="navigation" href="Kontakti.php">Kontakti</a></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <div class="sucesscontent">
                <!-- notification message -->
  	            <?php if (isset($_SESSION['success'])) : ?>
                    <div class="error success" >
                        <h3>
                            <?php echo $_SESSION['success']; unset($_SESSION['success']);?>
      	                </h3>
                    </div>
  	            <?php endif ?>
            </div>

            <div class="profile-container">
                <div class="welcome">
                    <!-- logged user information -->
                    <?php  if (isset($_SESSION['username'])) : ?>
                        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <?php endif ?>
                </div>
                <div class="title">
                    <h1>Your Profile</h1>
                </div>
                <div class="user-info-container">
                    <div class="user-info">
                        <div class="user-logo-view">
                            <img class="profile-logo" src="foto/user-logo-test.jpeg" alt="Avatar">
                        </div>
                        <div class="user-info-text">
                            <p>Name : <?php echo $_SESSION['username']; ?></p>
                            <p>Email : Sanjok60660@gmail.com </p>
                            <div class="btnchoicer">
                                <div class="changepasswordbtn">
                                    <button class="change-password" type="button">
                                        <a href="#">Change password</a>
                                    </button>
                                </div>
                                <?php  if (isset($_SESSION['username'])) : ?>
                                    <button class="logout-btn" type="button"><a href="login.php?logout='1'">Logout</a></button>
                                <?php endif ?>          
                            </div>

                        </div>

                    </div>
                </div>
            </div>
    </div>

</body>
</html>