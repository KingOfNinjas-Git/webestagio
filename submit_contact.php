<?php

/* ===== LIGAÇÃO À DB (SQLite, ver db.php) ===== */
require_once __DIR__ . '/db.php';


/* ===== CONECTAR Á DATABASE ===== */
try {
    $pdo = mae_db();
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}


/* ===== VERIFICAR SE FORM FOI SUBMETIDO E OBTER INFORMAÇÃO ===== */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    /* ===== VALIDAR OS INPUTS e INSERIR DADOS NA DB ===== */
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        try {
            $sql = "INSERT INTO contacts (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':phone' => $phone,
                ':message' => $message,
            ]);

            echo "Contact information submitted successfully!";
        } catch (PDOException $e) {
            echo "Error saving data: " . $e->getMessage();
        }
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request method.";
}
?>