<?php
session_start();
require_once 'includes/db.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['add'])) {
    $product_id = (int) $_GET['add'];

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]++;
    } else {
        $_SESSION['cart'][$product_id] = 1;
    }

    header("Location: cart.php");
    exit;
}

if (isset($_GET['remove'])) {
    $product_id = (int) $_GET['remove'];
    unset($_SESSION['cart'][$product_id]);

    header("Location: cart.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart • Velora</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <div class="container navbar">
        <a href="index.php" class="logo">Velora</a>

        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
<section class="section">
<div class="container">

<div class="split-heading">
    <div>
        <p class="mini-label">Shopping</p>
        <h1 class="section-title left">Your Cart</h1>
    </div>

    <a href="products.php" class="btn btn-secondary">
        Continue Shopping
    </a>
</div>

<?php
$total = 0;

if (empty($_SESSION['cart'])) {
    echo "
    <div class='product-card'>
        <div class='product-info'>
            <h3>Your cart is empty</h3>
            <p class='product-note'>
                Add some products from our catalog.
            </p>
        </div>
    </div>";
} else {
?>

<div class="products-grid">

<?php
foreach ($_SESSION['cart'] as $product_id => $quantity) {

    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch();

    if ($product) {

        $subtotal = $product['price'] * $quantity;
        $total += $subtotal;
?>

<article class="product-card">
    <div class="product-info">

        <div class="product-category">
            Product ID: <?php echo $product['id']; ?>
        </div>

        <h3>
            <?php echo htmlspecialchars($product['name']); ?>
        </h3>

        <p class="product-note">
            Price: $<?php echo htmlspecialchars($product['price']); ?>
        </p>

        <p class="product-note">
            Quantity: <?php echo htmlspecialchars($quantity); ?>
        </p>

        <p class="product-note">
            Subtotal: $<?php echo number_format($subtotal, 2); ?>
        </p>

        <a
            href="cart.php?remove=<?php echo $product_id; ?>"
            class="btn btn-secondary full-width">
            Remove
        </a>

    </div>
</article>

<?php
    }
}
?>

</div>

<div style="margin-top:40px;">
    <h2>Total: $<?php echo number_format($total, 2); ?></h2>

    <a href="checkout.php" class="btn btn-primary">
        Proceed to Checkout
    </a>
</div>

<?php } ?>

</div>
</section>
</main>

</body>
</html>