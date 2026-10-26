<?php

/* ===== TÍTULO, PRÉ-VISUALIZAÇÃO AO PARTILHAR O LINK E ÍCONE ===== */

require_once __DIR__ . '/db.php';

$mae_text = 'Site de produto para uma marca de sabonetes artesanais: a coleção lida de uma base de dados, um kit de sabonetes clássicos, novidades, FAQs e um formulário de contacto.';
$mae_scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$mae_origin = $mae_scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost');
?>
  <title>MÃE | O sabonete que faz espuma na água do mar</title>
  <meta name="description" content="<?= htmlspecialchars($mae_text) ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="MÃE" />
  <meta property="og:title" content="MÃE | O sabonete que faz espuma na água do mar" />
  <meta property="og:description" content="<?= htmlspecialchars($mae_text) ?>" />
  <meta property="og:url" content="<?= htmlspecialchars($mae_origin) ?>/" />
  <meta property="og:image" content="<?= htmlspecialchars($mae_origin) ?>/mae-share.jpg?v=1" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:alt" content="MÃE: um sabonete atado a um pulso debaixo de água" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="MÃE | O sabonete que faz espuma na água do mar" />
  <meta name="twitter:description" content="<?= htmlspecialchars($mae_text) ?>" />
  <meta name="twitter:image" content="<?= htmlspecialchars($mae_origin) ?>/mae-share.jpg?v=1" />
  <link rel="icon" href="favicon.ico?v=2" sizes="any" />
  <link rel="icon" type="image/png" sizes="192x192" href="icon-192.png?v=2" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png?v=2" />
