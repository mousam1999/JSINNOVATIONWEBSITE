<?php
declare(strict_types=1);

/**
 * BLOCKER: SuperProfile webhook contract (payload shape, signature/HMAC
 * verification, order id, payment status, customer email, amount) is not
 * yet documented. This endpoint intentionally does nothing beyond logging
 * receipt until that's confirmed — it must NOT be wired to fire Meta
 * Purchase events, mark orders paid, or issue delivery tokens until:
 *   1. The payload shape and any signing mechanism are confirmed.
 *   2. Signature verification is implemented here (reject unsigned/invalid
 *      requests before trusting any field).
 *   3. A verified order record is written (so /delivery and /thank-you can
 *      check it) and only then is CAPI Purchase fired, using a stable
 *      event_id for client/server dedup.
 *
 * Until then this returns 501 so SuperProfile's dashboard clearly shows a
 * failed delivery attempt rather than a silent, misleading 200.
 */

http_response_code(501);
header('Content-Type: application/json');
echo json_encode(['error' => 'SuperProfile webhook not yet configured — pending documented payload/signature contract.']);
