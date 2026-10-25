<?php
  require_once "_functions/conection.php";

  $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  $slug = basename($path);

  if (empty($slug)) {
    http_response_code(404);
    exit;
  }

  if (!preg_match('/^[a-z0-9-]+$/', $slug)) {
    http_response_code(404);
    exit;
  }

  $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
  $currentUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

  // 1️⃣ Post atual
  $sql = "SELECT * FROM posts WHERE slug = :slug LIMIT 1";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':slug', $slug, PDO::PARAM_STR);
  $stmt->execute();

  $post = $stmt->fetch();

  if (!$post) {
    http_response_code(404);
    include "404.php";
    exit;
  }

  // 2️⃣ Post anterior
  $sql_prev = "SELECT slug, title, created_at 
              FROM posts 
              WHERE created_at < :created_at AND view = 'public'
              ORDER BY created_at DESC 
              LIMIT 1";
  $stmt_prev = $pdo->prepare($sql_prev);
  $stmt_prev->bindParam(':created_at', $post['created_at']);
  $stmt_prev->execute();
  $prev_post = $stmt_prev->fetch();

  // 3️⃣ Post próximo
  $sql_next = "SELECT slug, title, created_at 
              FROM posts 
              WHERE created_at > :created_at AND view = 'public'
              ORDER BY created_at ASC 
              LIMIT 1";
  $stmt_next = $pdo->prepare($sql_next);
  $stmt_next->bindParam(':created_at', $post['created_at']);
  $stmt_next->execute();
  $next_post = $stmt_next->fetch();

    // 4 Outros Posts
  $sql_others = "SELECT *
              FROM posts 
              WHERE id != :id AND view = 'public'
              ORDER BY created_at DESC 
              LIMIT 3";
  $stmt_others = $pdo->prepare($sql_others);
  $stmt_others->bindParam(':id', $post['id']);
  $stmt_others->execute();
  $others_post = $stmt_others->fetchAll(PDO::FETCH_ASSOC);

  $img = $post['image'];
  $defaultImg = 'news/img/default.png';

  if (!empty($post['image']) && file_exists($img)) {
      $src = $img;
  } else {
      $src = $defaultImg;
  }

  include '_functions/local.php';
  fGeolocation('/'.$slug);
?>
<!DOCTYPE html>
<html lang="pt-AO">
<head>
  <base href="<?= $base_url ?>">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= htmlspecialchars($post['title'], ENT_QUOTES) ?></title>
  <meta name="author" content="Constantino Fiança">
  <meta name="description" content="<?= htmlspecialchars($post['description'], ENT_QUOTES) ?>">
  <meta name="keywords" content="mucuanza, sociedade mineira mucuanza, mucuanza angola, sociedade mineira mucuanza lda, prospecção, exploração, recuperação e comercialização de diamantes de angola, <?= htmlspecialchars($post['title'], ENT_QUOTES) ?>">
    
  <meta property="og:site_name" content="Sociedade Mineira Mucuanza, Lda">
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?= htmlspecialchars($post['title'], ENT_QUOTES) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($post['description'], ENT_QUOTES) ?>">
  <meta property="og:image" content="https://mucuanza.com/<?= $src ?>">
  <meta property="og:image:alt" content="<?= htmlspecialchars($post['title'], ENT_QUOTES) ?>">
  <meta property="og:url" content="https://mucuanza.com/<?= $slug ?>">
    
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($post['title'], ENT_QUOTES) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($post['description'], ENT_QUOTES) ?>">
  <meta name="twitter:image" content="https://mucuanza.com/<?= $src ?>">
  <meta name="twitter:image:alt" content="<?= htmlspecialchars($post['title'], ENT_QUOTES) ?>">

  <link rel="canonical" href="https://mucuanza.com/<?= $slug ?>">

  <meta name="theme-color" content="#006b3f">
  <link rel="icon" href="https://mucuanza.com/assets/img/smm-icon.png">
  <link rel="shortcut icon" href="https://mucuanza.com/assets/img/smm-icon.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="https://mucuanza.com/assets/img/smm-icon.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/style.css?v=001">


</head>
<body>

  <?php include 'components/topbar.php'; ?>

  <!-- Header / Mega menu -->
  <header class="mz-header">
    <div class="container d-flex align-items-center justify-content-between py-2">
      <a href="./" class="mz-logo">
        <img src="assets/img/icon.png" alt="Logo">
        <span>
          <span class="big">MUCUANZA</span>
          <small>Sociedade Mineira, Lda.</small>
        </span>
      </a>

      <nav class="mz-nav">
        <ul>
          <li class=""><a href="./">Mucuanza</a></li>
<li class="">
              <a href="#">Governança <i class="bi bi-chevron-down small"></i></a>
              <ul class="mz-mega"><li><a href="sobre-nos">Sobre Nós</a></li>
<li><a href="conselho-de-gerencia">Conselho de Gerência</a></li></ul>
            </li>
<li class="">
              <a href="#">Operações <i class="bi bi-chevron-down small"></i></a>
              <ul class="mz-mega"><li><a href="mineracao">Mineração</a></li>
<li><a href="processamento">Processamento</a></li>
<li><a href="logistica">Logística</a></li>
<li><a href="nosso-produto">Nosso Produto</a></li></ul>
            </li>
<li class="">
              <a href="#">Sustentabilidade <i class="bi bi-chevron-down small"></i></a>
              <ul class="mz-mega"><li><a href="meio-ambiente">Meio Ambiente</a></li>
<li><a href="saude-e-seguranca">Saúde e Segurança</a></li></ul>
            </li>
<li class="active">
              <a href="#">Imprensa <i class="bi bi-chevron-down small"></i></a>
              <ul class="mz-mega"><li><a href="noticias">Notícias</a></li></ul>
            </li>
<li class="">
              <a href="#">Utilidade <i class="bi bi-chevron-down small"></i></a>
              <ul class="mz-mega"><li><a href="contactos">Contactos</a></li>
<li><a href="candidatura">Candidatura</a></li></ul>
            </li>
        </ul>
      </nav>

      <button class="mz-burger" aria-label="Abrir menu"><i class="bi bi-list"></i></button>
    </div>
  </header>
  <div class="mz-nav-backdrop"></div>


  <section class="mz-page-hero">
    <div class="container position-relative">
      <div class="mz-breadcrumb mb-2"><a href="./">Início</a> <span class="sep">/</span> <span>Imprensa</span> <span class="sep">/</span> <span>Notícias</span></div>
      <h1 class="low"><?= htmlspecialchars($post['title']) ?></h1>
    </div>
  </section>

  <section class="mz-content py-5">
  <div class="container">
    <div class="row g-5">
      
      <!-- Conteúdo Principal do Artigo -->
      <article class="col-lg-8">
        
        <!-- Metadados do Topo -->
        <div class="mz-article-header mb-4">
          <div class="d-flex align-items-center gap-3 text-muted small mb-3">
            <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-semibold">
              <i class="bi bi-person me-1"></i><?= htmlspecialchars($post['author']) ?>
            </span>
            <span><i class="bi bi-calendar3 me-1"></i><?= $fmt->format(strtotime($post['created_at'])); ?></span>
          </div>
          
          <!-- Subtítulo / Lead -->
          <?php if (!empty($post['description'])): ?>
            <p class="lead fw-normal text-secondary mb-4 border-start border-4 border-success ps-3">
              <?= htmlspecialchars($post['description']) ?>
            </p>
          <?php endif; ?>
        </div>

        <!-- Imagem Principal com Capa Elegante -->
        <div class="mz-article-cover mb-4 rounded-3 overflow-hidden shadow-sm">
          <img src="<?= $src ?>" class="w-100 object-fit-cover" style="max-height: 480px;" alt="<?= htmlspecialchars($post['title']) ?>" />
        </div>

        <!-- Corpo do Artigo -->
        <div class="mz-article-body text-dark lh-lg mb-5 fs-6">
          <?= $post['content'] ?>
        </div>

        <!-- Partilha de Notícia (Redes Sociais) -->
        <div class="mz-share-box d-flex align-items-center justify-content-between p-3 rounded-3 bg-light border mb-5">
          <span class="fw-semibold text-dark small"><i class="bi bi-share me-2"></i>Partilhar este comunicado:</span>
          <div class="d-flex gap-2">
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?= urlencode($currentUrl) ?>" target="_blank" class="btn btn-sm btn-outline-secondary rounded-circle" title="LinkedIn">
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="https://api.whatsapp.com/send?text=<?= urlencode($post['title'] . ' - ' . $currentUrl) ?>" target="_blank" class="btn btn-sm btn-outline-secondary rounded-circle" title="WhatsApp">
              <i class="bi bi-whatsapp"></i>
            </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode($currentUrl) ?>" target="_blank" class="btn btn-sm btn-outline-secondary rounded-circle" title="Facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="#"
              onclick="navigator.share({
                      title: '<?= htmlspecialchars($post['title'], ENT_QUOTES) ?>',
                      url: '<?= $currentUrl ?>'
                  }).catch(() => {
                      const url = '<?= $currentUrl ?>';
                      if (navigator.clipboard) {
                          navigator.clipboard.writeText('<?= $currentUrl ?>')
                              .then(() => console.log('Link copiado para o clipboard!'))
                              .catch(err => console.error('Não foi possível copiar:', err));
                      } else {
                        const input = document.createElement('input');
                        document.body.appendChild(input);
                        input.value = url;
                        input.select();
                        document.execCommand('copy');
                        document.body.removeChild(input);
                        console.log('Link copiado via fallback!');
                      }
                  }); return false;"
                class="btn btn-sm btn-outline-secondary rounded-circle" title="Copiar Link">
              <i class="bi bi-share"></i>
            </a>
          </div>
        </div>

        <!-- Navegação entre Notícias (Anterior e Próximo) -->
        <div class="mz-post-navigation border-top pt-4">
          <div class="row g-3">
            <div class="col-6">
              <?php if ($prev_post): ?>
                <a href="./<?= htmlspecialchars($prev_post['slug']) ?>" class="nav-card p-3 rounded-3 border bg-white d-block text-decoration-none h-100">
                  <span class="text-muted small d-block mb-1"><i class="bi bi-arrow-left me-1"></i> Notícia Anterior</span>
                  <span class="fw-bold text-dark line-clamp-2 small"><?= htmlspecialchars($prev_post['title']) ?></span>
                </a>
              <?php endif; ?>
            </div>
            <div class="col-6 text-end">
              <?php if ($next_post): ?>
                <a href="./<?= htmlspecialchars($next_post['slug']) ?>" class="nav-card p-3 rounded-3 border bg-white d-block text-decoration-none h-100">
                  <span class="text-muted small d-block mb-1">Próxima Notícia <i class="bi bi-arrow-right ms-1"></i></span>
                  <span class="fw-bold text-dark line-clamp-2 small"><?= htmlspecialchars($next_post['title']) ?></span>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>

      </article>

      <!-- Sidebar Lateral (Sticky) -->
      <aside class="col-lg-4">
        <div class="sticky-top" style="top: 90px;">
          
          <div class="mz-sidebar-card bg-white p-4 rounded-3 border shadow-sm mb-4">
            <h6 class="fw-bold text-dark border-start border-3 border-success ps-2 mb-4 text-uppercase tracking-wide fs-7">
              Outras Notícias
            </h6>

            <div class="d-flex flex-column gap-3">
              <?php foreach ($others_post as $o_post): ?>
                <?php
                  $o_img = $o_post['image'];
                  $o_src = (!empty($o_img) && file_exists($o_img)) ? $o_img : 'news/img/default.png';
                ?>
                <a href="./<?= htmlspecialchars($o_post['slug']) ?>" class="sidebar-item d-flex gap-3 align-items-center text-decoration-none p-2 rounded-2 border-0">
                  <img src="<?= $o_src ?>" class="rounded-2 object-fit-cover flex-shrink-0" style="width: 85px; height: 65px;" alt="<?= htmlspecialchars($o_post['title']) ?>">
                  <div class="overflow-hidden">
                    <h6 class="fw-bold text-dark mb-1 line-clamp-2 lh-sm small title-hover">
                      <?= htmlspecialchars($o_post['title']) ?>
                    </h6>
                    <small class="text-muted fs-8 d-block">
                      <i class="bi bi-calendar3 me-1"></i><?= $fmt->format(strtotime($o_post['created_at'])); ?>
                    </small>
                  </div>
                </a>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- Banner Institucional de Suporte -->
          <div class="p-4 rounded-3 bg-dark text-white shadow-sm position-relative overflow-hidden">
            <div class="position-relative z-1">
              <h6 class="fw-bold text-success mb-2">Contacto de Imprensa</h6>
              <p class="small text-light opacity-75 mb-3">Para esclarecimentos ou pedidos de imprensa, entre em contacto com a nossa equipa de comunicação.</p>
              <a href="contactos" class="btn btn-sm btn-success fw-semibold">Contactar Imprensa</a>
            </div>
          </div>

        </div>
      </aside>

    </div>
  </div>
</section>

  <?php include 'components/footer.php'; ?>

  <div class="mz-back-top"><i class="bi bi-arrow-up"></i></div>

  <div class="mz-cookie">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
      <span>Este site utiliza cookies para melhorar a experiência do utilizador. Ao navegar, aceita a sua utilização.</span>
      <button class="btn btn-sm btn-mz mz-cookie-accept">Aceitar</button>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>

</body>
</html>
