<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ed26184d974ff71ef0219f9e0a6a75022a399d7c3a063e72b8be3e2cbad672fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b760c4318fe37b5dcfbd139253218e3929653b5dbde3f7e0306fa2277a0149bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b760c4318fe37b5dcfbd139253218e3929653b5dbde3f7e0306fa2277a0149bd->enter($__internal_b760c4318fe37b5dcfbd139253218e3929653b5dbde3f7e0306fa2277a0149bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b760c4318fe37b5dcfbd139253218e3929653b5dbde3f7e0306fa2277a0149bd->leave($__internal_b760c4318fe37b5dcfbd139253218e3929653b5dbde3f7e0306fa2277a0149bd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1b997cb91252571cbb083b4be42d57794051e5d4ea914320d8bcda53c255ecde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b997cb91252571cbb083b4be42d57794051e5d4ea914320d8bcda53c255ecde->enter($__internal_1b997cb91252571cbb083b4be42d57794051e5d4ea914320d8bcda53c255ecde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1b997cb91252571cbb083b4be42d57794051e5d4ea914320d8bcda53c255ecde->leave($__internal_1b997cb91252571cbb083b4be42d57794051e5d4ea914320d8bcda53c255ecde_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcebe75005d082812c46a7407c332370134389e30aac8968176be103b6fadc2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcebe75005d082812c46a7407c332370134389e30aac8968176be103b6fadc2e->enter($__internal_dcebe75005d082812c46a7407c332370134389e30aac8968176be103b6fadc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dcebe75005d082812c46a7407c332370134389e30aac8968176be103b6fadc2e->leave($__internal_dcebe75005d082812c46a7407c332370134389e30aac8968176be103b6fadc2e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e588141ce57bb2d39fe3ae22b746f5e44082aff2fcd976db73bfd36177678fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e588141ce57bb2d39fe3ae22b746f5e44082aff2fcd976db73bfd36177678fcf->enter($__internal_e588141ce57bb2d39fe3ae22b746f5e44082aff2fcd976db73bfd36177678fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e588141ce57bb2d39fe3ae22b746f5e44082aff2fcd976db73bfd36177678fcf->leave($__internal_e588141ce57bb2d39fe3ae22b746f5e44082aff2fcd976db73bfd36177678fcf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
