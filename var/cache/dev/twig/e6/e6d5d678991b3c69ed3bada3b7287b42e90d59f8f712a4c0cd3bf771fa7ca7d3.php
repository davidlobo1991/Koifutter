<?php

/* @KnpPaginator/Pagination/semantic_ui_pagination.html.twig */
class __TwigTemplate_f3c820240f705d4a68801655edd53c03dd769a5aa489a1a2e17af40d35662c31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05acd1001bee7f194e7bb4e9eb43ea0ba94eb1e15ac5f8b8c9347f4a48ec484a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05acd1001bee7f194e7bb4e9eb43ea0ba94eb1e15ac5f8b8c9347f4a48ec484a->enter($__internal_05acd1001bee7f194e7bb4e9eb43ea0ba94eb1e15ac5f8b8c9347f4a48ec484a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/semantic_ui_pagination.html.twig"));

        // line 13
        echo "
";
        // line 14
        if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > 1)) {
            // line 15
            echo "    <div class=\"ui pagination menu\">
        ";
            // line 16
            if ((array_key_exists("first", $context) && (($context["current"] ?? $this->getContext($context, "current")) != ($context["first"] ?? $this->getContext($context, "first"))))) {
                // line 17
                echo "            <a class=\"icon item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["first"] ?? $this->getContext($context, "first"))))), "html", null, true);
                echo "\">
                <i class=\"angle double left icon\"></i>
            </a>
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            if (array_key_exists("previous", $context)) {
                // line 23
                echo "            <a class=\"item icon\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["previous"] ?? $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">
                <i class=\"angle left icon\"></i>
            </a>
        ";
            }
            // line 27
            echo "
        ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 29
                echo "            ";
                if (($context["page"] != ($context["current"] ?? $this->getContext($context, "current")))) {
                    // line 30
                    echo "                <a class=\"item\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 32
                    echo "                <span class=\"active item\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            ";
                }
                // line 34
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
        ";
            // line 37
            if (array_key_exists("next", $context)) {
                // line 38
                echo "            <a class=\"icon item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["next"] ?? $this->getContext($context, "next"))))), "html", null, true);
                echo "\">
                <i class=\"angle right icon\"></i>
            </a>
        ";
            }
            // line 42
            echo "
        ";
            // line 43
            if ((array_key_exists("last", $context) && (($context["current"] ?? $this->getContext($context, "current")) != ($context["last"] ?? $this->getContext($context, "last"))))) {
                // line 44
                echo "            <a class=\"icon item\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["last"] ?? $this->getContext($context, "last"))))), "html", null, true);
                echo "\">
                <i class=\"angle right double icon\"></i>
            </a>
        ";
            }
            // line 48
            echo "    </div>
";
        }
        
        $__internal_05acd1001bee7f194e7bb4e9eb43ea0ba94eb1e15ac5f8b8c9347f4a48ec484a->leave($__internal_05acd1001bee7f194e7bb4e9eb43ea0ba94eb1e15ac5f8b8c9347f4a48ec484a_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/semantic_ui_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 48,  102 => 44,  100 => 43,  97 => 42,  89 => 38,  87 => 37,  84 => 36,  77 => 34,  71 => 32,  63 => 30,  60 => 29,  56 => 28,  53 => 27,  45 => 23,  43 => 22,  40 => 21,  32 => 17,  30 => 16,  27 => 15,  25 => 14,  22 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Semantic UI Sliding pagination control implementation.
 *
 * View that can be used with the pagination module
 * from the Semantic UI CSS Toolkit
 * http://semantic-ui.com/collections/menu.html#pagination
 *
 * @author Valerian Dorcy <valerian.dorcy@gmail.com>
 */
#}

{% if pageCount > 1 %}
    <div class=\"ui pagination menu\">
        {% if first is defined and current != first %}
            <a class=\"icon item\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">
                <i class=\"angle double left icon\"></i>
            </a>
        {% endif %}

        {% if previous is defined %}
            <a class=\"item icon\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">
                <i class=\"angle left icon\"></i>
            </a>
        {% endif %}

        {% for page in pagesInRange %}
            {% if page != current %}
                <a class=\"item\" href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
            {% else %}
                <span class=\"active item\">{{ page }}</span>
            {% endif %}

        {% endfor %}

        {% if next is defined %}
            <a class=\"icon item\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">
                <i class=\"angle right icon\"></i>
            </a>
        {% endif %}

        {% if last is defined and current != last %}
            <a class=\"icon item\" href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">
                <i class=\"angle right double icon\"></i>
            </a>
        {% endif %}
    </div>
{% endif %}
", "@KnpPaginator/Pagination/semantic_ui_pagination.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\knplabs\\knp-paginator-bundle\\Resources\\views\\Pagination\\semantic_ui_pagination.html.twig");
    }
}
