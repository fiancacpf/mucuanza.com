<?php
  include '_functions/local.php';
  fGeolocation('mineracao');
?>
<!DOCTYPE html>
<html lang="pt-AO">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mineração | Sociedade Mineira Mucuanza, Lda.</title>
<meta name="description" content="Método e processo de extracção mineira da Sociedade Mineira Mucuanza, Lda.">
<meta name="theme-color" content="#006b3f">
<link rel="icon" href="assets/img/smm-icon.png">

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
          <li class=""><a href="./">Mucuanza</a></li>
<li class="">
              <a href="#">Governança <i class="bi bi-chevron-down small"></i></a>
              <ul class="mz-mega"><li><a href="sobre-nos">Sobre Nós</a></li>
<li><a href="conselho-de-gerencia">Conselho de Gerência</a></li></ul>
            </li>
<li class="active">
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
      <div class="mz-breadcrumb mb-2"><a href="./">Início</a> <span class="sep">/</span> <span>Operações</span> <span class="sep">/</span> <span>Mineração</span></div>
      <h1>Mineração</h1>
    </div>
  </section>

  <section class="mz-content">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-4">
          
        <div class="mz-side-nav mb-4">
          <h6>Operações</h6>
          <ul><li><a href="mineracao" class="active">Mineração</a></li><li><a href="processamento" class="">Processamento</a></li><li><a href="logistica" class="">Logística</a></li><li><a href="nosso-produto" class="">Nosso Produto</a></li></ul>
        </div>

        </div>
        <div class="col-lg-8">
          <!--img src="https://placehold.co/900x420/1c3c5c/ffffff?font=poppins&text=Operação+Mineira+Mucuanza"
              class="rounded-img w-100 mb-4"
              alt="Operação mineira da Sociedade Mineira Mucuanza"-->

          <h2>Método de Extracção</h2>

          <p>
            A Sociedade Mineira Mucuanza, Lda. atua no desenvolvimento responsável dos recursos diamantíferos de aluvião localizado nos municípios de Mussende, na província do Cuanza Sul, e Cangandala, na província de Malanje. A operação envolve a remoção de terras, o tratamento do minério e a recuperação dos diamantes através de uma unidade de tratamento.
          </p>

          <div class="row g-3 mt-2">

            <div class="col-md-6">
              <div class="mz-icon-box">
                <div class="ic"><i class="bi bi-layers"></i></div>
                <h6>Depósito</h6>
                <p class="small mb-0">
                  Exploração dos recuros diamantíferos de aluvião.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="mz-icon-box">
                <div class="ic"><i class="bi bi-truck"></i></div>
                <h6>Remoção de Terras</h6>
                <p class="small mb-0">
                  Utilização de equipamentos de remoção de terras para disponibilizar
                  o minério destinado ao tratamento.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="mz-icon-box">
                <div class="ic"><i class="bi bi-funnel"></i></div>
                <h6>Tratamento de Minério</h6>
                <p class="small mb-0">
                  O minério extraído é encaminhado para tratamento numa unidade de
                  processamento, destinada à recuperação dos diamantes.
                </p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="mz-icon-box">
                <div class="ic"><i class="bi bi-gem"></i></div>
                <h6>Recuperação de Diamantes</h6>
                <p class="small mb-0">
                  Em 2024, foram recuperados 5.648 quilates de diamantes a partir de
                  117.131 m³ de minério tratado.
                </p>
              </div>
            </div>

          </div>

          <h3>Equipamento e Frota</h3>

          <p>
            Até 2024, a Sociedade Mineira Mucuanza, Lda. operava com um total de 16 ERTs e uma lavaria. No mesmo período, os equipamentos de remoção de terras registaram uma disponibilidade de 78% e uma utilização de 63%.
          </p>
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
