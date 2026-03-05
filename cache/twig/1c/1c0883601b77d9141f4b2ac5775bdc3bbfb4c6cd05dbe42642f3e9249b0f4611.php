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

/* home.html.twig */
class __TwigTemplate_1f713a6a3791997e3b355b1b69a7a57805c86cf73ab9760841d6c14fc1589cb3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"home-page\">

    ";
        // line 7
        echo "    <div class=\"home-hero\">
        <div class=\"home-hero-inner\">
            <p class=\"home-hero-eyebrow\">Hi, I'm Spencer</p>
            <h1 class=\"home-hero-headline\">From fibre optic<br>to full stack.</h1>
            <p class=\"home-hero-sub\">Telecommunications professional & Computer systems student.</p>
            <div class=\"home-hero-ctas\">
                <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "portfolio_url", []), "html", null, true);
        echo "\" class=\"home-btn-primary\">View Portfolio</a>
                <a href=\"mailto:";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contact_email", []), "html", null, true);
        echo "\" class=\"home-btn-secondary\">Get In Touch</a>
            </div>
        </div>
    </div>

    ";
        // line 20
        echo "    <div class=\"home-section home-about\">
        <div class=\"home-container\">
            <h2 class=\"home-section-title\">About Me</h2>
            <p class=\"home-about-text\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "about", []), "html", null, true);
        echo "</p>
        </div>
    </div>

    ";
        // line 28
        echo "    <div class=\"home-section home-skills-section\">
        <div class=\"home-container\">
            <h2 class=\"home-section-title\">What I Work With</h2>
            <div class=\"home-skills-grid\">
                ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "skills", []));
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 33
            echo "                <span class=\"home-skill-tag\">";
            echo twig_escape_filter($this->env, $context["skill"], "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </div>
        </div>
    </div>

    ";
        // line 40
        echo "    <div class=\"home-section home-links-section\">
        <div class=\"home-container home-links-row\">
            ";
        // line 42
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "github", [])) {
            // line 43
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "github", []), "html", null, true);
            echo "\" target=\"_blank\" class=\"home-link-btn\">
                <span class=\"home-link-icon\">⌥</span> GitHub
            </a>
            ";
        }
        // line 47
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "linkedin", [])) {
            // line 48
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "linkedin", []), "html", null, true);
            echo "\" target=\"_blank\" class=\"home-link-btn\">
                <span class=\"home-link-icon\">in</span> LinkedIn
            </a>
            ";
        }
        // line 52
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contact_email", [])) {
            // line 53
            echo "            <a href=\"mailto:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contact_email", []), "html", null, true);
            echo "\" class=\"home-link-btn\">
                <span class=\"home-link-icon\">✉</span> Email
            </a>
            ";
        }
        // line 57
        echo "        </div>
    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 57,  131 => 53,  128 => 52,  120 => 48,  117 => 47,  109 => 43,  107 => 42,  103 => 40,  97 => 35,  88 => 33,  84 => 32,  78 => 28,  71 => 23,  66 => 20,  58 => 14,  54 => 13,  46 => 7,  42 => 4,  39 => 3,  29 => 1,);
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
<div class=\"home-page\">

    {# Hero #}
    <div class=\"home-hero\">
        <div class=\"home-hero-inner\">
            <p class=\"home-hero-eyebrow\">Hi, I'm Spencer</p>
            <h1 class=\"home-hero-headline\">From fibre optic<br>to full stack.</h1>
            <p class=\"home-hero-sub\">Telecommunications professional & Computer systems student.</p>
            <div class=\"home-hero-ctas\">
                <a href=\"{{ page.header.portfolio_url }}\" class=\"home-btn-primary\">View Portfolio</a>
                <a href=\"mailto:{{ page.header.contact_email }}\" class=\"home-btn-secondary\">Get In Touch</a>
            </div>
        </div>
    </div>

    {# About #}
    <div class=\"home-section home-about\">
        <div class=\"home-container\">
            <h2 class=\"home-section-title\">About Me</h2>
            <p class=\"home-about-text\">{{ page.header.about }}</p>
        </div>
    </div>

    {# Skills #}
    <div class=\"home-section home-skills-section\">
        <div class=\"home-container\">
            <h2 class=\"home-section-title\">What I Work With</h2>
            <div class=\"home-skills-grid\">
                {% for skill in page.header.skills %}
                <span class=\"home-skill-tag\">{{ skill }}</span>
                {% endfor %}
            </div>
        </div>
    </div>

    {# Links #}
    <div class=\"home-section home-links-section\">
        <div class=\"home-container home-links-row\">
            {% if page.header.github %}
            <a href=\"{{ page.header.github }}\" target=\"_blank\" class=\"home-link-btn\">
                <span class=\"home-link-icon\">⌥</span> GitHub
            </a>
            {% endif %}
            {% if page.header.linkedin %}
            <a href=\"{{ page.header.linkedin }}\" target=\"_blank\" class=\"home-link-btn\">
                <span class=\"home-link-icon\">in</span> LinkedIn
            </a>
            {% endif %}
            {% if page.header.contact_email %}
            <a href=\"mailto:{{ page.header.contact_email }}\" class=\"home-link-btn\">
                <span class=\"home-link-icon\">✉</span> Email
            </a>
            {% endif %}
        </div>
    </div>

</div>
{% endblock %}", "home.html.twig", "/var/www/html/user/themes/quark/templates/home.html.twig");
    }
}
