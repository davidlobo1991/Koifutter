<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_8a88d6ccd4232843e797bcf55dfb9c64dc5f6e2428f3a47a5fbc61fdbaae61bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fc62ccee524926e94fafc4369ad8dde8ed905b0ab6c22794f873c453f7471ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc62ccee524926e94fafc4369ad8dde8ed905b0ab6c22794f873c453f7471ab->enter($__internal_5fc62ccee524926e94fafc4369ad8dde8ed905b0ab6c22794f873c453f7471ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc62ccee524926e94fafc4369ad8dde8ed905b0ab6c22794f873c453f7471ab->leave($__internal_5fc62ccee524926e94fafc4369ad8dde8ed905b0ab6c22794f873c453f7471ab_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_2cc24bffebe4c45d9a40fdf45f0d73eac40ea2017d92de36058f1713bb766414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc24bffebe4c45d9a40fdf45f0d73eac40ea2017d92de36058f1713bb766414->enter($__internal_2cc24bffebe4c45d9a40fdf45f0d73eac40ea2017d92de36058f1713bb766414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_2cc24bffebe4c45d9a40fdf45f0d73eac40ea2017d92de36058f1713bb766414->leave($__internal_2cc24bffebe4c45d9a40fdf45f0d73eac40ea2017d92de36058f1713bb766414_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "@SonataAdmin/CRUD/show_percent.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_percent.html.twig");
    }
}
