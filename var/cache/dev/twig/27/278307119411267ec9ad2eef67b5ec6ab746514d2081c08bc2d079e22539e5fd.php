<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_fb475cd2961cbf4249d7bc30c78dbb8188b60719c578c1fbd12e7f002fc9416c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a37749aa66583a1faef1e9df5dca73afad9bf46ccfef82afab4a83dd63fc10c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a37749aa66583a1faef1e9df5dca73afad9bf46ccfef82afab4a83dd63fc10c->enter($__internal_9a37749aa66583a1faef1e9df5dca73afad9bf46ccfef82afab4a83dd63fc10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a37749aa66583a1faef1e9df5dca73afad9bf46ccfef82afab4a83dd63fc10c->leave($__internal_9a37749aa66583a1faef1e9df5dca73afad9bf46ccfef82afab4a83dd63fc10c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_471089af6ee54af1400a5c32a05783d9aad4cc529b5a8ab6b958805b360dffa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_471089af6ee54af1400a5c32a05783d9aad4cc529b5a8ab6b958805b360dffa7->enter($__internal_471089af6ee54af1400a5c32a05783d9aad4cc529b5a8ab6b958805b360dffa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_471089af6ee54af1400a5c32a05783d9aad4cc529b5a8ab6b958805b360dffa7->leave($__internal_471089af6ee54af1400a5c32a05783d9aad4cc529b5a8ab6b958805b360dffa7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  40 => 15,  34 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/show_currency.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_currency.html.twig");
    }
}
