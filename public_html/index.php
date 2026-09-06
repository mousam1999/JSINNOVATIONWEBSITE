<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';
require_once __DIR__ . '/includes/tracking.php';
require_once __DIR__ . '/includes/render-helpers.php';
require_once __DIR__ . '/includes/faq-data.php';

$pageTitle = PRODUCT_NAME . ' | ' . SITE_NAME;
$pageDescription = '18,000+ photography resources and 200GB+ of digital assets including album PSDs, Lightroom resources, Photoshop tools, templates and more.';
$pixelEvent = 'ViewContent';
$pixelEventParams = ['content_name' => PRODUCT_NAME, 'currency' => CURRENCY_CODE, 'value' => PRODUCT_PRICE];

include __DIR__ . '/includes/header.php';
?>

<!-- SECTION 2: HERO -->
<section class="section text-center">
  <div class="container" style="max-width: 780px;">
    <span class="badge">Photography Creative Vault</span>
    <h1>Everything You Need to Create Better Photography Work.</h1>
    <p style="font-size:1.1rem;">18,000+ digital resources &bull; 200GB+ of photography assets &bull; One complete creative vault.</p>

    <?php if (VALUE_ANCHOR_JUSTIFIED): ?>
      <p class="pricing-card__anchor">&#8377;<?= number_format(VALUE_ANCHOR) ?>+ VALUE</p>
    <?php endif; ?>
    <div class="pricing-card__price">&#8377;<?= number_format(PRODUCT_PRICE) ?></div>
    <?php if (VALUE_ANCHOR_JUSTIFIED): ?>
      <p class="pricing-card__save">SAVE &#8377;<?= number_format(VALUE_ANCHOR - PRODUCT_PRICE) ?>+</p>
    <?php endif; ?>

    <p><a href="/checkout" class="btn btn--primary" data-cta="hero">GET INSTANT ACCESS</a></p>
    <p><small>Digital Product &bull; Secure Checkout &bull; Instant Access</small></p>
  </div>
</section>

<!-- SECTION 3: TRUST / PRODUCT SNAPSHOT -->
<section class="section section--surface">
  <div class="container grid grid--4">
    <div class="stat"><div class="stat__number">18,000+</div><div class="stat__label">Files</div></div>
    <div class="stat"><div class="stat__number">200GB+</div><div class="stat__label">Resources</div></div>
    <div class="stat"><div class="stat__number">10,000+</div><div class="stat__label">Album PSDs</div></div>
    <div class="stat"><div class="stat__number">Thousands</div><div class="stat__label">Lightroom Resources</div></div>
  </div>
</section>

<!-- SECTION 4: WHAT'S INSIDE -->
<section class="section">
  <div class="container">
    <h2 class="text-center">18,000+ Resources. One Creative Vault.</h2>
    <div class="grid grid--3" style="margin-top: var(--space-4);">
      <?= category_card(['title' => 'Album Design', 'benefit' => '10,000+ Album PSD Bundle plus 2026 album design & bonuses.']) ?>
      <?= category_card(['title' => 'Lightroom', 'benefit' => 'Updated Lightroom presets to streamline your editing workflow.']) ?>
      <?= category_card(['title' => 'Photoshop', 'benefit' => 'Actions, brushes, gradients, shapes and plugins for Photoshop.']) ?>
      <?= category_card(['title' => 'LUTs & Effects', 'benefit' => 'Colour LUTs plus light leak and light effect overlays.']) ?>
      <?= category_card(['title' => 'Templates', 'benefit' => 'Album templates, title templates and photography WordPress templates.']) ?>
      <?= category_card(['title' => 'PNG / Design Assets', 'benefit' => 'PNG images and design assets to support your creative work.']) ?>
      <?= category_card(['title' => 'Bonuses', 'benefit' => '2026 album design & bonuses, photography video course.']) ?>
    </div>
  </div>
</section>

<!-- SECTION 5: ALBUM DESIGN -->
<section class="section section--surface">
  <div class="container grid grid--2" style="align-items:center;">
    <div>
      <h2>Design Photography Albums Faster</h2>
      <p>The 10,000+ Album PSD Bundle gives you a large working library of layered album designs — covers, spreads and layouts — to help you start album projects faster and adapt them to your own client work.</p>
      <a href="/checkout" class="btn btn--outline" data-cta="album-design">Explore the Vault</a>
    </div>
    <div class="grid grid--2">
      <?= media_placeholder('Album cover example') ?>
      <?= media_placeholder('Album spread example') ?>
    </div>
  </div>
</section>

<!-- SECTION 6: LIGHTROOM -->
<section class="section">
  <div class="container grid grid--2" style="align-items:center;">
    <?= media_placeholder('Lightroom preset preview') ?>
    <div>
      <h2>Transform Your Photography Workflow</h2>
      <p>The updated Lightroom presets included in this vault are designed to help you apply consistent looks faster across your editing sessions.</p>
    </div>
  </div>
</section>

<!-- SECTION 7: PHOTOSHOP -->
<section class="section section--surface">
  <div class="container">
    <h2 class="text-center">Photoshop Resources</h2>
    <div class="grid grid--4" style="margin-top: var(--space-3);">
      <?= media_placeholder('Photoshop Actions') ?>
      <?= media_placeholder('Photoshop Brushes') ?>
      <?= media_placeholder('Photoshop Gradients & Shapes') ?>
      <?= media_placeholder('Light Effects') ?>
    </div>
  </div>
</section>

<!-- SECTION 8: LUTS / EFFECTS -->
<section class="section">
  <div class="container">
    <h2 class="text-center">Colour, Light &amp; Effects</h2>
    <div class="grid grid--3" style="margin-top: var(--space-3);">
      <?= media_placeholder('Colour LUTs') ?>
      <?= media_placeholder('Light Leaks & Light Effects') ?>
      <?= media_placeholder('PNG Assets') ?>
    </div>
  </div>
</section>

<!-- SECTION 9: TEMPLATES -->
<section class="section section--surface">
  <div class="container">
    <h2 class="text-center">Templates</h2>
    <div class="grid grid--3" style="margin-top: var(--space-3);">
      <?= category_card(['title' => 'Album Templates', 'benefit' => 'Ready-to-adapt album layout templates.']) ?>
      <?= category_card(['title' => 'Title Templates', 'benefit' => 'Title and text templates for photography projects.']) ?>
      <?= category_card(['title' => 'Photography WordPress Templates', 'benefit' => 'WordPress templates suited to photography portfolios.', 'note' => 'Requires a compatible WordPress setup — see Software Compatibility below.']) ?>
    </div>
  </div>
</section>

<!-- SECTION 10: BONUS / 2026 UPDATE -->
<section class="section">
  <div class="container text-center">
    <span class="badge">Bonus</span>
    <h2>2026 Album Design &amp; Bonuses</h2>
    <p style="max-width:640px;margin:0 auto;">Includes the 2026 album design update and accompanying bonus resources as part of the current vault.</p>
  </div>
</section>

<!-- SECTION 11: VISUAL PRODUCT PROOF -->
<section class="section section--surface">
  <div class="container">
    <h2 class="text-center">See What You're Actually Getting</h2>
    <p class="text-center" style="max-width:640px;margin:0 auto var(--space-3);">Real folder structures, PSD previews and preset previews will appear here once product screenshots are supplied.</p>
    <div class="grid grid--3">
      <?= media_placeholder('Folder / library screenshot — pending real asset') ?>
      <?= media_placeholder('PSD preview — pending real asset') ?>
      <?= media_placeholder('Preset preview — pending real asset') ?>
    </div>
  </div>
</section>

<!-- SECTION 12: WHO IT'S FOR -->
<section class="section">
  <div class="container">
    <h2 class="text-center">Who It's For</h2>
    <div class="grid grid--3" style="margin-top: var(--space-3);">
      <?= audience_card(['title' => 'Wedding Photographers', 'body' => 'Album design resources and presets to support wedding delivery workflows.']) ?>
      <?= audience_card(['title' => 'Photography Studios', 'body' => 'A shared library of design and editing resources across a studio team.']) ?>
      <?= audience_card(['title' => 'Photo Editors', 'body' => 'Photoshop actions, brushes and LUTs to speed up editing tasks.']) ?>
      <?= audience_card(['title' => 'Album Designers', 'body' => 'A large working library of album PSDs and templates to draw from.']) ?>
      <?= audience_card(['title' => 'Content Creators', 'body' => 'Templates, fonts and design assets for photography-led content.']) ?>
    </div>
  </div>
</section>

<!-- SECTION 13: HOW IT WORKS -->
<section class="section section--surface">
  <div class="container">
    <h2 class="text-center">How It Works</h2>
    <div class="grid grid--4" style="margin-top: var(--space-3);">
      <div class="card"><h3>01 — Purchase</h3><p>Complete checkout securely.</p></div>
      <div class="card"><h3>02 — Get Access</h3><p>Receive digital access instructions.</p></div>
      <div class="card"><h3>03 — Download</h3><p>Access the photography vault.</p></div>
      <div class="card"><h3>04 — Create</h3><p>Use the applicable resources according to their license terms.</p></div>
    </div>
  </div>
</section>

<!-- SECTION 14: SOFTWARE COMPATIBILITY -->
<section class="section">
  <div class="container text-center">
    <h2>Software Compatibility</h2>
    <p style="max-width:640px;margin:0 auto;">Resources in this vault are built primarily for Adobe Photoshop and Adobe Lightroom, with additional formats for other applicable software (e.g. fonts, WordPress templates). <strong>Software requirements vary by individual resource</strong> — check each resource's format before use.</p>
  </div>
</section>

<!-- SECTION 15: AI-ASSISTED CURATION -->
<section class="section section--surface">
  <div class="container text-center">
    <span class="badge">AI-Assisted Curation</span>
    <h2>Organized for Easier Navigation</h2>
    <p style="max-width:640px;margin:0 auto;">The collection has been reviewed and organized with AI assistance to help structure the extensive library and make it easier to navigate.</p>
  </div>
</section>

<!-- SECTION 16: VALUE STACK -->
<section class="section">
  <div class="container" style="max-width:640px;">
    <h2 class="text-center">What's Included</h2>
    <ul class="value-stack__list">
      <li>10,000+ Album PSD Designs</li>
      <li>2026 Album Design &amp; Bonuses</li>
      <li>Updated Lightroom Presets</li>
      <li>Photoshop Actions, Brushes, Gradients, Plugins &amp; Shapes</li>
      <li>Colour LUTs &amp; Light Effects</li>
      <li>Album &amp; Title Templates</li>
      <li>PNG Images &amp; Premium Fonts Collections</li>
      <li>Photography Video Course &amp; WordPress Templates</li>
    </ul>
    <p class="text-center"><strong>One Complete Photography Creative Vault</strong></p>
    <div class="text-center">
      <?php if (VALUE_ANCHOR_JUSTIFIED): ?>
        <p class="pricing-card__anchor">&#8377;<?= number_format(VALUE_ANCHOR) ?>+ Value</p>
      <?php endif; ?>
      <p class="pricing-card__price">Today &#8377;<?= number_format(PRODUCT_PRICE) ?></p>
    </div>
  </div>
</section>

<!-- SECTION 17: PRICING -->
<section class="section section--surface" id="pricing">
  <div class="container" style="max-width:520px;">
    <div class="pricing-card">
      <h2><?= e(PRODUCT_NAME) ?></h2>
      <p>18,000+ Files &bull; 200GB+ Resources</p>
      <?php if (VALUE_ANCHOR_JUSTIFIED): ?>
        <p class="pricing-card__anchor">&#8377;<?= number_format(VALUE_ANCHOR) ?>+ Value</p>
      <?php endif; ?>
      <div class="pricing-card__price">&#8377;<?= number_format(PRODUCT_PRICE) ?></div>
      <a href="/checkout" class="btn btn--primary" data-cta="pricing" style="width:100%;">GET INSTANT ACCESS</a>
      <p><small>One-time payment</small></p>
    </div>
  </div>
</section>

<!-- SECTION 18: TRUST -->
<section class="section">
  <div class="container">
    <h2 class="text-center">Know Exactly What You're Buying</h2>
    <div class="grid grid--3" style="margin-top: var(--space-3);">
      <div class="card"><h3>Exact Figures</h3><p>18,000+ digital files, approximately 200GB+ of resources.</p></div>
      <div class="card"><h3>Delivery</h3><p>See our <a href="/delivery">delivery page</a> for how access is provided.</p></div>
      <div class="card"><h3>Licensing</h3><p>See our <a href="/licensing">licensing page</a> for current usage terms.</p></div>
    </div>
  </div>
</section>

<!-- SECTION 19: FAQ -->
<section class="section section--surface">
  <div class="container" style="max-width:760px;">
    <h2 class="text-center">Frequently Asked Questions</h2>
    <div>
      <?php foreach (get_faqs() as $i => $faq): ?>
        <?= faq_item($faq, $i) ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SECTION 20: FINAL CTA -->
<section class="section text-center">
  <div class="container">
    <h2>Your Photography Toolkit, All in One Place.</h2>
    <p>18,000+ Files &bull; 200GB+ &bull; One Complete Photography Vault</p>
    <div class="pricing-card__price">&#8377;<?= number_format(PRODUCT_PRICE) ?></div>
    <a href="/checkout" class="btn btn--primary" data-cta="final">GET INSTANT ACCESS</a>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
