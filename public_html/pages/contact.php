<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/tracking.php';

$pageTitle = 'Contact | ' . SITE_NAME;
$pageDescription = 'Get in touch with ' . SITE_NAME . ' support.';
$token = csrf_token();

$status = $_GET['status'] ?? null;

include __DIR__ . '/../includes/header.php';
?>
<section class="section" style="max-width:560px;margin:0 auto;">
  <div class="container">
    <h1>Contact Us</h1>
    <p>Questions about the vault? Send us a message and we'll get back to you.</p>

    <?php if ($status === 'sent'): ?>
      <div class="card" role="status"><p>Thanks — your message has been sent. We'll reply as soon as we can.</p></div>
    <?php elseif ($status === 'error'): ?>
      <div class="card" role="alert"><p>Something went wrong sending your message. Please try again or email us directly at <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>.</p></div>
    <?php endif; ?>

    <form action="/api/contact.php" method="post" novalidate>
      <input type="hidden" name="csrf_token" value="<?= e($token) ?>">
      <!-- Honeypot: hidden from real users, bots often fill every field. -->
      <div style="position:absolute;left:-9999px;" aria-hidden="true">
        <label for="website">Website</label>
        <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
      </div>

      <p>
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" required maxlength="150" style="width:100%;padding:0.6rem;border:1px solid var(--border);border-radius:var(--radius-sm);">
      </p>
      <p>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required maxlength="255" style="width:100%;padding:0.6rem;border:1px solid var(--border);border-radius:var(--radius-sm);">
      </p>
      <p>
        <label for="subject">Subject</label><br>
        <input type="text" id="subject" name="subject" required maxlength="200" style="width:100%;padding:0.6rem;border:1px solid var(--border);border-radius:var(--radius-sm);">
      </p>
      <p>
        <label for="message">Message</label><br>
        <textarea id="message" name="message" required maxlength="4000" rows="6" style="width:100%;padding:0.6rem;border:1px solid var(--border);border-radius:var(--radius-sm);"></textarea>
      </p>
      <button type="submit" class="btn btn--primary">Send Message</button>
    </form>
  </div>
</section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
