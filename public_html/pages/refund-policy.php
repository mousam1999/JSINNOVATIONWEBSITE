<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/tracking.php';

$pageTitle = 'Refund Policy | ' . SITE_NAME;
$pageDescription = 'Refund policy for the Ultimate Photography Creative Vault.';

include __DIR__ . '/../includes/header.php';
?>
<section class="section" style="max-width:720px;margin:0 auto;">
  <div class="container">
    <h1>Refund Policy</h1>
    <div class="card" role="note">
      <p><strong>Placeholder — requires owner input.</strong> As a digital product delivered instantly on purchase, refund eligibility needs an explicit, final decision from the business owner (e.g. refund window, conditions, exclusions once access is granted) before this page is published or referenced in checkout/FAQ copy.</p>
    </div>
    <p>Until finalized, refund requests can be sent to <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a> and will be handled individually.</p>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
