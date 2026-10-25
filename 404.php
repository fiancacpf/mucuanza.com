<?php
http_response_code(404);

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";

$host = $_SERVER['HTTP_HOST'];

$currentPath = dirname($_SERVER['SCRIPT_NAME']); 

$blogHome = $protocol . "://" . $host . $currentPath;

$favicon = $blogHome . '/../assets/favicon.png';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Página Não Encontrada | Blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow">
  <link rel="shortcut icon" href="<?= $favicon ?>" type="image/x-icon">

  <style>
  * { margin:0; padding:0; box-sizing:border-box; }

  body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    font-family: 'Inter', 'Arial', sans-serif;
    background: #f5f5f5;
    color: #333;
    text-align: center;
    padding: 20px;
  }

  .error-container {
    width: 100%;
    max-width: 400px;
    padding: 30px 25px;
    background: #fff;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
    transition: transform 0.2s;
  }

  .error-container:hover {
    transform: translateY(-3px);
  }

  .error-code {
    font-size: 60px;      /* menor que 6vw */
    font-weight: 700;
    color: #ff4d4f;
    margin-bottom: 15px;
    line-height: 1;
  }

  h1 {
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 12px;
    color: #222;
  }

  p {
    font-size: 16px;
    margin-bottom: 25px;
    color: #555;
    line-height: 1.5;
  }

  a.button {
    display: inline-block;
    padding: 12px 25px;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 500;
    transition: 0.3s;
  }

  a.button:hover {
    background-color: #0056b3;
  }

  @media (max-width: 480px) {
    .error-container {
      padding: 25px 15px;
    }
    .error-code { font-size: 48px; }
    h1 { font-size: 20px; }
    p { font-size: 14px; }
    a.button { font-size: 13px; padding: 10px 20px; }
  }
</style>

</head>
<body>
  <div class="error-container">
    <div class="error-code">404</div>
    <h1>Página Não Encontrada</h1>
    <p>Ops! A página que você procura não existe ou foi removida.</p>
    <a class="button" href="<?= $blogHome ?>/noticias">Voltar para Notícias</a>
  </div>
</body>
</html>
