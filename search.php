<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search • Velora</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="topbar">Search the Velora collection</div>

  <header>
    <div class="container navbar">
      <a href="index.php" class="logo" aria-label="Velora home">
        <svg viewBox="0 0 64 64" fill="none" aria-hidden="true">
          <path d="M12 14L32 50L52 14" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M22 14L32 32L42 14" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Velora
      </a>

      <nav>
        <ul class="nav-links">
          <li><a href="index.php">Home</a></li>
          <li><a href="women.php">Women</a></li>
          <li><a href="men.php">Men</a></li>
          <li><a href="accessories.php">Accessories</a></li>
          <li><a href="sale.php">Sale</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
      </nav>

      <div class="nav-actions">
        <a href="search.php" class="icon-btn" aria-label="Search">⌕</a>
        <button class="icon-btn" aria-label="Wishlist">♡</button>
        <a href="cart.php" class="icon-btn" aria-label="Cart">🛍</a>
        <button class="icon-btn" id="themeToggle" aria-label="Toggle theme">◐</button>
      </div>
    </div>
  </header>

  <main>
    <section class="section">
      <div class="container">
        <div style="max-width: 700px; margin: 0 auto; text-align: center;">
          <p class="mini-label">Search</p>
          <h1 class="section-title" style="margin-bottom: 1rem;">Find what you are looking for</h1>
          <p class="section-text" style="margin: 0 auto 2rem;">
            Search products by name, category, or style.
          </p>

          <form method="GET" action="search.php" class="search-page-form">
            <input type="search" name="q" placeholder="Search products...">
            <button type="submit" class="btn btn-primary">Search</button>
          </form>

          <div style="margin-top: 2rem; text-align: left;">
            <?php
              $q = $_GET['q'] ?? '';
              if ($q !== '') {
                  echo '<p class="section-text">You searched for: <strong>' . htmlspecialchars($q) . '</strong></p>';
              }
            ?>
          </div>
        </div>
      </div>
    </section>
  </main>

  <script>
    const themeToggle = document.getElementById("themeToggle");
    const html = document.documentElement;
    if (themeToggle) {
      themeToggle.addEventListener("click", () => {
        const current = html.getAttribute("data-theme");
        html.setAttribute("data-theme", current === "dark" ? "light" : "dark");
      });
    }
  </script>
</body>
</html>