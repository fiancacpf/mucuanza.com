<?php
  include '_functions/local.php';
  fGeolocation('meio-ambiente');
?>
<!DOCTYPE html>
<html lang="pt-AO">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Meio Ambiente | Sociedade Mineira Mucuanza, Lda.</title>
<meta name="description" content="Gestão ambiental e boas práticas da Sociedade Mineira Mucuanza, Lda.">
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
      <div class="mz-breadcrumb mb-2"><a href="./">Início</a> <span class="sep">/</span> <span>Sustentabilidade</span> <span class="sep">/</span> <span>Meio Ambiente</span></div>
      <h1>Meio Ambiente</h1>
    </div>
  </section>

  <section class="mz-content">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-4">
          
        <div class="mz-side-nav mb-4">
          <h6>Sustentabilidade</h6>
          <ul><li><a href="meio-ambiente" class="active">Meio Ambiente</a></li><li><a href="saude-e-seguranca" class="">Saúde e Segurança</a></li></ul>
        </div>

        </div>
        <div class="col-lg-8">
          <img src="assets/img/SMM-06.jpg" class="rounded-img w-100 mb-4" alt="Gestão ambiental na mina">
          <h2>Gestão Ambiental</h2>
          <p>A Sociedade Mineira Mucuanza, Lda. desenvolve a sua actividade com base num sistema de gestão ambiental que acompanha todo o ciclo de vida da operação, desde a fase de exploração até ao encerramento e reabilitação futura das áreas mineiras.</p>
          <div class="row g-3 mt-2">
            <div class="col-md-6"><div class="mz-icon-box"><div class="ic"><i class="bi bi-droplet"></i></div><h6>Gestão da Água</h6><p class="small mb-0">Monitorização da qualidade e reutilização da água no processo.</p></div></div>
            <div class="col-md-6"><div class="mz-icon-box"><div class="ic"><i class="bi bi-recycle"></i></div><h6>Gestão de Resíduos</h6><p class="small mb-0">Separação, tratamento e destino adequado de resíduos industriais.</p></div></div>
            <div class="col-md-6"><div class="mz-icon-box"><div class="ic"><i class="bi bi-flower1"></i></div><h6>Biodiversidade</h6><p class="small mb-0">Programas de monitorização da fauna e flora envolventes.</p></div></div>
            <div class="col-md-6"><div class="mz-icon-box"><div class="ic"><i class="bi bi-arrow-repeat"></i></div><h6>Reabilitação de Áreas</h6><p class="small mb-0">Planeamento progressivo da recuperação paisagística.</p></div></div>
          </div>
          <h3>Monitorização Ambiental</h3>
          <p>São realizadas campanhas periódicas de monitorização da qualidade do ar, da água e do solo nas áreas envolventes à mina, em articulação com as autoridades ambientais competentes.</p>
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
