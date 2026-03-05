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

/* portfolio.html.twig */
class __TwigTemplate_73e8320484c4979a9b320787b973ba4504a2b512dbd767dfff41c6c7efe52651 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "portfolio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"portfolio-landing\">

    <div class=\"portfolio-hero\">
        <div class=\"container\">
            <h1 class=\"portfolio-hero-title\">Portfolio</h1>
            <p class=\"portfolio-hero-sub\">A curated look at my academic, technical, and professional work.</p>
        </div>
    </div>

    <div class=\"portfolio-cards-container\">
        <div class=\"columns portfolio-grid\">

            ";
        // line 16
        $context["accents"] = [0 => "#4A90D9", 1 => "#3DAA7D", 2 => "#8B6FD4"];
        // line 17
        echo "
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", []));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 19
            echo "            ";
            $context["accent"] = $this->getAttribute(($context["accents"] ?? null), ($this->getAttribute($context["loop"], "index0", []) % twig_length_filter($this->env, ($context["accents"] ?? null))), [], "array");
            // line 20
            echo "            <div class=\"column col-4 col-md-6 col-sm-12\">
                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "url", []), "html", null, true);
            echo "\" class=\"portfolio-card-link\">
                    <div class=\"portfolio-card\" style=\"--accent: ";
            // line 22
            echo twig_escape_filter($this->env, ($context["accent"] ?? null), "html", null, true);
            echo ";\">
                        <div class=\"portfolio-card-accent\"></div>

                        ";
            // line 25
            if ($this->getAttribute($this->getAttribute($context["child"], "header", []), "header_image", [])) {
                // line 26
                echo "                        <div class=\"portfolio-card-img\">
                            <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "media", []), $this->getAttribute($this->getAttribute($context["child"], "header", []), "header_image", []), [], "array"), "url", []), "html", null, true);
                echo "\"
                                 alt=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "title", []), "html", null, true);
                echo "\">
                        </div>
                        ";
            }
            // line 31
            echo "
                        <div class=\"portfolio-card-body\">
                            <h2 class=\"portfolio-card-title\">";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "title", []), "html", null, true);
            echo "</h2>
                            <p class=\"portfolio-card-summary\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "header", []), "summary", []), "html", null, true);
            echo "</p>
                        </div>

                        <div class=\"portfolio-card-footer\">
                            <span class=\"portfolio-card-btn\">View &rarr;</span>
                        </div>
                    </div>
                </a>
            </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 44,  117 => 34,  113 => 33,  109 => 31,  103 => 28,  99 => 27,  96 => 26,  94 => 25,  88 => 22,  84 => 21,  81 => 20,  78 => 19,  61 => 18,  58 => 17,  56 => 16,  42 => 4,  39 => 3,  29 => 1,);
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
<div class=\"portfolio-landing\">

    <div class=\"portfolio-hero\">
        <div class=\"container\">
            <h1 class=\"portfolio-hero-title\">Portfolio</h1>
            <p class=\"portfolio-hero-sub\">A curated look at my academic, technical, and professional work.</p>
        </div>
    </div>

    <div class=\"portfolio-cards-container\">
        <div class=\"columns portfolio-grid\">

            {% set accents = ['#4A90D9', '#3DAA7D', '#8B6FD4'] %}

            {% for child in page.children %}
            {% set accent = accents[loop.index0 % accents|length] %}
            <div class=\"column col-4 col-md-6 col-sm-12\">
                <a href=\"{{ child.url }}\" class=\"portfolio-card-link\">
                    <div class=\"portfolio-card\" style=\"--accent: {{ accent }};\">
                        <div class=\"portfolio-card-accent\"></div>

                        {% if child.header.header_image %}
                        <div class=\"portfolio-card-img\">
                            <img src=\"{{ child.media[child.header.header_image].url }}\"
                                 alt=\"{{ child.title }}\">
                        </div>
                        {% endif %}

                        <div class=\"portfolio-card-body\">
                            <h2 class=\"portfolio-card-title\">{{ child.title }}</h2>
                            <p class=\"portfolio-card-summary\">{{ child.header.summary }}</p>
                        </div>

                        <div class=\"portfolio-card-footer\">
                            <span class=\"portfolio-card-btn\">View &rarr;</span>
                        </div>
                    </div>
                </a>
            </div>
            {% endfor %}

        </div>
    </div>
</div>
{% endblock %}", "portfolio.html.twig", "/var/www/html/user/themes/quark/templates/portfolio.html.twig");
    }
}
