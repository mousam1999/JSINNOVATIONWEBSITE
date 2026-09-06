<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/tracking.php';

$pageTitle = 'Licensing | ' . SITE_NAME;
$pageDescription = 'Usage rights and licensing terms for the Ultimate Photography Creative Vault.';

include __DIR__ . '/../includes/header.php';
?>
<section class="section" style="max-width:720px;margin:0 auto;">
  <div class="container">
    <h1>Licensing &amp; Usage Terms</h1>
    <div class="card" role="alert">
      <p><strong>Pending verification.</strong> When you purchase this vault, you are purchasing access/usage rights according to the actual license terms of each resource — not ownership of the underlying intellectual property. Redistribution, resale, commercial-use and client-work rights for the categories below have <strong>not yet been verified</strong> and must not be assumed until confirmed here.</p>
    </div>
    <h2>Categories pending license verification</h2>
    <ul>
      <li>Album PSD Bundle</li>
      <li>Lightroom Presets</li>
      <li>Photoshop Actions, Brushes, Gradients, Shapes &amp; Plugins</li>
      <li>Colour LUTs, Light Leaks &amp; Light Effects</li>
      <li>Album &amp; Title Templates</li>
      <li>PNG Images</li>
      <li>Premium Fonts Collections</li>
      <li>Photography Video Course</li>
      <li>Photography WordPress Templates</li>
    </ul>
    <p>This page will be updated with final, verified terms for each category — including whether commercial use, client work, resale, or redistribution is permitted — once confirmed by the resource owner/rights holder. Until then, no such claims should be relied upon.</p>
    <p>Questions: <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>.</p>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
