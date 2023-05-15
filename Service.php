<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/servicestyle.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="/foto/icon/Icon.ico">
    <title>Service</title>
</head>

<body>
    <div class="content">

        <header>
            <div class="navmenu">
                <nav class="navbar">
                    <ul class="flex-container space-between">
                        <li class="flex-item"><a class="navigation" href="Desktop_Shop.php">Veikals</a></li>
                        <li class="flex-item"><a class="navigation" href="Delivery.php">Piegade</a></li>
                        <li class="flex-item"><a class="navigation" href="Kontakti.php">Kontakti</a></li>
                        <li class="flex-item"><a class="navigation" href="Login.php">Log In</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="service-container">

            <div class="service">
                <div class="title">
                    <a><h1>Saņemt servisa pakalpojumus</h1></a>
                </div>
                <div class="write-to-service">
                    <div class="person-data">
                        <div class="person-name">
                            <label class="person-data-label">Vards :</label>
                            <input class="person-data-input" type="text" placeholder=" ">
                        </div>
                        <div class="person-email">
                            <label class="person-data-label">Email :</label>
                            <input class="person-data-input" type="text" placeholder=" ">
                        </div>
                    </div>
                    <div class="dropdown">
                        <p>Lūdzu, norādiet ar kādu tipu ierīci saistīta jūsu problēma :</p>
                        <input class="choice-input" list="choice" name="myBrowser" placeholder="Izvēle"/>
                        <datalist id="choice">
                          <option id="choice-atb" value="Datoru">
                          <option value="Monitoru">
                          <option value="Datoru perifēriju">
                          <option value="Programmatūru">
                        </datalist>
                    </div>
                </div>
                <div class="write-about">
                    <h3 class="write-about-text">Please, write about your problem :</h3>
                    <textarea type="text" class="about-problem" placeholder="..."></textarea>
                </div>
                <div class="sumbit-div-content">
                    <div class="sumbit-div">
                        <a class="sumbit-button" >Sūtīt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>