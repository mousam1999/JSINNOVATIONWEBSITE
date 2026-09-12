<?php
declare(strict_types=1);
/** @var string $pageTitle */
/** @var string $pageDescription */
capture_attribution();
$pageTitle = $pageTitle ?? PRODUCT_NAME . ' | ' . SITE_NAME;
$pageDescription = $pageDescription ?? '18,000+ photography resources and 200GB+ of digital assets including album PSDs, Lightroom resources, Photoshop tools, templates and more.';
$canonical = SITE_URL . current_path();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= e($pageTitle) ?></title>
<meta name="description" content="<?= e($pageDescription) ?>">
<link rel="canonical" href="<?= e($canonical) ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?= e($pageTitle) ?>">
<meta property="og:description" content="<?= e($pageDescription) ?>">
<meta property="og:url" content="<?= e($canonical) ?>">
<meta name="twitter:card" content="summary_large_image">
<link rel="icon" href="/assets/images/favicon.svg" type="image/svg+xml">
<link rel="stylesheet" href="/assets/css/tokens.css">
<link rel="stylesheet" href="/assets/css/base.css">
<link rel="stylesheet" href="/assets/css/components.css">
</head>
<body>
<?php render_tracking($pixelEvent ?? null, $pixelEventParams ?? []); ?>

<div class="announcement-bar">THE ULTIMATE PHOTOGRAPHY CREATIVE VAULT</div>

<header class="site-header">
  <div class="container">
    <a class="site-header__logo" href="/">
      <?= e(SITE_NAME) ?>
    </a>
    <a href="/checkout" class="btn btn--primary" data-cta="header">Get Instant Access</a>
  </div>
</header>

<main id="main">
