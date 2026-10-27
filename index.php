<?php
/* A página do site. Os blocos estão em partials/, os textos e listas em content.php, os sabonetes na base de dados (db.php). */
$site = require __DIR__ . '/content.php';
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="configs.css?v=<?= filemtime(__DIR__ . '/configs.css') ?>" />
  <?php include __DIR__ . '/share-head.php'; ?>
  <link rel="preload" as="image" href="imgs/Ipad_Mae_Hero@2x.webp" media="(max-width: 1081px)" fetchpriority="high" />
  <link rel="preload" as="image" href="imgs/mainbackground.webp" media="(min-width: 1082px)" fetchpriority="high" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" />
  <noscript>
    <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" />
  </noscript>
  <script src="animation.js?v=<?= filemtime(__DIR__ . '/animation.js') ?>" defer></script>
</head>

<body style="margin: 0">
  <?php mae_demo_bar(); ?>
  <div class="main-container">
    <?php include __DIR__ . '/partials/hero.php'; ?>

    <main class="produtos" id="quem-somos">
      <h2 class="produtos-title">
        <span class="title-anossa">a nossa</span><br>
        <span class="title-colecao">colecção</span>
      </h2>
      <?php include __DIR__ . '/fetch_soaps.php'; ?>
      <?php foreach ($soaps as $index => $soap): ?>
        <div class="product-container <?= ($index === 1 || $index === 3) ? 'reverse' : '' ?>">
          <img src="<?= htmlspecialchars($soap['image_url']) ?>" alt="<?= htmlspecialchars($soap['title']) ?>"
            class="imgs-sabonete" width="900" height="677" loading="lazy" decoding="async">
          <div class="product-text">
            <h2 class="product-title"><?= htmlspecialchars($soap['title']) ?></h2>
            <div class="product-info">
              <p class="product-price"><strong><?= number_format($soap['price'], 2) ?>€</strong></p>
              <p class="product-description"><?= htmlspecialchars($soap['description']) ?></p>
            </div>
            <p class="product-highlight"><?= htmlspecialchars($soap['highlight'] ?? '') ?></p>
            <p class="product-ingredients">
              <strong>Ingredientes:</strong> <?= htmlspecialchars($soap['ingredients'] ?? '') ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </main>
  </div>

  <?php include __DIR__ . '/partials/kit.php'; ?>
  <?php include __DIR__ . '/partials/novidades.php'; ?>
  <?php include __DIR__ . '/partials/faqs.php'; ?>
  <?php include __DIR__ . '/partials/footer.php'; ?>
  <?php include __DIR__ . '/partials/contact-popup.php'; ?>
</body>

</html>
