<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/tracking.php';

$pageTitle = 'Digital Delivery | ' . SITE_NAME;
$pageDescription = 'How you receive access to the Ultimate Photography Creative Vault.';

include __DIR__ . '/../includes/header.php';
?>
<section class="section" style="max-width:680px;margin:0 auto;">
  <div class="container">
    <h1>Digital Delivery</h1>
    <p>This is a digital product. Nothing is physically shipped.</p>
    <p>Your access link will be emailed to you after your purchase is confirmed. Final delivery details (storage provider and access format) are being finalized — this page will be updated with exact steps once that's in place.</p>
    <h2>In the meantime</h2>
    <p>If you've completed a purchase and haven't received access instructions, contact us at <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a> with your order details and we'll help directly.</p>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
