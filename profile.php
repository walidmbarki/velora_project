<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/includes/auth.php';

// Only logged-in users can see this page
require_login();

$user = current_user();
?>
<!DOCTYPE html>
<html lang="en">
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
          <li><a href="women.html">Women</a></li>
          <li><a href="men.html">Men</a></li>
          <li><a href="accessories.html">Accessories</a></li>
          <li><a href="sale.html">Sale</a></li>
          <li><a href="about.html">About</a></li>
        </ul>
      </nav>
      <div class="nav-actions">
        <span>Hello, <?= htmlspecialchars($user['name']) ?></span>
        <a href="logout.php" class="btn btn-secondary">Logout</a>
      </div>
    </div>
  </header>

  <main class="section">
    <div class="container">
      <h1 class="section-title left">Your profile</h1>
      <p>Name: <?= htmlspecialchars($user['name']) ?></p>
      <p>Email: <?= htmlspecialchars($user['email']) ?></p>
      <p>Role: <?= htmlspecialchars($user['role']) ?></p>
    </div>
  </main>
</body>
</html>