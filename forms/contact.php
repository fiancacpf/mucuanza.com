<?php
header("Content-Type: application/json; charset=UTF-8");

require_once "../_functions/conection.php";

// Proteção por origem
$allowedOrigins = [
    'http://mucuanza.com',
    'http://www.mucuanza.com',
    'https://mucuanza.com',
    'https://www.mucuanza.com',
    'http://localhost',
    'https://localhost',
];

$origin = $_SERVER['HTTP_ORIGIN'] ?? '';

if ($origin && !in_array($origin, $allowedOrigins)) {
    http_response_code(403);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(["error" => "Método não permitido."]);
    exit;
}

$subject    = trim($_POST['subject'] ?? '');
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $message === '' || $subject === '') {
    http_response_code(400);
    echo json_encode(["error" => "Preencha todos os campos obrigatórios."]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(["error" => "E-mail inválido."]);
    exit;
}

$ip = $_SERVER['REMOTE_ADDR'];

/*
|--------------------------------------------------------------------------
| RATE LIMIT
| Máx: 3 mensagens a cada 10 minutos por IP
|--------------------------------------------------------------------------
*/
$maxRequests = 3;
$intervalMinutes = 10;

$stmt = $pdo->prepare("
    SELECT COUNT(*) 
    FROM contacts 
    WHERE ip_address = :ip
    AND created_at >= (NOW() - INTERVAL :minutes MINUTE)
");

$stmt->bindValue(':ip', $ip);
$stmt->bindValue(':minutes', $intervalMinutes, PDO::PARAM_INT);
$stmt->execute();

$requests = $stmt->fetchColumn();

if ($requests >= $maxRequests) {
    http_response_code(429); // Too Many Requests
    echo json_encode([
        "error" => "Você atingiu o limite de mensagens.<br/>Tente novamente em alguns minutos."
    ]);
    exit;
}

/*
|--------------------------------------------------------------------------
| INSERÇÃO
|--------------------------------------------------------------------------
*/
try {
    $stmt = $pdo->prepare("
        INSERT INTO contacts (ip_address, name, email, phone, subject, message)
        VALUES (:ip, :name, :email, :phone, :subject, :message)
    ");

    $stmt->execute([
        ':ip'      => $ip,
        ':name'    => $name,
        ':email'   => $email,
        ':phone'   => $phone,
        ':subject' => $subject,
        ':message' => $message
    ]);

    echo json_encode([
        "success" => "Mensagem enviada com sucesso. Obrigado pelo contacto."
    ]);

} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode([
        "error" => "Não foi possível enviar a mensagem. Tente mais tarde."
    ]);
}
