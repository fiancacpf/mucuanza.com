<?php
  include '_functions/local.php';
  fGeolocation('sobre-nos');
?>
<!DOCTYPE html>
<html lang="pt-AO">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sobre Nós | Sociedade Mineira Mucuanza, Lda.</title>
  <meta name="description" content="Conheça a história, missão, visão e valores da Sociedade Mineira Mucuanza, Lda.">
  <meta name="theme-color" content="#006b3f">
  <link rel="icon" href="assets/img/smm-icon.png">
  <link rel="apple-touch-icon" href="https://mucuanza.com/assets/img/smm-icon.png">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/style.css">


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
          <li class=""><a href="./" class="a">Mucuanza</a></li>
<li class="active">
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


  <section class="mz-page-hero">
    <div class="container position-relative">
      <div class="mz-breadcrumb mb-2"><a href="./">Início</a> <span class="sep">/</span> <span>Governança</span> <span class="sep">/</span> <span>Sobre Nós</span></div>
      <h1>Sobre Nós</h1>
    </div>
  </section>

  <section class="mz-content">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-4">
          
        <div class="mz-side-nav mb-4">
          <h6>Governança</h6>
          <ul><li><a href="sobre-nos" class="active">Sobre Nós</a></li><li><a href="conselho-de-gerencia" class="">Conselho de Gerência</a></li></ul>
        </div>

        </div>
        <div class="col-lg-8">
          <!-- Hero Image com Overlay/Badge -->
          <div class="position-relative mb-5 overflow-hidden rounded-4 shadow-sm">
            <img src="assets/img/SMM-05.jpg" class="img-fluid w-100 object-fit-cover" style="max-height: 400px;" alt="Instalações Sociedade Mineira Mucuanza">
            <div class="position-absolute bottom-0 start-0 w-100 p-4" style="background: linear-gradient(0deg, rgba(0,107,63,0.85) 0%, rgba(0,0,0,0) 100%);">
              <span class="badge bg-warning text-dark mb-2 px-3 py-2 fw-semibold rounded-pill">Sector Diamantífero</span>
              <h2 class="text-white m-0 h3">Sociedade Mineira Mucuanza</h2>
            </div>
          </div>

          <!-- Quem Somos -->
          <section class="mb-5">
            <div class="border-start border-4 border-success ps-3 mb-3">
              <h3 class="h4 text-uppercase tracking-wide fw-bold mb-0" style="color: #006b3f;">Quem Somos</h3>
            </div>
            <p class="lead text-muted lh-base">
              A <strong>Sociedade Mineira Mucuanza, Lda.</strong> é uma empresa angolana dedicada à prospecção, exploração, recuperação e comercialização de diamantes.
            </p>
            <p class="text-secondary lh-base">
              A Mucuanza explora um depósito diamantífero secundário (aluvionar) estrategicamente localizado entre o município de Mussende (Província do Cuanza Sul) e o município de Cangandala (Província de Malanje).
            </p>
          </section>

          <!-- Missão e Visão (Cartões Emparelhados) -->
          <section class="mb-5">
            <div class="row g-4">
              <div class="col-md-6">
                <div class="h-100 p-4 bg-light rounded-4 border-0 shadow-sm border-top border-4 border-success">
                  <div class="d-flex align-items-center mb-3">
                    <div class="bg-success bg-opacity-10 text-success p-3 rounded-circle me-3">
                      <i class="bi bi-compass fs-4"></i>
                    </div>
                    <h4 class="h5 m-0 fw-bold">Missão</h4>
                  </div>
                  <p class="text-secondary small mb-0">
                    Contribuir para o desenvolvimento do sector diamantífero angolano através da exploração responsável dos recursos minerais, promovendo a geração de valor económico e o cumprimento das normas aplicáveis à actividade mineira.
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="h-100 p-4 bg-light rounded-4 border-0 shadow-sm border-top border-4 border-warning">
                  <div class="d-flex align-items-center mb-3">
                    <div class="bg-warning bg-opacity-10 text-warning p-3 rounded-circle me-3">
                      <i class="bi bi-eye fs-4"></i>
                    </div>
                    <h4 class="h5 m-0 fw-bold">Visão</h4>
                  </div>
                  <p class="text-secondary small mb-0">
                    Consolidar a actividade do Projecto Mucuanza no sector diamantífero angolano, contribuindo para o crescimento da produção de diamantes e para o desenvolvimento económico das regiões onde desenvolve a sua actividade.
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- Valores -->
          <section class="mb-5">
            <div class="border-start border-4 border-success ps-3 mb-4">
              <h3 class="h4 text-uppercase tracking-wide fw-bold mb-0" style="color: #006b3f;">Valores Orientadores</h3>
            </div>
            
            <div class="row g-3">
              <div class="col-md-6">
                <div class="p-3 border rounded-3 bg-white h-100 d-flex align-items-start gap-3 shadow-sm-hover transition">
                  <div class="text-success fs-3"><i class="bi bi-shield-check"></i></div>
                  <div>
                    <h6 class="fw-bold mb-1">Integridade</h6>
                    <p class="text-muted small mb-0">Actuação ética e transparente em todas as operações.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded-3 bg-white h-100 d-flex align-items-start gap-3 shadow-sm-hover transition">
                  <div class="text-success fs-3"><i class="bi bi-people"></i></div>
                  <div>
                    <h6 class="fw-bold mb-1">Pessoas</h6>
                    <p class="text-muted small mb-0">Valorização e segurança dos nossos colaboradores.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded-3 bg-white h-100 d-flex align-items-start gap-3 shadow-sm-hover transition">
                  <div class="text-success fs-3"><i class="bi bi-tree"></i></div>
                  <div>
                    <h6 class="fw-bold mb-1">Sustentabilidade</h6>
                    <p class="text-muted small mb-0">Gestão responsável dos recursos naturais.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="p-3 border rounded-3 bg-white h-100 d-flex align-items-start gap-3 shadow-sm-hover transition">
                  <div class="text-success fs-3"><i class="bi bi-award"></i></div>
                  <div>
                    <h6 class="fw-bold mb-1">Excelência</h6>
                    <p class="text-muted small mb-0">Procura contínua de melhoria e qualidade operacional.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Estrutura Societária (Opção 1) -->
          <section class="mb-4">
            <div class="border-start border-4 border-success ps-3 mb-4">
              <h3 class="h4 text-uppercase tracking-wide fw-bold mb-0" style="color: #006b3f;">Estrutura Societária</h3>
            </div>

            <div class="row g-3">
              <!-- Sovinhos -->
              <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-3 bg-white">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-success bg-opacity-10 text-success fw-bold px-3 py-2 rounded-pill fs-6">42%</span>
                    <i class="bi bi-building fs-4 text-muted"></i>
                  </div>
                  <h6 class="fw-bold mb-1 text-dark">Sovinhos, Lda.</h6>
                  <span class="small text-muted mb-2 d-block">Engarrafadora Vinícola de Luanda</span>
                  <div class="mt-auto pt-2 border-top">
                    <small class="text-uppercase fw-semibold text-success" style="font-size: 0.75rem;">Sócio Investidor</small>
                  </div>
                </div>
              </div>

              <!-- Endiama -->
              <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-3 bg-white">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-dark bg-opacity-10 text-dark fw-bold px-3 py-2 rounded-pill fs-6">33%</span>
                    <i class="bi bi-bank fs-4 text-muted"></i>
                  </div>
                  <h6 class="fw-bold mb-1 text-dark">ENDIAMA, E.P.</h6>
                  <span class="small text-muted mb-2 d-block">Empresa Nacional de Diamantes</span>
                  <div class="mt-auto pt-2 border-top">
                    <small class="text-uppercase fw-semibold text-dark" style="font-size: 0.75rem;">Sócio Institucional / Estatal</small>
                  </div>
                </div>
              </div>

              <!-- Mineralstar -->
              <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-3 bg-white">
                  <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="badge bg-warning bg-opacity-10 text-warning-emphasis fw-bold px-3 py-2 rounded-pill fs-6">25%</span>
                    <i class="bi bi-briefcase fs-4 text-muted"></i>
                  </div>
                  <h6 class="fw-bold mb-1 text-dark">Mineralstar S.A.</h6>
                  <span class="small text-muted mb-2 d-block">Sociedade Anónima</span>
                  <div class="mt-auto pt-2 border-top">
                    <small class="text-uppercase fw-semibold text-warning-emphasis" style="font-size: 0.75rem;">Sócio Privado</small>
                  </div>
                </div>
              </div>
            </div>
          </section>

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
