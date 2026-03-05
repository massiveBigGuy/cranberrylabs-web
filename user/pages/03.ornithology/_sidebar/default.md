---
title: Recent Posts
template: modular/sidebar
---

### Recent Posts

{% set blog_posts = page.parent.children.visible.order('date', 'desc').slice(0, 5) %}
{% for post in blog_posts %}
{% if post.template != 'modular' %}
- [{{ post.title }}]({{ post.url }}) - {{ post.date|date('M d, Y') }}
{% endif %}
{% endfor %}