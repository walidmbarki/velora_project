<?php
require_once 'config/db.php';

$id = $_GET['id'] ?? 0;

$result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
$product = mysqli_fetch_assoc($result);

if (!$product) {
    echo "Product not found.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $product['name']; ?></title>
</head>
<body>

<h1><?php echo $product['name']; ?></h1>
<p><?php echo $product['description']; ?></p>
<p>Price: $<?php echo $product['price']; ?></p>
<p>Stock: <?php echo $product['stock']; ?></p>

<a href="products.php">Back to products</a>

</body>
</html>