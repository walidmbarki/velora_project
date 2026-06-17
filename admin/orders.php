<?php
require_once '../includes/db.php';

$stmt = $pdo->query("SELECT * FROM orders ORDER BY created_at DESC");
$orders = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders • Velora Admin</title>
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
        <h1 class="section-title left">Manage Orders</h1>
    </div>

    <a href="dashboard.php" class="btn btn-secondary">
        Dashboard
    </a>
</div>

<div class="product-card">
<div class="product-info">

<?php if (count($orders) === 0) { ?>

    <p>No orders found.</p>

<?php } else { ?>

<table border="1" cellpadding="10" cellspacing="0" style="width:100%;">

    <tr>
        <th>Order ID</th>
        <th>User ID</th>
        <th>Total</th>
        <th>Date</th>
    </tr>

    <?php foreach ($orders as $order) { ?>

    <tr>
        <td><?php echo $order['id']; ?></td>
        <td><?php echo $order['user_id']; ?></td>
        <td>$<?php echo $order['total']; ?></td>
        <td><?php echo $order['created_at']; ?></td>
    </tr>

    <?php } ?>

</table>

<?php } ?>

</div>
</div>

</div>
</section>
</main>

</body>
</html>