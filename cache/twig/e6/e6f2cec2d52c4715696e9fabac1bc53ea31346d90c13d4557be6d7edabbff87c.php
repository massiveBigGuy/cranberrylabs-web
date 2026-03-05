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

/* modular/sidebar.html.twig */
class __TwigTemplate_326f8105931748d47f9e56ca085a32c8d387fe077a48b73ff17d098f92f05e5c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<section class=\"section modular-text bg-gray\">
    <section class=\"container ";
        // line 2
        echo twig_escape_filter($this->env, ($context["grid_size"] ?? null), "html", null, true);
        echo "\">
        <div class=\"columns\">
            <div class=\"column col-12\">
                <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "title", []), "html", null, true);
        echo "</h3>
                
                <ul>
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "parent", []), "children", []), "order", [0 => "date", 1 => "desc"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "                    ";
            if ((($this->getAttribute($context["post"], "template", []) == "default") &&  !$this->getAttribute($context["post"], "modular", []))) {
                // line 10
                echo "                    <li>
                        <a href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", []), "html", null, true);
                echo "</a> - ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", []), "M d, Y"), "html", null, true);
                echo "
                    </li>
                    ";
            }
            // line 14
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </ul>
            </div>
        </div>
    </section>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  65 => 14,  55 => 11,  52 => 10,  49 => 9,  45 => 8,  39 => 5,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section modular-text bg-gray\">
    <section class=\"container {{ grid_size }}\">
        <div class=\"columns\">
            <div class=\"column col-12\">
                <h3>{{ page.title }}</h3>
                
                <ul>
                {% for post in page.parent.children.order('date', 'desc') %}
                    {% if post.template == 'default' and not post.modular %}
                    <li>
                        <a href=\"{{ post.url }}\">{{ post.title }}</a> - {{ post.date|date('M d, Y') }}
                    </li>
                    {% endif %}
                {% endfor %}
                </ul>
            </div>
        </div>
    </section>
</section>", "modular/sidebar.html.twig", "/var/www/html/user/themes/quark/templates/modular/sidebar.html.twig");
    }
}
