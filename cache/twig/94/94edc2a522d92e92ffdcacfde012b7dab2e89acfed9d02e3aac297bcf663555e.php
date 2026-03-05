<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* academic.html.twig */
class __TwigTemplate_5d26f6ea6bfdbb88fb95a48ef01b1c09f2fc783db6d61a75c6116e2e55ec2b68 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "academic.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"academic-page\">

    ";
        // line 7
        echo "    <div class=\"academic-hero\">
        <div class=\"academic-hero-inner\">
            <h1 class=\"academic-hero-title\">Academic Works</h1>
            <p class=\"academic-hero-sub\">A collection of coursework from my Computer Systems Technology diploma at Durham College.</p>
        </div>
    </div>

    ";
        // line 15
        echo "    <div class=\"academic-layout\">

        ";
        // line 18
        echo "        <div class=\"academic-sidebar\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "categories", []));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "            <div class=\"academic-category\">
                <div class=\"academic-category-header\" data-category=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", []), "html", null, true);
            echo "\">
                    <span>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
            echo "</span>
                    <span class=\"academic-category-arrow\">▾</span>
                </div>
                <div class=\"academic-category-items\" id=\"cat-";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", []), "html", null, true);
            echo "\">
                    ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "projects", []));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 27
                echo "                    <div class=\"academic-sidebar-item\" data-project=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", []), "html", null, true);
                echo "\">
                        ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", []), "html", null, true);
                echo "
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>

        ";
        // line 37
        echo "        <div class=\"academic-content\">

            ";
        // line 40
        echo "            <div class=\"academic-welcome\" id=\"academic-welcome\">
                <div class=\"academic-welcome-inner\">
                    <p class=\"academic-welcome-icon\">📂</p>
                    <h2>Select a project</h2>
                    <p>Choose a project to view details.</p>
                </div>
            </div>

            ";
        // line 49
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "categories", []));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 50
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "projects", []));
            foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
                // line 51
                echo "            <div class=\"academic-project-panel\" id=\"project-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "id", []), "html", null, true);
                echo "\">

                <div class=\"academic-project-header\">
                    <div>
                        <h2 class=\"academic-project-title\">";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", []), "html", null, true);
                echo "</h2>
                        <span class=\"academic-project-category\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", []), "html", null, true);
                echo "</span>
                    </div>
                    <div class=\"academic-project-tags\">
                        ";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "tags", []));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 60
                    echo "                        <span class=\"academic-tag\">";
                    echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                    echo "</span>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 62
                echo "                    </div>
                </div>

                <div class=\"academic-project-body\">

                    <div class=\"academic-project-section\">
                        <h3 class=\"academic-project-section-title\">Overview</h3>
                        <p>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "description", []), "html", null, true);
                echo "</p>
                    </div>

                    <div class=\"academic-project-section\">
                        <h3 class=\"academic-project-section-title\">What I Learned</h3>
                        <p>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "learned", []), "html", null, true);
                echo "</p>
                    </div>

                    ";
                // line 77
                if (($this->getAttribute($context["project"], "configs", []) && (twig_length_filter($this->env, $this->getAttribute($context["project"], "configs", [])) > 0))) {
                    // line 78
                    echo "                    <div class=\"academic-project-section\">
                        <h3 class=\"academic-project-section-title\">Configuration Samples</h3>
                        ";
                    // line 80
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "configs", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
                        // line 81
                        echo "                        <div class=\"academic-config-block\">
                            <div class=\"academic-config-label\">";
                        // line 82
                        echo twig_escape_filter($this->env, $this->getAttribute($context["config"], "label", []), "html", null, true);
                        echo "</div>
                            <pre class=\"academic-code\"><code>";
                        // line 83
                        echo twig_escape_filter($this->env, $this->getAttribute($context["config"], "code", []), "html", null, true);
                        echo "</code></pre>
                        </div>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 86
                    echo "                    </div>
                    ";
                }
                // line 88
                echo "
                    ";
                // line 89
                if (($this->getAttribute($context["project"], "screenshots", []) && (twig_length_filter($this->env, $this->getAttribute($context["project"], "screenshots", [])) > 0))) {
                    // line 90
                    echo "                    <div class=\"academic-project-section\">
                        <h3 class=\"academic-project-section-title\">Screenshots</h3>
                        <div class=\"academic-screenshots\">
                            ";
                    // line 93
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["project"], "screenshots", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["shot"]) {
                        // line 94
                        echo "                            <img src=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), $context["shot"], [], "array"), "url", []), "html", null, true);
                        echo "\" alt=\"Screenshot\" class=\"academic-screenshot\">
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shot'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "                        </div>
                    </div>
                    ";
                }
                // line 99
                echo "
                </div>
            </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const items = document.querySelectorAll('.academic-sidebar-item');
    const panels = document.querySelectorAll('.academic-project-panel');
    const welcome = document.getElementById('academic-welcome');
    const categoryHeaders = document.querySelectorAll('.academic-category-header');

    // Category expand/collapse
    categoryHeaders.forEach(function (header) {
        header.addEventListener('click', function () {
            const id = this.getAttribute('data-category');
            const items = document.getElementById('cat-' + id);
            const arrow = this.querySelector('.academic-category-arrow');
            items.classList.toggle('collapsed');
            arrow.classList.toggle('rotated');
        });
    });

    // Project selection
    items.forEach(function (item) {
        item.addEventListener('click', function () {
            const projectId = this.getAttribute('data-project');

            // Hide welcome
            welcome.style.display = 'none';

            // Hide all panels
            panels.forEach(function (p) { p.classList.remove('active'); });

            // Deactivate all sidebar items
            items.forEach(function (i) { i.classList.remove('active'); });

            // Show selected
            document.getElementById('project-' + projectId).classList.add('active');
            this.classList.add('active');
        });
    });

});
</script>
";
    }

    public function getTemplateName()
    {
        return "academic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 104,  258 => 103,  249 => 99,  244 => 96,  235 => 94,  231 => 93,  226 => 90,  224 => 89,  221 => 88,  217 => 86,  208 => 83,  204 => 82,  201 => 81,  197 => 80,  193 => 78,  191 => 77,  185 => 74,  177 => 69,  168 => 62,  159 => 60,  155 => 59,  149 => 56,  145 => 55,  137 => 51,  132 => 50,  127 => 49,  117 => 40,  113 => 37,  109 => 34,  101 => 31,  92 => 28,  87 => 27,  83 => 26,  79 => 25,  73 => 22,  69 => 21,  66 => 20,  62 => 19,  59 => 18,  55 => 15,  46 => 7,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block body %}
<div class=\"academic-page\">

    {# Hero #}
    <div class=\"academic-hero\">
        <div class=\"academic-hero-inner\">
            <h1 class=\"academic-hero-title\">Academic Works</h1>
            <p class=\"academic-hero-sub\">A collection of coursework from my Computer Systems Technology diploma at Durham College.</p>
        </div>
    </div>

    {# Main layout #}
    <div class=\"academic-layout\">

        {# Sidebar #}
        <div class=\"academic-sidebar\">
            {% for category in page.header.categories %}
            <div class=\"academic-category\">
                <div class=\"academic-category-header\" data-category=\"{{ category.id }}\">
                    <span>{{ category.name }}</span>
                    <span class=\"academic-category-arrow\">▾</span>
                </div>
                <div class=\"academic-category-items\" id=\"cat-{{ category.id }}\">
                    {% for project in category.projects %}
                    <div class=\"academic-sidebar-item\" data-project=\"{{ project.id }}\">
                        {{ project.title }}
                    </div>
                    {% endfor %}
                </div>
            </div>
            {% endfor %}
        </div>

        {# Content panel #}
        <div class=\"academic-content\">

            {# Default state #}
            <div class=\"academic-welcome\" id=\"academic-welcome\">
                <div class=\"academic-welcome-inner\">
                    <p class=\"academic-welcome-icon\">📂</p>
                    <h2>Select a project</h2>
                    <p>Choose a project to view details.</p>
                </div>
            </div>

            {# Project panels #}
            {% for category in page.header.categories %}
            {% for project in category.projects %}
            <div class=\"academic-project-panel\" id=\"project-{{ project.id }}\">

                <div class=\"academic-project-header\">
                    <div>
                        <h2 class=\"academic-project-title\">{{ project.title }}</h2>
                        <span class=\"academic-project-category\">{{ category.name }}</span>
                    </div>
                    <div class=\"academic-project-tags\">
                        {% for tag in project.tags %}
                        <span class=\"academic-tag\">{{ tag }}</span>
                        {% endfor %}
                    </div>
                </div>

                <div class=\"academic-project-body\">

                    <div class=\"academic-project-section\">
                        <h3 class=\"academic-project-section-title\">Overview</h3>
                        <p>{{ project.description }}</p>
                    </div>

                    <div class=\"academic-project-section\">
                        <h3 class=\"academic-project-section-title\">What I Learned</h3>
                        <p>{{ project.learned }}</p>
                    </div>

                    {% if project.configs and project.configs|length > 0 %}
                    <div class=\"academic-project-section\">
                        <h3 class=\"academic-project-section-title\">Configuration Samples</h3>
                        {% for config in project.configs %}
                        <div class=\"academic-config-block\">
                            <div class=\"academic-config-label\">{{ config.label }}</div>
                            <pre class=\"academic-code\"><code>{{ config.code }}</code></pre>
                        </div>
                        {% endfor %}
                    </div>
                    {% endif %}

                    {% if project.screenshots and project.screenshots|length > 0 %}
                    <div class=\"academic-project-section\">
                        <h3 class=\"academic-project-section-title\">Screenshots</h3>
                        <div class=\"academic-screenshots\">
                            {% for shot in project.screenshots %}
                            <img src=\"{{ page.media[shot].url }}\" alt=\"Screenshot\" class=\"academic-screenshot\">
                            {% endfor %}
                        </div>
                    </div>
                    {% endif %}

                </div>
            </div>
            {% endfor %}
            {% endfor %}

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const items = document.querySelectorAll('.academic-sidebar-item');
    const panels = document.querySelectorAll('.academic-project-panel');
    const welcome = document.getElementById('academic-welcome');
    const categoryHeaders = document.querySelectorAll('.academic-category-header');

    // Category expand/collapse
    categoryHeaders.forEach(function (header) {
        header.addEventListener('click', function () {
            const id = this.getAttribute('data-category');
            const items = document.getElementById('cat-' + id);
            const arrow = this.querySelector('.academic-category-arrow');
            items.classList.toggle('collapsed');
            arrow.classList.toggle('rotated');
        });
    });

    // Project selection
    items.forEach(function (item) {
        item.addEventListener('click', function () {
            const projectId = this.getAttribute('data-project');

            // Hide welcome
            welcome.style.display = 'none';

            // Hide all panels
            panels.forEach(function (p) { p.classList.remove('active'); });

            // Deactivate all sidebar items
            items.forEach(function (i) { i.classList.remove('active'); });

            // Show selected
            document.getElementById('project-' + projectId).classList.add('active');
            this.classList.add('active');
        });
    });

});
</script>
{% endblock %}", "academic.html.twig", "/var/www/html/user/themes/quark/templates/academic.html.twig");
    }
}
