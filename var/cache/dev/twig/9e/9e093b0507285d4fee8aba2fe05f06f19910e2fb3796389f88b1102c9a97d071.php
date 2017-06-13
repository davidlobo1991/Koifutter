<?php

/* SonataAdminBundle:CRUD:edit_text.html.twig */
class __TwigTemplate_0545a78db1d582ea221b39198603c24ff08bd2e628214c08ce46ec8b3190dc61 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d5edd693dca911c3789597bdac0691ed4090a7607c2d33ff6e9dcbbc45b166f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5edd693dca911c3789597bdac0691ed4090a7607c2d33ff6e9dcbbc45b166f->enter($__internal_0d5edd693dca911c3789597bdac0691ed4090a7607c2d33ff6e9dcbbc45b166f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d5edd693dca911c3789597bdac0691ed4090a7607c2d33ff6e9dcbbc45b166f->leave($__internal_0d5edd693dca911c3789597bdac0691ed4090a7607c2d33ff6e9dcbbc45b166f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f89c3a9d6b717c9bbd94ecfdcb81b6562c68538bd6c12dbdb885738c9c1c5071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89c3a9d6b717c9bbd94ecfdcb81b6562c68538bd6c12dbdb885738c9c1c5071->enter($__internal_f89c3a9d6b717c9bbd94ecfdcb81b6562c68538bd6c12dbdb885738c9c1c5071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_f89c3a9d6b717c9bbd94ecfdcb81b6562c68538bd6c12dbdb885738c9c1c5071->leave($__internal_f89c3a9d6b717c9bbd94ecfdcb81b6562c68538bd6c12dbdb885738c9c1c5071_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_text.html.twig";
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
", "SonataAdminBundle:CRUD:edit_text.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_text.html.twig");
    }
}
