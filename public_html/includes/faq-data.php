<?php
declare(strict_types=1);

/** @return array<int, array{q:string,a:string}> */
function get_faqs(): array
{
    return [
        ['q' => 'What exactly is included in the Photography Creative Vault?', 'a' => 'A large collection of album PSDs, Lightroom presets, Photoshop resources, colour LUTs, templates, PNG assets and bonus content. See the "What\'s Included" section on the homepage for the full list.'],
        ['q' => 'How will I receive the pack?', 'a' => 'After a verified purchase, you\'ll be directed to our <a href="/delivery">delivery page</a> with access instructions.'],
        ['q' => 'How much data is included?', 'a' => 'The vault currently contains 18,000+ digital files and approximately 200GB+ of photography resources.'],
        ['q' => 'What type of PSDs are included?', 'a' => 'Primarily album design PSDs (10,000+), covering covers, spreads and layouts.'],
        ['q' => 'Are the files editable/customizable?', 'a' => 'Many resources are provided in editable formats, but editability varies by individual file.'],
        ['q' => 'Which software do I need?', 'a' => 'Primarily Adobe Photoshop and Adobe Lightroom. Software requirements vary by individual resource — see our Software Compatibility section on the homepage.'],
        ['q' => 'Can I use these resources for my photography business?', 'a' => 'Final licensing terms for business use are pending verification. See our <a href="/licensing">licensing page</a> for the current status.'],
        ['q' => 'Can I use them for client projects?', 'a' => 'Final licensing terms for client use are pending verification. See our <a href="/licensing">licensing page</a> for the current status.'],
        ['q' => 'Is this suitable for beginners?', 'a' => 'The vault is usable by photographers and editors at various experience levels, though some resources assume basic familiarity with Photoshop or Lightroom.'],
        ['q' => 'Is this a physical product?', 'a' => 'No. This is a digital product. Nothing will be physically shipped.'],
        ['q' => 'How large is the download?', 'a' => 'Approximately 200GB+ in total. See our <a href="/delivery">delivery page</a> for how access is structured.'],
        ['q' => 'Can I share or resell the files?', 'a' => 'Sharing and resale terms are pending final license verification. See our <a href="/licensing">licensing page</a> for the current status.'],
        ['q' => 'Do I receive future updates?', 'a' => 'Update policy details will be published on this page once confirmed.'],
        ['q' => 'What if I have trouble accessing my files?', 'a' => 'Contact us at <a href="mailto:' . SUPPORT_EMAIL . '">' . SUPPORT_EMAIL . '</a> and we\'ll help you regain access.'],
        ['q' => 'What is the refund policy?', 'a' => 'See our <a href="/refund-policy">refund policy</a> for full terms.'],
        ['q' => 'Why is this bundle priced so low?', 'a' => 'This is a digital product with no per-unit shipping or manufacturing cost, which allows for a lower price relative to the size of the collection.'],
        ['q' => 'How was the collection curated?', 'a' => 'The collection has been reviewed and organized with AI assistance to help structure the library and make it easier to navigate.'],
    ];
}
