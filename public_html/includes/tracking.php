<?php
declare(strict_types=1);

/**
 * Both trackers below are defined but NOT executed on render — each writes
 * an init function onto window.__tracking, and main.js only calls those
 * once the visitor has accepted the cookie banner (see initConsent() in
 * main.js). This means no Meta/GA4 request — and no third-party cookie —
 * happens before consent, not just that a banner is shown.
 *
 * Purchase is intentionally never mapped/fired from here — see
 * /api/webhook.php TODO, pending a confirmed SuperProfile payment signal.
 */

/**
 * @param string|null $extraEvent Standard Meta event name to fire alongside PageView.
 * @param array<string,mixed> $extraParams Custom data for $extraEvent.
 */
function render_meta_pixel(?string $extraEvent = null, array $extraParams = []): void
{
    $pixelId = defined('META_PIXEL_ID') ? META_PIXEL_ID : '';
    if ($pixelId === '') {
        echo "<!-- Meta Pixel not configured: set META_PIXEL_ID in config/secrets.php -->\n";
        return;
    }

    $extraCall = '';
    if ($extraEvent !== null) {
        $safeEvent = json_encode($extraEvent, JSON_THROW_ON_ERROR);
        $safeParams = json_encode($extraParams, JSON_THROW_ON_ERROR);
        $extraCall = "fbq('track', {$safeEvent}, {$safeParams});";
    }

    $safePixelId = json_encode($pixelId, JSON_THROW_ON_ERROR);
    echo <<<HTML
    <script>
    window.__tracking = window.__tracking || {};
    window.__tracking.initMeta = function () {
      !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
      n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
      document,'script','https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', {$safePixelId});
      fbq('track', 'PageView');
      {$extraCall}
    };
    </script>
    HTML;
}

/** Maps our Meta event vocabulary onto GA4's recommended event names. */
function ga4_event_name_for(?string $metaEvent): ?string
{
    return match ($metaEvent) {
        'ViewContent' => 'view_item',
        'InitiateCheckout' => 'begin_checkout',
        'Purchase' => 'purchase',
        default => null,
    };
}

/**
 * @param string|null $metaEvent Same event vocabulary passed to render_meta_pixel(); mapped to its GA4 equivalent.
 * @param array<string,mixed> $extraParams Same shape as render_meta_pixel() (content_name/currency/value).
 */
function render_ga4(?string $metaEvent = null, array $extraParams = []): void
{
    $measurementId = defined('GA4_MEASUREMENT_ID') ? GA4_MEASUREMENT_ID : '';
    if ($measurementId === '') {
        echo "<!-- GA4 not configured: set GA4_MEASUREMENT_ID in config/secrets.php -->\n";
        return;
    }

    $eventName = ga4_event_name_for($metaEvent);
    $eventCall = '';
    if ($eventName !== null) {
        // Basic flat event params, not GA4's strict Enhanced Ecommerce `items[]` schema.
        $ga4Params = array_filter([
            'item_name' => $extraParams['content_name'] ?? null,
            'currency' => $extraParams['currency'] ?? null,
            'value' => $extraParams['value'] ?? null,
        ], static fn ($v) => $v !== null);
        $safeEvent = json_encode($eventName, JSON_THROW_ON_ERROR);
        $safeParams = json_encode($ga4Params, JSON_THROW_ON_ERROR);
        $eventCall = "gtag('event', {$safeEvent}, {$safeParams});";
    }

    $safeId = json_encode($measurementId, JSON_THROW_ON_ERROR);
    echo <<<HTML
    <script>
    window.__tracking = window.__tracking || {};
    window.__tracking.initGA4 = function () {
      var s = document.createElement('script');
      s.async = true;
      s.src = 'https://www.googletagmanager.com/gtag/js?id=' + {$safeId};
      document.head.appendChild(s);
      window.dataLayer = window.dataLayer || [];
      function gtag(){ window.dataLayer.push(arguments); }
      window.gtag = gtag;
      gtag('js', new Date());
      gtag('config', {$safeId});
      {$eventCall}
    };
    </script>
    HTML;
}

/**
 * Single call site for header.php: writes both trackers' deferred init
 * functions using the same event vocabulary/params for each page.
 */
function render_tracking(?string $metaEvent = null, array $extraParams = []): void
{
    render_meta_pixel($metaEvent, $extraParams);
    render_ga4($metaEvent, $extraParams);
}
