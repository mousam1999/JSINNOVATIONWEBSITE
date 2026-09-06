<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/tracking.php';

$pageTitle = 'Terms & Conditions | ' . SITE_NAME;
$pageDescription = 'Terms and conditions for using ' . SITE_NAME . ' and purchasing the Photography Creative Vault.';

include __DIR__ . '/../includes/header.php';
?>
<section class="section" style="max-width:720px;margin:0 auto;">
  <div class="container">
    <h1>Terms &amp; Conditions</h1>
    <div class="card" role="note">
      <p><strong>Placeholder — requires owner input.</strong> This page must be completed with your registered business details, governing law/jurisdiction, and finalized terms of sale before this site goes live. It should not be published as-is.</p>
    </div>
    <h2>What this page will cover</h2>
    <ul>
      <li>Description of the digital product being sold</li>
      <li>Payment terms (processed via SuperProfile)</li>
      <li>License/usage terms — see our dedicated <a href="/licensing">Licensing page</a></li>
      <li>Refunds — see our <a href="/refund-policy">Refund Policy</a></li>
      <li>Limitation of liability and governing law</li>
    </ul>
    <p>Questions in the meantime: <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>.</p>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
