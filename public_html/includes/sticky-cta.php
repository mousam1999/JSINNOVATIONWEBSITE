<?php
declare(strict_types=1);
if (!empty($hideStickyCta)) {
    return;
}
?>
<div class="sticky-cta" role="complementary" aria-label="Purchase">
  <span class="sticky-cta__price">&#8377;<?= number_format(PRODUCT_PRICE) ?></span>
  <a href="/checkout" class="btn btn--primary" data-cta="sticky">GET ACCESS &rarr;</a>
</div>
