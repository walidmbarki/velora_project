<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../includes/auth.php';

require_login();   // must be logged in
require_admin();   // must have role = 'admin'

$user = current_user();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard • Velora</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <main class="section admin-section">
    <div class="container admin-card">
      <h1 class="section-title left">Admin dashboard</h1>
      <p class="admin-subtitle">
        Welcome, <?= htmlspecialchars($user['name']) ?> (<?= htmlspecialchars($user['role']) ?>).
      </p>
      <p class="admin-note">Only admins can see this page.</p>

      <div class="admin-actions">
        <a href="../index.php" class="btn btn-secondary">Back to store</a>
        <a href="../profile.php" class="btn btn-secondary">Your profile</a>
      </div>
    </div>
  </main>
</body>
</html>