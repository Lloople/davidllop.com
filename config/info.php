<?php

return [
    'url' => 'https://davidllop.com',
    'email' => 'hello@davidllop.com',
    'name' => 'David Llop',
    'job_position' => 'Back-End Developer',
    'birth_date' => '1991-01-11',
    'social' => [
        'twitter' => [
            'url' => 'https://twitter.com/lloople',
            'username' => '@lloople'
       ],
        'github' => 'https://github.com/Lloople',
    ],
    'description' => [
        'who' => 'I\'m a web developer using Laravel (PHP) and Vue.js. From Girona, Catalonia.',
        'what' => 'I need to continue learning new stuff. I\'ve watched more video courses than episodes on netflix.'
    ],
    'google_analytics' => env('GOOGLE_ANALYTICS', '')
];