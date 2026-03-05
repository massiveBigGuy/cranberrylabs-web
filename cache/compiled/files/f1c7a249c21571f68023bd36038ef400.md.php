<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/02.portfolio/portfolio.md',
    'modified' => 1772679583,
    'size' => 308,
    'data' => [
        'header' => [
            'title' => 'Portfolio',
            'login' => [
                'visibility_requires_access' => false
            ],
            'content' => [
                'items' => [
                    0 => '@self.children'
                ],
                'order' => [
                    'by' => 'folder',
                    'dir' => 'asc'
                ]
            ]
        ],
        'frontmatter' => 'title: Portfolio
login:
    visibility_requires_access: false
content:
    items:
        - \'@self.children\'
    order:
        by: folder
        dir: asc',
        'markdown' => '<style>
body {
    background-color: #E6E6FA;
}
</style>

This portion of the website will be dedicated to a portfolio or several portfolio(s).'
    ]
];
