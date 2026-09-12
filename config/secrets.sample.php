<?php
declare(strict_types=1);

/**
 * Copy this file to secrets.php (same directory) and fill in real values.
 * secrets.php is gitignored and must NEVER be committed.
 * On Hostinger, keep this directory outside public_html or protected by
 * an .htaccess "Deny from all" rule (see config/.htaccess).
 */

// SMTP credentials for contact form delivery (do not use PHP mail()).
const SMTP_HOST = '';
const SMTP_PORT = 587;
const SMTP_USER = '';
const SMTP_PASS = '';
const SMTP_FROM = 'support@jsinnovation.in';

// Meta Conversions API — server-side only, never expose in JS.
const META_PIXEL_ID = '';
const META_CAPI_ACCESS_TOKEN = '';

// Google Analytics 4 measurement ID (e.g. "G-XXXXXXXXXX"). Client-side only, not secret,
// but kept alongside the other tracking IDs for a single config location.
const GA4_MEASUREMENT_ID = '';

// SuperProfile — BLOCKER: fields unknown until official docs/API are confirmed.
// Do not invent keys here beyond what is documented.
const SUPERPROFILE_WEBHOOK_SECRET = '';
