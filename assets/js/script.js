document.addEventListener('DOMContentLoaded', function () {

  /* ---------- Menu mobile (mega menu) ---------- */
  var burger = document.querySelector('.mz-burger');
  var nav = document.querySelector('.mz-nav');
  var backdrop = document.querySelector('.mz-nav-backdrop');

  function closeNav(){
    nav && nav.classList.remove('open');
    backdrop && backdrop.classList.remove('show');
  }

  if (burger && nav) {
    burger.addEventListener('click', function () {
      nav.classList.toggle('open');
      backdrop && backdrop.classList.toggle('show');
    });
  }
  if (backdrop) backdrop.addEventListener('click', closeNav);

  // Em ecrã pequeno, clicar no item de 1º nível com submenu abre o submenu
  document.querySelectorAll('.mz-nav > ul > li').forEach(function (li) {
    var link = li.querySelector(':scope > a');
    var mega = li.querySelector('.mz-mega');
    if (mega && link) {
      link.addEventListener('click', function (e) {
        if (window.innerWidth < 992) {
          e.preventDefault();
          li.classList.toggle('open');
        }
      });
    }
  });

  /* ---------- Contadores estatísticos ---------- */
  var counters = document.querySelectorAll('.mz-stat .n[data-count]');
  if (counters.length) {
    var animated = false;
    var animate = function () {
      counters.forEach(function (el) {
        var target = parseInt(el.getAttribute('data-count'), 10) || 0;
        var prefix = el.getAttribute('data-prefix') || '';
        var duration = 1400;
        var start = null;
        function step(ts) {
          if (!start) start = ts;
          var progress = Math.min((ts - start) / duration, 1);
          var value = Math.floor(progress * target);
          el.textContent = prefix + value.toLocaleString('pt-PT');
          if (progress < 1) requestAnimationFrame(step);
          else el.textContent = prefix + target.toLocaleString('pt-PT');
        }
        requestAnimationFrame(step);
      });
    };
    var statsSection = document.querySelector('.mz-stats');
    if (statsSection) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting && !animated) {
            animated = true;
            animate();
          }
        });
      }, { threshold: 0.4 });
      observer.observe(statsSection);
    }
  }

  /* ---------- Botão voltar ao topo ---------- */
  var backTop = document.querySelector('.mz-back-top');
  if (backTop) {
    window.addEventListener('scroll', function () {
      if (window.scrollY > 500) backTop.classList.add('show');
      else backTop.classList.remove('show');
    });
    backTop.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* ---------- Aviso de cookies ---------- */
  var cookie = document.querySelector('.mz-cookie');
  if (cookie) {
    if (!localStorage.getItem('mz_cookies_ok')) {
      cookie.classList.add('show');
    }
    var acceptBtn = cookie.querySelector('.mz-cookie-accept');
    if (acceptBtn) {
      acceptBtn.addEventListener('click', function () {
        localStorage.setItem('mz_cookies_ok', '1');
        cookie.classList.remove('show');
      });
    }
  }

  /* ---------- Formulário de contacto / candidatura / denúncia (demo) ---------- */
  document.querySelectorAll('form[data-mz-form]').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      overlay.classList.remove("d-none");
      setTimeout(function() {
        sendMessage(form);
      }, 5000);
    });
  });

});

const overlay = document.getElementById("loadingOverlay");

async function sendMessage(form) {
    var formData = new FormData(form);

    var alertBoxSuccess = document.querySelector('.mz-form-alert');
    var alertBoxError = document.querySelector('.mz-form-alert2');

    $.ajax({
        url: './forms/contact.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,

        success: function(data) {
            overlay.classList.add("d-none");

            const success = data?.success;

            if (success) {
                if (alertBoxSuccess) {
                    alertBoxSuccess.innerHTML = success;
                    alertBoxSuccess.classList.remove('d-none');
                    form.reset();

                    setTimeout(function() {
                        alertBoxSuccess.classList.add('d-none');
                    }, 6000);
                }
            } else {
                if (alertBoxError) {
                    alertBoxError.innerHTML = data?.error
                        ? data.error
                        : 'Não foi possível enviar a mensagem.';

                    alertBoxError.classList.remove('d-none');
                    form.reset();

                    setTimeout(function() {
                        alertBoxError.classList.add('d-none');
                    }, 6000);
                }
            }
        },

        error: function(xhr) {
            overlay.classList.add("d-none");

            if (alertBoxError) {
                alertBoxError.innerHTML = xhr?.responseJSON?.error
                    ? xhr.responseJSON.error
                    : 'Não foi possível enviar a mensagem.';

                alertBoxError.classList.remove('d-none');
                form.reset();

                setTimeout(function() {
                    alertBoxError.classList.add('d-none');
                }, 6000);
            }
        }
    });
}