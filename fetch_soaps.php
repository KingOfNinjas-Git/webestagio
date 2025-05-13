<?php

/* ===== DADOS DE CONECTION ===== */

$host = 'localhost';
$dbname = 'soap_collection';
$username = 'root';
$password = '';

/* ===== TENTATIVA DE CONECTION Á DB ===== */

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /* ===== FETCH AO SABONETES ===== */
    $stmt = $pdo->query("SELECT * FROM soaps");
    $soaps = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>