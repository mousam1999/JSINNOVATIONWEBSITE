<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/tracking.php';

$pageTitle = 'Checkout | ' . SITE_NAME;
$pageDescription = 'Complete your purchase of the Ultimate Photography Creative Vault.';
$pixelEvent = 'InitiateCheckout';
$pixelEventParams = ['content_name' => PRODUCT_NAME, 'currency' => CURRENCY_CODE, 'value' => PRODUCT_PRICE];
$hideStickyCta = true;

include __DIR__ . '/../includes/header.php';
?>
<section class="section" style="max-width:560px;margin:0 auto;">
  <div class="container text-center">
    <h1>Complete Your Purchase</h1>
    <p><?= e(PRODUCT_NAME) ?> &mdash; &#8377;<?= number_format(PRODUCT_PRICE) ?> (one-time payment)</p>

    <?php if (SUPERPROFILE_CHECKOUT_URL !== ''): ?>
      <?php // Appends captured UTM/click-id params; whether SuperProfile's checkout preserves or ignores unknown query params is unconfirmed (blocker). ?>
      <p><a href="<?= e(with_attribution(SUPERPROFILE_CHECKOUT_URL)) ?>" class="btn btn--primary" data-cta="checkout-redirect">Continue to Secure Checkout</a></p>
    <?php else: ?>
      <div class="card" role="alert">
        <p><strong>Checkout is not yet connected.</strong></p>
        <p><small>The SuperProfile checkout link hasn't been configured. Once it is, this page will redirect you straight to secure payment.</small></p>
      </div>
    <?php endif; ?>

    <p><small>You'll be redirected to our secure payment partner to complete your order.</small></p>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
