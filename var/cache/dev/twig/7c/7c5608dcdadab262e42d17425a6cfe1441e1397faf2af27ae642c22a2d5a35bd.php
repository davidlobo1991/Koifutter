<?php

/* SonataAdminBundle:CRUD:edit_string.html.twig */
class __TwigTemplate_1b4b09e7d5ef6f3d5d946ca07460e9c1ae6b7a6cc69b569bdac94abfbf8d78ec extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2eef95bc5a4c881e0edb1c302a6ae11d761daa960b70cc60ee9120d3220e18e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2eef95bc5a4c881e0edb1c302a6ae11d761daa960b70cc60ee9120d3220e18e->enter($__internal_f2eef95bc5a4c881e0edb1c302a6ae11d761daa960b70cc60ee9120d3220e18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2eef95bc5a4c881e0edb1c302a6ae11d761daa960b70cc60ee9120d3220e18e->leave($__internal_f2eef95bc5a4c881e0edb1c302a6ae11d761daa960b70cc60ee9120d3220e18e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0c78b55f04921335d88295bb68862a227aecacdf28ea200fc76bbfb598b43411 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c78b55f04921335d88295bb68862a227aecacdf28ea200fc76bbfb598b43411->enter($__internal_0c78b55f04921335d88295bb68862a227aecacdf28ea200fc76bbfb598b43411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_0c78b55f04921335d88295bb68862a227aecacdf28ea200fc76bbfb598b43411->leave($__internal_0c78b55f04921335d88295bb68862a227aecacdf28ea200fc76bbfb598b43411_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  18 => 12,);
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

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "SonataAdminBundle:CRUD:edit_string.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
