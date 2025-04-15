<?php


/* ===== DADOS DE CONECTION ===== */
$host = 'localhost';
$dbname = 'contact_form';
$username = 'root';
$password = '';


/* ===== CONECTAR Á DATABASE ===== */
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

echo "here -> " . $_POST['name'] . " (is the value1!!!)";

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