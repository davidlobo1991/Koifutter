<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_ecebaaf7137cfaede58dbd979d183300a2d288c12fb4e3ed199e2a48e87e99bb extends Twig_Template
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
        $__internal_d20d4e005b9b1a4c0bcdc4c16399c6a10bb62fc25a9ed2888c0483058390e608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20d4e005b9b1a4c0bcdc4c16399c6a10bb62fc25a9ed2888c0483058390e608->enter($__internal_d20d4e005b9b1a4c0bcdc4c16399c6a10bb62fc25a9ed2888c0483058390e608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d20d4e005b9b1a4c0bcdc4c16399c6a10bb62fc25a9ed2888c0483058390e608->leave($__internal_d20d4e005b9b1a4c0bcdc4c16399c6a10bb62fc25a9ed2888c0483058390e608_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
