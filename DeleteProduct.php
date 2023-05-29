<?php include('server.php');

$db = mysqli_connect('localhost', 'root', '', 'desktopshop');

$id = $_GET['id'];
echo $id;
$sql = "DELETE FROM product WHERE product_id='$id'";

if (mysqli_query($db, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
}
header("Location: AddProduct.php");

?>
