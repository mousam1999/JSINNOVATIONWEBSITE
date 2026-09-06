<?php
declare(strict_types=1);

require_once __DIR__ . '/../../config/pricing.php';

$secretsFile = __DIR__ . '/../../config/secrets.php';
if (is_file($secretsFile)) {
    require_once $secretsFile;
}

const SITE_NAME = 'JSINNOVATION';
const SITE_DOMAIN = 'vault.jsinnovation.in';
const SITE_URL = 'https://vault.jsinnovation.in';
const SUPPORT_EMAIL = 'support@jsinnovation.in';

session_start();
