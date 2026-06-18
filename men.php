<?php
require_once 'config/db.php';

$stmt = $pdo->prepare("
    SELECT *
    FROM products
    WHERE category_id = 2
    ORDER BY id DESC
");
$stmt->execute();
$menProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Velora • Men</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="topbar">Men’s collection • Premium essentials and elevated daily style</div>

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
          <li><a href="men.php" class="active-link">Men</a></li>
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
          <span class="eyebrow">Men • Refined essentials</span>
          <h1>Menswear with structure, comfort, and understated style.</h1>
          <p>
            Explore premium shirts, jackets, trousers, and modern basics designed for clean daily dressing with a luxury-inspired, calm aesthetic.
          </p>
          <div class="hero-actions">
<a href="products.php" class="btn btn-primary">Shop Products</a>
            <a href="index.php" class="btn btn-secondary">Back to home</a>
          </div>

          <div class="hero-meta">
            <div>
              <strong>Professional imagery</strong>
              <span>Only men’s apparel and fashion imagery is shown on this page.</span>
            </div>
            <div>
              <strong>Longer structure</strong>
              <span>Hero, featured range, editorial story, related links, and newsletter.</span>
            </div>
            <div>
              <strong>Connected journey</strong>
              <span>Links to women’s, accessories, sale, and support content.</span>
            </div>
          </div>
        </div>

        <div class="hero-showcase">
          <!-- HERO MAIN: URL 1 -->
          <article class="hero-main-card">
            <img
              src="https://i.pinimg.com/1200x/68/ac/ed/68aced2b07c024198dfa52a962395c06.jpg"
              alt="Men fashion hero campaign"
              width="900" height="1100" loading="eager">
            <div class="hero-overlay-card">
              <span>Men’s spotlight</span>
              Relaxed shirts, sharp coats, knitwear, and structured staples built for polished daily wear.
            </div>
          </article>

          <!-- HERO SIDE: URL 2 -->
          <article class="hero-side-card">
            <img
              src="https://i.pinimg.com/736x/cb/6c/e8/cb6ce84ff85b54507451edf96e6c6c62.jpg"
              alt="Men styling detail with clothing"
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
            <p class="mini-label">Featured men’s collection</p>
            <h2 class="section-title left">Best pieces on this page</h2>
          </div>
          <a href="sale.php" class="text-link">See men’s sale</a>
        </div>

        <div class="products-grid">
          <!-- PRODUCT 1: URL 3 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/5b/3b/1d/5b3b1d0c600151ca5debd1a720cb57f5.jpg"
                alt="Men sand shirt"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Shirt</span>
            </div>
            <div class="product-info">
              <div class="product-category">Men • Shirts</div>
              <h3>Sand Oversized Shirt</h3>
              <p class="product-note">Relaxed proportions with a polished minimal finish.</p>
              <div class="price-row">
                <span class="price">$67</span>
                <span class="old-price">$86</span>
              </div>
              <a href="about.php#sizing" class="btn btn-secondary full-width">Sizing & fit info</a>
            </div>
          </article>

          <!-- PRODUCT 2: URL 4 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/7a/fb/04/7afb04ffd88ceafdf0979344e1a32b19.jpg"
                alt="Men bomber jacket"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Outerwear</span>
            </div>
            <div class="product-info">
              <div class="product-category">Men • Jackets</div>
              <h3>Charcoal Bomber Jacket</h3>
              <p class="product-note">Daily structure with a clean premium silhouette.</p>
              <div class="price-row">
                <span class="price">$110</span>
                <span class="old-price">$149</span>
              </div>
              <a href="sale.php" class="btn btn-secondary full-width">Check if on sale</a>
            </div>
          </article>

          <!-- PRODUCT 3: URL 5 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/e3/0d/f7/e30df779954c19b0a786552c1f855492.jpg"
                alt="Men tailored trousers"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Trousers</span>
            </div>
            <div class="product-info">
              <div class="product-category">Men • Tailoring</div>
              <h3>Relaxed Tailored Trousers</h3>
              <p class="product-note">Balanced volume with understated detailing.</p>
              <div class="price-row">
                <span class="price">$78</span>
                <span class="old-price">$99</span>
              </div>
              <a href="index.php#looks" class="btn btn-secondary full-width">See styled looks</a>
            </div>
          </article>

          <!-- PRODUCT 4: URL 6 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/08/c2/da/08c2da547c14542b0e5145e675f88fbe.jpg"
                alt="Men knitwear"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Knitwear</span>
            </div>
            <div class="product-info">
              <div class="product-category">Men • Knitwear</div>
              <h3>Soft Ribbed Knit</h3>
              <p class="product-note">Textured knitwear designed for layered seasonal wear.</p>
              <div class="price-row">
                <span class="price">$72</span>
                <span class="old-price">$91</span>
              </div>
              <a href="women.php" class="btn btn-secondary full-width">See women’s knitwear</a>
            </div>
          </article>

          <!-- PRODUCT 5: URL 7 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/67/e7/cd/67e7cd0ed0c193bb4aba6f683579f15e.jpg"
                alt="Men wool coat"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Coat</span>
            </div>
            <div class="product-info">
              <div class="product-category">Men • Coats</div>
              <h3>Longline Wool Coat</h3>
              <p class="product-note">A strong outerwear piece for sharper cold-season styling.</p>
              <div class="price-row">
                <span class="price">$144</span>
                <span class="old-price">$188</span>
              </div>
              <a href="about.php#shipping" class="btn btn-secondary full-width">Shipping info</a>
            </div>
          </article>

          <!-- PRODUCT 6: URL 8 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/7a/47/ea/7a47eac945a4079b461b4252e67d7af9.jpg"
                alt="Men weekend set"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Set</span>
            </div>
            <div class="product-info">
              <div class="product-category">Men • Sets</div>
              <h3>Refined Weekend Set</h3>
              <p class="product-note">A coordinated apparel edit for effortless dressing.</p>
              <div class="price-row">
                <span class="price">$138</span>
                <span class="old-price">$176</span>
              </div>
              <a href="index.php" class="btn btn-secondary full-width">Back to homepage</a>
            </div>
          </article>

          <!-- PRODUCT 7: URL 9 -->
          <article class="product-card">
            <div class="product-image">
              <img
                src="https://i.pinimg.com/736x/99/4e/5f/994e5f97aba26a23d4a16e9f244d9b93.jpg"
                alt="Men basic t-shirt"
                width="600" height="750" loading="lazy">
              <span class="product-tag">Essential</span>
            </div>
            <div class="product-info">
              <div class="product-category">Men • Basics</div>
              <h3>Premium Cotton Tee</h3>
              <p class="product-note">A versatile foundation piece with a better fabric feel.</p>
              <div class="price-row">
                <span class="price">$44</span>
                <span class="old-price">$59</span>
              </div>
              <a href="accessories.php" class="btn btn-secondary full-width">Add accessories</a>
            </div>
          </article>

<?php foreach ($menProducts as $product): ?>

  <article class="product-card">

    <?php if (!empty($product['image'])): ?>
      <div class="product-image">
        <img
          src="<?php echo htmlspecialchars($product['image']); ?>"
          alt="<?php echo htmlspecialchars($product['name']); ?>"
          width="600"
          height="750"
          loading="lazy">
        <span class="product-tag">Men</span>
      </div>
    <?php endif; ?>

    <div class="product-info">

      <div class="product-category">
        Men • Database
      </div>

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

      <a href="product-details.php?id=<?php echo $product['id']; ?>"
         class="btn btn-secondary full-width">
        View Details
      </a>

      <a href="cart.php?add=<?php echo $product['id']; ?>"
         class="btn btn-primary full-width"
         style="margin-top:0.7rem;">
        Add To Cart
      </a>

    </div>

  </article>

<?php endforeach; ?>

</div>

    <!-- EDITORIAL STORY -->
    <section class="section section-soft" id="outerwear-edit">
      <div class="container story-grid">
        <article class="story-card">
          <!-- EDITORIAL: URL 11 -->
          <img
            src="https://i.pinimg.com/736x/41/9a/5f/419a5f12054a75b05edcb0f47290b172.jpg"
            alt="Men editorial fashion story"
            width="1000" height="1100" loading="lazy">
          <div class="floating-note">
            <span>Collection note</span>
            Longer category pages make browsing easier and help the brand feel more complete.
          </div>
        </article>
        <div class="story-copy">
          <p class="mini-label">Editorial perspective</p>
          <h2 class="section-title left">A stronger men’s collection page for real browsing.</h2>
          <p class="section-text">
            This page adds more than a product grid. It uses a hero section, a deeper featured
            range, an editorial content block, and related links so visitors can continue their journey without dead ends.
          </p>
          <div class="points">
            <div>Collection imagery stays consistent and clothing-focused.</div>
            <div>Product cards are grouped clearly under the men’s category.</div>
            <div>Related links connect this page to other sections of the website.</div>
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
            <h3>See the women’s collection</h3>
            <p>Move into dresses, tailoring, and knitwear with the same brand tone.</p>
          </a>
          <a href="accessories.php">
            <h3>Complete the outfit</h3>
            <p>Add bags and accessories that suit the men’s collection.</p>
          </a>
          <a href="sale.php">
            <h3>Browse the sale section</h3>
            <p>Continue into current markdowns without leaving the site flow.</p>
          </a>
        </div>
      </div>
    </section>

    <!-- MEN NEWSLETTER -->
    <section class="section section-soft">
      <div class="container">
        <div class="newsletter-panel">
          <div>
            <p class="mini-label">Men’s updates</p>
            <h2 class="section-title left">Get early access to new menswear drops.</h2>
            <p class="section-text">
              Receive updates on new arrivals, premium basics, outerwear, and private sale releases for the men’s collection.
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