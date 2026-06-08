<?php
session_start();
require_once 'config/db.php';

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['add'])) {
    $product_id = $_GET['add'];

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]++;
    } else {
        $_SESSION['cart'][$product_id] = 1;
    }

    header("Location: cart.php");
    exit;
}

if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    unset($_SESSION['cart'][$product_id]);
    header("Location: cart.php");
    exit;
}
?>

<h1>Shopping Cart</h1>

<?php
$total = 0;

if (empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty.</p>";
} else {
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $product_id");
        $product = mysqli_fetch_assoc($result);

        if ($product) {
            $subtotal = $product['price'] * $quantity;
            $total += $subtotal;

            echo "<h3>" . $product['name'] . "</h3>";
            echo "<p>Price: $" . $product['price'] . "</p>";
            echo "<p>Quantity: " . $quantity . "</p>";
            echo "<p>Subtotal: $" . $subtotal . "</p>";
            echo "<a href='cart.php?remove=" . $product_id . "'>Remove</a>";
            echo "<hr>";
        }
    }

    echo "<h2>Total: $" . $total . "</h2>";
    echo "<a href='checkout.php'>Proceed to Checkout</a>";
}
?>

<br><br>
<a href="products.php">Back to Products</a>