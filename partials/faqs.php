<?php /* As perguntas frequentes em duas colunas; cada <details> abre e fecha sozinho, sem JavaScript. Dados em content.php. */ ?>
<section class="faqs section container" id="faqs" aria-labelledby="faqs-title">
  <div class="section-head">
    <p class="eyebrow">Dúvidas</p>
    <h2 class="section-title" id="faqs-title">Perguntas frequentes</h2>
  </div>
  <div class="faqs-columns">
    <?php foreach ($site['faqs'] as $column): ?>
      <div class="faq-list">
        <?php foreach ($column as [$question, $answer]): ?>
          <details>
            <summary><?= htmlspecialchars($question) ?></summary>
            <p><?= $answer /* HTML escrito por nós em content.php */ ?></p>
          </details>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>
