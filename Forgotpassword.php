<?php require_once 'server.php';
 
if (isset($_REQUEST['doGo'])) {
    if ($_REQUEST['email']) {
        $email = $_REQUEST['email'];
        $hash = md5($email . time());
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n";
        $headers .= "To: <$email>\r\n";
        $headers .= "From: <mail@example.com>\r\n";
        $message = '
                <html>
                <head>
                <title>Подтвердите Email</title>
                </head>
                <body>
                <p>Что бы восстановить пароль перейдите по <a href="http://example.com/newpass.php?hash=' . $hash . '">ссылка</a></p>
                </body>
                </html>
                ';
        mysqli_query($db, "UPDATE `users` SET hash='$hash' WHERE user_email='$email'");
        if (mail($email, "Восстановление пароля через Email", $message, $headers)) {
            echo 'Ссылка для восстановления пароля отправленная на вашу почту';
        } else {
            echo 'Произошла какая то ошибка, письмо отправилось';
        }
    } else {
        echo "Вы не ввели Email"; 
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
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
        <p>Введите ваш EMail: <input type="email" name="email"></p>
        <p><input type="submit" value="Отправить" name="doGo"></p>
    </form>

</body>
</html>
