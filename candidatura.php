<?php
  include '_functions/local.php';
  fGeolocation('candidatura');
?>
<!DOCTYPE html>
<html lang="pt-AO">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Candidatura | Sociedade Mineira Mucuanza, Lda.</title>
<meta name="description" content="Oportunidades de emprego e formulário de candidatura à Sociedade Mineira Mucuanza, Lda.">
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
<li class="">
              <a href="#">Sustentabilidade <i class="bi bi-chevron-down small"></i></a>
              <ul class="mz-mega"><li><a href="meio-ambiente">Meio Ambiente</a></li>
<li><a href="saude-e-seguranca">Saúde e Segurança</a></li></ul>
            </li>
<li class="">
              <a href="#">Imprensa <i class="bi bi-chevron-down small"></i></a>
              <ul class="mz-mega"><li><a href="noticias">Notícias</a></li></ul>
            </li>
<li class="active">
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
      <div class="mz-breadcrumb mb-2"><a href="./">Início</a> <span class="sep">/</span> <span>Utilidade</span> <span class="sep">/</span> <span>Candidatura</span></div>
      <h1>Candidatura</h1>
    </div>
  </section>

  <section class="mz-content">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-4">
          
        <div class="mz-side-nav mb-4">
          <h6>Utilidade</h6>
          <ul><li><a href="contactos" class="">Contactos</a></li><li><a href="candidatura" class="active">Candidatura</a></li></ul>
        </div>

        </div>
        <div class="col-lg-8">
          <h2>Trabalhar na Mucuanza</h2>
          <p>
            Junte-se a uma equipa que valoriza o talento angolano e investe no
            desenvolvimento profissional dos seus colaboradores. Consulte nesta página
            as oportunidades de emprego e estágio disponíveis na Mucuanza.
          </p>

          <h3>Vagas Disponíveis: <span class="small">0</span></h3>

          <div class="mt-3 p-4 border rounded text-center">
            <i class="bi bi-briefcase fs-2 text-muted"></i>
            <h6 class="mt-2 mb-1">Não existem vagas disponíveis</h6>
            <p class="small text-muted mb-0">
              Consulte esta página regularmente para novas oportunidades.
            </p>
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
