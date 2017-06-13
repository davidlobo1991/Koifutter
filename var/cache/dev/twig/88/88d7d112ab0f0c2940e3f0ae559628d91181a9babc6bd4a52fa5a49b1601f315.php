<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_a0220ea4a98c8acc44f422118854819dc325ffa2a36138e1f109c55f3165231c extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_091d94e3b54b84d63be751ecda2bb3f352ad2bc2cb82d9481d14cbc0a345d264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091d94e3b54b84d63be751ecda2bb3f352ad2bc2cb82d9481d14cbc0a345d264->enter($__internal_091d94e3b54b84d63be751ecda2bb3f352ad2bc2cb82d9481d14cbc0a345d264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_091d94e3b54b84d63be751ecda2bb3f352ad2bc2cb82d9481d14cbc0a345d264->leave($__internal_091d94e3b54b84d63be751ecda2bb3f352ad2bc2cb82d9481d14cbc0a345d264_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8ed61e9d9374e78c0f35fc902d0f90d5053e6d94cda0f37e01b044a8aefed59e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed61e9d9374e78c0f35fc902d0f90d5053e6d94cda0f37e01b044a8aefed59e->enter($__internal_8ed61e9d9374e78c0f35fc902d0f90d5053e6d94cda0f37e01b044a8aefed59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_8ed61e9d9374e78c0f35fc902d0f90d5053e6d94cda0f37e01b044a8aefed59e->leave($__internal_8ed61e9d9374e78c0f35fc902d0f90d5053e6d94cda0f37e01b044a8aefed59e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
", "@SonataAdmin/CRUD/edit_string.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_string.html.twig");
    }
}
