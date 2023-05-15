<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/deliverystyle.css" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="/foto/icon/Icon.ico">
    <title>Delivery</title>
</head>
<body>
    <div class="content">
        <header>
            <div class="navmenu">
                <nav class="navbar">
                    <ul class="flex-container space-between">
                        <li class="flex-item"><a class="navigation" href="Desktop_Shop.php">Veikals</a></li>
                        <li class="flex-item"><a class="navigation" href="Service.php">Serviss</a></li>
                        <li class="flex-item"><a class="navigation" href="Kontakti.php">Kontakti</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="delivery-container">

            <div class="delivery-content">
                <h2>Piegāde</h2>
                <h3>Šī lapā jūs varat redzēt informāciju par mūsu piegādi.<br></h3>
                <h5>Piegādi jūs varat saņēmt , veicot pasūtījumu caur savu <a href="Cart.php" class="user-cart">grozu.</a></h5>

                <div class="delivery-partner">
                    <h3>Mūsu piegāde notiek caur mūsu piegādi un mūsu partneriem : </h3>
                </div>

                <div class="delivery-info">
                    <table class="delivery-table">
                        <tr class="table-row">
                            <td class="table-column">
                                <h2>Nosaukums</h2>
                            </td>
                            <td class="table-column">
                                <h2>Rīga</h2>
                            </td>
                            <td class="table-column">
                                <h2>Cītas pilsētas</h2>
                            </td>
                        </tr>

                        <tr>
                            <td class="table-column">
                                <h3>DShop</h3>
                            </td>
                            <td class="table-column">
                                <h3>Bezmaksas / Brīvdienos 3€</h3>
                            </td>
                            <td class="table-column">
                                <h3> 5€ / Brīvdienos 8€</h3>
                            </td>
                        </tr>

                        <tr>
                            <td class="table-column">
                                <h3>Omniva</h3>
                            </td>
                            <td class="table-column">
                                <h3>2€ / Brīvdienos nestrāda </h3>
                            </td>
                            <td class="table-column">
                                <h3>5€ / Brīvdienos nestrāda</h3>
                            </td>
                        </tr>

                        <tr>
                            <td class="table-column">
                                <h3>DPD</h3>
                            </td>
                            <td class="table-column">
                                <h3>3€ / Brīvdienos nestrāda</h3>
                            </td>
                            <td class="table-column">
                                <h3>6€ / Brīvdienos nestrāda</h3>
                            </td>
                        </tr>


                    </table>
                </div>
            </div>

        </div>
    </div>
</body>
</html>