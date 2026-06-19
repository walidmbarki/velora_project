<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Velora • Sale</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="topbar">Sale • Seasonal markdowns across clothing and accessories</div>

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
          <li><a href="sale.php" class="active-link">Sale</a></li>
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
          <span class="eyebrow">Sale • Limited time</span>
          <h1>Selected wardrobe pieces now reduced.</h1>
          <p>
            Shop markdowns across women, men, footwear, and accessories, presented with the same clean layout and fashion-focused imagery as the main collections.
          </p>
          <div class="hero-actions">
            <a href="products.php" class="btn btn-primary">Shop Products</a>
            <a href="index.php" class="btn btn-secondary">Back to home</a>
          </div>

          <div class="hero-meta">
            <div>
              <strong>Consistent design</strong>
              <span>Sale uses the same professional layout and imagery as full-price pages.</span>
            </div>
            <div>
              <strong>Clear linking</strong>
              <span>Easy routes back to women, men, accessories, and support pages.</span>
            </div>
            <div>
              <strong>Category coverage</strong>
              <span>Reductions pulled from all major clothing and accessory categories.</span>
            </div>
          </div>
        </div>

        <div class="hero-showcase">
          <article class="hero-main-card">
            <img src="https://picsum.photos/seed/velora-sale-hero-01/900/1100" alt="Sale fashion campaign" width="900" height="1100" loading="eager">
            <div class="hero-overlay-card">
              <span>Seasonal markdowns</span>
              Apparel-led sale presentation that still feels like part of the main collections.
            </div>
          </article>
          <article class="hero-side-card">
            <img src="https://picsum.photos/seed/velora-sale-hero-02/500/1100" alt="Sale clothing styling detail" width="500" height="1100" loading="eager">
          </article>
        </div>
      </div>
    </section>

    <!-- FEATURED SALE PRODUCTS -->
    <section class="section" id="featured-products">
      <div class="container">
        <div class="split-heading">
          <div>
            <p class="mini-label">Discounted picks</p>
            <h2 class="section-title left">Key markdowns from each category</h2>
          </div>
          <a href="about.php#shipping" class="text-link">Shipping & returns</a>
        </div>

        <div class="products-grid">
          <!-- Women blazer -->
          <article class="product-card">
            <div class="product-image">
              <img src="https://picsum.photos/seed/velora-sale-prod-01-women-blazer/600/750" alt="Women blazer on sale" width="600" height="750" loading="lazy">
              <span class="product-tag">Women</span>
            </div>
            <div class="product-info">
              <div class="product-category">Women • Sale</div>
              <h3>Neutral Wool Blazer</h3>
              <p class="product-note">Reduced tailoring from the women’s main collection.</p>
              <div class="price-row">
                <span class="price">$89</span>
                <span class="old-price">$132</span>
              </div>
              <a href="women.php" class="btn btn-secondary full-width">View women’s collection</a>
            </div>
          </article>

          <!-- Men jacket -->
          <article class="product-card">
            <div class="product-image">
              <img src="https://picsum.photos/seed/velora-sale-prod-02-men-jacket/600/750" alt="Men jacket on sale" width="600" height="750" loading="lazy">
              <span class="product-tag">Men</span>
            </div>
            <div class="product-info">
              <div class="product-category">Men • Sale</div>
              <h3>Structured Field Jacket</h3>
              <p class="product-note">A clean men’s outerwear piece with markdown pricing.</p>
              <div class="price-row">
                <span class="price">$98</span>
                <span class="old-price">$146</span>
              </div>
              <a href="men.php" class="btn btn-secondary full-width">View men’s collection</a>
            </div>
          </article>

          <!-- Accessory bag -->
          <article class="product-card">
            <div class="product-image">
              <img src="https://picsum.photos/seed/velora-sale-prod-03-bag/600/750" alt="Bag on sale" width="600" height="750" loading="lazy">
              <span class="product-tag">Accessory</span>
            </div>
            <div class="product-info">
              <div class="product-category">Accessories • Sale</div>
              <h3>Leather Crossbody Bag</h3>
              <p class="product-note">A fashion-led accessory presented with stronger value.</p>
              <div class="price-row">
                <span class="price">$58</span>
                <span class="old-price">$87</span>
              </div>
              <a href="accessories.php" class="btn btn-secondary full-width">View full accessories</a>
            </div>
          </article>

          <!-- Sneakers -->
          <article class="product-card">
            <div class="product-image">
              <img src="https://picsum.photos/seed/velora-sale-prod-04-sneakers/600/750" alt="Sneakers on sale" width="600" height="750" loading="lazy">
              <span class="product-tag">Shoes</span>
            </div>
            <div class="product-info">
              <div class="product-category">Shoes • Sale</div>
              <h3>Minimal White Sneakers</h3>
              <p class="product-note">Versatile sneakers with a reduced premium price.</p>
              <div class="price-row">
                <span class="price">$74</span>
                <span class="old-price">$118</span>
              </div>
              <a href="men.php" class="btn btn-secondary full-width">See men’s outfits</a>
            </div>
          </article>

          <!-- Women trousers -->
          <article class="product-card">
            <div class="product-image">
              <img src="https://picsum.photos/seed/velora-sale-prod-05-trousers/600/750" alt="Women trousers on sale" width="600" height="750" loading="lazy">
              <span class="product-tag">Women</span>
            </div>
            <div class="product-info">
              <div class="product-category">Women • Sale</div>
              <h3>Wide Leg Trousers</h3>
              <p class="product-note">Relaxed tailoring made more accessible in the sale section.</p>
              <div class="price-row">
                <span class="price">$56</span>
                <span class="old-price">$84</span>
              </div>
              <a href="women.php" class="btn btn-secondary full-width">Back to women</a>
            </div>
          </article>

          <!-- Men knitwear -->
          <article class="product-card">
            <div class="product-image">
              <img src="https://picsum.photos/seed/velora-sale-prod-06-knit/600/750" alt="Men knitwear on sale" width="600" height="750" loading="lazy">
              <span class="product-tag">Men</span>
            </div>
            <div class="product-info">
              <div class="product-category">Men • Sale</div>
              <h3>Soft Merino Knit</h3>
              <p class="product-note">Layered knitwear with a colder-season markdown.</p>
              <div class="price-row">
                <span class="price">$61</span>
                <span class="old-price">$92</span>
              </div>
              <a href="men.php" class="btn btn-secondary full-width">Back to men</a>
            </div>
          </article>

          <!-- Belt -->
          <article class="product-card">
            <div class="product-image">
              <img src="https://picsum.photos/seed/velora-sale-prod-07-belt/600/750" alt="Belt on sale" width="600" height="750" loading="lazy">
              <span class="product-tag">Accessory</span>
            </div>
            <div class="product-info">
              <div class="product-category">Accessories • Sale</div>
              <h3>Polished Leather Belt</h3>
              <p class="product-note">A subtle finishing piece at entry-level pricing.</p>
              <div class="price-row">
                <span class="price">$32</span>
                <span class="old-price">$48</span>
              </div>
              <a href="accessories.php" class="btn btn-secondary full-width">View accessories</a>
            </div>
          </article>

          <!-- Women dress -->
          <article class="product-card">
            <div class="product-image">
              <img src="https://picsum.photos/seed/velora-sale-prod-08-dress/600/750" alt="Women dress on sale" width="600" height="750" loading="lazy">
              <span class="product-tag">Women</span>
            </div>
            <div class="product-info">
              <div class="product-category">Women • Sale</div>
              <h3>Fluid Occasion Dress</h3>
              <p class="product-note">A reduced occasion piece linked back to the full women’s range.</p>
              <div class="price-row">
                <span class="price">$78</span>
                <span class="old-price">$118</span>
              </div>
              <a href="women.php" class="btn btn-secondary full-width">Go to women’s page</a>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- EDITORIAL STORY -->
    <section class="section section-soft">
      <div class="container story-grid">
        <article class="story-card">
          <img src="https://picsum.photos/seed/velora-sale-editorial-long-form/1000/1100" alt="Sale editorial with clothing focus" width="1000" height="1100" loading="lazy">
          <div class="floating-note">
            <span>Presentation note</span>
            Keeping the sale page as polished as full-price sections makes the whole brand feel more consistent.
          </div>
        </article>
        <div class="story-copy">
          <p class="mini-label">Editorial perspective</p>
          <h2 class="section-title left">A sale page that still feels like part of the main brand.</h2>
          <p class="section-text">
            Instead of a chaotic grid of discounts, this sale layout keeps the same card design,
            strong imagery, and connected links. Shoppers can move from sale back to women’s, men’s,
            and accessories pages without losing their sense of where they are.
          </p>
          <div class="points">
            <div>Imagery is still fashion-forward and clothing-focused.</div>
            <div>Product cards clearly show the original and reduced price.</div>
            <div>Navigation and footer match the rest of the site for a unified experience.</div>
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
          <a href="about.php#returns" class="text-link">Returns & refunds</a>
        </div>

        <div class="collection-links">
          <a href="women.php">
            <h3>Back to women’s full collection</h3>
            <p>Move from sale into dresses, tailoring, and knitwear.</p>
          </a>
          <a href="men.php">
            <h3>Back to men’s full collection</h3>
            <p>Continue browsing coats, shirts, and everyday staples.</p>
          </a>
          <a href="accessories.php">
            <h3>Back to accessories</h3>
            <p>See the non-sale accessory range and outfit completers.</p>
          </a>
        </div>
      </div>
    </section>

    <!-- SALE NEWSLETTER -->
    <section class="section section-soft">
      <div class="container">
        <div class="newsletter-panel">
          <div>
            <p class="mini-label">Sale updates</p>
            <h2 class="section-title left">Don’t miss upcoming sale drops.</h2>
            <p class="section-text">
              Join the mailing list for early access to new markdowns, special events, and limited-time promotions across all categories.
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