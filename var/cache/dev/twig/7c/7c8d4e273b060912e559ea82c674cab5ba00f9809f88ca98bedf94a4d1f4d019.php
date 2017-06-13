<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_43ac4622c60a7f821005c5a10cb4b2133ac8ae05527a2c693a1e771af2e6f857 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80a9c4b4a8104a137725d4c1b94200dfe3a9452b8357064b5cb9ce7a0f721e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a9c4b4a8104a137725d4c1b94200dfe3a9452b8357064b5cb9ce7a0f721e49->enter($__internal_80a9c4b4a8104a137725d4c1b94200dfe3a9452b8357064b5cb9ce7a0f721e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80a9c4b4a8104a137725d4c1b94200dfe3a9452b8357064b5cb9ce7a0f721e49->leave($__internal_80a9c4b4a8104a137725d4c1b94200dfe3a9452b8357064b5cb9ce7a0f721e49_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ad3320321ef40d5cf9799633876b93fcdd1a86f65984cda6aab126c88fa24c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3320321ef40d5cf9799633876b93fcdd1a86f65984cda6aab126c88fa24c5c->enter($__internal_ad3320321ef40d5cf9799633876b93fcdd1a86f65984cda6aab126c88fa24c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_ad3320321ef40d5cf9799633876b93fcdd1a86f65984cda6aab126c88fa24c5c->leave($__internal_ad3320321ef40d5cf9799633876b93fcdd1a86f65984cda6aab126c88fa24c5c_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_1f380b6906f850c2482083ed7a50cadbbb6c9bd7e1ddbf4f28edf52e12d80509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f380b6906f850c2482083ed7a50cadbbb6c9bd7e1ddbf4f28edf52e12d80509->enter($__internal_1f380b6906f850c2482083ed7a50cadbbb6c9bd7e1ddbf4f28edf52e12d80509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_1f380b6906f850c2482083ed7a50cadbbb6c9bd7e1ddbf4f28edf52e12d80509->leave($__internal_1f380b6906f850c2482083ed7a50cadbbb6c9bd7e1ddbf4f28edf52e12d80509_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_a9f5f82bfc5bcbedc4e3a5f916c64b0fb6518ad7d691ae17aa794d907ebd30a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f5f82bfc5bcbedc4e3a5f916c64b0fb6518ad7d691ae17aa794d907ebd30a2->enter($__internal_a9f5f82bfc5bcbedc4e3a5f916c64b0fb6518ad7d691ae17aa794d907ebd30a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclRolesForm"] ?? $this->getContext($context, "aclRolesForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_role", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_a9f5f82bfc5bcbedc4e3a5f916c64b0fb6518ad7d691ae17aa794d907ebd30a2->leave($__internal_a9f5f82bfc5bcbedc4e3a5f916c64b0fb6518ad7d691ae17aa794d907ebd30a2_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_5d78657a15366a9d1d61b125342e159992308c165b389743562c8c78a9231608 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d78657a15366a9d1d61b125342e159992308c165b389743562c8c78a9231608->enter($__internal_5d78657a15366a9d1d61b125342e159992308c165b389743562c8c78a9231608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclUsersForm"] ?? $this->getContext($context, "aclUsersForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_username", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_5d78657a15366a9d1d61b125342e159992308c165b389743562c8c78a9231608->leave($__internal_5d78657a15366a9d1d61b125342e159992308c165b389743562c8c78a9231608_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
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
", "@SonataAdmin/CRUD/base_acl.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\CRUD\\base_acl.html.twig");
    }
}
