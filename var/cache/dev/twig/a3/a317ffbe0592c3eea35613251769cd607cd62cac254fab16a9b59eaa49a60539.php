<?php

/* @SonataAdmin/Core/search.html.twig */
class __TwigTemplate_34c0855228b48f7d0221c583f84f3f39ac762f89dc35b0711ff3534691ae2c0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/Core/search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1bd5411032497b8b6c25cf4cf6a6e08029d7c3b697668248e2a36e6584c24b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1bd5411032497b8b6c25cf4cf6a6e08029d7c3b697668248e2a36e6584c24b5->enter($__internal_b1bd5411032497b8b6c25cf4cf6a6e08029d7c3b697668248e2a36e6584c24b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1bd5411032497b8b6c25cf4cf6a6e08029d7c3b697668248e2a36e6584c24b5->leave($__internal_b1bd5411032497b8b6c25cf4cf6a6e08029d7c3b697668248e2a36e6584c24b5_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_22dfc88339fcbb75fa98e785b8501e0ece7654319c9f27d4107ae1185464afed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22dfc88339fcbb75fa98e785b8501e0ece7654319c9f27d4107ae1185464afed->enter($__internal_22dfc88339fcbb75fa98e785b8501e0ece7654319c9f27d4107ae1185464afed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => ($context["query"] ?? $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_22dfc88339fcbb75fa98e785b8501e0ece7654319c9f27d4107ae1185464afed->leave($__internal_22dfc88339fcbb75fa98e785b8501e0ece7654319c9f27d4107ae1185464afed_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_84d2c2c060f1f5dad57e8073bdaecaec8c6aa0648a8fef5f679e2b995a9fd08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84d2c2c060f1f5dad57e8073bdaecaec8c6aa0648a8fef5f679e2b995a9fd08f->enter($__internal_84d2c2c060f1f5dad57e8073bdaecaec8c6aa0648a8fef5f679e2b995a9fd08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_84d2c2c060f1f5dad57e8073bdaecaec8c6aa0648a8fef5f679e2b995a9fd08f->leave($__internal_84d2c2c060f1f5dad57e8073bdaecaec8c6aa0648a8fef5f679e2b995a9fd08f_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_4b685fc6e9e7c996dd527e5a453f0b8c55a459dc28271566772605968b8c330d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b685fc6e9e7c996dd527e5a453f0b8c55a459dc28271566772605968b8c330d->enter($__internal_4b685fc6e9e7c996dd527e5a453f0b8c55a459dc28271566772605968b8c330d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => ($context["query"] ?? $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !(($context["query"] ?? $this->getContext($context, "query")) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 23
                echo "            ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 24
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                        // line 25
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 26
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "
            ";
                // line 28
                if (($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 29
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 30
                        echo "                    ";
                        $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                        // line 31
                        echo "                    ";
                        if ((($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "create"), "method")) || ($this->getAttribute($context["admin"], "hasRoute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "hasAccess", array(0 => "list"), "method")))) {
                            // line 32
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 35
($context["query"] ?? $this->getContext($context, "query")), "admin_code" => $this->getAttribute(                            // line 36
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => $this->getAttribute(                            // line 39
$context["group"], "icon", array()))));
                            // line 40
                            echo "
                    ";
                        }
                        // line 42
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "            ";
                }
                // line 44
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        </div>
    ";
        }
        // line 47
        echo "
";
        
        $__internal_4b685fc6e9e7c996dd527e5a453f0b8c55a459dc28271566772605968b8c330d->leave($__internal_4b685fc6e9e7c996dd527e5a453f0b8c55a459dc28271566772605968b8c330d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 47,  142 => 45,  136 => 44,  133 => 43,  127 => 42,  123 => 40,  121 => 39,  120 => 36,  119 => 35,  117 => 32,  114 => 31,  111 => 30,  106 => 29,  104 => 28,  101 => 27,  94 => 26,  91 => 25,  85 => 24,  82 => 23,  78 => 22,  75 => 21,  72 => 20,  70 => 19,  64 => 17,  58 => 16,  47 => 15,  35 => 14,  20 => 12,);
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

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\" data-masonry='{ \"itemSelector\": \".search-box-item\" }'>
        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.hasAccess('create') or admin.hasRoute('list') and admin.hasAccess('list') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "@SonataAdmin/Core/search.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Core\\search.html.twig");
    }
}
