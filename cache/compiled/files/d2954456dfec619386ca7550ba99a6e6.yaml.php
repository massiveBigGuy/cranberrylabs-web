<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/user/config/site.yaml',
    'modified' => 1770175328,
    'size' => 338,
    'data' => [
        'title' => 'Cranberry Labs',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Spencer Fevreau',
            'email' => 'sbfevreau@hotmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Cranberry Labs is a learning homelab environment.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
