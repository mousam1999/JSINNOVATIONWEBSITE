<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/tracking.php';
require_once __DIR__ . '/../includes/render-helpers.php';
require_once __DIR__ . '/../includes/faq-data.php';

$pageTitle = 'FAQ | ' . SITE_NAME;
$pageDescription = 'Answers to common questions about the Ultimate Photography Creative Vault.';

include __DIR__ . '/../includes/header.php';
?>
<section class="section" style="max-width:760px;margin:0 auto;">
  <div class="container">
    <h1>Frequently Asked Questions</h1>
    <div>
      <?php foreach (get_faqs() as $i => $faq): ?>
        <?= faq_item($faq, $i) ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
