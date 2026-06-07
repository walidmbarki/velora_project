<?php
require_once '../config/db.php';

$id = $_GET['id'] ?? 0;

$result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
$product = mysqli_fetch_assoc($result);

if (!$product) {
    echo "Product not found.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $sql = "UPDATE products SET 
            name = '$name',
            description = '$description',
            price = '$price',
            stock = '$stock'
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: products.php");
        exit;
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
}
?>

<h1>Edit Product</h1>

<form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" required><?php echo $product['description']; ?></textarea><br><br>

    <label>Price:</label><br>
    <input type="number" step="0.01" name="price" value="<?php echo $product['price']; ?>" required><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock" value="<?php echo $product['stock']; ?>" required><br><br>

    <button type="submit">Update Product</button>
</form>

<br>
<a href="products.php">Back to Products</a>
