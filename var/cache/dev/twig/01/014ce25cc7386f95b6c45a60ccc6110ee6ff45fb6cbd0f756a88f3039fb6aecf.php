<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8309bfd5912e9d0cd5dc4bb7bfaebeddb21143c9a88f333d039575ede89cab37 extends Twig_Template
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
        $__internal_530d2f7efa8d0e1cdd4ba5af72f57d4bd202cad3b5cc0ae0dcbd3f90fb2c1197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530d2f7efa8d0e1cdd4ba5af72f57d4bd202cad3b5cc0ae0dcbd3f90fb2c1197->enter($__internal_530d2f7efa8d0e1cdd4ba5af72f57d4bd202cad3b5cc0ae0dcbd3f90fb2c1197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_530d2f7efa8d0e1cdd4ba5af72f57d4bd202cad3b5cc0ae0dcbd3f90fb2c1197->leave($__internal_530d2f7efa8d0e1cdd4ba5af72f57d4bd202cad3b5cc0ae0dcbd3f90fb2c1197_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
