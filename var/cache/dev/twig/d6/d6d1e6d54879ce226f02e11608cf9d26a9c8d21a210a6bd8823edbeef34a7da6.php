<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b6f75371a4cfddabd350ceeede28479bb2bcd05d5f6bcb89794f3fd5289f3e37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19665ea87938d3512416bf1f958b7f8a18c5776b1dcb76684e5ef7987978e93f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19665ea87938d3512416bf1f958b7f8a18c5776b1dcb76684e5ef7987978e93f->enter($__internal_19665ea87938d3512416bf1f958b7f8a18c5776b1dcb76684e5ef7987978e93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_19665ea87938d3512416bf1f958b7f8a18c5776b1dcb76684e5ef7987978e93f->leave($__internal_19665ea87938d3512416bf1f958b7f8a18c5776b1dcb76684e5ef7987978e93f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a32b735107fc622ac0c6c2c42b42f9d499e7425b7dbc97ea3bded5eb05bd2880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a32b735107fc622ac0c6c2c42b42f9d499e7425b7dbc97ea3bded5eb05bd2880->enter($__internal_a32b735107fc622ac0c6c2c42b42f9d499e7425b7dbc97ea3bded5eb05bd2880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a32b735107fc622ac0c6c2c42b42f9d499e7425b7dbc97ea3bded5eb05bd2880->leave($__internal_a32b735107fc622ac0c6c2c42b42f9d499e7425b7dbc97ea3bded5eb05bd2880_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
