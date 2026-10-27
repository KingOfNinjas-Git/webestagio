<section class="novidades section container" id="novidades" aria-labelledby="novidades-title">
  <div class="section-head">
    <p class="eyebrow">Acabadinhos de chegar</p>
    <h2 class="section-title" id="novidades-title">Novidades</h2>
  </div>
  <div class="novidades-grid">
    <?php foreach ($site['novidades'] as [$image, $name]): ?>
      <figure class="novidade">
        <img src="imgs/imgs-produtos/<?= htmlspecialchars($image) ?>-320.webp"
          srcset="imgs/imgs-produtos/<?= htmlspecialchars($image) ?>-320.webp 320w, imgs/imgs-produtos/<?= htmlspecialchars($image) ?>.webp 640w"
          sizes="(min-width: 1180px) 280px, (min-width: 760px) 25vw, 50vw" alt="<?= htmlspecialchars($name) ?>" width="640" height="640" loading="lazy" decoding="async" />
        <figcaption><?= htmlspecialchars($name) ?></figcaption>
      </figure>
    <?php endforeach; ?>
  </div>
</section>
