<?php
require_once 'includes/db.php';

$stmt = $pdo->query("SELECT * FROM products ORDER BY id DESC");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products • Velora</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
  <div class="container navbar">
    <a href="index.php" class="logo">Velora</a>

    <nav>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="women.php">Women</a></li>
        <li><a href="men.php">Men</a></li>
        <li><a href="accessories.php">Accessories</a></li>
        <li><a href="sale.php">Sale</a></li>
        <li><a href="products.php" class="active-link">Products</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="cart.php">Cart</a></li>
      </ul>
    </nav>
  </div>
</header>

<main>
  <section class="section">
    <div class="container">

      <div class="split-heading">
        <div>
          <p class="mini-label">Dynamic catalog</p>
          <h1 class="section-title left">Products from Database</h1>
        </div>
        <a href="cart.php" class="btn btn-secondary">View Cart</a>
      </div>

      <?php if (count($products) === 0): ?>
        <div class="product-card">
          <div class="product-info">
            <h3>No products found</h3>
            <p class="product-note">Add products from the admin panel.</p>
          </div>
        </div>
      <?php else: ?>

      <div class="products-grid">

        <?php foreach ($products as $product): ?>

          <article class="product-card">
            <div class="product-info">

              <div class="product-category">
                Product ID: <?php echo $product['id']; ?>
              </div>

              <h3><?php echo htmlspecialchars($product['name']); ?></h3>

              <p class="product-note">
                <?php echo htmlspecialchars($product['description']); ?>
              </p>

              <div class="price-row">
                <span class="price">
                  $<?php echo number_format($product['price'], 2); ?>
                </span>
              </div>

              <p class="product-note">
                Stock: <?php echo htmlspecialchars($product['stock']); ?>
              </p>

              <a href="product-details.php?id=<?php echo $product['id']; ?>" class="btn btn-secondary full-width">
                View Details
              </a>

              <a href="cart.php?add=<?php echo $product['id']; ?>" class="btn btn-primary full-width" style="margin-top:0.7rem;">
                Add To Cart
              </a>

            </div>
          </article>

        <?php endforeach; ?>

      </div>

      <?php endif; ?>

    </div>
  </section>
</main>

</body>
</html>