(function () {
  'use strict';

  function initFaqAccordion() {
    var items = document.querySelectorAll('.faq-item');
    items.forEach(function (item) {
      var button = item.querySelector('.faq-item__question');
      var answer = item.querySelector('.faq-item__answer');
      if (!button || !answer) return;

      button.addEventListener('click', function () {
        var isOpen = item.getAttribute('data-open') === 'true';
        item.setAttribute('data-open', String(!isOpen));
        button.setAttribute('aria-expanded', String(!isOpen));
      });
    });
  }

  function initCtaTracking() {
    document.querySelectorAll('[data-cta]').forEach(function (el) {
      el.addEventListener('click', function () {
        if (typeof window.fbq === 'function') {
          window.fbq('trackCustom', 'CTAClick', { cta: el.getAttribute('data-cta') });
        }
      });
    });
  }

  document.addEventListener('DOMContentLoaded', function () {
    initFaqAccordion();
    initCtaTracking();
  });
})();
