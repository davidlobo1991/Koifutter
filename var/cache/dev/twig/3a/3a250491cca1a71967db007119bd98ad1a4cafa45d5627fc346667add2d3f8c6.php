<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_eadf82d9fc345ecf0cc8d4069145d1f6322698090928d0494224505402fe006d extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35af12a1718712a9b4c94b0f32eb0d1a7adc7710b098dcfa1854f4a309b0b96e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35af12a1718712a9b4c94b0f32eb0d1a7adc7710b098dcfa1854f4a309b0b96e->enter($__internal_35af12a1718712a9b4c94b0f32eb0d1a7adc7710b098dcfa1854f4a309b0b96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35af12a1718712a9b4c94b0f32eb0d1a7adc7710b098dcfa1854f4a309b0b96e->leave($__internal_35af12a1718712a9b4c94b0f32eb0d1a7adc7710b098dcfa1854f4a309b0b96e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_54bcb8fb73af693f2632e5ffdf3d0ce5172590937a77bc0f604681eb854c67b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54bcb8fb73af693f2632e5ffdf3d0ce5172590937a77bc0f604681eb854c67b2->enter($__internal_54bcb8fb73af693f2632e5ffdf3d0ce5172590937a77bc0f604681eb854c67b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_54bcb8fb73af693f2632e5ffdf3d0ce5172590937a77bc0f604681eb854c67b2->leave($__internal_54bcb8fb73af693f2632e5ffdf3d0ce5172590937a77bc0f604681eb854c67b2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
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
", "@SonataAdmin/CRUD/edit_file.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_file.html.twig");
    }
}
