<?php

/* ===== LIGAÇÃO À DB (SQLite, ver db.php) ===== */

require_once __DIR__ . '/db.php';

/* ===== TENTATIVA DE CONECTION Á DB ===== */

try {
    $pdo = mae_db();

    /* ===== FETCH AO SABONETES ===== */
    $stmt = $pdo->query("SELECT * FROM soaps ORDER BY id");
    $soaps = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>