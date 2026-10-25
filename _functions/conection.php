<?php
date_default_timezone_set('Africa/Sao_Tome');

// Bloqueia acesso direto

$localHosts = ['localhost', '127.0.0.1'];

if (in_array($_SERVER['HTTP_HOST'], $localHosts)) {
    $base_url = '/mucuanza/';
} else {
    $base_url = '/';
}

$host = "localhost";
$db   = "mucuanza";
$user = "root";
$pass = "";
$charset = "utf8mb4";

/*
$host = "sql211.infinityfree.com";
$db   = "if0_42660246_mucuanza";
$user = "if0_42660246";
$pass = "c70JlPbapn";
$charset = "utf8mb4";*/

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET time_zone = '+00:00'"
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    http_response_code(500);
    echo "Page unavailable";
    /*echo json_encode([
        "error" => "Erro na conexão com o banco de dados."
    ]);
    exit;*/
}

$fmt = new IntlDateFormatter(
    'pt_PT',
    IntlDateFormatter::LONG,
    IntlDateFormatter::SHORT
);

$fmt->setPattern('d MMMM yyyy - HH:mm');