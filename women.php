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
        <button class="icon-btn" aria-label="Search">⌕</button>
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
            <h2 class="section-title left">Best pieces on this page</h2>
          </div>
          <a href="sale.php" class="text-link">Go to sale</a>
        </div>

        <div class="products-grid">
          <!-- PRODUCT 1: URL 3 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/40/9c/34/409c340bbf6360c479c9793318f61328.jpg"
                alt="Women ivory blazer"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Tailoring</span>
            </div>
            <div class="product-info">
              <div class="product-category">Women • Tailoring</div>
              <h3>Ivory Structured Blazer</h3>
              <p class="product-note">A sharp neutral layer for elevated wardrobe building.</p>
              <div class="price-row">
                <span class="price">$118</span>
                <span class="old-price">$146</span>
              </div>
              <a href="about.php#sizing" class="btn btn-secondary full-width">View sizing info</a>
            </div>
          </article>

          <!-- PRODUCT 2: URL 4 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/1200x/c1/7b/80/c17b8050fa7201c17831985ed9d591eb.jpg"
                alt="Women rose jumpsuit"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Occasion</span>
            </div>
            <div class="product-info">
              <div class="product-category">Women • Occasion</div>
              <h3>Rose Minimal Jumpsuit</h3>
              <p class="product-note">Fluid lines for modern occasion dressing and evening edits.</p>
              <div class="price-row">
                <span class="price">$96</span>
                <span class="old-price">$128</span>
              </div>
              <a href="sale.php" class="btn btn-secondary full-width">Check if on sale</a>
            </div>
          </article>

          <!-- PRODUCT 3: URL 5 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/64/ae/3c/64ae3c9dcb767a96373764e51bd10dd2.jpg"
                alt="Women knitwear top"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Knitwear</span>
            </div>
            <div class="product-info">
              <div class="product-category">Women • Knitwear</div>
              <h3>Soft Wool Layer Top</h3>
              <p class="product-note">Textural softness designed for transitional layering.</p>
              <div class="price-row">
                <span class="price">$72</span>
                <span class="old-price">$95</span>
              </div>
              <a href="index.php#looks" class="btn btn-secondary full-width">See styling ideas</a>
            </div>
          </article>

          <!-- PRODUCT 4: URL 6 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/9c/6e/26/9c6e268b862aa4016287669b1d0799f6.jpg"
                alt="Women tailored trousers"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Trousers</span>
            </div>
            <div class="product-info">
              <div class="product-category">Women • Trousers</div>
              <h3>Cream Tailored Trousers</h3>
              <p class="product-note">Relaxed proportion balanced with polished structure.</p>
              <div class="price-row">
                <span class="price">$74</span>
                <span class="old-price">$96</span>
              </div>
              <a href="about.php#returns" class="btn btn-secondary full-width">Returns & exchanges</a>
            </div>
          </article>

          <!-- PRODUCT 5: URL 7 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/32/a2/72/32a272d29d5538829aad11c22f1c2cf8.jpg"
                alt="Women neutral coat"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Outerwear</span>
            </div>
            <div class="product-info">
              <div class="product-category">Women • Outerwear</div>
              <h3>Neutral Longline Coat</h3>
              <p class="product-note">A clean coat line that anchors the full outfit.</p>
              <div class="price-row">
                <span class="price">$132</span>
                <span class="old-price">$168</span>
              </div>
              <a href="men.php" class="btn btn-secondary full-width">See men’s outerwear</a>
            </div>
          </article>

          <!-- PRODUCT 6: URL 8 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/36/63/c2/3663c241f24e81ba5cc077152e656815.jpg"
                alt="Women satin dress"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Dress</span>
            </div>
            <div class="product-info">
              <div class="product-category">Women • Dress</div>
              <h3>Fluid Satin Dress</h3>
              <p class="product-note">Smooth drape and understated elegance for evening wear.</p>
              <div class="price-row">
                <span class="price">$104</span>
                <span class="old-price">$139</span>
              </div>
              <a href="accessories.php" class="btn btn-secondary full-width">Add accessories</a>
            </div>
          </article>
        </div>
      </div>
    </section>

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