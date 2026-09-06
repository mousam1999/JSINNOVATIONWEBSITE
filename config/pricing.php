<?php
declare(strict_types=1);

/**
 * Central pricing configuration.
 * Change values here only — never hard-code prices in templates.
 */

const PRODUCT_NAME = 'Ultimate Photography Creative Vault';

const PRODUCT_PRICE = 2999;          // INR, current one-time price
const RECOVERY_PRICE = 2499;         // INR, abandoned-checkout recovery price (NOT yet wired — depends on SuperProfile coupon support)
const VALUE_ANCHOR = 14999;          // INR, "value" reference figure

/**
 * BLOCKER / PENDING SIGN-OFF:
 * VALUE_ANCHOR above has not been substantiated by the business owner
 * (no confirmed prior selling price or documented valuation methodology).
 * Anchor/"save" messaging is gated behind this flag so it can be reviewed
 * before real ad spend goes live. Flip to true only after the owner has
 * confirmed how ₹14,999+ is defensible (e.g. itemized component values).
 */
const VALUE_ANCHOR_JUSTIFIED = false;

const CURRENCY_CODE = 'INR';
