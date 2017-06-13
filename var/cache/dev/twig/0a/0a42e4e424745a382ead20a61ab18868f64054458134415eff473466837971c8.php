<?php

/* SonataAdminBundle:CRUD:edit_file.html.twig */
class __TwigTemplate_ccc7baa2b248cbe36dd1b1c88c1f13746a1dcddaee5b286600e530eb9a132896 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1aa574620af5bcedeeb0b2ccad38ebd2c1c110651e4b380f343201db453d1585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aa574620af5bcedeeb0b2ccad38ebd2c1c110651e4b380f343201db453d1585->enter($__internal_1aa574620af5bcedeeb0b2ccad38ebd2c1c110651e4b380f343201db453d1585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1aa574620af5bcedeeb0b2ccad38ebd2c1c110651e4b380f343201db453d1585->leave($__internal_1aa574620af5bcedeeb0b2ccad38ebd2c1c110651e4b380f343201db453d1585_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_591cf12c8fa1d0f266308c3d2e87dff854e986cfd778eadb8c0dffc9546263cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_591cf12c8fa1d0f266308c3d2e87dff854e986cfd778eadb8c0dffc9546263cf->enter($__internal_591cf12c8fa1d0f266308c3d2e87dff854e986cfd778eadb8c0dffc9546263cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_591cf12c8fa1d0f266308c3d2e87dff854e986cfd778eadb8c0dffc9546263cf->leave($__internal_591cf12c8fa1d0f266308c3d2e87dff854e986cfd778eadb8c0dffc9546263cf_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_file.html.twig";
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
", "SonataAdminBundle:CRUD:edit_file.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
