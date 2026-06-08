<?php
session_start();
require_once 'config/db.php';

if (empty($_SESSION['cart'])) {
    die("Cart is empty.");
}

$total = 0;

foreach ($_SESSION['cart'] as $product_id => $quantity) {
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $product_id");
    $product = mysqli_fetch_assoc($result);

    if ($product) {
        $total += $product['price'] * $quantity;
    }
}

if (isset($_POST['place_order'])) {

    $user_id = 1; // temporary until Walid's login session is connected

    mysqli_query($conn, "INSERT INTO orders (user_id, total_price) VALUES ($user_id, $total)");

    $order_id = mysqli_insert_id($conn);

    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $product_id");
        $product = mysqli_fetch_assoc($result);

        if ($product) {
            $price = $product['price'];

            mysqli_query($conn, "INSERT INTO order_items (order_id, product_id, quantity, price)
            VALUES ($order_id, $product_id, $quantity, $price)");
        }
    }

    $_SESSION['cart'] = [];

    echo "Order placed successfully!";
    echo "<br><a href='orders.php'>View Orders</a>";
    exit;
}
?>

<h1>Checkout</h1>

<?php
foreach ($_SESSION['cart'] as $product_id => $quantity) {
    $result = mysqli_query($conn, "SELECT * FROM products WHERE id = $product_id");
    $product = mysqli_fetch_assoc($result);

    if ($product) {
        $subtotal = $product['price'] * $quantity;
        echo "<p>" . $product['name'] . " x " . $quantity . " = $" . $subtotal . "</p>";
    }
}
?>

<h2>Total: $<?php echo $total; ?></h2>

<form method="post">
    <button type="submit" name="place_order">Place Order</button>
</form>