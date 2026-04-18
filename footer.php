/* Shineray Querétaro — JS */
(function () {
  'use strict';

  // ===== Mobile menu toggle =====
  var toggle = document.getElementById('navToggle');
  var menu = document.getElementById('mobileMenu');
  var iconOpen = document.getElementById('navIconOpen');
  var iconClose = document.getElementById('navIconClose');

  if (toggle && menu) {
    toggle.addEventListener('click', function () {
      var isOpen = menu.classList.toggle('open');
      iconOpen.style.display = isOpen ? 'none' : '';
      iconClose.style.display = isOpen ? '' : 'none';
    });
    // Cerrar al hacer click en un link
    menu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        menu.classList.remove('open');
        iconOpen.style.display = '';
        iconClose.style.display = 'none';
      });
    });
  }

  // ===== WhatsApp float (aparece tras 300px de scroll) =====
  var wa = document.getElementById('waFloat');
  if (wa) {
    var THRESHOLD = 300;
    var update = function () {
      var visible = window.scrollY > THRESHOLD;
      wa.classList.toggle('visible', visible);
      wa.setAttribute('aria-hidden', visible ? 'false' : 'true');
      wa.setAttribute('tabindex', visible ? '0' : '-1');
    };
    update();
    window.addEventListener('scroll', update, { passive: true });
  }
})();
