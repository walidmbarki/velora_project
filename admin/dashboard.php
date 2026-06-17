<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../includes/auth.php';
require_once __DIR__ . '/../includes/db.php';

require_login();
require_admin();

$user = current_user();

$totalProducts = $pdo->query("SELECT COUNT(*) FROM products")->fetchColumn();
$totalCategories = $pdo->query("SELECT COUNT(*) FROM categories")->fetchColumn();
$totalOrders = $pdo->query("SELECT COUNT(*) FROM orders")->fetchColumn();
$totalUsers = $pdo->query("SELECT COUNT(*) FROM users")->fetchColumn();

$recentOrdersStmt = $pdo->query("
    SELECT *
    FROM orders
    ORDER BY created_at DESC
    LIMIT 5
");
$recentOrders = $recentOrdersStmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard • Velora</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<header>
    <div class="container navbar">
        <a href="../index.php" class="logo">Velora</a>

        <nav>
            <ul class="nav-links">
                <li><a href="../index.php">Store</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="orders.php">Orders</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
<section class="section">
<div class="container">

    <div class="split-heading">
        <div>
            <p class="mini-label">Admin Panel</p>
            <h1 class="section-title left">Dashboard</h1>
            <p>Welcome, <?php echo htmlspecialchars($user['name']); ?>.</p>
        </div>

        <a href="../profile.php" class="btn btn-secondary">Profile</a>
    </div>

    <div class="products-grid">

        <article class="product-card">
            <div class="product-info">
                <h3>Products</h3>
                <p class="product-note"><?php echo $totalProducts; ?> products</p>
                <a href="products.php" class="btn btn-primary full-width">Manage Products</a>
            </div>
        </article>

        <article class="product-card">
            <div class="product-info">
                <h3>Categories</h3>
                <p class="product-note"><?php echo $totalCategories; ?> categories</p>
                <a href="categories.php" class="btn btn-primary full-width">Manage Categories</a>
            </div>
        </article>

        <article class="product-card">
            <div class="product-info">
                <h3>Orders</h3>
                <p class="product-note"><?php echo $totalOrders; ?> orders</p>
                <a href="orders.php" class="btn btn-primary full-width">View Orders</a>
            </div>
        </article>

        <article class="product-card">
            <div class="product-info">
                <h3>Users</h3>
                <p class="product-note"><?php echo $totalUsers; ?> users</p>
            </div>
        </article>

    </div>

    <div class="product-card" style="margin-top:40px;">
        <div class="product-info">
            <h3>Recent Orders</h3>

            <?php if (count($recentOrders) === 0): ?>
                <p class="product-note">No orders yet.</p>
            <?php else: ?>

                <table border="1" cellpadding="10" cellspacing="0" style="width:100%; margin-top:20px;">
                    <tr>
                        <th>Order ID</th>
                        <th>User ID</th>
                        <th>Total</th>
                        <th>Date</th>
                    </tr>

                    <?php foreach ($recentOrders as $order): ?>
                    <tr>
                        <td><?php echo $order['id']; ?></td>
                        <td><?php echo $order['user_id']; ?></td>
                        <td>$<?php echo number_format($order['total'], 2); ?></td>
                        <td><?php echo $order['created_at']; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>

            <?php endif; ?>
        </div>
    </div>

</div>
</section>
</main>

</body>
</html>