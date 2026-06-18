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
    $image = $_POST['image'];

    $stmt = $pdo->prepare("
        UPDATE products 
        SET name = ?, description = ?, price = ?, stock = ?, image = ?
        WHERE id = ?
    ");

    $stmt->execute([$name, $description, $price, $stock, $image, $id]);

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

<header>
    <div class="container navbar">
        <a href="../index.php" class="logo">Velora</a>
    </div>
</header>

<main>
<section class="section">
<div class="container">

    <div class="split-heading">
        <div>
            <p class="mini-label">Admin Panel</p>
            <h1 class="section-title left">Edit Product</h1>
        </div>

        <a href="products.php" class="btn btn-secondary">Back to Products</a>
    </div>

    <?php if (!empty($product['image'])): ?>
        <div style="margin-bottom:25px;">
            <img
                src="<?php echo htmlspecialchars($product['image']); ?>"
                alt="<?php echo htmlspecialchars($product['name']); ?>"
                style="width:180px; height:230px; object-fit:cover; border-radius:12px;"
            >
        </div>
    <?php endif; ?>

    <form method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" required><br><br>

        <label>Description:</label><br>
        <textarea name="description" required><?php echo htmlspecialchars($product['description']); ?></textarea><br><br>

        <label>Price:</label><br>
        <input type="number" step="0.01" name="price" value="<?php echo htmlspecialchars($product['price']); ?>" required><br><br>

        <label>Stock:</label><br>
        <input type="number" name="stock" value="<?php echo htmlspecialchars($product['stock']); ?>" required><br><br>

        <label>Image URL:</label><br>
        <input
            type="text"
            name="image"
            value="<?php echo htmlspecialchars($product['image'] ?? ''); ?>"
            placeholder="https://picsum.photos/seed/product/600/800"
        ><br><br>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>

</div>
</section>
</main>

</body>
</html>