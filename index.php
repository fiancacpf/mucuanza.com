<?php
  require_once "_functions/conection.php";

  $sql = "SELECT *
              FROM posts 
              WHERE view = 'public'
              ORDER BY created_at DESC 
              LIMIT 3";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

  include '_functions/local.php';
  fGeolocation('home');
?>

<!DOCTYPE html>
<html lang="pt-AO">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Início | Sociedade Mineira Mucuanza, Lda.</title>
  <meta name="author" content="Constantino Fiança">
  <meta name="keywords" content="mucuanza, sociedade mineira mucuanza, mucuanza angola, sociedade mineira mucuanza lda, prospecção, exploração, recuperação e comercialização de diamantes de angola">
  <meta name="description" content="A Sociedade Mineira Mucuanza, Lda. é uma empresa angolana dedicada à prospecção, exploração, recuperação e comercialização de diamantes, constituída pela ENDIAMA E.P., em parceria com investidores privados.">
  <meta name="robots" content="index, follow">

  <meta property="og:site_name" content="Sociedade Mineira Mucuanza, Lda">
  <meta property="og:title" content="Sociedade Mineira Mucuanza, Lda">
  <meta property="og:description" content="A Sociedade Mineira Mucuanza, Lda. é uma empresa angolana dedicada à prospecção, exploração, recuperação e comercialização de diamantes, constituída pela ENDIAMA E.P., em parceria com investidores privados.">
  <meta property="og:url" content="https://mucuanza.com/">
  <meta property="og:type" content="website">
  <meta property="og:image" content="https://mucuanza.com/news/img/default.png">
  <meta property="og:image:alt" content="Sociedade Mineira Mucuanza, Lda">
  <meta property="og:locale" content="pt_AO">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Sociedade Mineira Mucuanza, Lda">
  <meta name="twitter:description" content="A Sociedade Mineira Mucuanza, Lda. é uma empresa angolana dedicada à prospecção, exploração, recuperação e comercialização de diamantes, constituída pela ENDIAMA E.P., em parceria com investidores privados.">
  <meta name="twitter:image" content="https://mucuanza.com/news/img/default.png">
  <meta name="twitter:image:alt" content="Sociedade Mineira Mucuanza, Lda">

  <link rel="canonical" href="https://mucuanza.com/">

  <meta itemprop="name" content="Sociedade Mineira Mucuanza, Lda">
  <meta itemprop="description" content="A Sociedade Mineira Mucuanza, Lda. é uma empresa angolana dedicada à prospecção, exploração, recuperação e comercialização de diamantes, constituída pela ENDIAMA E.P., em parceria com investidores privados.">
  <meta itemprop="image" content="https://mucuanza.com/news/img/default.png">

  <meta name="theme-color" content="#006b3f">
  <link rel="icon" href="https://mucuanza.com/assets/img/smm-icon.png">
  <link rel="shortcut icon" href="https://mucuanza.com/assets/img/smm-icon.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="https://mucuanza.com/assets/img/smm-icon.png">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>.col-lg-2-4{flex:1 1 20%;max-width:20%;} @media (max-width:767.98px){.col-lg-2-4{flex:1 1 50%;max-width:50%;}}</style>
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
          <li class="active"><a href="./" class="a">Mucuanza</a></li>
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
<li class="">
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


  <section class="mz-hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5500">
      <div class="carousel-indicators"><button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button><button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" class="" aria-current="false" aria-label="Slide 2"></button><button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" class="" aria-current="false" aria-label="Slide 3"></button></div>
      <div class="carousel-inner">
      <div class="carousel-item active" style="background-image:url('assets/img/SMM-03.jpg');">
        <div class="container mz-hero-caption">
          <div class="eyebrow">Sociedade Mineira Mucuanza, Lda.</div>
          <h1>Excelência na exploração diamantífera angolana</h1>
          <a href="sobre-nos" class="btn-mz me-2 mb-2">Conhecer a Mucuanza</a>
          <a href="nosso-produto" class="btn-mz-outline">Nosso Produto</a>
        </div>
      </div>
      <div class="carousel-item" style="background-image:url('assets/img/SMM-01.jpg');">
        <div class="container mz-hero-caption">
          <div class="eyebrow">Operações</div>
          <h1>Tecnologia e rigor em cada etapa da produção</h1>
          <a href="sobre-nos" class="btn-mz me-2 mb.2">Conhecer a Mucuanza</a>
          <a href="nosso-produto" class="btn-mz-outline">Nosso Produto</a>
        </div>
      </div>
      <div class="carousel-item" style="background-image:url('assets/img/SMM-04.jpg');">
        <div class="container mz-hero-caption">
          <div class="eyebrow">Sustentabilidade</div>
          <h1>Bom para Angola, melhor para a comunidade</h1>
          <a href="sobre-nos" class="btn-mz me-2 mb-2">Conhecer a Mucuanza</a>
          <a href="nosso-produto" class="btn-mz-outline">Nosso Produto</a>
        </div>
      </div></div>
    </div>
  </section>

  <section class="mz-ceo">
    <div class="container">
      <div class="row align-items-center g-5">
        <div class="col-lg-3 text-center">
          <img src="https://placehold.co/400x480/005331/ffffff?font=poppins&text=Foto" class="mz-ceo-photo" alt="Director-Geral da Mucuanza">
        </div>
        <div class="col-lg-9">
          <blockquote>
            "A Sociedade Mineira Mucuanza, Lda. é uma empresa angolana dedicada à prospecção, exploração, recuperação e comercialização de diamantes, constituída pela ENDIAMA E.P. (Empresa Nacional de Diamantes de Angola), em parceria com investidores privados."
          </blockquote>
          <div class="signature">
            <strong>José Miguel Soares</strong>
            <span>Director Geral / Presidente do Conselho de Gerência — Sociedade Mineira Mucuanza, Lda.</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="mz-about">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6">
          <div class="section-eyebrow">Sobre</div>
          <h2 class="section-title">Sociedade Mineira Mucuanza, Lda.</h2>
          <div class="section-rule"></div>
          <h5 class="mb-2">Centro de Operações</h5>
          <p>A Sociedade Mineira Mucuanza, Lda. opera nos municípios de Mussende, na província do Cuanza Sul, e Cangandala, na província de Malanje, em Angola. A empresa dedica-se à prospecção, exploração, recuperação e comercialização de diamantes, tendo sido constituída em parceria com a Endiama E.P. e investidores privados para o desenvolvimento responsável dos recursos diamantíferos de aluvião daquela região.</p>
          <a href="sobre-nos" class="btn-mz mt-2">Saber Mais</a>
        </div>
        <div class="col-lg-6">
          <img src="assets/img/SMM-05.jpg" class="rounded-img w-100 mt-4" alt="Vista aérea da operação">
        </div>
      </div>
    </div>
  </section>

  <section class="mz-events">
    <div class="container">
      <div class="row align-items-start flex-row-reverse g-5">
        <div class="col-lg-6">
          <div class="section-eyebrow">Imprensa</div>
          <h2 class="section-title">Últimas Publicações</h2>
          <div class="section-rule"></div>
        
        <?php foreach ($posts as $post): ?>
          <?php
            $img = $post['image'];
            $defaultImg = 'news/img/default.png';

            if (!empty($post['image']) && file_exists($img)) {
                $src = $img;
            } else {
                $src = $defaultImg;
            }
          ?>
        <div class="mz-news-card">
          <img src="<?= $src ?>" alt="<?= htmlspecialchars($post['title']) ?>">
          <div>
            <div class="tag"><?= htmlspecialchars($post['author']) ?></div>
            <h6><a href="<?= htmlspecialchars($post['slug']) ?>"><?= htmlspecialchars($post['title']) ?></a></h6>
          </div>
        </div>
        <?php endforeach; ?>

        <a href="noticias" class="btn-mz">Ver Todas Notícias</a>
        </div>
        <div class="col-lg-6">
          <div class="section-eyebrow" style="color:var(--mz-gold-light);">Sobre</div>
          <h2 class="section-title">Eventos da Empresa</h2>
          <div class="section-rule"></div>
          <p>A Sociedade Mineira Mucuanza, Lda. foca a sua agenda institucional na participação ativa em reuniões de balanço, encontros técnicos e fóruns operacionais promovidos pela ENDIAMA E.P. e pelo Ministério dos Recursos Minerais, Petróleo e Gás (MIREMPET). A empresa marca presença regular nestas sessões de prestação de contas do subsetor diamantífero para a apresentação de resultados, alinhamento de metas de produção e adoção das melhores práticas de sustentabilidade e governação do setor.</p>
          <a href="noticias" class="btn-mz-outline" style="color: #10233a;">Saber Mais</a>
        </div>
      </div>
    </div>
  </section>

  <section class="mz-stats">
  <div class="container">
    <div class="row g-4 justify-content-center">

      <div class="col-6 col-md-4 col-lg">
        <div class="mz-stat">
          <div class="n" data-count="5">0</div>
          <div class="l">Direcções</div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg">
        <div class="mz-stat">
          <div class="n" data-count="13">0</div>
          <div class="l">Departamentos</div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg">
        <div class="mz-stat">
          <div class="n" data-count="100" data-prefix="+">0</div>
          <div class="l">Trabalhadores Directos e Indirectos</div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg">
        <div class="mz-stat">
          <div class="n" data-count="24" data-prefix="+">0</div>
          <div class="l">Empresas Prestadoras</div>
        </div>
      </div>

      <div class="col-6 col-md-4 col-lg">
        <div class="mz-stat">
          <div class="n" data-count="89" data-prefix="+">0</div>
          <div class="l">Fornecedores</div>
        </div>
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
