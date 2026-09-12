<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/tracking.php';

$pageTitle = 'Privacy Policy | ' . SITE_NAME;
$pageDescription = 'How ' . SITE_NAME . ' handles your data.';

include __DIR__ . '/../includes/header.php';
?>
<section class="section" style="max-width:720px;margin:0 auto;">
  <div class="container">
    <h1>Privacy Policy</h1>
    <div class="card" role="note">
      <p><strong>Placeholder — requires owner input.</strong> This page must be completed with your actual business details (legal entity name, registered address, data controller contact), the specific tracking technologies in use (Meta Pixel, Meta Conversions API, Google Analytics 4), what data each collects, retention periods, and any applicable regulatory basis (e.g. India's DPDP Act) before this site goes live.</p>
    </div>
    <p>In the meantime: this site shows a cookie consent banner on first visit and does not load Google Analytics or Meta Pixel until you choose "Accept." Choosing "Reject" (or ignoring the banner) means neither loads.</p>
    <h2>What this page will cover</h2>
    <ul>
      <li>What personal data is collected (e.g. name, email, payment metadata via our payment partner)</li>
      <li>Analytics and advertising technologies used (Meta Pixel, Meta Conversions API, Google Analytics 4)</li>
      <li>How data is used and retained</li>
      <li>Third parties data is shared with (payment processor, analytics providers)</li>
      <li>Your rights and how to contact us</li>
    </ul>
    <p>Questions in the meantime: <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>.</p>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
