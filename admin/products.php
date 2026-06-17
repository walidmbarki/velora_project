 <?php
require_once '../includes/db.php';

$stmt = $pdo->query("SELECT * FROM products ORDER BY id DESC");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Products • Velora</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

<h1>Admin - Products</h1>

<p>
    <a href="add-product.php">Add New Product</a>
</p>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($products as $product) { ?>
    <tr>
        <td><?php echo $product['id']; ?></td>
        <td><?php echo htmlspecialchars($product['name']); ?></td>
        <td>$<?php echo $product['price']; ?></td>
        <td><?php echo $product['stock']; ?></td>
        <td>
            <a href="edit-product.php?id=<?php echo $product['id']; ?>">Edit</a>
            |
            <a href="delete-product.php?id=<?php echo $product['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php } ?>
</table>

</body>
</html>