<?php

/* SonataAdminBundle:CRUD:show_percent.html.twig */
class __TwigTemplate_08618bcecaa397cb3256aea66ffa02c44efe19edbd3f7236bcbf4ccf624ec8a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_percent.html.twig", 12);
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
        $__internal_31029957d2e8ec3737c93c455b6d98dd64c1c7eadf1e084e5f8e023c43525a2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31029957d2e8ec3737c93c455b6d98dd64c1c7eadf1e084e5f8e023c43525a2c->enter($__internal_31029957d2e8ec3737c93c455b6d98dd64c1c7eadf1e084e5f8e023c43525a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31029957d2e8ec3737c93c455b6d98dd64c1c7eadf1e084e5f8e023c43525a2c->leave($__internal_31029957d2e8ec3737c93c455b6d98dd64c1c7eadf1e084e5f8e023c43525a2c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0dd931a60de9ea1ea99045a7103294083c8a757a2fd68197abe56ba415a59ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dd931a60de9ea1ea99045a7103294083c8a757a2fd68197abe56ba415a59ddc->enter($__internal_0dd931a60de9ea1ea99045a7103294083c8a757a2fd68197abe56ba415a59ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_0dd931a60de9ea1ea99045a7103294083c8a757a2fd68197abe56ba415a59ddc->leave($__internal_0dd931a60de9ea1ea99045a7103294083c8a757a2fd68197abe56ba415a59ddc_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "SonataAdminBundle:CRUD:show_percent.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
