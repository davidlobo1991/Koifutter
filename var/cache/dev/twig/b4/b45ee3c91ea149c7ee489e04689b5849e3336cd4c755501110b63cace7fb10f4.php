<?php

/* SonataAdminBundle:CRUD:base_standard_edit_field.html.twig */
class __TwigTemplate_ae687332105e7fd4e3ad058db76ed641ab2e623d75282a594330dd360a7c1f0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'help' => array($this, 'block_help'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_018d761017fe0c60600b20fd5d293918ef40b18a9e735983459bad1a987a03cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018d761017fe0c60600b20fd5d293918ef40b18a9e735983459bad1a987a03cd->enter($__internal_018d761017fe0c60600b20fd5d293918ef40b18a9e735983459bad1a987a03cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig"));

        // line 11
        echo "
<div class=\"form-group";
        // line 12
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "var", array()), "errors", array())) > 0)) {
            echo " has-error";
        }
        echo "\" id=\"sonata-ba-field-container-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    ";
        // line 13
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "
    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-";
        // line 21
        echo twig_escape_filter($this->env, ($context["edit"] ?? $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["inline"] ?? $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">

        ";
        // line 23
        $this->displayBlock('field', $context, $blocks);
        // line 24
        echo "
        ";
        // line 25
        if ($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "help", array())) {
            // line 26
            echo "            <span class=\"help-block\">";
            $this->displayBlock('help', $context, $blocks);
            echo "</span>
        ";
        }
        // line 28
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 30
        $this->displayBlock('errors', $context, $blocks);
        // line 31
        echo "        </div>

    </div>
</div>
";
        
        $__internal_018d761017fe0c60600b20fd5d293918ef40b18a9e735983459bad1a987a03cd->leave($__internal_018d761017fe0c60600b20fd5d293918ef40b18a9e735983459bad1a987a03cd_prof);

    }

    // line 13
    public function block_label($context, array $blocks = array())
    {
        $__internal_8103fd3c17edc35b08dc5bababedf2bc858221dd7dd5a949b0f5b0ce63f25f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8103fd3c17edc35b08dc5bababedf2bc858221dd7dd5a949b0f5b0ce63f25f75->enter($__internal_8103fd3c17edc35b08dc5bababedf2bc858221dd7dd5a949b0f5b0ce63f25f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 14
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 15
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label');
            echo "
        ";
        }
        // line 19
        echo "    ";
        
        $__internal_8103fd3c17edc35b08dc5bababedf2bc858221dd7dd5a949b0f5b0ce63f25f75->leave($__internal_8103fd3c17edc35b08dc5bababedf2bc858221dd7dd5a949b0f5b0ce63f25f75_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_050bd03d589ec8d43c8d5698e072d75a7d5ee43917eec1a30ce467a6403cb7b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050bd03d589ec8d43c8d5698e072d75a7d5ee43917eec1a30ce467a6403cb7b5->enter($__internal_050bd03d589ec8d43c8d5698e072d75a7d5ee43917eec1a30ce467a6403cb7b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_050bd03d589ec8d43c8d5698e072d75a7d5ee43917eec1a30ce467a6403cb7b5->leave($__internal_050bd03d589ec8d43c8d5698e072d75a7d5ee43917eec1a30ce467a6403cb7b5_prof);

    }

    // line 26
    public function block_help($context, array $blocks = array())
    {
        $__internal_5b9e80acd94ab10d2f150da929a4c463eed63b858140a2c3a4526387ee2cf42b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9e80acd94ab10d2f150da929a4c463eed63b858140a2c3a4526387ee2cf42b->enter($__internal_5b9e80acd94ab10d2f150da929a4c463eed63b858140a2c3a4526387ee2cf42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "help", array());
        
        $__internal_5b9e80acd94ab10d2f150da929a4c463eed63b858140a2c3a4526387ee2cf42b->leave($__internal_5b9e80acd94ab10d2f150da929a4c463eed63b858140a2c3a4526387ee2cf42b_prof);

    }

    // line 30
    public function block_errors($context, array $blocks = array())
    {
        $__internal_3959b2c539c5b058b52c837afa0fdd6c7cb7ae4e8e63d03276cef79e693886be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3959b2c539c5b058b52c837afa0fdd6c7cb7ae4e8e63d03276cef79e693886be->enter($__internal_3959b2c539c5b058b52c837afa0fdd6c7cb7ae4e8e63d03276cef79e693886be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_3959b2c539c5b058b52c837afa0fdd6c7cb7ae4e8e63d03276cef79e693886be->leave($__internal_3959b2c539c5b058b52c837afa0fdd6c7cb7ae4e8e63d03276cef79e693886be_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  123 => 26,  111 => 23,  104 => 19,  98 => 17,  92 => 15,  89 => 14,  83 => 13,  72 => 31,  70 => 30,  66 => 28,  60 => 26,  58 => 25,  55 => 24,  53 => 23,  42 => 21,  39 => 20,  37 => 13,  29 => 12,  26 => 11,);
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

<div class=\"form-group{% if field_element.var.errors|length > 0%} has-error{%endif%}\" id=\"sonata-ba-field-container-{{ field_element.vars.id }}\">
    {% block label %}
        {% if field_description.options.name is defined %}
            {{ form_label(field_element, field_description.options.name) }}
        {% else %}
            {{ form_label(field_element) }}
        {% endif %}
    {% endblock %}

    <div class=\"col-sm-10 col-md-5 sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">

        {% block field %}{{ form_widget(field_element) }}{% endblock %}

        {% if field_description.help %}
            <span class=\"help-block\">{% block help %}{{ field_description.help|raw }}{% endblock %}</span>
        {% endif %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "SonataAdminBundle:CRUD:base_standard_edit_field.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_standard_edit_field.html.twig");
    }
}
