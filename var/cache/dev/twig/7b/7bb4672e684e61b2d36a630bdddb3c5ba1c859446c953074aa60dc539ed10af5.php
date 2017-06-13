<?php

/* SonataAdminBundle:CRUD:base_acl.html.twig */
class __TwigTemplate_1f71326519a8be28c31765c6964f673262914f77de2910c1b0ab69b882545d70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea89297ce8de39c2fb2da51207847afb88162d3ced00afc1a7bbc1f1f4599efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea89297ce8de39c2fb2da51207847afb88162d3ced00afc1a7bbc1f1f4599efe->enter($__internal_ea89297ce8de39c2fb2da51207847afb88162d3ced00afc1a7bbc1f1f4599efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea89297ce8de39c2fb2da51207847afb88162d3ced00afc1a7bbc1f1f4599efe->leave($__internal_ea89297ce8de39c2fb2da51207847afb88162d3ced00afc1a7bbc1f1f4599efe_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_90765f4827ab3424ae50e71bd57a4cb06a0ede172917232871c8c8d7c403a3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90765f4827ab3424ae50e71bd57a4cb06a0ede172917232871c8c8d7c403a3af->enter($__internal_90765f4827ab3424ae50e71bd57a4cb06a0ede172917232871c8c8d7c403a3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_acl.html.twig", 15)->display($context);
        
        $__internal_90765f4827ab3424ae50e71bd57a4cb06a0ede172917232871c8c8d7c403a3af->leave($__internal_90765f4827ab3424ae50e71bd57a4cb06a0ede172917232871c8c8d7c403a3af_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_4aed62d5f207887124abe48a22b083c795ef08679d8189ce18cd467eebdd02d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aed62d5f207887124abe48a22b083c795ef08679d8189ce18cd467eebdd02d5->enter($__internal_4aed62d5f207887124abe48a22b083c795ef08679d8189ce18cd467eebdd02d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_4aed62d5f207887124abe48a22b083c795ef08679d8189ce18cd467eebdd02d5->leave($__internal_4aed62d5f207887124abe48a22b083c795ef08679d8189ce18cd467eebdd02d5_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_66226b053003e3a5f4a945925272d40529deca892f3a1fb21eb4cafa75693957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66226b053003e3a5f4a945925272d40529deca892f3a1fb21eb4cafa75693957->enter($__internal_66226b053003e3a5f4a945925272d40529deca892f3a1fb21eb4cafa75693957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclRolesForm"] ?? $this->getContext($context, "aclRolesForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_role", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_66226b053003e3a5f4a945925272d40529deca892f3a1fb21eb4cafa75693957->leave($__internal_66226b053003e3a5f4a945925272d40529deca892f3a1fb21eb4cafa75693957_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_9535ef78f9e78dda68f9704b558bef15c79a31020ee83e764830a9ec4c49563d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9535ef78f9e78dda68f9704b558bef15c79a31020ee83e764830a9ec4c49563d->enter($__internal_9535ef78f9e78dda68f9704b558bef15c79a31020ee83e764830a9ec4c49563d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclUsersForm"] ?? $this->getContext($context, "aclUsersForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_username", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_9535ef78f9e78dda68f9704b558bef15c79a31020ee83e764830a9ec4c49563d->leave($__internal_9535ef78f9e78dda68f9704b558bef15c79a31020ee83e764830a9ec4c49563d_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 25,  85 => 24,  75 => 22,  69 => 21,  61 => 24,  58 => 21,  52 => 20,  45 => 15,  39 => 14,  32 => 12,  30 => 18,  21 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_acl.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
