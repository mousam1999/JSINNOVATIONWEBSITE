<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

/**
 * NOTE: sends via PHP's mail() as a working default. This is the one place
 * in the brief that recommends SMTP/API delivery over mail() for
 * reliability/deliverability — swap in an SMTP client (e.g. PHPMailer)
 * once SMTP_HOST/SMTP_USER/SMTP_PASS are supplied in config/secrets.php.
 * Flagged in the project handoff notes as a known limitation.
 */

function redirect_to_contact(string $status): never
{
    header('Location: /contact?status=' . urlencode($status));
    exit;
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    redirect_to_contact('error');
}

// Honeypot: real visitors never fill this hidden field.
if (!empty($_POST['website'])) {
    redirect_to_contact('sent'); // pretend success so bots don't learn to skip this field
}

if (!csrf_verify($_POST['csrf_token'] ?? null)) {
    redirect_to_contact('error');
}

// Basic rate limit: one submission per 20 seconds per session.
$now = time();
if (!empty($_SESSION['last_contact_submit']) && $now - $_SESSION['last_contact_submit'] < 20) {
    redirect_to_contact('error');
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$subject = trim((string) ($_POST['subject'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || $subject === '' || $message === ''
    || strlen($name) > 150 || strlen($subject) > 200 || strlen($message) > 4000
    || !filter_var($email, FILTER_VALIDATE_EMAIL)
) {
    redirect_to_contact('error');
}

// Strip anything that could be used for header injection via the reply-to address.
$email = str_replace(["\r", "\n"], '', $email);

$body = "New contact form submission\n\n"
    . "Name: {$name}\n"
    . "Email: {$email}\n\n"
    . "Message:\n{$message}\n";

$headers = "From: " . SUPPORT_EMAIL . "\r\n"
    . "Reply-To: {$email}\r\n"
    . "Content-Type: text/plain; charset=UTF-8\r\n";

$mailSubject = '[' . SITE_NAME . ' Contact] ' . str_replace(["\r", "\n"], '', $subject);

$sent = @mail(SUPPORT_EMAIL, $mailSubject, $body, $headers);

$_SESSION['last_contact_submit'] = $now;

redirect_to_contact($sent ? 'sent' : 'error');
