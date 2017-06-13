<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d3e95c26beb15af316e715209f71db9c1ae21bf372346e1d133c5f182a598f55 extends Twig_Template
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
        $__internal_08e8c1f1adef701e70fd99144407e3c0d9e2399a7964e0854b9684e2ed485277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e8c1f1adef701e70fd99144407e3c0d9e2399a7964e0854b9684e2ed485277->enter($__internal_08e8c1f1adef701e70fd99144407e3c0d9e2399a7964e0854b9684e2ed485277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_08e8c1f1adef701e70fd99144407e3c0d9e2399a7964e0854b9684e2ed485277->leave($__internal_08e8c1f1adef701e70fd99144407e3c0d9e2399a7964e0854b9684e2ed485277_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
