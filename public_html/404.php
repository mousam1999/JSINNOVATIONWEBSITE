<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/tracking.php';

$pageTitle = 'Page Not Found | ' . SITE_NAME;
$pageDescription = 'The page you requested could not be found.';
$hideStickyCta = true;

include __DIR__ . '/includes/header.php';
?>
<section class="section text-center">
  <div class="container">
    <h1>Page Not Found</h1>
    <p>The page you're looking for doesn't exist or may have moved.</p>
    <p><a href="/" class="btn btn--primary">Back to Home</a></p>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
