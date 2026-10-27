<?php
/* A página do site. Os blocos estão em partials/, os textos e listas em content.php, os sabonetes na base de dados (db.php). */
$site = require __DIR__ . '/content.php';
require __DIR__ . '/fetch_soaps.php';

/* A versão do ficheiro vai no endereço: quando o ficheiro muda, o navegador e a cache vão buscar o novo. */
$v = static fn(string $file): int => filemtime(__DIR__ . '/' . $file);
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="styles.css?v=<?= $v('styles.css') ?>" />
  <?php include __DIR__ . '/share-head.php'; ?>
  <link rel="preload" as="font" type="font/woff2" href="fonts/GothamHTF/GothamHTF-Bold.woff2" crossorigin />
  <link rel="preload" as="font" type="font/woff2" href="fonts/Raleway-latin.woff2" crossorigin />
  <script src="site.js?v=<?= $v('site.js') ?>" defer></script>
</head>

<body>
  <a class="skip-link" href="#quem-somos">Saltar para o conteúdo</a>
  <?php mae_demo_bar(); ?>
  <?php include __DIR__ . '/partials/hero.php'; ?>

  <main>
    <section class="collection container" id="quem-somos" aria-labelledby="collection-title">
      <h2 class="section-title" id="collection-title">
        <span class="line-1">a nossa</span>
        <span class="line-2">colecção</span>
      </h2>
      <?php foreach ($soaps as $soap): ?>
        <?php $image = htmlspecialchars($soap['image_url']); ?>
        <article class="soap">
          <div class="soap-image">
            <img src="<?= str_replace('.webp', '-480.webp', $image) ?>"
              srcset="<?= str_replace('.webp', '-480.webp', $image) ?> 480w, <?= $image ?> 900w"
              sizes="(min-width: 1020px) 470px, (min-width: 760px) 45vw, 90vw"
              alt="<?= htmlspecialchars($soap['title']) ?>" width="900" height="677" loading="lazy" decoding="async" />
          </div>
          <div class="soap-text">
            <h3 class="soap-title"><?= htmlspecialchars($soap['title']) ?></h3>
            <p class="soap-price"><?= number_format($soap['price'], 2) ?>€</p>
            <p class="soap-description"><?= htmlspecialchars($soap['description']) ?></p>
            <p class="soap-highlight"><?= htmlspecialchars($soap['highlight'] ?? '') ?></p>
            <p class="soap-ingredients"><strong>Ingredientes:</strong> <?= htmlspecialchars($soap['ingredients'] ?? '') ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </section>

    <?php include __DIR__ . '/partials/kit.php'; ?>
    <?php include __DIR__ . '/partials/novidades.php'; ?>
    <?php include __DIR__ . '/partials/faqs.php'; ?>
  </main>

  <?php include __DIR__ . '/partials/footer.php'; ?>
  <?php include __DIR__ . '/partials/contact-popup.php'; ?>
</body>

</html>
