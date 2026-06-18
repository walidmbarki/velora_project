<?php
require_once '../includes/db.php';

$stmt = $pdo->query("SELECT * FROM products ORDER BY id DESC");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Products • Velora</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<header>
    <div class="container navbar">
        <a href="../index.php" class="logo">Velora</a>

        <nav>
            <ul class="nav-links">
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="products.php" class="active-link">Products</a></li>
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
            <h1 class="section-title left">Manage Products</h1>
        </div>

        <a href="add-product.php" class="btn btn-primary">
            Add New Product
        </a>
    </div>

    <div class="product-card">
        <div class="product-info">

            <?php if (count($products) === 0): ?>

                <p>No products found.</p>

            <?php else: ?>

                <table border="1" cellpadding="10" cellspacing="0" style="width:100%; margin-top:20px;">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>

                    <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['id']; ?></td>

                        <td>
                            <?php if (!empty($product['image'])): ?>
                                <img
                                    src="<?php echo htmlspecialchars($product['image']); ?>"
                                    alt="<?php echo htmlspecialchars($product['name']); ?>"
                                    style="width:70px; height:90px; object-fit:cover; border-radius:8px;"
                                >
                            <?php else: ?>
                                No image
                            <?php endif; ?>
                        </td>

                        <td><?php echo htmlspecialchars($product['name']); ?></td>

                        <td>$<?php echo number_format($product['price'], 2); ?></td>

                        <td><?php echo htmlspecialchars($product['stock']); ?></td>

                        <td>
                            <a href="edit-product.php?id=<?php echo $product['id']; ?>" class="btn btn-secondary">
                                Edit
                            </a>

                            <a
                                href="delete-product.php?id=<?php echo $product['id']; ?>"
                                class="btn btn-secondary"
                                onclick="return confirm('Are you sure you want to delete this product?');"
                            >
                                Delete
                            </a>
                        </td>
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