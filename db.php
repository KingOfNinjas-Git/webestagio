<?php

/* ===== LIGAÇÃO À BASE DE DADOS (SQLite) =====
   Um único ficheiro (data/mae.sqlite) guarda os sabonetes e as mensagens de contacto.
   Não é preciso instalar nem configurar nada: o ficheiro e as tabelas são criados na primeira utilização.
   Em alojamento partilhado podes guardar o ficheiro fora da pasta pública, criando um config.local.php com:
   define('MAE_DB_PATH', '/caminho/para/mae.sqlite'); */

if (is_file(__DIR__ . '/config.local.php')) {
    require_once __DIR__ . '/config.local.php';
}

require_once __DIR__ . '/demo.php';

function mae_db(): PDO
{
    static $pdo = null;

    if ($pdo !== null) {
        return $pdo;
    }

    $path = defined('MAE_DB_PATH') ? MAE_DB_PATH : __DIR__ . '/data/mae.sqlite';

    if (!is_dir(dirname($path))) {
        mkdir(dirname($path), 0775, true);
    }

    $pdo = new PDO('sqlite:' . $path);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    mae_setup($pdo);
    mae_demo_cleanup($pdo, $path);

    return $pdo;
}

/* ===== CRIAR AS TABELAS E CARREGAR OS SABONETES INICIAIS ===== */
function mae_setup(PDO $pdo): void
{
    $pdo->exec('CREATE TABLE IF NOT EXISTS soaps (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT NOT NULL,
        price REAL NOT NULL,
        description TEXT NOT NULL,
        highlight TEXT,
        ingredients TEXT,
        image_url TEXT NOT NULL
    )');

    $pdo->exec('CREATE TABLE IF NOT EXISTS contacts (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        phone TEXT NOT NULL,
        message TEXT NOT NULL,
        created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP
    )');

    if ((int) $pdo->query('SELECT COUNT(*) FROM soaps')->fetchColumn() === 0) {
        $insert = $pdo->prepare('INSERT INTO soaps (id, title, price, description, highlight, ingredients, image_url)
                                 VALUES (:id, :title, :price, :description, :highlight, :ingredients, :image_url)');

        foreach (require __DIR__ . '/database/soaps.php' as $soap) {
            $insert->execute($soap);
        }
    }
}
