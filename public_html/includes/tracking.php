<?php
declare(strict_types=1);

/**
 * Renders the Meta Pixel base snippet + PageView, and optionally one
 * additional standard event for the current page (ViewContent / InitiateCheckout).
 * Purchase is intentionally NOT fired from here — see /api/webhook.php TODO,
 * pending confirmed SuperProfile payment-confirmation signal.
 *
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
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', {$safePixelId});
    fbq('track', 'PageView');
    {$extraCall}
    </script>
    HTML;
}
