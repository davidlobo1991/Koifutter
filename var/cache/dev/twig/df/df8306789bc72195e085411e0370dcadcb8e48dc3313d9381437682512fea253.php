<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_69aea877a494d02db4fcb3e064387b082fbe50f193f267aaddac3f0bea01790d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c193ddbb9e921871865b67e22e012058ab16ed696d663ac0e5e159a9559773fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c193ddbb9e921871865b67e22e012058ab16ed696d663ac0e5e159a9559773fe->enter($__internal_c193ddbb9e921871865b67e22e012058ab16ed696d663ac0e5e159a9559773fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_c193ddbb9e921871865b67e22e012058ab16ed696d663ac0e5e159a9559773fe->leave($__internal_c193ddbb9e921871865b67e22e012058ab16ed696d663ac0e5e159a9559773fe_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9fc1764ad26ba708b4430bd3a76fb51f819957578f1d8e949f623ad12bc5f7a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc1764ad26ba708b4430bd3a76fb51f819957578f1d8e949f623ad12bc5f7a3->enter($__internal_9fc1764ad26ba708b4430bd3a76fb51f819957578f1d8e949f623ad12bc5f7a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_9fc1764ad26ba708b4430bd3a76fb51f819957578f1d8e949f623ad12bc5f7a3->leave($__internal_9fc1764ad26ba708b4430bd3a76fb51f819957578f1d8e949f623ad12bc5f7a3_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_72a8dafabfc856fe5d574840bbf4786f425c9af502f8721308aa638ef3b40a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72a8dafabfc856fe5d574840bbf4786f425c9af502f8721308aa638ef3b40a08->enter($__internal_72a8dafabfc856fe5d574840bbf4786f425c9af502f8721308aa638ef3b40a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_72a8dafabfc856fe5d574840bbf4786f425c9af502f8721308aa638ef3b40a08->leave($__internal_72a8dafabfc856fe5d574840bbf4786f425c9af502f8721308aa638ef3b40a08_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_6dd3f4d45fe5f72d43b3eaf187e111a627a841ad5116c25d67d5753ba3a77f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd3f4d45fe5f72d43b3eaf187e111a627a841ad5116c25d67d5753ba3a77f56->enter($__internal_6dd3f4d45fe5f72d43b3eaf187e111a627a841ad5116c25d67d5753ba3a77f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_6dd3f4d45fe5f72d43b3eaf187e111a627a841ad5116c25d67d5753ba3a77f56->leave($__internal_6dd3f4d45fe5f72d43b3eaf187e111a627a841ad5116c25d67d5753ba3a77f56_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 25,  90 => 21,  84 => 19,  78 => 17,  75 => 16,  69 => 15,  57 => 14,  46 => 26,  44 => 25,  40 => 23,  37 => 15,  35 => 14,  29 => 13,  25 => 11,);
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

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "@SonataAdmin/CRUD/edit_boolean.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_boolean.html.twig");
    }
}
