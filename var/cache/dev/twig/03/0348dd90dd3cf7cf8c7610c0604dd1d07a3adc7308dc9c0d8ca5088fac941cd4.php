<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_96bcda54b96912e82db15f190c35e26ddc10160f0d8bb1f34cc71c89e0bed39a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_9f3a0fbdd7577e16808cf3b596c9b79e770f6361158b07a0eea585b6bf6adcd9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f3a0fbdd7577e16808cf3b596c9b79e770f6361158b07a0eea585b6bf6adcd9->enter($__internal_9f3a0fbdd7577e16808cf3b596c9b79e770f6361158b07a0eea585b6bf6adcd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f3a0fbdd7577e16808cf3b596c9b79e770f6361158b07a0eea585b6bf6adcd9->leave($__internal_9f3a0fbdd7577e16808cf3b596c9b79e770f6361158b07a0eea585b6bf6adcd9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6fca8d03cf4fcfc9884fb23a37aeb91469ae37103ecd84808baa7d07ff800810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fca8d03cf4fcfc9884fb23a37aeb91469ae37103ecd84808baa7d07ff800810->enter($__internal_6fca8d03cf4fcfc9884fb23a37aeb91469ae37103ecd84808baa7d07ff800810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6fca8d03cf4fcfc9884fb23a37aeb91469ae37103ecd84808baa7d07ff800810->leave($__internal_6fca8d03cf4fcfc9884fb23a37aeb91469ae37103ecd84808baa7d07ff800810_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d117a8162307a5e015ee8433356026d8aac4a5a987476951e3d395db81673e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d117a8162307a5e015ee8433356026d8aac4a5a987476951e3d395db81673e0b->enter($__internal_d117a8162307a5e015ee8433356026d8aac4a5a987476951e3d395db81673e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d117a8162307a5e015ee8433356026d8aac4a5a987476951e3d395db81673e0b->leave($__internal_d117a8162307a5e015ee8433356026d8aac4a5a987476951e3d395db81673e0b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
