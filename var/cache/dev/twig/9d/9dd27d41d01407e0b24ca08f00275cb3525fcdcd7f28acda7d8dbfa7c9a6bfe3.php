<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_73e35d232b07cb61c1fe66255a707817e58683322bb79dccdd8068f783d5f0f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
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
        $__internal_4b77afe45a54c68885866ad825dfdfc814f5b43723a78ea83a7e94e3eddc40b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b77afe45a54c68885866ad825dfdfc814f5b43723a78ea83a7e94e3eddc40b6->enter($__internal_4b77afe45a54c68885866ad825dfdfc814f5b43723a78ea83a7e94e3eddc40b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b77afe45a54c68885866ad825dfdfc814f5b43723a78ea83a7e94e3eddc40b6->leave($__internal_4b77afe45a54c68885866ad825dfdfc814f5b43723a78ea83a7e94e3eddc40b6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1d62757b6dd72e749f49fd7103910c353ea32c96b52d9d8edf5e8b54664ca30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d62757b6dd72e749f49fd7103910c353ea32c96b52d9d8edf5e8b54664ca30c->enter($__internal_1d62757b6dd72e749f49fd7103910c353ea32c96b52d9d8edf5e8b54664ca30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_1d62757b6dd72e749f49fd7103910c353ea32c96b52d9d8edf5e8b54664ca30c->leave($__internal_1d62757b6dd72e749f49fd7103910c353ea32c96b52d9d8edf5e8b54664ca30c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  42 => 16,  40 => 15,  34 => 14,  11 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/show_time.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\show_time.html.twig");
    }
}
