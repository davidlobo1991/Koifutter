<?php

/* @SonataAdmin/CRUD/list_time.html.twig */
class __TwigTemplate_951655d417657b2fe3b712459f1a1d0e00d0c1af710f318a47c882953780ecde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31892bc58281f5e185c16a06c0fb264f34df09c3a2c9c2149cc5f73cd16ccac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31892bc58281f5e185c16a06c0fb264f34df09c3a2c9c2149cc5f73cd16ccac4->enter($__internal_31892bc58281f5e185c16a06c0fb264f34df09c3a2c9c2149cc5f73cd16ccac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31892bc58281f5e185c16a06c0fb264f34df09c3a2c9c2149cc5f73cd16ccac4->leave($__internal_31892bc58281f5e185c16a06c0fb264f34df09c3a2c9c2149cc5f73cd16ccac4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_19634474edc7f1d18e1ce00c24ffe2256248a509ab05d78f924c307a3d3bc0fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19634474edc7f1d18e1ce00c24ffe2256248a509ab05d78f924c307a3d3bc0fd->enter($__internal_19634474edc7f1d18e1ce00c24ffe2256248a509ab05d78f924c307a3d3bc0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_19634474edc7f1d18e1ce00c24ffe2256248a509ab05d78f924c307a3d3bc0fd->leave($__internal_19634474edc7f1d18e1ce00c24ffe2256248a509ab05d78f924c307a3d3bc0fd_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/list_time.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_time.html.twig");
    }
}
