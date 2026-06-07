<?php

include 'db.php';

$sql = "INSERT INTO products (name, description, price, stock, image)
VALUES (
    'White Oversized T-Shirt',
    'Comfortable cotton oversized t-shirt',
    24.99,
    50,
    'tshirt.jpg'
)";

if (mysqli_query($conn, $sql)) {
    echo "Product inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>