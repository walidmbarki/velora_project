<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Velora • Accessories</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="topbar">Accessories • Bags, jewelry, eyewear, and refined finishing details</div>

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
          <li><a href="accessories.php" class="active-link">Accessories</a></li>
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
          <span class="eyebrow">Accessories • Finishing details</span>
          <h1>Small pieces that define the final look.</h1>
          <p>
            Explore handbags, necklaces, sunglasses, and premium details selected to complement the women’s and men’s collections without overpowering them.
          </p>
          <div class="hero-actions">
            <a href="products.php" class="btn btn-primary">Shop Products</a>
            <a href="index.php" class="btn btn-secondary">Back to home</a>
          </div>

          <div class="hero-meta">
            <div>
              <strong>Fashion-focused</strong>
              <span>Accessories are always shown in a clothing context, not randomly.</span>
            </div>
            <div>
              <strong>Collection support</strong>
              <span>This page connects directly to women’s and men’s apparel pages.</span>
            </div>
            <div>
              <strong>Clear structure</strong>
              <span>Hero, featured range, editorial story, related links, and newsletter.</span>
            </div>
          </div>
        </div>

        <div class="hero-showcase">
          <!-- HERO MAIN: women hero image -->
          <article class="hero-main-card">
            <img
              src="https://i.pinimg.com/1200x/1a/5d/e8/1a5de891d0282355ed56ecf32f6fe86c.jpg"
              alt="Accessories hero close to clothing"
              width="900" height="1100" loading="eager">
            <div class="hero-overlay-card">
              <span>Accessory spotlight</span>
              Leather bags, jewelry, and eyewear that are designed around the apparel story.
            </div>
          </article>

          <!-- HERO SIDE: men hero side -->
          <article class="hero-side-card">
            <img
              src="https://i.pinimg.com/736x/cb/6c/e8/cb6ce84ff85b54507451edf96e6c6c62.jpg"
              alt="Accessories and clothing styling flat lay"
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
            <p class="mini-label">Featured accessories collection</p>
            <h2 class="section-title left">Best pieces on this page</h2>
          </div>
          <a href="sale.php" class="text-link">See discounted accessories</a>
        </div>

        <div class="products-grid">
          <!-- Bag (women look) -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/40/9c/34/409c340bbf6360c479c9793318f61328.jpg"
                alt="Structured shoulder bag"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Bag</span>
            </div>
            <div class="product-info">
              <div class="product-category">Accessories • Bags</div>
              <h3>Structured Shoulder Bag</h3>
              <p class="product-note">Compact structure with an everyday luxury feel.</p>
              <div class="price-row">
                <span class="price">$96</span>
                <span class="old-price">$124</span>
              </div>
              <a href="women.php" class="btn btn-secondary full-width">Pair with women’s looks</a>
            </div>
          </article>

          <!-- Tote (mixed styling) -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/2c/10/5e/2c105e9413e6dd23bc83f9674316721e.jpg"
                alt="Leather tote bag"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Tote</span>
            </div>
            <div class="product-info">
              <div class="product-category">Accessories • Bags</div>
              <h3>Signature Leather Tote</h3>
              <p class="product-note">A larger silhouette for work, travel, and wardrobe versatility.</p>
              <div class="price-row">
                <span class="price">$88</span>
                <span class="old-price">$132</span>
              </div>
              <a href="men.php" class="btn btn-secondary full-width">Pair with men’s looks</a>
            </div>
          </article>

          <!-- Jewelry (women detail) -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/64/ae/3c/64ae3c9dcb767a96373764e51bd10dd2.jpg"
                alt="Gold necklace"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Jewelry</span>
            </div>
            <div class="product-info">
              <div class="product-category">Accessories • Jewelry</div>
              <h3>Minimal Gold Necklace</h3>
              <p class="product-note">A subtle accent for understated styling.</p>
              <div class="price-row">
                <span class="price">$38</span>
                <span class="old-price">$54</span>
              </div>
              <a href="index.php#looks" class="btn btn-secondary full-width">See how it’s styled</a>
            </div>
          </article>

          <!-- Eyewear (men street look) -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/99/4e/5f/994e5f97aba26a23d4a16e9f244d9b93.jpg"
                alt="Sunglasses and outfit"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Eyewear</span>
            </div>
            <div class="product-info">
              <div class="product-category">Accessories • Eyewear</div>
              <h3>Classic Frame Sunglasses</h3>
              <p class="product-note">Simple lines and fashion-led finishing.</p>
              <div class="price-row">
                <span class="price">$49</span>
                <span class="old-price">$68</span>
              </div>
              <a href="sale.php" class="btn btn-secondary full-width">Check sale section</a>
            </div>
          </article>

          <!-- Belt / detail (women coat detail) -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/32/a2/72/32a272d29d5538829aad11c22f1c2cf8.jpg"
                alt="Leather belt accessory"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Detail</span>
            </div>
            <div class="product-info">
              <div class="product-category">Accessories • Belts</div>
              <h3>Refined Leather Belt</h3>
              <p class="product-note">A clean styling element designed to support apparel silhouettes.</p>
              <div class="price-row">
                <span class="price">$46</span>
                <span class="old-price">$63</span>
              </div>
              <a href="women.php" class="btn btn-secondary full-width">Pair with women’s looks</a>
            </div>
          </article>

          <!-- Scarf / seasonal (mixed neutral outfit) -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/36/63/c2/3663c241f24e81ba5cc077152e656815.jpg"
                alt="Fashion scarf"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Seasonal</span>
            </div>
            <div class="product-info">
              <div class="product-category">Accessories • Scarves</div>
              <h3>Soft Seasonal Scarf</h3>
              <p class="product-note">A layered accessory built for colder wardrobe transitions.</p>
              <div class="price-row">
                <span class="price">$57</span>
                <span class="old-price">$79</span>
              </div>
              <a href="sale.php" class="btn btn-secondary full-width">See if it’s reduced</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- EDITORIAL STORY -->
    <section class="section section-soft">
      <div class="container story-grid">
        <article class="story-card">
          <!-- Men editorial shot -->
          <img
            src="https://i.pinimg.com/1200x/68/ac/ed/68aced2b07c024198dfa52a962395c06.jpg"
            alt="Accessories editorial with clothing"
            width="1000" height="1100" loading="lazy">
          <div class="floating-note">
            <span>Collection note</span>
            This accessories page stays connected to the apparel collections and helps users complete outfits, not browse in isolation.
          </div>
        </article>
        <div class="story-copy">
          <p class="mini-label">Editorial perspective</p>
          <h2 class="section-title left">Accessories that support the clothing story.</h2>
          <p class="section-text">
            A professional accessories page keeps the visuals tied to fashion and outfits.
            It also provides clear routes back to women’s and men’s collections so shoppers can assemble full looks without friction.
          </p>
          <div class="points">
            <div>Imagery shows accessories in a fashion context, often near apparel.</div>
            <div>Product cards reference where to style each item (women, men, or both).</div>
            <div>Links lead directly to the most relevant category pages and support info.</div>
          </div>
          <a href="about.php" class="btn btn-primary">Read about Velora</a>
        </div>
      </div>
    </section>

    <!-- RELATED DESTINATIONS -->
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
          <a href="women.php">
            <h3>Style with women’s pieces</h3>
            <p>Pair accessories with dresses, outerwear, and tailoring.</p>
          </a>
          <a href="men.php">
            <h3>Style with men’s pieces</h3>
            <p>Browse accessories alongside shirts, coats, and knitwear.</p>
          </a>
          <a href="sale.php">
            <h3>See discounted accessories</h3>
            <p>Move directly into reduced bags and fashion details.</p>
          </a>
        </div>
      </div>
    </section>

    <!-- ACCESSORIES NEWSLETTER -->
    <section class="section section-soft">
      <div class="container">
        <div class="newsletter-panel">
          <div>
            <p class="mini-label">Accessory updates</p>
            <h2 class="section-title left">Receive new accessories and styling ideas.</h2>
            <p class="section-text">
              Join the mailing list for launch alerts, styling inspiration, and special offers related to bags, jewelry, eyewear, and other finishing pieces.
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
            A professional fashion e-commerce concept focused on apparel-first imagery,
            long-form browsing, and clear cross-linking between collections and editorial pages.
          </p>
        </div>

        <div class="footer-links">
          <h4>Shop</h4>
          <a href="women.php">Women</a>
          <a href="men.php">Men</a>
          <a href="accessories.php">Accessories</a>
          <a href="sale.php">Sale</a>
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