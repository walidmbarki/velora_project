 <?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/includes/auth.php';

require_login();

$user = current_user();
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <title>My Profile • Velora</title>
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
        <li><a href="products.php">Products</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="cart.php">Cart</a></li>
      </ul>
    </nav>

    <div class="nav-actions">
      <span>Hello, <?php echo htmlspecialchars($user['name']); ?></span>
      <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>
  </div>
</header>

<main>
<section class="section">
<div class="container">

  <div class="split-heading">
    <div>
      <p class="mini-label">Account</p>
      <h1 class="section-title left">Your Profile</h1>
    </div>

    <?php if ($user['role'] === 'admin'): ?>
      <a href="admin/dashboard.php" class="btn btn-primary">Admin Dashboard</a>
    <?php endif; ?>
  </div>

  <div class="product-card">
    <div class="product-info">
      <h3>Account Information</h3>

      <p class="product-note">
        <strong>Name:</strong>
        <?php echo htmlspecialchars($user['name']); ?>
      </p>

      <p class="product-note">
        <strong>Email:</strong>
        <?php echo htmlspecialchars($user['email']); ?>
      </p>

      <p class="product-note">
        <strong>Role:</strong>
        <?php echo htmlspecialchars($user['role']); ?>
      </p>

      <div style="margin-top:25px;">
        <a href="products.php" class="btn btn-primary">Shop Products</a>
        <a href="orders.php" class="btn btn-secondary">View Orders</a>
      </div>
    </div>
  </div>

</div>
</section>
</main>

</body>
</html>