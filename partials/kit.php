<?php /* O kit de miniaturas: cada sabonete abre a sua descrição ao clicar (ver animation.js). Dados em content.php. */ ?>
<div class="kits">
  <div class="kit-container">
    <h2 class="kit-title">Kit Miniaturas Sabonetes Clássicos</h2>
    <div class="kit-price-info">
      <p class="kit-price"><strong><?= htmlspecialchars($site['kit']['price']) ?></strong></p>
      <p class="kit-details"><?= htmlspecialchars($site['kit']['details']) ?></p>
    </div>
    <p class="kit-description"><?= htmlspecialchars($site['kit']['description']) ?></p>
    <ul class="kit-list">
      <?php foreach ($site['kit']['soaps'] as $i => [$name, $text]): ?>
        <li class="kit-item">
          <button type="button" class="kit-toggle" aria-expanded="false" aria-controls="kit-<?= $i ?>">
            <span><?= htmlspecialchars($name) ?></span>
            <span class="kit-add" aria-hidden="true">+</span>
          </button>
          <p class="kit-extra-details" id="kit-<?= $i ?>"><?= htmlspecialchars($text) ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>
