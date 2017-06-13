<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_1b823bca74808cb4dd71382f30d7d5b00678a93509ede8a02b291ec11a338c1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71f909dc7274421ad05fed72708fb174923769e3a6048c11801e1a0a149b9d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71f909dc7274421ad05fed72708fb174923769e3a6048c11801e1a0a149b9d69->enter($__internal_71f909dc7274421ad05fed72708fb174923769e3a6048c11801e1a0a149b9d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71f909dc7274421ad05fed72708fb174923769e3a6048c11801e1a0a149b9d69->leave($__internal_71f909dc7274421ad05fed72708fb174923769e3a6048c11801e1a0a149b9d69_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_da15070925bf5cf69d45a0c99b1e110af7a24eca0843266b76555e090de47c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da15070925bf5cf69d45a0c99b1e110af7a24eca0843266b76555e090de47c2e->enter($__internal_da15070925bf5cf69d45a0c99b1e110af7a24eca0843266b76555e090de47c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_da15070925bf5cf69d45a0c99b1e110af7a24eca0843266b76555e090de47c2e->leave($__internal_da15070925bf5cf69d45a0c99b1e110af7a24eca0843266b76555e090de47c2e_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_d77878d1eaa9387552811d599b6cec91fbe87e33103717bc95d60ae236c6a0ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d77878d1eaa9387552811d599b6cec91fbe87e33103717bc95d60ae236c6a0ca->enter($__internal_d77878d1eaa9387552811d599b6cec91fbe87e33103717bc95d60ae236c6a0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_d77878d1eaa9387552811d599b6cec91fbe87e33103717bc95d60ae236c6a0ca->leave($__internal_d77878d1eaa9387552811d599b6cec91fbe87e33103717bc95d60ae236c6a0ca_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_9e898a4a3f01980ef0bf094c2b61c570c5e7f850a33d3e597526fce4920d6c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e898a4a3f01980ef0bf094c2b61c570c5e7f850a33d3e597526fce4920d6c88->enter($__internal_9e898a4a3f01980ef0bf094c2b61c570c5e7f850a33d3e597526fce4920d6c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_9e898a4a3f01980ef0bf094c2b61c570c5e7f850a33d3e597526fce4920d6c88->leave($__internal_9e898a4a3f01980ef0bf094c2b61c570c5e7f850a33d3e597526fce4920d6c88_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "@SonataAdmin/CRUD/action.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\action.html.twig");
    }
}
