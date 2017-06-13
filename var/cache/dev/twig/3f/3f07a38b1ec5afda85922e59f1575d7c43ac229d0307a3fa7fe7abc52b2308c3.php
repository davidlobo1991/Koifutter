<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_49b034c2e8c806446e206d044badd55fb1a78387dbdec0bdb15d962b9463b2a3 extends Twig_Template
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
        $__internal_8920ee838c6144b632bfabc1b7a20e3fc9e8a188500a41f1f9aa394770dbd24b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8920ee838c6144b632bfabc1b7a20e3fc9e8a188500a41f1f9aa394770dbd24b->enter($__internal_8920ee838c6144b632bfabc1b7a20e3fc9e8a188500a41f1f9aa394770dbd24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8920ee838c6144b632bfabc1b7a20e3fc9e8a188500a41f1f9aa394770dbd24b->leave($__internal_8920ee838c6144b632bfabc1b7a20e3fc9e8a188500a41f1f9aa394770dbd24b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
