<?php

/* ===== RECEBE O FORMULÁRIO "CONTACTE-NOS" E GUARDA A MENSAGEM NA DB ===== */

require_once __DIR__ . '/db.php';

/* Responde em JSON a quem enviou pelo JavaScript da página; os outros voltam à página com ?contacto=ok ou ?contacto=erro. */
function reply(bool $ok, string $message, int $status = 200): never
{
    if (str_contains($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json')) {
        http_response_code($status);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode(['ok' => $ok, 'message' => $message], JSON_UNESCAPED_UNICODE);
    } else {
        header('Location: index.php?contacto=' . ($ok ? 'ok' : 'erro') . '#contactos');
    }

    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    reply(false, 'Pedido inválido.', 405);
}

/* ===== OBTER E VALIDAR OS CAMPOS ===== */
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

$valid = $name !== '' && mb_strlen($name) <= 100
    && filter_var($email, FILTER_VALIDATE_EMAIL) && mb_strlen($email) <= 150
    && preg_match('/^[0-9+() .-]{5,30}$/', $phone)
    && $message !== '' && mb_strlen($message) <= 2000;

if (!$valid) {
    reply(false, 'Preencha todos os campos com dados válidos.', 422);
}

/* ===== GUARDAR NA DB ===== */
try {
    mae_db()
        ->prepare('INSERT INTO contacts (name, email, phone, message) VALUES (:name, :email, :phone, :message)')
        ->execute([':name' => $name, ':email' => $email, ':phone' => $phone, ':message' => $message]);
} catch (PDOException $e) {
    reply(false, 'Não foi possível guardar a mensagem. Tente novamente mais tarde.', 500);
}

reply(true, 'Mensagem enviada. Obrigado!');
