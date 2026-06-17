 <?php
require_once '../includes/db.php';

$id = (int) ($_GET['id'] ?? 0);

$stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    echo "Product not found.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $stmt = $pdo->prepare("
        UPDATE products 
        SET name = ?, description = ?, price = ?, stock = ?
        WHERE id = ?
    ");

    $stmt->execute([$name, $description, $price, $stock, $id]);

    header("Location: products.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product • Velora</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<main>
<section class="section">
<div class="container">

<h1>Edit Product</h1>

<form method="POST">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required><br><br>

    <label>Description:</label><br>
    <textarea name="description" required><?php echo htmlspecialchars($product['description']); ?></textarea><br><br>

    <label>Price:</label><br>
    <input type="number" step="0.01" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required><br><br>

    <label>Stock:</label><br>
    <input type="number" name="stock" value="<?php echo htmlspecialchars($product['stock']); ?>" required><br><br>

    <button type="submit" class="btn btn-primary">Update Product</button>
</form>

<br>
<a href="products.php" class="btn btn-secondary">Back to Products</a>

</div>
</section>
</main>

</body>
</html>