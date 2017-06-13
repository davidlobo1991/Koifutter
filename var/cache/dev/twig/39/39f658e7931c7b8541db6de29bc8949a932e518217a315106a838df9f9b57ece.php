<?php

/* @SonataAdmin/CRUD/edit_text.html.twig */
class __TwigTemplate_fd790f5b89130ec561f906d9dbed10ab4237f4c40455593e38b7584d9a477592 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec934e638d2bbcfe3718701c5221503ad2a9a850647373061bb8a9630889d2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec934e638d2bbcfe3718701c5221503ad2a9a850647373061bb8a9630889d2c4->enter($__internal_ec934e638d2bbcfe3718701c5221503ad2a9a850647373061bb8a9630889d2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec934e638d2bbcfe3718701c5221503ad2a9a850647373061bb8a9630889d2c4->leave($__internal_ec934e638d2bbcfe3718701c5221503ad2a9a850647373061bb8a9630889d2c4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_073ac149be810a0a2e3602d195a80073894637e9607c7a232e737ff6c0e400ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073ac149be810a0a2e3602d195a80073894637e9607c7a232e737ff6c0e400ed->enter($__internal_073ac149be810a0a2e3602d195a80073894637e9607c7a232e737ff6c0e400ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_073ac149be810a0a2e3602d195a80073894637e9607c7a232e737ff6c0e400ed->leave($__internal_073ac149be810a0a2e3602d195a80073894637e9607c7a232e737ff6c0e400ed_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_text.html.twig";
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
", "@SonataAdmin/CRUD/edit_text.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\edit_text.html.twig");
    }
}
