<?php include('server.php');

$db = mysqli_connect('localhost', 'root', '', 'desktopshop');

$id=$_GET['id'];
$sql = "SELECT * FROM product WHERE product_id='$id'";

$result = mysqli_query($db, $sql)->fetch_assoc();


if (isset($_POST['edit_product'])) {
    $title = mysqli_real_escape_string($db, $_POST['edit_title']);
    $category = mysqli_real_escape_string($db, $_POST['edit_category']);
    $specification = mysqli_real_escape_string($db, $_POST['edit_specification']);
    $price = mysqli_real_escape_string($db, $_POST['edit_price']);
  

    if (empty($title)) { array_push($errors, "Title is required"); }
    if (empty($category)) { array_push($errors, "Category is required"); }
    if (empty($specification)) { array_push($errors, "Specification is required"); }
    if (empty($price)) { array_push($errors, "Price is required"); }

    if (count($errors) == 0) {
      $category =strtolower($category);
      $query = "UPDATE product SET title='$title', category='$category', specification='$specification', price='$price' WHERE product_id='$id'";
      mysqli_query($db, $query);
    }
    header("Location: AddProduct.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/EditProductstyle.css">
    <title>Edit Product</title>
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

        <div class="edit-container">
            <div class="form-container">
                <form method="post">
                    <div class="product-name-container">
                        <label for="fname">Preces nosaukums</label><br>
                        <input type="text" name="edit_title" value="<?php echo $result['title'];?>"><br>
                    </div>
                    <div class="product-category-container">
                        <label for="lname">Preces kategorija</label><br>
                        <input type="text" name="edit_category" value="<?php echo $result['category'];?>"><br>
                    </div>
                    <div class="product-specification-container">
                        <label for="lname">Preces apraksts</label><br>
                        <input type="text" name="edit_specification" value="<?php echo $result['specification'];?>"><br>  
                    </div>
                    <div class="product-price-container">
                        <label for="lname">Preces cena</label><br>
                        <input type="text" name="edit_price" value="<?php echo $result['price'];?>"><br><br>
                    </div>
                    <div class="edit-button-container">
                        <button class="edit_button"><a href="AddProduct.php">Cancel</a></button>
                        <button type="submit" class="edit_button" name="edit_product">Edit Product</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</body>
</html>