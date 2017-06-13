<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2b213b4c309a98b144e84303e6e3a760f4150a10ea5c2f7163f3769e2ab297c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_ea5e0592a4cdeee13b24e1a3a9b165ab460bdfd5b50f48dd354cc9468bb0a2c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea5e0592a4cdeee13b24e1a3a9b165ab460bdfd5b50f48dd354cc9468bb0a2c1->enter($__internal_ea5e0592a4cdeee13b24e1a3a9b165ab460bdfd5b50f48dd354cc9468bb0a2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea5e0592a4cdeee13b24e1a3a9b165ab460bdfd5b50f48dd354cc9468bb0a2c1->leave($__internal_ea5e0592a4cdeee13b24e1a3a9b165ab460bdfd5b50f48dd354cc9468bb0a2c1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d155344105c2c38904c37a38e33e2fa43e3759abf2291cabdcf0159c68a0235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d155344105c2c38904c37a38e33e2fa43e3759abf2291cabdcf0159c68a0235->enter($__internal_9d155344105c2c38904c37a38e33e2fa43e3759abf2291cabdcf0159c68a0235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9d155344105c2c38904c37a38e33e2fa43e3759abf2291cabdcf0159c68a0235->leave($__internal_9d155344105c2c38904c37a38e33e2fa43e3759abf2291cabdcf0159c68a0235_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e91706938b7a136970361678e8737ceb8bfbf06a346d8c03bbe81556faf1c34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e91706938b7a136970361678e8737ceb8bfbf06a346d8c03bbe81556faf1c34->enter($__internal_8e91706938b7a136970361678e8737ceb8bfbf06a346d8c03bbe81556faf1c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8e91706938b7a136970361678e8737ceb8bfbf06a346d8c03bbe81556faf1c34->leave($__internal_8e91706938b7a136970361678e8737ceb8bfbf06a346d8c03bbe81556faf1c34_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_806960b372f1bd1e71f7a667c12bb9997d6e6424a8bd9c1ea2c43289f2a5b27f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_806960b372f1bd1e71f7a667c12bb9997d6e6424a8bd9c1ea2c43289f2a5b27f->enter($__internal_806960b372f1bd1e71f7a667c12bb9997d6e6424a8bd9c1ea2c43289f2a5b27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_806960b372f1bd1e71f7a667c12bb9997d6e6424a8bd9c1ea2c43289f2a5b27f->leave($__internal_806960b372f1bd1e71f7a667c12bb9997d6e6424a8bd9c1ea2c43289f2a5b27f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
