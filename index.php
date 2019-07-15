<?php

use PhpTheme\ComingSoonTheme\Theme;

require __DIR__ . '/vendor/autoload.php';

$theme = new Theme;

$theme->baseUrl = '/startbootstrap-coming-soon';

$theme->beginContent();

?>

<p>We're working hard to finish the development of this site. Our target launch date is <strong>January 2019</strong>! Sign up for updates using the form below!</p>

<?php

$content = $theme->endContent();

echo $theme->mainLayout([
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