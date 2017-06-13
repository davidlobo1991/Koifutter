<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_a1e4eb2fede2e52d6507d3d2eb42d45c11722de07513c6e6627413b89f1199d0 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_887f3926c4d5372400f089d53914d55839e41967dec6b57ce0911ceac621beb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887f3926c4d5372400f089d53914d55839e41967dec6b57ce0911ceac621beb9->enter($__internal_887f3926c4d5372400f089d53914d55839e41967dec6b57ce0911ceac621beb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_887f3926c4d5372400f089d53914d55839e41967dec6b57ce0911ceac621beb9->leave($__internal_887f3926c4d5372400f089d53914d55839e41967dec6b57ce0911ceac621beb9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8b2326f8eda13d4fc61ba155d5adbea69e5dcdd4e9d46209746dd09513ae5595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2326f8eda13d4fc61ba155d5adbea69e5dcdd4e9d46209746dd09513ae5595->enter($__internal_8b2326f8eda13d4fc61ba155d5adbea69e5dcdd4e9d46209746dd09513ae5595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_8b2326f8eda13d4fc61ba155d5adbea69e5dcdd4e9d46209746dd09513ae5595->leave($__internal_8b2326f8eda13d4fc61ba155d5adbea69e5dcdd4e9d46209746dd09513ae5595_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
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
", "SonataAdminBundle:CRUD:edit_integer.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
