<?php
require_once 'includes/db.php';

$id = (int) ($_GET['id'] ?? 0);

$stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$id]);

$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    echo "Product not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['name']); ?> • Velora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="container navbar">
        <a href="index.php" class="logo">Velora</a>

<nav>
    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="women.php">Women</a></li>
        <li><a href="men.php">Men</a></li>
        <li><a href="accessories.php">Accessories</a></li>
        <li><a href="sale.php">Sale</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="cart.php">Cart</a></li>
    </ul>
</nav>
    </div>
</header>

<main>
<section class="section">
<div class="container">

    <div class="product-card">
        <?php if (!empty($product['image'])): ?>
  <div class="product-image">
    <img
      src="<?php echo htmlspecialchars($product['image']); ?>"
      alt="<?php echo htmlspecialchars($product['name']); ?>"
    >
  </div>
<?php endif; ?>
        <div class="product-info">

            <div class="product-category">
                Product ID: <?php echo $product['id']; ?>
            </div>

            <h1>
                <?php echo htmlspecialchars($product['name']); ?>
            </h1>

            <p class="product-note">
                <?php echo htmlspecialchars($product['description']); ?>
            </p>

            <h2>
                $<?php echo htmlspecialchars($product['price']); ?>
            </h2>

<p class="product-note">
    Stock: <?php echo htmlspecialchars($product['stock']); ?>
</p>

<p class="product-note">
    Status:
    <?php if ($product['stock'] > 0): ?>
        <strong>In Stock</strong>
    <?php else: ?>
        <strong>Out of Stock</strong>
    <?php endif; ?>
</p>

<p class="product-note">
    Status:
    <?php if ($product['stock'] > 0): ?>
        <strong>In Stock</strong>
    <?php else: ?>
        <strong>Out of Stock</strong>
    <?php endif; ?>
</p>

            <a
                href="cart.php?add=<?php echo $product['id']; ?>"
                class="btn btn-primary">
                Add To Cart
            </a>

            <br><br>

            <a
                href="products.php"
                class="btn btn-secondary">
                Back to Products
            </a>

        </div>
    </div>

</div>
</section>
</main>

</body>
</html>