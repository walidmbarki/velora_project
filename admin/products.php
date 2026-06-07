<?php
require_once '../config/db.php';

$result = mysqli_query($conn, "SELECT * FROM products");
?>

<h1>Admin - Products</h1>

<a href="add-product.php">Add New Product</a>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Actions</th>
    </tr>

    <?php while($product = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $product['id']; ?></td>
            <td><?php echo $product['name']; ?></td>
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
