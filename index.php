<?php

error_reporting(E_ALL);

ini_set('display_errors', true);

use PhpTheme\ComingSoonTheme\Theme;

require __DIR__ . '/vendor/autoload.php';

$theme = new Theme;

$theme->baseUrl = '/startbootstrap-coming-soon';

$theme->beginLayout([
    'title' => 'Welcome!',
    'footer' => [
        'buttons' => [
            [
                'icon' => 'fab fa-twitter',
                'label' => '',
                'url' => '#twitter'
            ]
        ]
    ]
]);

echo $theme->page(['content' => 'TEMP TEXT']);

$theme->endLayout();