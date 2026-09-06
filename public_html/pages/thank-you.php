<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/tracking.php';

$pageTitle = 'Thank You | ' . SITE_NAME;
$pageDescription = 'Your order confirmation.';
$hideStickyCta = true;

/**
 * BLOCKER: Meta Purchase must only fire for a verified successful payment,
 * never merely because a visitor loaded this URL. SuperProfile's redirect
 * and/or webhook contract (order id, status, signature) is not yet
 * documented, so no Purchase event is fired here. Once confirmed:
 *   1. Verify the incoming signal server-side (webhook signature or a
 *      redirect param cross-checked against a server-recorded order).
 *   2. Fire Meta CAPI Purchase from that verified point (see /api/webhook.php),
 *      using a shared event_id with any client-side pixel call here for
 *      deduplication.
 *   3. Only then set $pixelEvent = 'Purchase' below.
 */
$pixelEvent = null;

include __DIR__ . '/../includes/header.php';
?>
<section class="section text-center">
  <div class="container">
    <h1>Thank You</h1>
    <p>If your payment was successful, you'll receive access instructions shortly.</p>
    <p><a href="/delivery" class="btn btn--primary" data-cta="thank-you-delivery">View Delivery Instructions</a></p>
    <p><small>Trouble with your order? Contact <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>.</small></p>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
