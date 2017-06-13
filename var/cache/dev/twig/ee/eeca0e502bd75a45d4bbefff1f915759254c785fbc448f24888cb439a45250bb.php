<?php

/* @SonataAdmin/CRUD/base_inline_edit_field.html.twig */
class __TwigTemplate_2e9d7bb5d105e5f18a024f2e6cf8ed0f2f1a0e6d852bb3ab981dead8d43437ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbd3ffc51dd82fd6ac248eba20a48beb73c4446b7aa93bb0559aeaed38fd19f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbd3ffc51dd82fd6ac248eba20a48beb73c4446b7aa93bb0559aeaed38fd19f3->enter($__internal_dbd3ffc51dd82fd6ac248eba20a48beb73c4446b7aa93bb0559aeaed38fd19f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, ($context["edit"] ?? $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["inline"] ?? $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_dbd3ffc51dd82fd6ac248eba20a48beb73c4446b7aa93bb0559aeaed38fd19f3->leave($__internal_dbd3ffc51dd82fd6ac248eba20a48beb73c4446b7aa93bb0559aeaed38fd19f3_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_61647d76f6550d7e6f1e644652f6e02f59828cdc9e5cf5a94aac35ffcf5d23bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61647d76f6550d7e6f1e644652f6e02f59828cdc9e5cf5a94aac35ffcf5d23bc->enter($__internal_61647d76f6550d7e6f1e644652f6e02f59828cdc9e5cf5a94aac35ffcf5d23bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ((($context["inline"] ?? $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_61647d76f6550d7e6f1e644652f6e02f59828cdc9e5cf5a94aac35ffcf5d23bc->leave($__internal_61647d76f6550d7e6f1e644652f6e02f59828cdc9e5cf5a94aac35ffcf5d23bc_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_afd3bf23d05b5c3043a8a6f68bfea6d085ef699f07d52fed08635dd5699a6108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd3bf23d05b5c3043a8a6f68bfea6d085ef699f07d52fed08635dd5699a6108->enter($__internal_afd3bf23d05b5c3043a8a6f68bfea6d085ef699f07d52fed08635dd5699a6108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_afd3bf23d05b5c3043a8a6f68bfea6d085ef699f07d52fed08635dd5699a6108->leave($__internal_afd3bf23d05b5c3043a8a6f68bfea6d085ef699f07d52fed08635dd5699a6108_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_ca9d1a29aee78c64ce5d61d42b75bbb1ef46567b3e65336167f53c988c96bb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9d1a29aee78c64ce5d61d42b75bbb1ef46567b3e65336167f53c988c96bb2e->enter($__internal_ca9d1a29aee78c64ce5d61d42b75bbb1ef46567b3e65336167f53c988c96bb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_ca9d1a29aee78c64ce5d61d42b75bbb1ef46567b3e65336167f53c988c96bb2e->leave($__internal_ca9d1a29aee78c64ce5d61d42b75bbb1ef46567b3e65336167f53c988c96bb2e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  98 => 25,  91 => 23,  87 => 21,  81 => 19,  75 => 17,  72 => 16,  69 => 15,  63 => 14,  54 => 29,  52 => 28,  48 => 26,  46 => 25,  43 => 24,  41 => 14,  28 => 12,  25 => 11,);
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

<div id=\"sonata-ba-field-container-{{ field_element.vars.id }}\" class=\"sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}\">

    {% block label %}
        {% if inline == 'natural' %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endif %}
    {% endblock %}

    {% block field %}{{ form_widget(field_element) }}{% endblock %}

    <div class=\"sonata-ba-field-error-messages\">
        {% block errors %}{{ form_errors(field_element) }}{% endblock %}
    </div>
</div>
", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_inline_edit_field.html.twig");
    }
}
