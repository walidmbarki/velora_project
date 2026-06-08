<?php
require_once '../config/db.php';

$result = mysqli_query($conn, "SELECT * FROM orders ORDER BY created_at DESC");
?>

<h1>Admin - Manage Orders</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Order ID</th>
        <th>User ID</th>
        <th>Total Price</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

    <?php while($order = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $order['id']; ?></td>
            <td><?php echo $order['user_id']; ?></td>
            <td>$<?php echo $order['total_price']; ?></td>
            <td><?php echo $order['status']; ?></td>
            <td><?php echo $order['created_at']; ?></td>
        </tr>
    <?php } ?>
</table>