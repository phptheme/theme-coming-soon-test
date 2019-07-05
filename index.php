<?php

use PhpTheme\ComingSoonTheme\Theme;

require __DIR__ . '/vendor/autoload.php';

$theme = new Theme;

$theme->baseUrl = '/startbootstrap-coming-soon';

$theme->beginLayout([
    'title' => 'Coming Soon Template Demo!',
    'subscribeForm' => [
        'submitButton' => 'Notify me!',
        'inputOptions' => [
            'type' => 'e-mail',
            'placeholder' => 'Enter email...',
            'aria-label' => 'Enter email...'
        ]
    ],
    'footer' => [
        'buttons' => [
            [
                'icon' => 'fab fa-twitter',
                'label' => '',
                'url' => '#twitter'
            ],
            [
                'icon' => 'fab fa-facebook-f',
                'label' => '',
                'url' => '#facebook'
            ],                        
            [
                'icon' => 'fab fa-instagram',
                'label' => '',
                'url' => '#instagram'
            ]
        ]
    ]
]);

echo $theme->page([
    'title' => 'Coming Soon!',
    'content' => file_get_contents(__DIR__ . '/index-text.php')
]);

$theme->endLayout();