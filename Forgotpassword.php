<?php require "server.php";
$db = $_POST;

if(isset($db['forgot'])){
	$username = R::findOne('users', 'email = ?', array($db['email']));
	if($username){
		$key = md5($username->login.rand(1000, 9999));
		$username->change_key = $key;
		R::store($username);

		$url = $site_url.'newpass.php?key='.$key;
		$message = $username->user_name.", был выполнен запрос на изминение пароля \n\n ДЛя прейди по ссылку ".$url."\n Esli eto bili ne vi, to sovetuem vam izmenit parol";

		mail($db['email'], 'Podverdi dejstvie', $message);
		header('location:/Profile.php');

	}
    else {
		echo "Dannij email ne zaregan";
	}

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/forgotpassword.css">
    <title>Forgot password</title>
</head>
<body>
    <div>
        <form action="/forgotpassword.php" method="post">
            <h1>Zabili parol?</h1>
            <input type="user_email" name="user_email" placeholder="Email"><br>
            <button type="submit" name="forgot">Otprav pismo</button>
        </form>
    </div>
</body>
</html>