<?php
declare(strict_types=1);

/** Escape a value for safe HTML output. */
function e(?string $value): string
{
    return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
}

function csrf_token(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function csrf_verify(?string $token): bool
{
    return is_string($token)
        && !empty($_SESSION['csrf_token'])
        && hash_equals($_SESSION['csrf_token'], $token);
}

/** Persist UTM/click-id params into the session on first touch, without overwriting existing attribution. */
function capture_attribution(): void
{
    $keys = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term', 'fbclid'];
    if (!empty($_SESSION['attribution'])) {
        return;
    }
    $captured = [];
    foreach ($keys as $key) {
        if (isset($_GET[$key]) && is_string($_GET[$key])) {
            $captured[$key] = substr($_GET[$key], 0, 255);
        }
    }
    if ($captured) {
        $_SESSION['attribution'] = $captured;
    }
}

function current_path(): string
{
    return parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
}
