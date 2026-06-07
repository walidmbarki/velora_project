<?php

include 'db.php';

/* 1. Add category_id column */
$sql1 = "ALTER TABLE products ADD category_id INT NULL";
mysqli_query($conn, $sql1);

/* 2. Add created_at column (optional but good) */
$sql2 = "ALTER TABLE products ADD created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP";
mysqli_query($conn, $sql2);

echo "Table fixed successfully!";

mysqli_close($conn);
?>