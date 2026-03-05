<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => '/var/www/html/user/pages/03.ornithology/_sidebar/default.md',
    'modified' => 1771390935,
    'size' => 330,
    'data' => [
        'header' => [
            'title' => 'Recent Posts',
            'template' => 'modular/sidebar'
        ],
        'frontmatter' => 'title: Recent Posts
template: modular/sidebar',
        'markdown' => '### Recent Posts

{% set blog_posts = page.parent.children.visible.order(\'date\', \'desc\').slice(0, 5) %}
{% for post in blog_posts %}
{% if post.template != \'modular\' %}
- [{{ post.title }}]({{ post.url }}) - {{ post.date|date(\'M d, Y\') }}
{% endif %}
{% endfor %}'
    ]
];
