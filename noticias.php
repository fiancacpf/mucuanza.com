<?php
  include '_functions/news.php';

  include '_functions/local.php';
  fGeolocation('noticias');
?>
<!DOCTYPE html>
<html lang="pt-AO">
<head>
  <base href="./">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notícias | Sociedade Mineira Mucuanza, Lda.</title>
  <meta name="description" content="Notícias e novidades institucionais da Sociedade Mineira Mucuanza, Lda.">
  <meta name="theme-color" content="#006b3f">
  <link rel="icon" href="https://mucuanza.com/assets/img/smm-icon.png">
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
      <h1>Notícias</h1>
    </div>
  </section>

  <section class="mz-content py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        
        <!-- Cabeçalho da Seção -->
        <div class="mz-section-header mb-5 border-bottom pb-3">
          <span class="text-uppercase text-muted fw-bold small tracking-wide">Imprensa & Mídia</span>
          <h2 class="display-6 fw-bold text-dark">Sala de Imprensa</h2>
          <p class="text-secondary mb-0">Acompanhe as últimas notícias e comunicados oficiais da Sociedade Mineira Mucuanza.</p>
        </div>

        <?php if (empty($posts)): ?>
          <div class="alert alert-light text-center py-5 border" role="alert">
            <i class="bi bi-newspaper fs-1 text-muted d-block mb-2"></i>
            <p class="mb-0 text-muted">Não existem notícias publicadas no momento.</p>
          </div>
        <?php else: ?>
          
          <?php 
            // Separar o primeiro post para Destaque (apenas na página 1)
            $isFirstPage = ($page == 1);
            $featuredPost = $isFirstPage ? array_shift($posts) : null;
          ?>

          <!-- Destaque Principal (Visível apenas na página 1) -->
          <?php if ($featuredPost): ?>
            <?php
              $img = $featuredPost['image'];
              $src = (!empty($img) && file_exists($img)) ? $img : 'news/img/default.png';
            ?>
            <div class="mz-featured-card mb-5">
              <div class="row g-0 align-items-center bg-white rounded-3 overflow-hidden shadow-sm border">
                <div class="col-lg-7">
                  <a href="./<?= htmlspecialchars($featuredPost['slug']) ?>" class="d-block overflow-hidden mz-img-wrapper">
                    <img src="<?= $src ?>" alt="<?= htmlspecialchars($featuredPost['title']) ?>" class="img-fluid w-100 object-fit-cover" style="min-height: 380px; max-height: 420px;">
                  </a>
                </div>
                <div class="col-lg-5 p-4 p-md-5">
                  <span class="badge bg-success-subtle text-success border border-success-subtle mb-3 px-3 py-2 rounded-pill fw-semibold">Destaque</span>
                  <div class="text-muted small mb-2">
                    <i class="bi bi-calendar3 me-1"></i><?= $fmt->format(strtotime($featuredPost['created_at'])); ?>
                  </div>
                  <h3 class="fw-bold h4 mb-3">
                    <a href="./<?= htmlspecialchars($featuredPost['slug']) ?>" class="text-dark text-decoration-none title-hover">
                      <?= htmlspecialchars($featuredPost['title']) ?>
                    </a>
                  </h3>
                  <p class="text-secondary small mb-4 line-clamp-3">
                    <?= htmlspecialchars($featuredPost['description']) ?>
                  </p>
                  <a href="./<?= htmlspecialchars($featuredPost['slug']) ?>" class="btn btn-outline-success btn-sm fw-semibold">
                    Ler artigo completo <i class="bi bi-arrow-right ms-1"></i>
                  </a>
                </div>
              </div>
            </div>
          <?php endif; ?>

          <!-- Grelha de Notícias Secundárias -->
          <div class="row g-4">
            <?php foreach ($posts as $post): ?>
              <?php
                $img = $post['image'];
                $src = (!empty($img) && file_exists($img)) ? $img : 'news/img/default.png';
              ?>
              <div class="col-md-6 col-lg-4">
                <article class="mz-press-card h-100 bg-white rounded-3 overflow-hidden border shadow-sm d-flex flex-column">
                  <a href="./<?= htmlspecialchars($post['slug']) ?>" class="mz-img-wrapper d-block overflow-hidden">
                    <img src="<?= $src ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="card-img-top object-fit-cover" style="height: 200px;">
                  </a>
                  <div class="p-4 d-flex flex-column flex-grow-1">
                    <div class="text-muted small mb-2">
                      <i class="bi bi-calendar3 me-1"></i><?= $fmt->format(strtotime($post['created_at'])); ?>
                    </div>
                    <h5 class="fw-bold fs-6 mb-2">
                      <a href="./<?= htmlspecialchars($post['slug']) ?>" class="text-dark text-decoration-none title-hover">
                        <?= htmlspecialchars($post['title']) ?>
                      </a>
                    </h5>
                    <p class="text-secondary small mt-auto pt-2 mb-3 line-clamp-2">
                      <?= htmlspecialchars($post['description']) ?>
                    </p>
                    <a href="./<?= htmlspecialchars($post['slug']) ?>" class="text-success fw-semibold small text-decoration-none mt-auto">
                      Ler mais <i class="bi bi-chevron-right small"></i>
                    </a>
                  </div>
                </article>
              </div>
            <?php endforeach; ?>
          </div>

        <?php endif; ?>

        <!-- Paginação -->
        <nav class="mt-5" aria-label="Paginação de notícias">
          <ul class="pagination justify-content-center mb-0">
            <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
              <a class="page-link shadow-none" href="./noticias<?= $page > 1 ? '?page=' . ($page - 1) : '#' ?>">
                <i class="bi bi-chevron-left"></i>
              </a>
            </li>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
              <li class="page-item <?= $i === $page ? 'active' : '' ?>">
                <a class="page-link shadow-none" href="./noticias<?= $i === $page ? '#!' : '?page=' . $i ?>">
                  <?= $i ?>
                </a>
              </li>
            <?php endfor; ?>

            <li class="page-item <?= $page >= $total_pages ? 'disabled' : '' ?>">
              <a class="page-link shadow-none" href="./noticias<?= $page < $total_pages ? '?page=' . ($page + 1) : '#' ?>">
                <i class="bi bi-chevron-right"></i>
              </a>
            </li>
          </ul>
        </nav>

      </div>
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
