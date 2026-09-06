</main>

<footer class="site-footer">
  <div class="container">
    <p><strong><?= e(SITE_NAME) ?></strong> — <?= e(PRODUCT_NAME) ?></p>
    <ul class="site-footer__links">
      <li><a href="/faq">FAQ</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="/licensing">Licensing</a></li>
      <li><a href="/privacy-policy">Privacy Policy</a></li>
      <li><a href="/terms">Terms &amp; Conditions</a></li>
      <li><a href="/refund-policy">Refund Policy</a></li>
      <li><a href="/delivery">Delivery Info</a></li>
    </ul>
    <small>&copy; <?= date('Y') ?> <?= e(SITE_NAME) ?>. Digital product. Nothing is physically shipped.</small>
  </div>
</footer>

<?php include __DIR__ . '/sticky-cta.php'; ?>

<script src="/assets/js/main.js" defer></script>
</body>
</html>
