<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_c5ba093963e3fc7e41a7617bfb91b35692ba1ff545540748bc8ee57e2272c7c1 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_165e3ccf5649bd9a59c57f5ca8f3262c3dd0c51a645dfc33b02a824802fcf6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165e3ccf5649bd9a59c57f5ca8f3262c3dd0c51a645dfc33b02a824802fcf6e4->enter($__internal_165e3ccf5649bd9a59c57f5ca8f3262c3dd0c51a645dfc33b02a824802fcf6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_165e3ccf5649bd9a59c57f5ca8f3262c3dd0c51a645dfc33b02a824802fcf6e4->leave($__internal_165e3ccf5649bd9a59c57f5ca8f3262c3dd0c51a645dfc33b02a824802fcf6e4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f62fda4f17f01d3b832eee70e2b112bd8e008e3f14449219d8689ee4b14719b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62fda4f17f01d3b832eee70e2b112bd8e008e3f14449219d8689ee4b14719b7->enter($__internal_f62fda4f17f01d3b832eee70e2b112bd8e008e3f14449219d8689ee4b14719b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_f62fda4f17f01d3b832eee70e2b112bd8e008e3f14449219d8689ee4b14719b7->leave($__internal_f62fda4f17f01d3b832eee70e2b112bd8e008e3f14449219d8689ee4b14719b7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
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
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "@SonataAdmin/CRUD/list__batch.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list__batch.html.twig");
    }
}
