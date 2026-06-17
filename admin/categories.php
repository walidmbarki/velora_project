<?php
require_once '../includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);

    $stmt = $pdo->prepare("INSERT INTO categories (name) VALUES (?)");
    $stmt->execute([$name]);

    header("Location: categories.php");
    exit;
}

$stmt = $pdo->query("SELECT * FROM categories ORDER BY id DESC");
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories • Velora</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<header>
    <div class="container navbar">
        <a href="../index.php" class="logo">Velora</a>
    </div>
</header>

<main>
<section class="section">
<div class="container">

<div class="split-heading">
    <div>
        <p class="mini-label">Admin Panel</p>
        <h1 class="section-title left">Categories</h1>
    </div>

    <a href="products.php" class="btn btn-secondary">
        Back to Products
    </a>
</div>

<form method="POST" style="margin-bottom:40px;">

    <label style="display:block; margin-bottom:10px;">
        Category Name
    </label>

    <input
        type="text"
        name="name"
        required
        style="
            width:100%;
            max-width:400px;
            padding:12px;
            border:1px solid #ddd;
            border-radius:8px;
            margin-bottom:15px;
        "
    >

    <br>

    <button type="submit" class="btn btn-primary">
        Add Category
    </button>

</form>

<div class="product-card">
    <div class="product-info">

        <h3>Category List</h3>

        <table border="1" cellpadding="10" cellspacing="0" style="width:100%; margin-top:20px;">

            <tr>
                <th>ID</th>
                <th>Name</th>
            </tr>

            <?php foreach ($categories as $category) { ?>

            <tr>
                <td><?php echo $category['id']; ?></td>
                <td><?php echo htmlspecialchars($category['name']); ?></td>
            </tr>

            <?php } ?>

        </table>

    </div>
</div>

</div>
</section>
</main>

</body>
</html>