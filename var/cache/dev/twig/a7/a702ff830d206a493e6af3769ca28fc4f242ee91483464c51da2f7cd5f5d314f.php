<?php

/* @SonataAdmin/CRUD/edit_array.html.twig */
class __TwigTemplate_365dea101c40282d511e49675be675531816222755b942c65c96e9fc72be7048 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fbc3c53d5e31ba99f393958121b0c70a0998dd0c2cdc770e576966f003c30944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc3c53d5e31ba99f393958121b0c70a0998dd0c2cdc770e576966f003c30944->enter($__internal_fbc3c53d5e31ba99f393958121b0c70a0998dd0c2cdc770e576966f003c30944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbc3c53d5e31ba99f393958121b0c70a0998dd0c2cdc770e576966f003c30944->leave($__internal_fbc3c53d5e31ba99f393958121b0c70a0998dd0c2cdc770e576966f003c30944_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0538922c721ffcd203bccd323c82a0845a936c9b5087b85132b12087c032ecb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0538922c721ffcd203bccd323c82a0845a936c9b5087b85132b12087c032ecb5->enter($__internal_0538922c721ffcd203bccd323c82a0845a936c9b5087b85132b12087c032ecb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <span class=\"edit\">
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        echo "
    </span>
";
        
        $__internal_0538922c721ffcd203bccd323c82a0845a936c9b5087b85132b12087c032ecb5->leave($__internal_0538922c721ffcd203bccd323c82a0845a936c9b5087b85132b12087c032ecb5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_array.html.twig";
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
", "@SonataAdmin/CRUD/edit_array.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_array.html.twig");
    }
}
