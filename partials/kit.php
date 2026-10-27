<?php /* O kit de miniaturas: cada sabonete abre a sua descrição (<details name="kit"> abre um de cada vez, sem JavaScript). Dados em content.php. */ ?>
<section class="kit section" id="kit" aria-labelledby="kit-title">
  <div class="container kit-grid">
    <div class="kit-media">
      <img src="imgs/kit-800.webp" srcset="imgs/kit-800.webp 800w, imgs/kit-1600.webp 1600w"
        sizes="(min-width: 900px) 560px, 90vw" alt="Kit de miniaturas de sabonetes clássicos numa caixa"
        width="800" height="800" loading="lazy" decoding="async" />
    </div>
    <div>
      <p class="eyebrow">Para oferecer</p>
      <h2 class="kit-title" id="kit-title">Kit Miniaturas Sabonetes Clássicos</h2>
      <p class="kit-price"><?= htmlspecialchars($site['kit']['price']) ?> <span><?= htmlspecialchars($site['kit']['details']) ?></span></p>
      <p class="kit-description"><?= htmlspecialchars($site['kit']['description']) ?></p>
      <ul class="kit-list">
        <?php foreach ($site['kit']['soaps'] as [$name, $text]): ?>
          <li>
            <details name="kit">
              <summary><?= htmlspecialchars($name) ?></summary>
              <p><?= htmlspecialchars($text) ?></p>
            </details>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
