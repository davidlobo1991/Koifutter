<?php

/* KoiBundle:sites:admin.html.twig */
class __TwigTemplate_38cc28536d35df070d0f08e74c955b64331055cac401d81323fe8e7bae5644b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KoiBundle::base.html.twig", "KoiBundle:sites:admin.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KoiBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3269c8504b5a622ce353c4dad2d1459df9cd815a8d7c1aeab2e173d271b9f1c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3269c8504b5a622ce353c4dad2d1459df9cd815a8d7c1aeab2e173d271b9f1c1->enter($__internal_3269c8504b5a622ce353c4dad2d1459df9cd815a8d7c1aeab2e173d271b9f1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KoiBundle:sites:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3269c8504b5a622ce353c4dad2d1459df9cd815a8d7c1aeab2e173d271b9f1c1->leave($__internal_3269c8504b5a622ce353c4dad2d1459df9cd815a8d7c1aeab2e173d271b9f1c1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_eaf7b440287881fa9997ebd217b54708a4e040aa608b2cb5357ead90c50d97d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf7b440287881fa9997ebd217b54708a4e040aa608b2cb5357ead90c50d97d9->enter($__internal_eaf7b440287881fa9997ebd217b54708a4e040aa608b2cb5357ead90c50d97d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    Hallo
";
        
        $__internal_eaf7b440287881fa9997ebd217b54708a4e040aa608b2cb5357ead90c50d97d9->leave($__internal_eaf7b440287881fa9997ebd217b54708a4e040aa608b2cb5357ead90c50d97d9_prof);

    }

    public function getTemplateName()
    {
        return "KoiBundle:sites:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'KoiBundle::base.html.twig' %}
{% block body %}
{{ parent() }}
    Hallo
{% endblock %}


", "KoiBundle:sites:admin.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle/Resources/views/sites/admin.html.twig");
    }
}
