<?php /* As perguntas frequentes em duas colunas; cada pergunta abre a resposta ao clicar (ver animation.js). Dados em content.php. */ ?>
<div class="faqs">
  <h2 class="faqs-title">faq’s</h2>
  <div class="faqs-container">
    <?php $n = 0; foreach ($site['faqs'] as $column): ?>
      <div class="faqs-column">
        <?php foreach ($column as [$question, $answer]): $n++; ?>
          <button type="button" class="faq-item" aria-expanded="false" aria-controls="faq-<?= $n ?>">
            <span class="faq-question"><?= htmlspecialchars($question) ?></span>
            <span class="faq-toggle" aria-hidden="true">+</span>
          </button>
          <p id="faq-<?= $n ?>" class="faq-extra-details"><?= $answer /* HTML escrito por nós em content.php */ ?></p>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>
