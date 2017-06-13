<?php

/* SonataAdminBundle:CRUD:edit_array.html.twig */
class __TwigTemplate_22436fc7aa96f553daf0f2c84ec47ec39957b19ea78d2933b81e37b4657cc9f6 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3ceeb72a18ab52aae79b3fcdd6cff2fe1200779f18210fbe151e039b7199708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ceeb72a18ab52aae79b3fcdd6cff2fe1200779f18210fbe151e039b7199708->enter($__internal_c3ceeb72a18ab52aae79b3fcdd6cff2fe1200779f18210fbe151e039b7199708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3ceeb72a18ab52aae79b3fcdd6cff2fe1200779f18210fbe151e039b7199708->leave($__internal_c3ceeb72a18ab52aae79b3fcdd6cff2fe1200779f18210fbe151e039b7199708_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d4c22cdf0403c8bc27b34bfeee0ce9564a75a7f00cb7843fe523afd55595e21e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c22cdf0403c8bc27b34bfeee0ce9564a75a7f00cb7843fe523afd55595e21e->enter($__internal_d4c22cdf0403c8bc27b34bfeee0ce9564a75a7f00cb7843fe523afd55595e21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_d4c22cdf0403c8bc27b34bfeee0ce9564a75a7f00cb7843fe523afd55595e21e->leave($__internal_d4c22cdf0403c8bc27b34bfeee0ce9564a75a7f00cb7843fe523afd55595e21e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_array.html.twig";
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

{% extends base_template %}

{% block field %}
    <span class=\"edit\">
        {{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}
    </span>
{% endblock %}
", "SonataAdminBundle:CRUD:edit_array.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_array.html.twig");
    }
}
