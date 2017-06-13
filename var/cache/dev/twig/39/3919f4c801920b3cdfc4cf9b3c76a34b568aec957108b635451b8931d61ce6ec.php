<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_301850372156e121ba4bbceff624de98b3cb0f76960bb5d6e0839c85b37083af extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7725cf141a5e293397dee46b4c733b9c0ff7b9481a73899cfdb560668ce57ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7725cf141a5e293397dee46b4c733b9c0ff7b9481a73899cfdb560668ce57ad->enter($__internal_a7725cf141a5e293397dee46b4c733b9c0ff7b9481a73899cfdb560668ce57ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7725cf141a5e293397dee46b4c733b9c0ff7b9481a73899cfdb560668ce57ad->leave($__internal_a7725cf141a5e293397dee46b4c733b9c0ff7b9481a73899cfdb560668ce57ad_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bb3b43ca6525dca361e3d97b3372e0fb5e6db7e3020abd57227ed7b54437a3fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3b43ca6525dca361e3d97b3372e0fb5e6db7e3020abd57227ed7b54437a3fb->enter($__internal_bb3b43ca6525dca361e3d97b3372e0fb5e6db7e3020abd57227ed7b54437a3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_bb3b43ca6525dca361e3d97b3372e0fb5e6db7e3020abd57227ed7b54437a3fb->leave($__internal_bb3b43ca6525dca361e3d97b3372e0fb5e6db7e3020abd57227ed7b54437a3fb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
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
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "@SonataAdmin/CRUD/list_percent.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_percent.html.twig");
    }
}
