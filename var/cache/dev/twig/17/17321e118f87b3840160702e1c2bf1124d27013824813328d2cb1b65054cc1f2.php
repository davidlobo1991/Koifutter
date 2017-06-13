<?php

/* SonataAdminBundle:CRUD:list_email.html.twig */
class __TwigTemplate_ca60249eef88416cbe5f6fb29b093cebccff279667c79ca28aefe401de3aed5e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7250f07e4d834e892bd84feebf70e942df55e7c0fdbc44d1978c7d0792cff4af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7250f07e4d834e892bd84feebf70e942df55e7c0fdbc44d1978c7d0792cff4af->enter($__internal_7250f07e4d834e892bd84feebf70e942df55e7c0fdbc44d1978c7d0792cff4af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7250f07e4d834e892bd84feebf70e942df55e7c0fdbc44d1978c7d0792cff4af->leave($__internal_7250f07e4d834e892bd84feebf70e942df55e7c0fdbc44d1978c7d0792cff4af_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_ac422f38da9e0167adef775cdbe72f0626a71a51b9d283d0b57041e4bff6e38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac422f38da9e0167adef775cdbe72f0626a71a51b9d283d0b57041e4bff6e38b->enter($__internal_ac422f38da9e0167adef775cdbe72f0626a71a51b9d283d0b57041e4bff6e38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "SonataAdminBundle:CRUD:list_email.html.twig", 15)->display($context);
        
        $__internal_ac422f38da9e0167adef775cdbe72f0626a71a51b9d283d0b57041e4bff6e38b->leave($__internal_ac422f38da9e0167adef775cdbe72f0626a71a51b9d283d0b57041e4bff6e38b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "SonataAdminBundle:CRUD:list_email.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
