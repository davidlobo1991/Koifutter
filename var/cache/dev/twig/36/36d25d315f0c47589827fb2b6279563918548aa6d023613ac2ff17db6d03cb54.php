<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_32a815855d8247733565b4d6d0fd08403fc7fa3d58df150fc238790d886f3e27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86a17eedeebcfceed77bdfcdb2b8b48934bd333ca97719d30e71ccf985465df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a17eedeebcfceed77bdfcdb2b8b48934bd333ca97719d30e71ccf985465df0->enter($__internal_86a17eedeebcfceed77bdfcdb2b8b48934bd333ca97719d30e71ccf985465df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_86a17eedeebcfceed77bdfcdb2b8b48934bd333ca97719d30e71ccf985465df0->leave($__internal_86a17eedeebcfceed77bdfcdb2b8b48934bd333ca97719d30e71ccf985465df0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
