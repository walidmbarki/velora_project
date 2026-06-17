<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/includes/auth.php';

$errors = [];
$name = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $password_confirm = $_POST['password_confirm'] ?? '';

    if ($name === '') {
        $errors[] = 'Name is required.';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required.';
    }
    if (strlen($password) < 6) {
        $errors[] = 'Password must be at least 6 characters.';
    }
    if ($password !== $password_confirm) {
        $errors[] = 'Passwords do not match.';
    }

    if (empty($errors)) {
        // check if email already exists
        $stmt = $pdo->prepare('SELECT id FROM users WHERE email = ?');
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            $errors[] = 'Email is already registered.';
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare(
              'INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)'
            );
            $stmt->execute([$name, $email, $hash, 'user']);

            // log the user in
            $user_id = $pdo->lastInsertId();
            $stmt = $pdo->prepare('SELECT id, name, email, role FROM users WHERE id = ?');
            $stmt->execute([$user_id]);
            $_SESSION['user'] = $stmt->fetch();

            header('Location: profile.php');
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register • Velora</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="section auth-section">
    <div class="container auth-card" style="max-width:480px;">
      <h1 class="section-title left">Create your Velora account</h1>

      <?php if ($errors): ?>
        <div class="alert alert-error">
          <?php foreach ($errors as $e): ?>
            <p><?= htmlspecialchars($e) ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <form method="post" class="newsletter-form" style="flex-direction:column; gap:1rem;">
        <input type="text" name="name" placeholder="Full name"
               value="<?= htmlspecialchars($name) ?>" required>
        <input type="email" name="email" placeholder="Email address"
               value="<?= htmlspecialchars($email) ?>" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="password_confirm" placeholder="Confirm password" required>
        <button type="submit" class="btn btn-primary">Register</button>
      </form>

      <p style="margin-top:1rem;">Already have an account?
        <a href="login.php" class="text-link">Log in</a>
      </p>
    </div>
  </main>
</body>
</html>