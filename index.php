<?php
/* A página do site. Os blocos estão em partials/, os textos e listas em content.php, os sabonetes na base de dados (db.php). */
$site = require __DIR__ . '/content.php';
require __DIR__ . '/fetch_soaps.php';

/* Na versão de demonstração pedimos aos motores de busca que indexem o portefólio e não esta cópia
   (a pré-visualização ao partilhar o link continua a funcionar). */
if (mae_demo()) {
    header('X-Robots-Tag: noindex');
}

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
    <section class="collection section container" id="quem-somos" aria-labelledby="collection-title">
      <div class="section-head">
        <p class="eyebrow">Sabonetes naturais</p>
        <h2 class="section-title" id="collection-title">A nossa colecção</h2>
      </div>
      <div class="soaps">
        <?php foreach ($soaps as $soap): ?>
          <?php $image = htmlspecialchars($soap['image_url']); ?>
          <article class="soap">
            <div class="soap-image">
              <img src="<?= str_replace('.webp', '-480.webp', $image) ?>"
                srcset="<?= str_replace('.webp', '-480.webp', $image) ?> 480w, <?= str_replace('.webp', '-720.webp', $image) ?> 720w, <?= $image ?> 900w"
                sizes="(min-width: 1180px) 560px, (min-width: 760px) 45vw, 90vw"
                alt="<?= htmlspecialchars($soap['title']) ?>" width="900" height="677" loading="lazy" decoding="async" />
            </div>
            <div class="soap-body">
              <div class="soap-top">
                <h3 class="soap-title"><?= htmlspecialchars($soap['title']) ?></h3>
                <p class="soap-price"><?= number_format($soap['price'], 2) ?>€</p>
              </div>
              <p class="soap-description"><?= htmlspecialchars($soap['description']) ?></p>
              <p class="soap-highlight"><?= htmlspecialchars($soap['highlight'] ?? '') ?></p>
              <details class="soap-ingredients">
                <summary>Ingredientes</summary>
                <p><?= htmlspecialchars($soap['ingredients'] ?? '') ?></p>
              </details>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <?php include __DIR__ . '/partials/kit.php'; ?>
    <?php include __DIR__ . '/partials/novidades.php'; ?>
    <?php include __DIR__ . '/partials/faqs.php'; ?>
  </main>

  <?php include __DIR__ . '/partials/footer.php'; ?>
  <?php include __DIR__ . '/partials/contact-popup.php'; ?>
</body>

</html>
