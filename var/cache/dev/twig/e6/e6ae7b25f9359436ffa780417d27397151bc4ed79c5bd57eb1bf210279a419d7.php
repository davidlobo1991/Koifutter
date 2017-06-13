<?php

/* @Koi/sites/admin.html.twig */
class __TwigTemplate_261aa0e441c2c003eedce35ddfa3ffd9925cb3dc2680e243f95596d33860c60c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KoiBundle::base.html.twig", "@Koi/sites/admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KoiBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76abeafbe63209fdc13d3cf762b3c1bb8724c8febd0087af7901d33577ef5407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76abeafbe63209fdc13d3cf762b3c1bb8724c8febd0087af7901d33577ef5407->enter($__internal_76abeafbe63209fdc13d3cf762b3c1bb8724c8febd0087af7901d33577ef5407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Koi/sites/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76abeafbe63209fdc13d3cf762b3c1bb8724c8febd0087af7901d33577ef5407->leave($__internal_76abeafbe63209fdc13d3cf762b3c1bb8724c8febd0087af7901d33577ef5407_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e3580d64228f564eea6e9003a39546812f212c77c2955c8d7a92337190b3d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e3580d64228f564eea6e9003a39546812f212c77c2955c8d7a92337190b3d45->enter($__internal_8e3580d64228f564eea6e9003a39546812f212c77c2955c8d7a92337190b3d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    Hallo
";
        
        $__internal_8e3580d64228f564eea6e9003a39546812f212c77c2955c8d7a92337190b3d45->leave($__internal_8e3580d64228f564eea6e9003a39546812f212c77c2955c8d7a92337190b3d45_prof);

    }

    public function getTemplateName()
    {
        return "@Koi/sites/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'KoiBundle::base.html.twig' %}
{% block body %}
{{ parent() }}
    Hallo
{% endblock %}


", "@Koi/sites/admin.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle\\Resources\\views\\sites\\admin.html.twig");
    }
}
