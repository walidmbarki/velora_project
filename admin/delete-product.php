<?php
require_once '../config/db.php';

$id = $_GET['id'] ?? 0;

$sql = "DELETE FROM products WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: products.php");
    exit;
} else {
    echo "Error deleting product: " . mysqli_error($conn);
}
?>