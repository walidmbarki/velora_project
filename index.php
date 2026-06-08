<?php
include 'db.php';
?>
<!DOCTYPE >
< lang="en" data-theme="light">
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
        <svg viewBox="0 0 64 64" fill="none" aria-hidden="true">
          <path d="M12 14L32 50L52 14" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M22 14L32 32L42 14" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Velora
      </a>

      <nav>
        <ul class="nav-links">
<<<<<<< HEAD
          <li><a href="index.php
  " class="active-link">Home</a></li>
          <li><a href="women.php
  ">Women</a></li>
          <li><a href="men.php
  ">Men</a></li>
          <li><a href="accessories.php
  ">Accessories</a></li>
          <li><a href="sale.php
  ">Sale</a></li>
          <li><a href="about.php
  ">About</a></li>
        </ul>
      </nav>
=======
          <li><a href="index.php" class="active-link">Home</a></li>
          <li><a href="women.html">Women</a></li>
          <li><a href="men.html">Men</a></li>
          <li><a href="accessories.html">Accessories</a></li>
          <li><a href="sale.html">Sale</a></li>
          <li><a href="about.html">About</a></li>
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
</div>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee

      <div class="nav-actions">
        <button class="icon-btn" aria-label="Search">⌕</button>
        <button class="icon-btn" aria-label="Wishlist">♡</button>
        <button class="icon-btn" aria-label="Cart">🛍</button>
        <button class="icon-btn" id="themeToggle" aria-label="Toggle theme">◐</button>
      </div>
    </div>
  </header>

  <main>
    <!-- HERO -->
    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-text">
          <span class="eyebrow">Professional apparel platform</span>
          <h1>Luxury-inspired fashion shopping with stronger structure and better page flow.</h1>
          <p>
            This version is built to feel more professional through longer content sections, clearer navigation, cleaner visual hierarchy, and linked pages for women, men, accessories, sale, and brand information.
          </p>
          <div class="hero-actions">
<<<<<<< HEAD
            <a href="women.php
    " class="btn btn-primary">Shop Women</a>
            <a href="men.php
    " class="btn btn-secondary">Shop Men</a>
=======
            <a href="women.html" class="btn btn-primary">Shop Women</a>
            <a href="men.html" class="btn btn-secondary">Shop Men</a>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
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
          <!-- HERO MAIN: Pinterest URL 1 -->
          <article class="hero-main-card">
            <img
              src="https://i.pinimg.com/736x/61/06/e9/6106e9e5f4443f981ac78da994d0abf8.jpg"
              alt="Editorial fashion hero"
              width="900" height="1100" loading="eager">
            <div class="hero-overlay-card">
              <span>Seasonal campaign</span>
              Tailoring, premium knitwear, clean outerwear, and wardrobe essentials.
            </div>
          </article>

          <!-- HERO SIDE: Pinterest URL 2 -->
          <article class="hero-side-card">
            <img
              src="https://i.pinimg.com/474x/fb/f6/a0/fbf6a029be7fcba7e2bd7693f3fb77c1.jpg"
              alt="Fashion lookbook with apparel styling"
              width="500" height="1100" loading="eager">
          </article>
        </div>
      </div>
    </section>

    <!-- TRUST STRIP (no images) -->

    <section class="section">
      <div class="container">
        <div class="trust-strip">
          <div class="trust-item">
            <h3>Premium Presentation</h3>
            <p>Professional category layouts with strong typography and cleaner product scanning.</p>
          </div>
          <div class="trust-item">
            <h3>Longer Pages</h3>
            <p>Each page includes editorial sections, collections, product grids, and supporting content.</p>
          </div>
          <div class="trust-item">
            <h3>Clear Linking</h3>
            <p>Main navigation, cross-category cards, footer links, and editorial routes connect every page.</p>
          </div>
          <div class="trust-item">
            <h3>Fashion Focus</h3>
            <p>All imagery and copy center on clothing, seasonal dressing, and apparel collections.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CATEGORIES -->
    <section class="section section-soft">
      <div class="container">
        <div class="split-heading">
          <div>
            <p class="mini-label">Collections</p>
            <h2 class="section-title left">Shop the main categories</h2>
          </div>
<<<<<<< HEAD
          <a href="about.php
  " class="text-link">Read the brand story</a>
=======
          <a href="about.html" class="text-link">Read the brand story</a>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
        </div>

        <div class="category-feature-grid">
          <!-- WOMEN CATEGORY: Pinterest URL 3 -->
<<<<<<< HEAD
          <a href="women.php
  " class="category-feature-card large">
=======
          <a href="women.html" class="category-feature-card large">
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
            <img
              src="https://i.pinimg.com/736x/75/70/6d/75706d3081c42363c1c058b78739f27d.jpg"
              alt="Women clothing collection with tailoring and dresses"
              width="900" height="1100" loading="lazy">
            <div class="category-feature-content">
              <span>Women</span>
              <h3>Tailored layers, dresses, knitwear, and everyday elegance</h3>
            </div>
          </a>

          <!-- MEN CATEGORY: Pinterest URL 4 -->
<<<<<<< HEAD
          <a href="men.php
  " class="category-feature-card">
=======
          <a href="men.html" class="category-feature-card">
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
            <img
              src="https://i.pinimg.com/736x/32/7f/8c/327f8cb12b91942d8dc2fb451e652bbc.jpg"
              alt="Men clothing collection with shirts and coats"
              width="700" height="900" loading="lazy">
            <div class="category-feature-content">
              <span>Men</span>
              <h3>Shirts, structured outerwear, and refined basics</h3>
            </div>
          </a>

          <!-- ACCESSORIES CATEGORY: URL 8 (UniversalClass fashion cover) -->
<<<<<<< HEAD
          <a href="accessories.php
  " class="category-feature-card">
=======
          <a href="accessories.html" class="category-feature-card">
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
            <img
              src="https://m.universalclass.com/30/explore/crncovers/fashion-626086028.jpg"
              alt="Fashion accessories and apparel styling"
              width="700" height="900" loading="lazy">
            <div class="category-feature-content">
              <span>Accessories</span>
              <h3>Bags and finishing details that complete the outfit</h3>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- NEW ARRIVALS -->
    <section class="section" id="new-arrivals">
      <div class="container">
        <div class="split-heading">
          <div>
            <p class="mini-label">New arrivals</p>
            <h2 class="section-title left">Fresh pieces across the store</h2>
          </div>
<<<<<<< HEAD
          <a href="sale.php
  " class="text-link">See current markdowns</a>
=======
          <a href="sale.html" class="text-link">See current markdowns</a>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
        </div>

        <div class="products-grid">
          <!-- HOME PRODUCT 1: Pinterest URL 5 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/originals/58/bb/30/58bb30b04520a8e18c02acad51063160.jpg"
                alt="Ivory blazer on fashion model"
                width="600" height="750" loading="lazy">
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
<<<<<<< HEAD
              <a href="women.php
      #featured-products" class="btn btn-secondary full-width">View Women</a>
=======
              <a href="women.html#featured-products" class="btn btn-secondary full-width">View Women</a>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
            </div>
          </article>

          <!-- HOME PRODUCT 2: Pinterest URL 6 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/474x/39/61/f1/3961f1a1ea5217526ed1e983bd4d3f99.jpg"
                alt="Men oversized shirt fashion editorial"
                width="600" height="750" loading="lazy">
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
<<<<<<< HEAD
              <a href="men.php
      #featured-products" class="btn btn-secondary full-width">View Men</a>
=======
              <a href="men.html#featured-products" class="btn btn-secondary full-width">View Men</a>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
            </div>
          </article>

          <!-- HOME PRODUCT 3: Pinterest URL 7 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/474x/ff/d1/87/ffd18741ea0a87f41706fa68df1ad52c.jpg"
                alt="Women knitwear apparel photography"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Women</span>
            </div>
            <div class="product-info">
              <div class="product-category">Women • Knitwear</div>
              <h3>Soft Wool Layer Top</h3>
              <p class="product-note">Textural knitwear made for transitional styling and layering.</p>
              <div class="price-row">
                <span class="price">$72</span>
                <span class="old-price">$95</span>
              </div>
<<<<<<< HEAD
              <a href="women.php
      #new-season" class="btn btn-secondary full-width">Explore Edit</a>
=======
              <a href="women.html#new-season" class="btn btn-secondary full-width">Explore Edit</a>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
            </div>
          </article>

          <!-- HOME PRODUCT 4: Bershka banner URL 9 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://www.thefashionisto.com/wp-content/uploads/2024/05/BERSHKA-Summer-2024-Drop-II-750x420.jpg"
                alt="Men long coat fashion shoot / summer drop"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Men</span>
            </div>
            <div class="product-info">
              <div class="product-category">Men • Outerwear</div>
              <h3>Longline Wool Coat</h3>
              <p class="product-note">A clean, structured coat designed to anchor seasonal wardrobes.</p>
              <div class="price-row">
                <span class="price">$144</span>
                <span class="old-price">$188</span>
              </div>
<<<<<<< HEAD
              <a href="men.php
      #outerwear-edit" class="btn btn-secondary full-width">Outerwear Edit</a>
=======
              <a href="men.html#outerwear-edit" class="btn btn-secondary full-width">Outerwear Edit</a>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- EDITORIAL SECTION -->
    <section class="section section-soft">
      <div class="container editorial-grid">
        <article class="editorial-card">
          <!-- PULL&BEAR help image URL 10 -->
          <img
            src="https://static.pullandbear.net/assets/public/f482/a109/bdd948d3bf2f/7cf0b447401b/HELP/HELP.jpg?ts=1761129626873"
            alt="Fashion editorial with apparel styling and layered looks"
            width="1000" height="1100" loading="lazy">
          <div class="floating-note">
            <span>Editorial emphasis</span>
            Professional stores use strong clothing imagery and enough content depth to support browsing and trust.
          </div>
        </article>
        <div class="editorial-copy">
          <p class="mini-label">Why this layout feels stronger</p>
          <h2 class="section-title left">A longer homepage creates a better shopping journey.</h2>
          <p class="section-text">
            Instead of stopping at one hero and one product row, this homepage adds category navigation, arrivals, editorial storytelling, linked looks, and a stronger footer structure. That makes the experience feel more like a real brand site and less like a template.
          </p>
          <div class="points">
            <div>Separate entry points for women, men, accessories, sale, and brand content.</div>
            <div>Product cards include title, category, price, and direct links into the correct collection pages.</div>
            <div>Long-form sections make the store feel more complete and professional.</div>
          </div>
<<<<<<< HEAD
          <a href="about.php
  " class="btn btn-primary">See Our Story</a>
=======
          <a href="about.html" class="btn btn-primary">See Our Story</a>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
        </div>
      </div>
    </section>

    <!-- RELATED COLLECTIONS (no images) -->

    <section class="section section-soft" id="looks">
      <div class="container">
        <div class="split-heading">
          <div>
            <p class="mini-label">Looks</p>
            <h2 class="section-title left">Outfit inspiration across categories</h2>
          </div>
<<<<<<< HEAD
          <a href="sale.php
  " class="text-link">Shop reduced pieces</a>
=======
          <a href="sale.html" class="text-link">Shop reduced pieces</a>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
        </div>

        <div class="looks-grid">
          <!-- LOOK 1: LinkedIn fashion board URL 11 -->
          <article class="look-card">
            <img
              src="https://media.licdn.com/dms/image/v2/D4E22AQG1E0Wy7N4f6w/feedshare-shrink_800/B4EZwoBQygGkAg-/0/1770197946959?e=2147483647&v=beta&t=H_Fg5EFBwtCusV16kUvFNBSRGvABs8ERCtA4OwA4lxk"
              alt="Women tailoring outfit inspiration"
              width="700" height="900" loading="lazy">
            <div class="look-caption">
              <strong>Women / Tailored neutral</strong>
              <p>Sharp outer layers and soft inner textures.</p>
            </div>
          </article>

          <!-- LOOK 2: Medium fashion hero URL 12 -->
          <article class="look-card">
            <img
              src="https://miro.medium.com/v2/resize:fit:1400/0*5hazjP_aVHIEjojz.jpg"
              alt="Men layered fashion outfit inspiration"
              width="700" height="900" loading="lazy">
            <div class="look-caption">
              <strong>Men / Clean layering</strong>
              <p>Relaxed structure with premium proportion.</p>
            </div>
          </article>

          <!-- LOOK 3: Cristiano Ronaldo style image URL 13 -->
          <article class="look-card">
            <img
              src="https://static.iwmbuzz.com/wp-content/uploads/2022/01/10-pictures-to-prove-that-cristiano-ronaldos-style-game-is-as-savage-as-he-is-12-600x920.jpg"
              alt="Seasonal fashion styling with apparel focus"
              width="700" height="900" loading="lazy">
            <div class="look-caption">
              <strong>Seasonal / Transitional dressing</strong>
              <p>Pieces that move easily from day to evening.</p>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- NEWSLETTER, FOOTER, SCRIPT remain identical to your existing index.php -->
    <!-- ... (keep your current newsletter section, footer, and themeToggle script here) ... -->

  </main>

  <!-- FOOTER (same as you already have) -->
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
<<<<<<< HEAD
          <a href="women.php
  ">Women</a>
          <a href="men.php
  ">Men</a>
          <a href="accessories.php
  ">Accessories</a>
          <a href="sale.php
  ">Sale</a>
=======
          <a href="women.html">Women</a>
          <a href="men.html">Men</a>
          <a href="accessories.html">Accessories</a>
          <a href="sale.html">Sale</a>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
        </div>

        <div class="footer-links">
          <h4>Explore</h4>
<<<<<<< HEAD
          <a href="about.php
  ">Our Story</a>
          <a href="index.php
  #new-arrivals">New Arrivals</a>
          <a href="index.php
  #looks">Looks</a>
          <a href="index.php
  #newsletter">Newsletter</a>
=======
          <a href="about.html">Our Story</a>
          <a href="index.php#new-arrivals">New Arrivals</a>
          <a href="index.php#looks">Looks</a>
          <a href="index.php#newsletter">Newsletter</a>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
        </div>

        <div class="footer-links">
          <h4>Support</h4>
<<<<<<< HEAD
          <a href="about.php
  #shipping">Shipping</a>
          <a href="about.php
  #returns">Returns</a>
          <a href="about.php
  #sizing">Sizing Guide</a>
          <a href="about.php
  #contact">Contact</a>
=======
          <a href="about.html#shipping">Shipping</a>
          <a href="about.html#returns">Returns</a>
          <a href="about.html#sizing">Sizing Guide</a>
          <a href="about.html#contact">Contact</a>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
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
<<<<<<< HEAD
  const p = document.documentElement;
  if (themeToggle) {
    themeToggle.addEventListener("click", () => {
      const current = php.getAttribute("data-theme");
      php.setAttribute("data-theme", current === "dark" ? "light" : "dark");
=======
  const html = document.documentElement;
  if (themeToggle) {
    themeToggle.addEventListener("click", () => {
      const current = html.getAttribute("data-theme");
      html.setAttribute("data-theme", current === "dark" ? "light" : "dark");
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
    });
  }
  </script>
</body>
<<<<<<< HEAD
</>
=======
</html>
>>>>>>> ea3e5a7971f45ee872bcf3272991f877ec1bf1ee
