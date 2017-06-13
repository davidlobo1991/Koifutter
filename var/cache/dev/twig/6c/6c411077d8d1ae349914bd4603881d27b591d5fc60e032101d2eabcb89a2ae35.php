<?php

/* SonataAdminBundle:CRUD:show_email.html.twig */
class __TwigTemplate_3662b33d9a8122776246c6d37cff451f4a2fe5594260bd11f7b2eddab304dc91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 1);
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
        $__internal_41f86a318b3b629727bb35db85f6412a91656859066c9d5159e805f66714a90b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f86a318b3b629727bb35db85f6412a91656859066c9d5159e805f66714a90b->enter($__internal_41f86a318b3b629727bb35db85f6412a91656859066c9d5159e805f66714a90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41f86a318b3b629727bb35db85f6412a91656859066c9d5159e805f66714a90b->leave($__internal_41f86a318b3b629727bb35db85f6412a91656859066c9d5159e805f66714a90b_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_70d8242415da4e4a28e29e2c62d424ec84485db39779a72c10f4ae3438ed6b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d8242415da4e4a28e29e2c62d424ec84485db39779a72c10f4ae3438ed6b34->enter($__internal_70d8242415da4e4a28e29e2c62d424ec84485db39779a72c10f4ae3438ed6b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:show_email.html.twig", 4)->display($context);
        
        $__internal_70d8242415da4e4a28e29e2c62d424ec84485db39779a72c10f4ae3438ed6b34->leave($__internal_70d8242415da4e4a28e29e2c62d424ec84485db39779a72c10f4ae3438ed6b34_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_email.html.twig";
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
", "SonataAdminBundle:CRUD:show_email.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
