<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f461580250e75d0167375d228eaa8f21e9b4ea9701a2587210aea5336cd2b0af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_501bd1de8c014c81cb1a5b4a02ff1026d817f0e5598f0e1b40a0a41b887d72db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_501bd1de8c014c81cb1a5b4a02ff1026d817f0e5598f0e1b40a0a41b887d72db->enter($__internal_501bd1de8c014c81cb1a5b4a02ff1026d817f0e5598f0e1b40a0a41b887d72db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_501bd1de8c014c81cb1a5b4a02ff1026d817f0e5598f0e1b40a0a41b887d72db->leave($__internal_501bd1de8c014c81cb1a5b4a02ff1026d817f0e5598f0e1b40a0a41b887d72db_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f9b3b6e148a454d05b6b42bf797648d4078afe3ce9abf18141d80197191499d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9b3b6e148a454d05b6b42bf797648d4078afe3ce9abf18141d80197191499d->enter($__internal_5f9b3b6e148a454d05b6b42bf797648d4078afe3ce9abf18141d80197191499d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5f9b3b6e148a454d05b6b42bf797648d4078afe3ce9abf18141d80197191499d->leave($__internal_5f9b3b6e148a454d05b6b42bf797648d4078afe3ce9abf18141d80197191499d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb4fe03847029f6d4038c8a886aa8c5e67d24de120e1a7ed6f02ac74b778a540 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4fe03847029f6d4038c8a886aa8c5e67d24de120e1a7ed6f02ac74b778a540->enter($__internal_cb4fe03847029f6d4038c8a886aa8c5e67d24de120e1a7ed6f02ac74b778a540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_cb4fe03847029f6d4038c8a886aa8c5e67d24de120e1a7ed6f02ac74b778a540->leave($__internal_cb4fe03847029f6d4038c8a886aa8c5e67d24de120e1a7ed6f02ac74b778a540_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
