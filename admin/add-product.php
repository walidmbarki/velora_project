<?php
require_once '../includes/db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $image = $_POST['image'];

    $stmt = $pdo->prepare("
        INSERT INTO products (name, description, price, stock, image)
        VALUES (?, ?, ?, ?, ?)
    ");

    if ($stmt->execute([$name, $description, $price, $stock, $image])) {
        $message = "Product added successfully!";
    } else {
        $message = "Error adding product.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product • Velora</title>
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
            <h1 class="section-title left">Add Product</h1>
        </div>

        <a href="products.php" class="btn btn-secondary">
            Back to Products
        </a>
    </div>

    <?php if ($message): ?>
        <p class="product-note"><?php echo $message; ?></p>
    <?php endif; ?>

    <form method="POST">

        <label>Name</label><br>
        <input type="text" name="name" required><br><br>

        <label>Description</label><br>
        <textarea name="description" required></textarea><br><br>

        <label>Price</label><br>
        <input type="number" step="0.01" name="price" required><br><br>

        <label>Stock</label><br>
        <input type="number" name="stock" required><br><br>

        <label>Image URL</label><br>
        <input 
            type="text" 
            name="image" 
            placeholder="https://picsum.photos/seed/product/600/800"
            required
        ><br><br>

        <button type="submit" class="btn btn-primary">
            Add Product
        </button>

    </form>

</div>
</section>
</main>

</body>
</html>