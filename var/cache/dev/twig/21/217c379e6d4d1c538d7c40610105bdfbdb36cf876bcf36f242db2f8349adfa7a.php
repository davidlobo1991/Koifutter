<?php

/* KnpPaginatorBundle:Pagination:bulma_pagination.html.twig */
class __TwigTemplate_1b3797276166134cfab57a8e431b2ca3318c23891032fef29d1ba2cc4748f036 extends Twig_Template
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
        $__internal_5070f93d7786b2eea39605b74e3addffbce8ed129b2c76936f999e3c356e323a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5070f93d7786b2eea39605b74e3addffbce8ed129b2c76936f999e3c356e323a->enter($__internal_5070f93d7786b2eea39605b74e3addffbce8ed129b2c76936f999e3c356e323a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((($context["pageCount"] ?? $this->getContext($context, "pageCount")) > 1)) {
            // line 4
            echo "    <nav class=\"pagination\">
        ";
            // line 5
            if (array_key_exists("previous", $context)) {
                // line 6
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["previous"] ?? $this->getContext($context, "previous"))))), "html", null, true);
                echo "\">&lt;</a>
        ";
            } else {
                // line 8
                echo "            <a class=\"button\" disabled>&lt;</a>
        ";
            }
            // line 10
            echo "        ";
            if (array_key_exists("next", $context)) {
                // line 11
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["next"] ?? $this->getContext($context, "next"))))), "html", null, true);
                echo "\">&gt;</a>
        ";
            } else {
                // line 13
                echo "            <a class=\"button\" disabled>&gt;</a>
        ";
            }
            // line 15
            echo "        <ul>
            <li>
                <a class=\"button\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["first"] ?? $this->getContext($context, "first"))))), "html", null, true);
            echo "\">1</a>
            </li>
            ";
            // line 19
            if ((($this->getAttribute(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")), 0, array(), "array") - ($context["first"] ?? $this->getContext($context, "first"))) >= 2)) {
                // line 20
                echo "                <li>
                    <span>…</span>
                </li>
            ";
            }
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 25
                echo "                ";
                if (((($context["first"] ?? $this->getContext($context, "first")) != $context["page"]) && ($context["page"] != ($context["last"] ?? $this->getContext($context, "last"))))) {
                    // line 26
                    echo "                    <li>
                        <a class=\"button\"
                           href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                // line 31
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
            if (((($context["last"] ?? $this->getContext($context, "last")) - $this->getAttribute(($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange")), (twig_length_filter($this->env, ($context["pagesInRange"] ?? $this->getContext($context, "pagesInRange"))) - 1), array(), "array")) >= 2)) {
                // line 33
                echo "                <li>
                    <span>…</span>
                </li>
            ";
            }
            // line 37
            echo "            <li>
                <a class=\"button\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath(($context["route"] ?? $this->getContext($context, "route")), twig_array_merge(($context["query"] ?? $this->getContext($context, "query")), array(($context["pageParameterName"] ?? $this->getContext($context, "pageParameterName")) => ($context["last"] ?? $this->getContext($context, "last"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["last"] ?? $this->getContext($context, "last")), "html", null, true);
            echo "</a>
            </li>
        </ul>
    </nav>
";
        }
        
        $__internal_5070f93d7786b2eea39605b74e3addffbce8ed129b2c76936f999e3c356e323a->leave($__internal_5070f93d7786b2eea39605b74e3addffbce8ed129b2c76936f999e3c356e323a_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  107 => 37,  101 => 33,  98 => 32,  92 => 31,  84 => 28,  80 => 26,  77 => 25,  72 => 24,  66 => 20,  64 => 19,  59 => 17,  55 => 15,  51 => 13,  45 => 11,  42 => 10,  38 => 8,  32 => 6,  30 => 5,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# bulma Sliding pagination control implementation #}

{% if pageCount > 1 %}
    <nav class=\"pagination\">
        {% if previous is defined %}
            <a class=\"button\" href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\">&lt;</a>
        {% else %}
            <a class=\"button\" disabled>&lt;</a>
        {% endif %}
        {% if next is defined %}
            <a class=\"button\" href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\">&gt;</a>
        {% else %}
            <a class=\"button\" disabled>&gt;</a>
        {% endif %}
        <ul>
            <li>
                <a class=\"button\" href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\">1</a>
            </li>
            {% if pagesInRange[0] - first >= 2 %}
                <li>
                    <span>…</span>
                </li>
            {% endif %}
            {% for page in pagesInRange %}
                {% if first != page and page != last %}
                    <li>
                        <a class=\"button\"
                           href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\">{{ page }}</a>
                    </li>
                {% endif %}
            {% endfor %}
            {% if  last - pagesInRange[pagesInRange|length - 1] >= 2 %}
                <li>
                    <span>…</span>
                </li>
            {% endif %}
            <li>
                <a class=\"button\" href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\">{{ last }}</a>
            </li>
        </ul>
    </nav>
{% endif %}
", "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\knplabs\\knp-paginator-bundle/Resources/views/Pagination/bulma_pagination.html.twig");
    }
}
