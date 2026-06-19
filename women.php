<?php
require_once 'includes/db.php';
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Velora • Women</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="topbar">Complimentary shipping on women’s orders over $100 • New tailored edits weekly</div>

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
          <li><a href="women.php" class="active-link">Women</a></li>
          <li><a href="men.php">Men</a></li>
          <li><a href="accessories.php">Accessories</a></li>
          <li><a href="sale.php">Sale</a></li>
<li><a href="products.php">Products</a></li>
<li><a href="about.php">About</a></li>
        </ul>
      </nav>

      <div class="nav-actions">
        <button class="icon-btn" aria-label="Wishlist">♡</button>
        <a href="cart.php" class="icon-btn" aria-label="Cart">🛍</a>
        <button class="icon-btn" id="themeToggle" aria-label="Toggle theme">◐</button>
      </div>
    </div>
  </header>

  <main>
    <!-- HERO -->
    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-text">
          <span class="eyebrow">Women • Tailored silhouettes</span>
          <h1>Tailored silhouettes, dresses, and polished essentials.</h1>
          <p>
            Discover structured blazers, fluid dresses, knitwear, and refined trousers designed for confident everyday dressing with a modern, editorial tone.
          </p>
          <div class="hero-actions">
            <a href="products.php" class="btn btn-primary">Shop Products</a>
            <a href="index.php" class="btn btn-secondary">Back to home</a>
          </div>

          <div class="hero-meta">
            <div>
              <strong>Professional imagery</strong>
              <span>Only women’s apparel and fashion imagery is shown on this page.</span>
            </div>
            <div>
              <strong>Longer structure</strong>
              <span>Hero, featured range, editorial story, related links, and updates.</span>
            </div>
            <div>
              <strong>Connected journey</strong>
              <span>Links to men’s, accessories, sale, and support keep browsing flowing.</span>
            </div>
          </div>
        </div>

        <div class="hero-showcase">
          <!-- HERO MAIN: URL 1 -->
          <article class="hero-main-card">
            <img
              src="https://i.pinimg.com/1200x/1a/5d/e8/1a5de891d0282355ed56ecf32f6fe86c.jpg"
              alt="Women fashion campaign with tailored outfit"
              width="900" height="1100" loading="eager">
            <div class="hero-overlay-card">
              <span>Women’s spotlight</span>
              Structured tailoring, soft movement, and a calm neutral palette.
            </div>
          </article>

          <!-- HERO SIDE: URL 2 -->
          <article class="hero-side-card">
            <img
              src="https://i.pinimg.com/736x/2c/10/5e/2c105e9413e6dd23bc83f9674316721e.jpg"
              alt="Women apparel styling detail"
              width="500" height="1100" loading="eager">
          </article>
        </div>
      </div>
    </section>

    <!-- FEATURED PRODUCTS -->
<section class="section" id="featured-products">
  <div class="container">
    <div class="split-heading">
      <div>
        <p class="mini-label">Featured women’s collection</p>
        <h2 class="section-title left">Women products from database</h2>
      </div>
      <a href="sale.php" class="text-link">Go to sale</a>
    </div>

    <?php
    $stmt = $pdo->prepare("
        SELECT *
        FROM products
        WHERE category_id = 1
        ORDER BY id DESC
    ");
    $stmt->execute();
    $womenProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <?php if (count($womenProducts) === 0): ?>

      <div class="product-card">
        <div class="product-info">
          <h3>No women products found</h3>
          <p class="product-note">Add women products from the admin panel.</p>
        </div>
      </div>

    <?php else: ?>

      <div class="products-grid">

        <?php foreach ($womenProducts as $product): ?>

          <article class="product-card">
            <?php if (!empty($product['image'])): ?>
              <div class="product-image">
                <img
                  src="<?php echo htmlspecialchars($product['image']); ?>"
                  alt="<?php echo htmlspecialchars($product['name']); ?>"
                  width="600"
                  height="750"
                  loading="lazy">
                <span class="product-tag">Women</span>
              </div>
            <?php endif; ?>

            <div class="product-info">
              <div class="product-category">Women • Database</div>

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
</section>WHERE category_id = 1
    <!-- EDITORIAL STORY -->
    <section class="section section-soft" id="new-season">
      <div class="container story-grid">
        <article class="story-card">
          <!-- EDITORIAL: URL 9 -->
          <img
            src="https://i.pinimg.com/736x/46/a5/54/46a554eabe0018fb741a583343231585.jpg"
            alt="Women fashion editorial story"
            width="1000" height="1100" loading="lazy">
          <div class="floating-note">
            <span>Collection note</span>
            Longer category pages make browsing easier and help the brand feel more complete.
          </div>
        </article>

        <div class="story-copy">
          <p class="mini-label">Editorial perspective</p>
          <h2 class="section-title left">A stronger women’s collection page for real browsing.</h2>
          <p class="section-text">
            This page adds more than a product grid. It uses a hero section, a deeper featured range,
            an editorial content block, and related links so visitors can continue their journey without dead ends.
          </p>
          <div class="points">
            <div>Collection imagery stays consistent and clothing-focused.</div>
            <div>Product cards are grouped under one, clear women’s section.</div>
            <div>Links connect this page to men’s, accessories, sale, and support content.</div>
          </div>
          <a href="about.php" class="btn btn-primary">Read about Velora</a>
        </div>
      </div>
    </section>

    <!-- RELATED DESTINATIONS + NEWSLETTER (no new images) -->
    <section class="section">
      <div class="container">
        <div class="split-heading">
          <div>
            <p class="mini-label">Related destinations</p>
            <h2 class="section-title left">Continue browsing</h2>
          </div>
          <a href="about.php#sizing" class="text-link">Sizing guide</a>
        </div>

        <div class="collection-links">
          <a href="men.php">
            <h3>See the men’s collection</h3>
            <p>Explore clean layering, outerwear, and understated staples.</p>
          </a>
          <a href="accessories.php">
            <h3>Add accessories</h3>
            <p>Pair women’s looks with bags and finishing details.</p>
          </a>
          <a href="sale.php">
            <h3>Shop reduced women’s pieces</h3>
            <p>Move into discounted items without breaking the browsing flow.</p>
          </a>
        </div>
      </div>
    </section>

    <section class="section section-soft">
      <div class="container">
        <div class="newsletter-panel">
          <div>
            <p class="mini-label">Women’s updates</p>
            <h2 class="section-title left">Receive new arrivals from the women’s line.</h2>
            <p class="section-text">
              Join the mailing list for launch alerts, styled edits, and promotional drops from the women’s collection.
            </p>
          </div>
          <form class="newsletter-form">
            <input type="email" placeholder="Enter your email address" aria-label="Email address">
            <button type="submit" class="btn btn-primary">Subscribe</button>
          </form>
        </div>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
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
          <a href="index.php#looks">Looks</a>
          <a href="index.php#newsletter">Newsletter</a>
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