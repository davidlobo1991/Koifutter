<?php

/* SonataAdminBundle:CRUD:list_percent.html.twig */
class __TwigTemplate_26207bf45f268befcbf7a361c967d6de38d03163353fa729904112799cf14c3c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "SonataAdminBundle:CRUD:list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c3bf8da60206535597a4891aaadb588d1acd6daa9128f138b8ad62183d75959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c3bf8da60206535597a4891aaadb588d1acd6daa9128f138b8ad62183d75959->enter($__internal_6c3bf8da60206535597a4891aaadb588d1acd6daa9128f138b8ad62183d75959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c3bf8da60206535597a4891aaadb588d1acd6daa9128f138b8ad62183d75959->leave($__internal_6c3bf8da60206535597a4891aaadb588d1acd6daa9128f138b8ad62183d75959_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_57ffd8ce1e66721c27827a99127d3f18bd97b12817b0adc48d2225efe4f699ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ffd8ce1e66721c27827a99127d3f18bd97b12817b0adc48d2225efe4f699ee->enter($__internal_57ffd8ce1e66721c27827a99127d3f18bd97b12817b0adc48d2225efe4f699ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_57ffd8ce1e66721c27827a99127d3f18bd97b12817b0adc48d2225efe4f699ee->leave($__internal_57ffd8ce1e66721c27827a99127d3f18bd97b12817b0adc48d2225efe4f699ee_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_percent.html.twig";
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
", "SonataAdminBundle:CRUD:list_percent.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
