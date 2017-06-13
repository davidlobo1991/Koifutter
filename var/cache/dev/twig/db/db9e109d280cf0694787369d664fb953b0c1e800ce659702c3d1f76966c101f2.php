<?php

/* SonataAdminBundle:CRUD:list_time.html.twig */
class __TwigTemplate_28becdbec0e5629c3ec31587709da6939e8c9d2d5ee297c10dd009d572c6ebd6 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be42b368962f7d8750469bc4101b4d7f099d2ddba838628ac279af9108edb8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be42b368962f7d8750469bc4101b4d7f099d2ddba838628ac279af9108edb8c7->enter($__internal_be42b368962f7d8750469bc4101b4d7f099d2ddba838628ac279af9108edb8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be42b368962f7d8750469bc4101b4d7f099d2ddba838628ac279af9108edb8c7->leave($__internal_be42b368962f7d8750469bc4101b4d7f099d2ddba838628ac279af9108edb8c7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b91cc12a55db23def89b542117132b8d5ae00e24e785cc6acce3166cd2e8a9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91cc12a55db23def89b542117132b8d5ae00e24e785cc6acce3166cd2e8a9ed->enter($__internal_b91cc12a55db23def89b542117132b8d5ae00e24e785cc6acce3166cd2e8a9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_b91cc12a55db23def89b542117132b8d5ae00e24e785cc6acce3166cd2e8a9ed->leave($__internal_b91cc12a55db23def89b542117132b8d5ae00e24e785cc6acce3166cd2e8a9ed_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  41 => 16,  39 => 15,  33 => 14,  18 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "SonataAdminBundle:CRUD:list_time.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
