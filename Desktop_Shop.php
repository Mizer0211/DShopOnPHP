<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="/foto/icon/Icon.ico">
    <title>Desktop Shop</title>
</head>
<body>
    <div class="content">
        <header>
            <div class="navmenu">
                <nav class="navbar">
                    <ul class="flex-container space-between"> 
                        <li class="flex-item"><a class="navigation" href="Service.php">Serviss</a></li>
                        <li class="flex-item"><a class="navigation" href="Delivery.php">Piegade</a></li>
                        <li class="flex-item"><a class="navigation" href="Kontakti.php">Kontakti</a></li>
                        <li class="flex-item">
                            <div class="logind">
                                <a class="login" href="Login.php">Log In</a>
                            </div>
                        </li>
                        <li class="dropdown-item">
                            <div class="dropdown">
                                <button class="dropbtn">
                                    <img src="foto/user-logo-test.jpeg" class="dropdown-image">
                                    <div class="dropdown-content">
                                        <a href="Profile.php">Profile</a>
                                        <a href="Cart.php">Groza</a>
                                        <?php  if (isset($_SESSION['username'])) : ?>
                                            <a href="login.php?logout='1'">Logout</a>
                                        <?php endif ?>  
                                    </div>
                                </button>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="lgse">
            <div class="searchdiv">
                <input class="search-input" type="text" placeholder="Search">
                <div class="sumbit_div">
                    <a class="sumbit_a" href="#">
                        <image class="searchph" src="foto/atb/search.svg"></image>
                    </a>
                </div>
            </div>
        </div>


        <div class="productgroup">


            <div class="dproduct">
                <img class="components" src="foto/atb/component.png">
                <h2><a class="attxt" href="#">Komponentes</a></h2>
            </div>


            <div class="dproduct">
                <img class="monitor" src="foto/atb/monitor.png">
                <h2><a class="attxt" href="#">Monitori</a></h2>
            </div>


            <div class="dproduct">
                <img class="mouse" src="foto/atb/mouse.png">
                <h2 class="ptxt"><a class="attxt" href="Mouse.php">Peles</a></h2>
            </div>


            <div class="dproduct">
                <img class="keyboard" src="foto/atb/keyboard.png">
                <h2 class="ktxt"><a class="attxt" href="#">Klaviaturas</a></h2>
            </div>


            <div class="dproduct">
                <img class="headphones" src="foto/atb/headphones.png">
                <h2 class="atxt"><a class="attxt" href="#">Austinas</a></h2>
            </div>



        </div>
    </div>
</body>
    

</html>