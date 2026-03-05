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

/* resume.html.twig */
class __TwigTemplate_23fcb4228708260395f8afa9cc6c59ff847fb4f68a949bc75977b9166c7e27fe extends \Twig\Template
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
        $this->parent = $this->loadTemplate("partials/base.html.twig", "resume.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        // line 4
        echo "<div class=\"resume-page\">

    ";
        // line 7
        echo "    <div class=\"resume-hero\">
        <div class=\"container\">
            <h1 class=\"resume-hero-title\">Spencer Fevreau</h1>
            <p class=\"resume-hero-sub\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "summary", []), "html", null, true);
        echo "</p>
            ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "pdf", [])) {
            // line 12
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "pdf", []), "html", null, true);
            echo "\" class=\"resume-download-btn\" download>
                ↓ Download PDF
            </a>
            ";
        }
        // line 16
        echo "        </div>
    </div>

    <div class=\"resume-container\">
        <div class=\"columns\">

            ";
        // line 23
        echo "            <div class=\"column col-3 col-md-12 resume-sidebar\">

                ";
        // line 26
        echo "                <div class=\"resume-sidebar-section\">
                    <h3 class=\"resume-sidebar-heading\">Contact</h3>
                    ";
        // line 28
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contact", []), "location", [])) {
            // line 29
            echo "                    <div class=\"resume-contact-item\">
                        <span class=\"resume-contact-icon\">📍</span>
                        ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contact", []), "location", []), "html", null, true);
            echo "
                    </div>
                    ";
        }
        // line 34
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contact", []), "email", [])) {
            // line 35
            echo "                    <div class=\"resume-contact-item\">
                        <span class=\"resume-contact-icon\">✉</span>
                        <a href=\"mailto:";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contact", []), "email", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contact", []), "email", []), "html", null, true);
            echo "</a>
                    </div>
                    ";
        }
        // line 40
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contact", []), "linkedin", [])) {
            // line 41
            echo "                    <div class=\"resume-contact-item\">
                        <span class=\"resume-contact-icon\">in</span>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contact", []), "linkedin", []), "html", null, true);
            echo "\" target=\"_blank\">LinkedIn</a>
                    </div>
                    ";
        }
        // line 46
        echo "                    ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contact", []), "github", [])) {
            // line 47
            echo "                    <div class=\"resume-contact-item\">
                        <span class=\"resume-contact-icon\">⌥</span>
                        <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "contact", []), "github", []), "html", null, true);
            echo "\" target=\"_blank\">GitHub</a>
                    </div>
                    ";
        }
        // line 52
        echo "                </div>

                ";
        // line 55
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "skills", [])) {
            // line 56
            echo "                <div class=\"resume-sidebar-section\">
                    <h3 class=\"resume-sidebar-heading\">Skills</h3>
                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "skills", []));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 59
                echo "                    <div class=\"resume-skill-group\">
                        <h4 class=\"resume-skill-category\">";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "category", []), "html", null, true);
                echo "</h4>
                        <div class=\"resume-skill-tags\">
                            ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", []));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 63
                    echo "                            <span class=\"resume-tag\">";
                    echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                    echo "</span>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                        </div>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                </div>
                ";
        }
        // line 70
        echo "
                ";
        // line 72
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "certifications", [])) {
            // line 73
            echo "                <div class=\"resume-sidebar-section\">
                    <h3 class=\"resume-sidebar-heading\">Certifications & Education</h3>
                    ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "certifications", []));
            foreach ($context['_seq'] as $context["_key"] => $context["cert"]) {
                // line 76
                echo "                    <div class=\"resume-cert-item\">";
                echo twig_escape_filter($this->env, $context["cert"], "html", null, true);
                echo "</div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cert'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                </div>
                ";
        }
        // line 80
        echo "
            </div>

            ";
        // line 84
        echo "            <div class=\"column col-9 col-md-12 resume-main\">

                ";
        // line 87
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "experience", [])) {
            // line 88
            echo "                <div class=\"resume-section\">
                    <h2 class=\"resume-section-title\">Work Experience</h2>
                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "experience", []));
            foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
                // line 91
                echo "                    <div class=\"resume-entry\">
                        <div class=\"resume-entry-header\">
                            <div>
                                <h3 class=\"resume-entry-title\">";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "title", []), "html", null, true);
                echo "</h3>
                                <span class=\"resume-entry-company\">";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", []), "html", null, true);
                echo "</span>
                            </div>
                            <span class=\"resume-entry-period\">";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "period", []), "html", null, true);
                echo "</span>
                        </div>
                        <ul class=\"resume-entry-points\">
                            ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["job"], "points", []));
                foreach ($context['_seq'] as $context["_key"] => $context["point"]) {
                    // line 101
                    echo "                            <li>";
                    echo twig_escape_filter($this->env, $context["point"], "html", null, true);
                    echo "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['point'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                echo "                        </ul>
                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "                </div>
                ";
        }
        // line 108
        echo "
                ";
        // line 110
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "education", [])) {
            // line 111
            echo "                <div class=\"resume-section\">
                    <h2 class=\"resume-section-title\">Education</h2>
                    ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "education", []));
            foreach ($context['_seq'] as $context["_key"] => $context["edu"]) {
                // line 114
                echo "                    <div class=\"resume-entry\">
                        <div class=\"resume-entry-header\">
                            <div>
                                <h3 class=\"resume-entry-title\">";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "degree", []), "html", null, true);
                echo "</h3>
                                <span class=\"resume-entry-company\">";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "institution", []), "html", null, true);
                echo "</span>
                            </div>
                            <span class=\"resume-entry-period\">";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "period", []), "html", null, true);
                echo "</span>
                        </div>
                        ";
                // line 122
                if ($this->getAttribute($context["edu"], "notes", [])) {
                    // line 123
                    echo "                        <p class=\"resume-entry-notes\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["edu"], "notes", []), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 125
                echo "                    </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['edu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                </div>
                ";
        }
        // line 129
        echo "
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  326 => 129,  322 => 127,  315 => 125,  309 => 123,  307 => 122,  302 => 120,  297 => 118,  293 => 117,  288 => 114,  284 => 113,  280 => 111,  277 => 110,  274 => 108,  270 => 106,  262 => 103,  253 => 101,  249 => 100,  243 => 97,  238 => 95,  234 => 94,  229 => 91,  225 => 90,  221 => 88,  218 => 87,  214 => 84,  209 => 80,  205 => 78,  196 => 76,  192 => 75,  188 => 73,  185 => 72,  182 => 70,  178 => 68,  170 => 65,  161 => 63,  157 => 62,  152 => 60,  149 => 59,  145 => 58,  141 => 56,  138 => 55,  134 => 52,  128 => 49,  124 => 47,  121 => 46,  115 => 43,  111 => 41,  108 => 40,  100 => 37,  96 => 35,  93 => 34,  87 => 31,  83 => 29,  81 => 28,  77 => 26,  73 => 23,  65 => 16,  57 => 12,  55 => 11,  51 => 10,  46 => 7,  42 => 4,  39 => 3,  29 => 1,);
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
<div class=\"resume-page\">

    {# Hero - matches portfolio style #}
    <div class=\"resume-hero\">
        <div class=\"container\">
            <h1 class=\"resume-hero-title\">Spencer Fevreau</h1>
            <p class=\"resume-hero-sub\">{{ page.header.summary }}</p>
            {% if page.header.pdf %}
            <a href=\"{{ page.header.pdf }}\" class=\"resume-download-btn\" download>
                ↓ Download PDF
            </a>
            {% endif %}
        </div>
    </div>

    <div class=\"resume-container\">
        <div class=\"columns\">

            {# LEFT SIDEBAR #}
            <div class=\"column col-3 col-md-12 resume-sidebar\">

                {# Contact #}
                <div class=\"resume-sidebar-section\">
                    <h3 class=\"resume-sidebar-heading\">Contact</h3>
                    {% if page.header.contact.location %}
                    <div class=\"resume-contact-item\">
                        <span class=\"resume-contact-icon\">📍</span>
                        {{ page.header.contact.location }}
                    </div>
                    {% endif %}
                    {% if page.header.contact.email %}
                    <div class=\"resume-contact-item\">
                        <span class=\"resume-contact-icon\">✉</span>
                        <a href=\"mailto:{{ page.header.contact.email }}\">{{ page.header.contact.email }}</a>
                    </div>
                    {% endif %}
                    {% if page.header.contact.linkedin %}
                    <div class=\"resume-contact-item\">
                        <span class=\"resume-contact-icon\">in</span>
                        <a href=\"{{ page.header.contact.linkedin }}\" target=\"_blank\">LinkedIn</a>
                    </div>
                    {% endif %}
                    {% if page.header.contact.github %}
                    <div class=\"resume-contact-item\">
                        <span class=\"resume-contact-icon\">⌥</span>
                        <a href=\"{{ page.header.contact.github }}\" target=\"_blank\">GitHub</a>
                    </div>
                    {% endif %}
                </div>

                {# Skills #}
                {% if page.header.skills %}
                <div class=\"resume-sidebar-section\">
                    <h3 class=\"resume-sidebar-heading\">Skills</h3>
                    {% for group in page.header.skills %}
                    <div class=\"resume-skill-group\">
                        <h4 class=\"resume-skill-category\">{{ group.category }}</h4>
                        <div class=\"resume-skill-tags\">
                            {% for item in group.items %}
                            <span class=\"resume-tag\">{{ item }}</span>
                            {% endfor %}
                        </div>
                    </div>
                    {% endfor %}
                </div>
                {% endif %}

                {# Certifications #}
                {% if page.header.certifications %}
                <div class=\"resume-sidebar-section\">
                    <h3 class=\"resume-sidebar-heading\">Certifications & Education</h3>
                    {% for cert in page.header.certifications %}
                    <div class=\"resume-cert-item\">{{ cert }}</div>
                    {% endfor %}
                </div>
                {% endif %}

            </div>

            {# RIGHT MAIN CONTENT #}
            <div class=\"column col-9 col-md-12 resume-main\">

                {# Work Experience #}
                {% if page.header.experience %}
                <div class=\"resume-section\">
                    <h2 class=\"resume-section-title\">Work Experience</h2>
                    {% for job in page.header.experience %}
                    <div class=\"resume-entry\">
                        <div class=\"resume-entry-header\">
                            <div>
                                <h3 class=\"resume-entry-title\">{{ job.title }}</h3>
                                <span class=\"resume-entry-company\">{{ job.company }}</span>
                            </div>
                            <span class=\"resume-entry-period\">{{ job.period }}</span>
                        </div>
                        <ul class=\"resume-entry-points\">
                            {% for point in job.points %}
                            <li>{{ point }}</li>
                            {% endfor %}
                        </ul>
                    </div>
                    {% endfor %}
                </div>
                {% endif %}

                {# Education #}
                {% if page.header.education %}
                <div class=\"resume-section\">
                    <h2 class=\"resume-section-title\">Education</h2>
                    {% for edu in page.header.education %}
                    <div class=\"resume-entry\">
                        <div class=\"resume-entry-header\">
                            <div>
                                <h3 class=\"resume-entry-title\">{{ edu.degree }}</h3>
                                <span class=\"resume-entry-company\">{{ edu.institution }}</span>
                            </div>
                            <span class=\"resume-entry-period\">{{ edu.period }}</span>
                        </div>
                        {% if edu.notes %}
                        <p class=\"resume-entry-notes\">{{ edu.notes }}</p>
                        {% endif %}
                    </div>
                    {% endfor %}
                </div>
                {% endif %}

            </div>
        </div>
    </div>
</div>
{% endblock %}", "resume.html.twig", "/var/www/html/user/themes/quark/templates/resume.html.twig");
    }
}
