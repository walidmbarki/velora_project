<?php
require_once '../includes/db.php';

$id = (int) ($_GET['id'] ?? 0);

$stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
$stmt->execute([$id]);

header("Location: products.php");
exit;
?>