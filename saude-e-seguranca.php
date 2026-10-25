<?php
  include '_functions/local.php';
  fGeolocation('saude-e-seguranca');
?>
<!DOCTYPE html>
<html lang="pt-AO">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Saúde e Segurança | Sociedade Mineira Mucuanza, Lda.</title>
<meta name="description" content="Política de saúde e segurança ocupacional da Sociedade Mineira Mucuanza, Lda.">
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
<li class="">
              <a href="#">Operações <i class="bi bi-chevron-down small"></i></a>
              <ul class="mz-mega"><li><a href="mineracao">Mineração</a></li>
<li><a href="processamento">Processamento</a></li>
<li><a href="logistica">Logística</a></li>
<li><a href="nosso-produto">Nosso Produto</a></li></ul>
            </li>
<li class="active">
              <a href="#">Sustentabilidade <i class="bi bi-chevron-down small"></i></a>
              <ul class="mz-mega"><li><a href="meio-ambiente">Meio Ambiente</a></li>
<li><a href="saude-e-seguranca">Saúde e Segurança</a></li>
</ul>
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
      <div class="mz-breadcrumb mb-2"><a href="./">Início</a> <span class="sep">/</span> <span>Sustentabilidade</span> <span class="sep">/</span> <span>Saúde e Segurança</span></div>
      <h1>Saúde e Segurança</h1>
    </div>
  </section>

  <section class="mz-content">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-4">
          
        <div class="mz-side-nav mb-4">
          <h6>Sustentabilidade</h6>
          <ul><li><a href="meio-ambiente" class="">Meio Ambiente</a></li><li><a href="saude-e-seguranca" class="active">Saúde e Segurança</a></li></ul>
        </div>

        </div>
        <div class="col-lg-8">
          <img src="assets/img/SMM-07.jpg" class="rounded-img w-100 mb-4" alt="Saúde e segurança ocupacional">
          <h2>Segurança em Primeiro Lugar</h2>
          <p>A protecção da vida e da saúde dos colaboradores é uma prioridade absoluta para a Sociedade Mineira Mucuanza, Lda. A empresa mantém um sistema de gestão de saúde e segurança ocupacional alinhado com as melhores práticas internacionais do sector mineiro.</p>
          <div class="row g-3 mt-2">
            <div class="col-md-6"><div class="mz-icon-box"><div class="ic"><i class="bi bi-shield-check"></i></div><h6>Equipamentos de Protecção Individual</h6><p class="small mb-0">Disponibilização e utilização adequada de equipamentos para garantir a segurança dos trabalhadores.</p></div></div>
            <div class="col-md-6"><div class="mz-icon-box"><div class="ic"><i class="bi bi-cone-striped"></i></div><h6>Prevenção de Riscos</h6><p class="small mb-0">Identificação e mitigação contínua de riscos operacionais.</p></div></div>
            <div class="col-md-6"><div class="mz-icon-box"><div class="ic"><i class="bi bi-mortarboard"></i></div><h6>Formação em SSO</h6><p class="small mb-0">Capacitação regular de todos os trabalhadores e prestadores.</p></div></div>
            <div class="col-md-6"><div class="mz-icon-box"><div class="ic"><i class="bi bi-clipboard-pulse"></i></div><h6>Indicadores de Segurança</h6><p class="small mb-0">Monitorização de indicadores de acidentes de trabalho.</p></div></div>
          </div>
          <h3>Cultura de Segurança</h3>
          <p>A Mucuanza promove uma cultura de segurança assente na responsabilidade partilhada, incentivando a comunicação de quase-acidentes e a participação activa dos colaboradores na melhoria contínua das condições de trabalho.</p>
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
