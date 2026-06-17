<?php
require_once __DIR__ . '/includes/auth.php';
$user = current_user();
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Velora Fashion Store</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="topbar">Complimentary shipping on orders over $100 • Easy 14-day returns • New apparel edits weekly</div>

  <header>
    <div class="container navbar">
      <a href="index.php" class="logo" aria-label="Velora home">
        Velora
      </a>

      <nav>
        <ul class="nav-links">
          <li><a href="index.php" class="active-link">Home</a></li>
          <li><a href="women.php">Women</a></li>
          <li><a href="men.php">Men</a></li>
          <li><a href="accessories.php">Accessories</a></li>
          <li><a href="sale.php">Sale</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">Cart</a></li>
        </ul>
      </nav>

      <div class="nav-actions">
        <?php if ($user): ?>
          <span>Hello, <?= htmlspecialchars($user['name']) ?></span>
          <a href="profile.php" class="btn btn-secondary">Profile</a>
          <a href="logout.php" class="btn btn-secondary">Logout</a>
        <?php else: ?>
          <a href="login.php" class="btn btn-secondary">Login</a>
          <a href="register.php" class="btn btn-primary">Register</a>
        <?php endif; ?>
        <button class="icon-btn" id="themeToggle" aria-label="Toggle theme">◐</button>
      </div>
    </div>
  </header>

  <main>
    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-text">
          <span class="eyebrow">Professional apparel platform</span>
          <h1>Luxury-inspired fashion shopping with stronger structure and better page flow.</h1>
          <p>
            This version is built to feel more professional through longer content sections, clearer navigation, cleaner visual hierarchy, and linked pages for women, men, accessories, sale, and brand information.
          </p>

          <div class="hero-actions">
            <a href="women.php" class="btn btn-primary">Shop Women</a>
            <a href="men.php" class="btn btn-secondary">Shop Men</a>
          </div>

          <div class="hero-meta">
            <div>
              <strong>Apparel-first imagery</strong>
              <span>Only clothing and fashion-oriented visuals throughout the site.</span>
            </div>
            <div>
              <strong>Longer page structure</strong>
              <span>Editorial sections, featured collections, style looks, and service content.</span>
            </div>
            <div>
              <strong>Linked browsing flow</strong>
              <span>Homepage connects naturally to category pages and support pages.</span>
            </div>
          </div>
        </div>

        <div class="hero-showcase">
          <article class="hero-main-card">
            <img src="https://i.pinimg.com/736x/61/06/e9/6106e9e5f4443f981ac78da994d0abf8.jpg" alt="Editorial fashion hero" width="900" height="1100">
            <div class="hero-overlay-card">
              <span>Seasonal campaign</span>
              Tailoring, premium knitwear, clean outerwear, and wardrobe essentials.
            </div>
          </article>

          <article class="hero-side-card">
            <img src="https://i.pinimg.com/474x/fb/f6/a0/fbf6a029be7fcba7e2bd7693f3fb77c1.jpg" alt="Fashion lookbook" width="500" height="1100">
          </article>
        </div>
      </div>
    </section>

    <section class="section section-soft">
      <div class="container">
        <div class="split-heading">
          <div>
            <p class="mini-label">Collections</p>
            <h2 class="section-title left">Shop the main categories</h2>
          </div>
          <a href="about.php" class="text-link">Read the brand story</a>
        </div>

        <div class="category-feature-grid">
          <a href="women.php" class="category-feature-card large">
            <img src="https://i.pinimg.com/736x/75/70/6d/75706d3081c42363c1c058b78739f27d.jpg" alt="Women collection">
            <div class="category-feature-content">
              <span>Women</span>
              <h3>Tailored layers, dresses, knitwear, and everyday elegance</h3>
            </div>
          </a>

          <a href="men.php" class="category-feature-card">
            <img src="https://i.pinimg.com/736x/32/7f/8c/327f8cb12b91942d8dc2fb451e652bbc.jpg" alt="Men collection">
            <div class="category-feature-content">
              <span>Men</span>
              <h3>Shirts, structured outerwear, and refined basics</h3>
            </div>
          </a>

          <a href="accessories.php" class="category-feature-card">
            <img src="https://m.universalclass.com/30/explore/crncovers/fashion-626086028.jpg" alt="Accessories">
            <div class="category-feature-content">
              <span>Accessories</span>
              <h3>Bags and finishing details that complete the outfit</h3>
            </div>
          </a>
        </div>
      </div>
    </section>

    <section class="section" id="new-arrivals">
      <div class="container">
        <div class="split-heading">
          <div>
            <p class="mini-label">New arrivals</p>
            <h2 class="section-title left">Fresh pieces across the store</h2>
          </div>
          <a href="sale.php" class="text-link">See current markdowns</a>
        </div>

        <div class="products-grid">
          <article class="product-card">
            <div class="product-image">
              <img src="https://i.pinimg.com/originals/58/bb/30/58bb30b04520a8e18c02acad51063160.jpg" alt="Ivory blazer">
              <span class="product-tag">Women</span>
            </div>
            <div class="product-info">
              <div class="product-category">Women • Tailoring</div>
              <h3>Ivory Structured Blazer</h3>
              <p class="product-note">A sharp neutral layer for elevated wardrobe building.</p>
              <div class="price-row">
                <span class="price">$118</span>
                <span class="old-price">$146</span>
              </div>
              <a href="women.php#featured-products" class="btn btn-secondary full-width">View Women</a>
            </div>
          </article>

          <article class="product-card">
            <div class="product-image">
              <img src="https://i.pinimg.com/474x/39/61/f1/3961f1a1ea5217526ed1e983bd4d3f99.jpg" alt="Men oversized shirt">
              <span class="product-tag">Men</span>
            </div>
            <div class="product-info">
              <div class="product-category">Men • Shirts</div>
              <h3>Sand Oversized Shirt</h3>
              <p class="product-note">Soft structure and a relaxed fit for modern daily styling.</p>
              <div class="price-row">
                <span class="price">$67</span>
                <span class="old-price">$86</span>
              </div>
              <a href="men.php#featured-products" class="btn btn-secondary full-width">View Men</a>
            </div>
          </article>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <div class="footer-grid">
        <div>
          <div class="logo" style="margin-bottom:1rem">Velora</div>
          <p>
            A professional fashion e-commerce concept focused on apparel-first imagery, long-form browsing, and clear cross-linking between collections and editorial pages.
          </p>
        </div>

        <div class="footer-links">
          <h4>Shop</h4>
          <a href="women.php">Women</a>
          <a href="men.php">Men</a>
          <a href="accessories.php">Accessories</a>
          <a href="sale.php">Sale</a>
          <a href="products.php">Products</a>
        </div>

        <div class="footer-links">
          <h4>Explore</h4>
          <a href="about.php">Our Story</a>
          <a href="index.php#new-arrivals">New Arrivals</a>
          <a href="cart.php">Cart</a>
          <a href="orders.php">Orders</a>
        </div>

        <div class="footer-links">
          <h4>Support</h4>
          <a href="about.php#shipping">Shipping</a>
          <a href="about.php#returns">Returns</a>
          <a href="about.php#sizing">Sizing Guide</a>
          <a href="about.php#contact">Contact</a>
        </div>
      </div>

      <div class="footer-bottom">
        <span>© 2026 Velora. All rights reserved.</span>
        <span>Instagram • TikTok • Pinterest</span>
      </div>
    </div>
  </footer>

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