<?php

/* SonataAdminBundle:CRUD:list_currency.html.twig */
class __TwigTemplate_8cea82a810845eac7730a046f5d40140fd125eb51c3939105733fd7e218c8781 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_940c86267f438e6abff02055ae111073437de0bdf24c5f8f12a5d30aa814a322 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940c86267f438e6abff02055ae111073437de0bdf24c5f8f12a5d30aa814a322->enter($__internal_940c86267f438e6abff02055ae111073437de0bdf24c5f8f12a5d30aa814a322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_940c86267f438e6abff02055ae111073437de0bdf24c5f8f12a5d30aa814a322->leave($__internal_940c86267f438e6abff02055ae111073437de0bdf24c5f8f12a5d30aa814a322_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8cfafa1281a74aed23328a7e2bdc4b43fd17e50d5f56c3da04bb4cfeee5619ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cfafa1281a74aed23328a7e2bdc4b43fd17e50d5f56c3da04bb4cfeee5619ba->enter($__internal_8cfafa1281a74aed23328a7e2bdc4b43fd17e50d5f56c3da04bb4cfeee5619ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_8cfafa1281a74aed23328a7e2bdc4b43fd17e50d5f56c3da04bb4cfeee5619ba->leave($__internal_8cfafa1281a74aed23328a7e2bdc4b43fd17e50d5f56c3da04bb4cfeee5619ba_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_currency.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
