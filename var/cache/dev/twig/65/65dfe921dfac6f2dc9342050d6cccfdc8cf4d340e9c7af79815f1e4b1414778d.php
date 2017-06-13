<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_08f8769d8d89940fc563099f9f5debef27edc9256e73b8f81f15fadd12027141 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0d3d645e646aff481255971f079781ffd96490a369d45d8c7f6cdef2f0b1117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d3d645e646aff481255971f079781ffd96490a369d45d8c7f6cdef2f0b1117->enter($__internal_f0d3d645e646aff481255971f079781ffd96490a369d45d8c7f6cdef2f0b1117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0d3d645e646aff481255971f079781ffd96490a369d45d8c7f6cdef2f0b1117->leave($__internal_f0d3d645e646aff481255971f079781ffd96490a369d45d8c7f6cdef2f0b1117_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a417f6fb8c2dca6e164f07a2f2598e97dda93ed32b3aa3df87cbf7575f6f1bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a417f6fb8c2dca6e164f07a2f2598e97dda93ed32b3aa3df87cbf7575f6f1bca->enter($__internal_a417f6fb8c2dca6e164f07a2f2598e97dda93ed32b3aa3df87cbf7575f6f1bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a417f6fb8c2dca6e164f07a2f2598e97dda93ed32b3aa3df87cbf7575f6f1bca->leave($__internal_a417f6fb8c2dca6e164f07a2f2598e97dda93ed32b3aa3df87cbf7575f6f1bca_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73718313b7a0a5e2a4251e1591895b503bce9597dd2d8f298ca2757f258cf4f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73718313b7a0a5e2a4251e1591895b503bce9597dd2d8f298ca2757f258cf4f8->enter($__internal_73718313b7a0a5e2a4251e1591895b503bce9597dd2d8f298ca2757f258cf4f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_73718313b7a0a5e2a4251e1591895b503bce9597dd2d8f298ca2757f258cf4f8->leave($__internal_73718313b7a0a5e2a4251e1591895b503bce9597dd2d8f298ca2757f258cf4f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4fbce4b7e9c98b2b498ff6189017ccfb1adf73ef54d720fe77321d84eda7bf88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fbce4b7e9c98b2b498ff6189017ccfb1adf73ef54d720fe77321d84eda7bf88->enter($__internal_4fbce4b7e9c98b2b498ff6189017ccfb1adf73ef54d720fe77321d84eda7bf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4fbce4b7e9c98b2b498ff6189017ccfb1adf73ef54d720fe77321d84eda7bf88->leave($__internal_4fbce4b7e9c98b2b498ff6189017ccfb1adf73ef54d720fe77321d84eda7bf88_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}