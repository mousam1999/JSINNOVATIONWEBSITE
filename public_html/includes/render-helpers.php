<?php
declare(strict_types=1);

function media_placeholder(string $label): string
{
    return '<div class="media-placeholder">' . e($label) . '</div>';
}

/**
 * @param array{title:string,benefit:string,note?:string} $data
 */
function category_card(array $data): string
{
    $note = isset($data['note']) ? '<p><small>' . e($data['note']) . '</small></p>' : '';
    return '<div class="card category-card">'
        . media_placeholder($data['title'] . ' preview')
        . '<h3>' . e($data['title']) . '</h3>'
        . '<p>' . e($data['benefit']) . '</p>'
        . $note
        . '</div>';
}

/**
 * @param array{title:string,body:string} $data
 */
function audience_card(array $data): string
{
    return '<div class="card">'
        . '<h3>' . e($data['title']) . '</h3>'
        . '<p>' . e($data['body']) . '</p>'
        . '</div>';
}

/**
 * @param array{q:string,a:string} $data
 */
function faq_item(array $data, int $index): string
{
    $id = 'faq-' . $index;
    return '<div class="faq-item" data-open="false">'
        . '<button class="faq-item__question" aria-expanded="false" aria-controls="' . e($id) . '">'
        . '<span>' . e($data['q']) . '</span>'
        . '<span class="faq-item__icon" aria-hidden="true">+</span>'
        . '</button>'
        . '<div class="faq-item__answer" id="' . e($id) . '"><p>' . $data['a'] . '</p></div>'
        . '</div>';
}
