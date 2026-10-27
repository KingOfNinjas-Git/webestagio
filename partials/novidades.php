<section class="novidades" aria-labelledby="novidades-title">
  <h2 class="section-title" id="novidades-title">novidades</h2>
  <div class="novidades-grid">
    <?php foreach ($site['novidades'] as [$image, $name]): ?>
      <figure class="novidade" style="margin:0">
        <img src="imgs/imgs-produtos/<?= htmlspecialchars($image) ?>-320.webp"
          srcset="imgs/imgs-produtos/<?= htmlspecialchars($image) ?>-320.webp 320w, imgs/imgs-produtos/<?= htmlspecialchars($image) ?>.webp 640w"
          sizes="(min-width: 760px) 25vw, 50vw" alt="<?= htmlspecialchars($name) ?>" width="640" height="640" loading="lazy" decoding="async" />
        <figcaption><?= htmlspecialchars($name) ?></figcaption>
      </figure>
    <?php endforeach; ?>
  </div>
</section>
