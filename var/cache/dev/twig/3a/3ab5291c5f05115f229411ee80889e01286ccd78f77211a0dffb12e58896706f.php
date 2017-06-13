<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_71f920729e43530e94bd185b6244a83b58b58fc741e60c3bd657992ef5c5a28a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dae478930ee1d8ba1a866e5517eb0d013cfad143a2d80d4ba5c856d750b736ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae478930ee1d8ba1a866e5517eb0d013cfad143a2d80d4ba5c856d750b736ac->enter($__internal_dae478930ee1d8ba1a866e5517eb0d013cfad143a2d80d4ba5c856d750b736ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dae478930ee1d8ba1a866e5517eb0d013cfad143a2d80d4ba5c856d750b736ac->leave($__internal_dae478930ee1d8ba1a866e5517eb0d013cfad143a2d80d4ba5c856d750b736ac_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_f2031388b13f33c94d0fd549fd2be06978a5ee713c991eee3b512b04aa026c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2031388b13f33c94d0fd549fd2be06978a5ee713c991eee3b512b04aa026c07->enter($__internal_f2031388b13f33c94d0fd549fd2be06978a5ee713c991eee3b512b04aa026c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_f2031388b13f33c94d0fd549fd2be06978a5ee713c991eee3b512b04aa026c07->leave($__internal_f2031388b13f33c94d0fd549fd2be06978a5ee713c991eee3b512b04aa026c07_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "@SonataAdmin/CRUD/show_email.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_email.html.twig");
    }
}
