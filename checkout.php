<?php
session_start();
require_once 'includes/db.php';

if (empty($_SESSION['cart'])) {
    header("Location: cart.php");
    exit;
}

$total = 0;
$cartItems = [];

foreach ($_SESSION['cart'] as $product_id => $quantity) {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$product_id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($product) {
        $subtotal = $product['price'] * $quantity;
        $total += $subtotal;

        $cartItems[] = [
            'product' => $product,
            'quantity' => $quantity,
            'subtotal' => $subtotal
        ];
    }
}

if (isset($_POST['place_order'])) {
    $user_id = 1;

    $stmt = $pdo->prepare("INSERT INTO orders (user_id, total) VALUES (?, ?)");
    $stmt->execute([$user_id, $total]);

    $order_id = $pdo->lastInsertId();

    foreach ($cartItems as $item) {
        $product = $item['product'];
        $quantity = $item['quantity'];

        $stmt = $pdo->prepare("
            INSERT INTO order_items (order_id, product_id, quantity, price)
            VALUES (?, ?, ?, ?)
        ");

        $stmt->execute([
            $order_id,
            $product['id'],
            $quantity,
            $product['price']
        ]);
    }

    $_SESSION['cart'] = [];

    header("Location: order-success.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout • Velora</title>
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
            <p class="mini-label">Checkout</p>
            <h1 class="section-title left">Order Summary</h1>
        </div>

        <a href="cart.php" class="btn btn-secondary">Back to Cart</a>
    </div>

    <div class="products-grid">
        <?php foreach ($cartItems as $item): ?>
            <?php
            $product = $item['product'];
            $quantity = $item['quantity'];
            $subtotal = $item['subtotal'];
            ?>

            <article class="product-card">
                <div class="product-info">
                    <div class="product-category">
                        Product ID: <?php echo $product['id']; ?>
                    </div>

                    <h3><?php echo htmlspecialchars($product['name']); ?></h3>

                    <p class="product-note">
                        Price: $<?php echo number_format($product['price'], 2); ?>
                    </p>

                    <p class="product-note">
                        Quantity: <?php echo $quantity; ?>
                    </p>

                    <p class="product-note">
                        Subtotal: $<?php echo number_format($subtotal, 2); ?>
                    </p>
                </div>
            </article>
        <?php endforeach; ?>
    </div>

    <div style="margin-top:40px;">
        <h2>Total: $<?php echo number_format($total, 2); ?></h2>

        <form method="post">
            <button type="submit" name="place_order" class="btn btn-primary">
                Place Order
            </button>
        </form>
    </div>

</div>
</section>
</main>

</body>
</html>