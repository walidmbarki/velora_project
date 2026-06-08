<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/includes/auth.php';

$errors = [];
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Valid email is required.';
    }
    if ($password === '') {
        $errors[] = 'Password is required.';
    }

    if (empty($errors)) {
        $stmt = $pdo->prepare(
          'SELECT id, name, email, password_hash, role FROM users WHERE email = ?'
        );
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {
            session_regenerate_id(true);
            unset($user['password_hash']);
            $_SESSION['user'] = $user;

            header('Location: profile.php');
            exit;
        } else {
            $errors[] = 'Invalid email or password.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login • Velora</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="section auth-section">
    <div class="container auth-card" style="max-width:480px;">
      <h1 class="section-title left">Sign in to Velora</h1>

      <?php if ($errors): ?>
        <div class="alert alert-error">
          <?php foreach ($errors as $e): ?>
            <p><?= htmlspecialchars($e) ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>

      <form method="post" class="newsletter-form" style="flex-direction:column; gap:1rem;">
        <input type="email" name="email" placeholder="Email address"
               value="<?= htmlspecialchars($email) ?>" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" class="btn btn-primary">Log in</button>
      </form>

      <p style="margin-top:1rem;">
        Don’t have an account?
        <a href="register.php" class="text-link">Create one</a>
      </p>
    </div>
  </main>
</body>
</html>