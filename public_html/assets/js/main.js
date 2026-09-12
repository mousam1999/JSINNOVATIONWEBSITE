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

  var CONSENT_KEY = 'jsi_consent';

  function getConsent() {
    try {
      return localStorage.getItem(CONSENT_KEY);
    } catch (e) {
      return null;
    }
  }

  function setConsent(value) {
    try {
      localStorage.setItem(CONSENT_KEY, value);
    } catch (e) {
      // localStorage unavailable (private mode, blocked storage) — consent
      // just won't persist across visits; the banner will reappear.
    }
  }

  function loadTrackers() {
    if (!window.__tracking) return;
    if (typeof window.__tracking.initMeta === 'function') window.__tracking.initMeta();
    if (typeof window.__tracking.initGA4 === 'function') window.__tracking.initGA4();
  }

  function initConsent() {
    var banner = document.getElementById('cookie-banner');
    var consent = getConsent();

    if (consent === 'granted') {
      loadTrackers();
      return;
    }
    if (consent === 'denied' || !banner) {
      return;
    }

    banner.hidden = false;
    var acceptBtn = document.getElementById('cookie-accept');
    var rejectBtn = document.getElementById('cookie-reject');
    if (acceptBtn) {
      acceptBtn.addEventListener('click', function () {
        setConsent('granted');
        banner.hidden = true;
        loadTrackers();
      });
    }
    if (rejectBtn) {
      rejectBtn.addEventListener('click', function () {
        setConsent('denied');
        banner.hidden = true;
      });
    }
  }

  document.addEventListener('DOMContentLoaded', function () {
    initFaqAccordion();
    initCtaTracking();
    initConsent();
  });
})();
