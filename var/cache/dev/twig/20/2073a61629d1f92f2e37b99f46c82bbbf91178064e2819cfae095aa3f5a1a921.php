<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_dcf9797af1b1551bf302283ff1b19174119dffb75c55ee0af3a282901925fd73 extends Twig_Template
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
        $__internal_95b0f3b73a1394c335c0bc9451d9c8545919d890fffb3f09754163495c5e67f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95b0f3b73a1394c335c0bc9451d9c8545919d890fffb3f09754163495c5e67f1->enter($__internal_95b0f3b73a1394c335c0bc9451d9c8545919d890fffb3f09754163495c5e67f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_95b0f3b73a1394c335c0bc9451d9c8545919d890fffb3f09754163495c5e67f1->leave($__internal_95b0f3b73a1394c335c0bc9451d9c8545919d890fffb3f09754163495c5e67f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
