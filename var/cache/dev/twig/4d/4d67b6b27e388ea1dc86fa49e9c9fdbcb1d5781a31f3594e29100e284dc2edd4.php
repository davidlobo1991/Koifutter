<?php

/* SonataAdminBundle:CRUD:show_currency.html.twig */
class __TwigTemplate_4d101228cef3f9769a8b33a88cb54d92624c8183d539b92c537a6ae1c41d516e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "SonataAdminBundle:CRUD:show_currency.html.twig", 12);
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
        $__internal_cb521b28403c5bfaa6e28062993f3e92e4db7214d144580184aabe3f38bbf637 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb521b28403c5bfaa6e28062993f3e92e4db7214d144580184aabe3f38bbf637->enter($__internal_cb521b28403c5bfaa6e28062993f3e92e4db7214d144580184aabe3f38bbf637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb521b28403c5bfaa6e28062993f3e92e4db7214d144580184aabe3f38bbf637->leave($__internal_cb521b28403c5bfaa6e28062993f3e92e4db7214d144580184aabe3f38bbf637_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_39c08d8bb4310d7801a53f65cbdbee2f8358b9f5051f76b76f73b89db825cf93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c08d8bb4310d7801a53f65cbdbee2f8358b9f5051f76b76f73b89db825cf93->enter($__internal_39c08d8bb4310d7801a53f65cbdbee2f8358b9f5051f76b76f73b89db825cf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_39c08d8bb4310d7801a53f65cbdbee2f8358b9f5051f76b76f73b89db825cf93->leave($__internal_39c08d8bb4310d7801a53f65cbdbee2f8358b9f5051f76b76f73b89db825cf93_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:show_currency.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
