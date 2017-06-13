<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_16b101d0e6121933f8b568dbf038a087a22dbccf521136e2dab73a3cb5a012a8 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e520b7e5c4d0351d7bbdcdbc138c2ea4a9c6f1d2b379e20057a72b6e4e7908c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e520b7e5c4d0351d7bbdcdbc138c2ea4a9c6f1d2b379e20057a72b6e4e7908c5->enter($__internal_e520b7e5c4d0351d7bbdcdbc138c2ea4a9c6f1d2b379e20057a72b6e4e7908c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e520b7e5c4d0351d7bbdcdbc138c2ea4a9c6f1d2b379e20057a72b6e4e7908c5->leave($__internal_e520b7e5c4d0351d7bbdcdbc138c2ea4a9c6f1d2b379e20057a72b6e4e7908c5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a5290ec31e5394222c77355b126a352be85a00774a0597cbfcab990458ba9001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5290ec31e5394222c77355b126a352be85a00774a0597cbfcab990458ba9001->enter($__internal_a5290ec31e5394222c77355b126a352be85a00774a0597cbfcab990458ba9001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a5290ec31e5394222c77355b126a352be85a00774a0597cbfcab990458ba9001->leave($__internal_a5290ec31e5394222c77355b126a352be85a00774a0597cbfcab990458ba9001_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
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
", "@SonataAdmin/CRUD/edit_integer.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_integer.html.twig");
    }
}
