<?php

if (basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
    http_response_code(404);
    exit;
}

require_once "conection.php";

$limit = 4; // quantos posts por página
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
$page = max($page, 1);

$limit = $page === 1 ? 4 : 3;

$offset = ($page - 1) * $limit;

// TOTAL DE POSTS
$stmt_total = $pdo->prepare("
    SELECT COUNT(*) 
    FROM posts
");
$stmt_total->execute();
$total_posts = (int) $stmt_total->fetchColumn();

$total_pages = (int) ceil($total_posts / $limit);

$stmt = $pdo->prepare("
    SELECT *
    FROM posts
    WHERE view = 'public'
    ORDER BY created_at DESC
    LIMIT $limit OFFSET $offset
");

$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);