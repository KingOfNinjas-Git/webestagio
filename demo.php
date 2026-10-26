<?php

/* ===== MODO DEMONSTRAÇÃO (só para a versão pública do portefólio) =====
   Fica desligado por defeito. Para ligar, no config.local.php:
   define('MAE_DEMO', true);
   Mostra um aviso no topo e apaga as mensagens de contacto antigas (por defeito, com mais de 3 horas). */

function mae_demo(): bool
{
    return defined('MAE_DEMO') && MAE_DEMO;
}

function mae_demo_bar(): void
{
    if (!mae_demo()) {
        return;
    }

    echo '<div role="note" style="position:relative;z-index:9999;background:#06222b;color:#d8f3f7;font:600 13px/1.5 system-ui,sans-serif;text-align:center;padding:8px 14px;">'
        . 'Demonstração de portefólio por <a href="https://franciscowebdev.com" style="color:#fff;text-decoration:underline;">Francisco</a> (portfolio demo): '
        . 'as mensagens do formulário são apagadas ao fim de poucas horas. <strong>Usa dados inventados.</strong>'
        . '</div>';
}

/* Apaga as mensagens de contacto antigas, no máximo uma vez por hora. */
function mae_demo_cleanup(PDO $pdo, string $dbPath): void
{
    if (!mae_demo()) {
        return;
    }

    $marker = dirname($dbPath) . '/.demo-cleanup';

    if (is_file($marker) && time() - filemtime($marker) < 3600) {
        return;
    }

    touch($marker);

    $hours = defined('MAE_DEMO_KEEP_HOURS') ? (int) MAE_DEMO_KEEP_HOURS : 3;
    $pdo->prepare("DELETE FROM contacts WHERE created_at < datetime('now', :age)")->execute([':age' => "-{$hours} hours"]);
}
