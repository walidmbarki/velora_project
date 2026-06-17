<?php
require_once 'includes/db.php';

$stmt = $pdo->query("
    SELECT * 
    FROM orders
    ORDER BY created_at DESC
");

$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Orders • Velora</title>
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
                <li><a href="orders.php">Orders</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
<section class="section">
<div class="container">

    <p class="mini-label">Orders</p>
    <h1 class="section-title left">Order History</h1>

    <table border="1" cellpadding="10" style="width:100%; margin-top:20px;">
        <tr>
            <th>Order ID</th>
            <th>User ID</th>
            <th>Total</th>
            <th>Date</th>
        </tr>

        <?php foreach ($orders as $order): ?>
        <tr>
            <td><?php echo $order['id']; ?></td>
            <td><?php echo $order['user_id']; ?></td>
            <td>$<?php echo number_format($order['total'], 2); ?></td>
            <td><?php echo $order['created_at']; ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

</div>
</section>
</main>

</body>
</html>