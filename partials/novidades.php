<div class="novidades">
  <h2 class="novidades-title">novidades</h2>
  <div class="novidades-grid">
    <?php foreach ($site['novidades'] as [$image, $name]): ?>
      <div class="novidade-item">
        <img src="imgs/imgs-produtos/<?= htmlspecialchars($image) ?>.webp" alt="<?= htmlspecialchars($name) ?>" width="640" height="640" loading="lazy" decoding="async" />
        <p class="novidade-text"><?= htmlspecialchars($name) ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</div>
