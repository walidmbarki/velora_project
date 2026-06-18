<?php
require_once 'includes/db.php';

$stmt = $pdo->query("
SELECT 
    products.id,
    products.name,
    products.category_id,
    categories.name AS category,
    products.image
FROM products
LEFT JOIN categories ON products.category_id = categories.id
ORDER BY products.category_id, products.name
");

echo "<pre>";
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
echo "</pre>";