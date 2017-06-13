<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_2d86803059ddbc1458c41911efae3abe5965c9fd40e80cebc39cafe95f64346f extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1192463732b0b4daac8627b75bd290099212d3bc645cb3bf761f5f249ac078aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1192463732b0b4daac8627b75bd290099212d3bc645cb3bf761f5f249ac078aa->enter($__internal_1192463732b0b4daac8627b75bd290099212d3bc645cb3bf761f5f249ac078aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1192463732b0b4daac8627b75bd290099212d3bc645cb3bf761f5f249ac078aa->leave($__internal_1192463732b0b4daac8627b75bd290099212d3bc645cb3bf761f5f249ac078aa_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5a47c7e7dbf4048f1a13dab7e25899cb8d1938625184aaf916955a8a3ffcb58d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a47c7e7dbf4048f1a13dab7e25899cb8d1938625184aaf916955a8a3ffcb58d->enter($__internal_5a47c7e7dbf4048f1a13dab7e25899cb8d1938625184aaf916955a8a3ffcb58d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_5a47c7e7dbf4048f1a13dab7e25899cb8d1938625184aaf916955a8a3ffcb58d->leave($__internal_5a47c7e7dbf4048f1a13dab7e25899cb8d1938625184aaf916955a8a3ffcb58d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
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
", "@SonataAdmin/CRUD/list_currency.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_currency.html.twig");
    }
}
