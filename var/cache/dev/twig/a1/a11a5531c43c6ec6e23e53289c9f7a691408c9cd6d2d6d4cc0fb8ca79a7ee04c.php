<?php

/* @SonataAdmin/CRUD/list_email.html.twig */
class __TwigTemplate_8c8363149217615d9dfeabf30d65bfc7ce6d071de150cbc794cd249c786f13cf extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6235bba92050c01e6ce8510e14a82999ebb2d4289ca19c348888cd374ac8a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6235bba92050c01e6ce8510e14a82999ebb2d4289ca19c348888cd374ac8a3a->enter($__internal_a6235bba92050c01e6ce8510e14a82999ebb2d4289ca19c348888cd374ac8a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6235bba92050c01e6ce8510e14a82999ebb2d4289ca19c348888cd374ac8a3a->leave($__internal_a6235bba92050c01e6ce8510e14a82999ebb2d4289ca19c348888cd374ac8a3a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_78e3f7a2e9e6fb51297cd363fa8b4cd32926c24263971f55bf9af36e09155d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e3f7a2e9e6fb51297cd363fa8b4cd32926c24263971f55bf9af36e09155d50->enter($__internal_78e3f7a2e9e6fb51297cd363fa8b4cd32926c24263971f55bf9af36e09155d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_78e3f7a2e9e6fb51297cd363fa8b4cd32926c24263971f55bf9af36e09155d50->leave($__internal_78e3f7a2e9e6fb51297cd363fa8b4cd32926c24263971f55bf9af36e09155d50_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 14,  18 => 12,);
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
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "@SonataAdmin/CRUD/list_email.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\list_email.html.twig");
    }
}
