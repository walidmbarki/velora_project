<?php
require_once 'config/db.php';

$result = mysqli_query($conn, "SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Products Test</title>
</head>
<body>

<h1>Products from Database</h1>

<?php while($product = mysqli_fetch_assoc($result)): ?>

    <h3><?php echo $product['name']; ?></h3>

    <p><?php echo $product['description']; ?></p>

    <p>Price: $<?php echo $product['price']; ?></p>
    <a href="cart.php?add=<?php echo $product['id']; ?>">
    Add To Cart
</a>

    <hr>

<?php endwhile; ?>

</body>
</html>