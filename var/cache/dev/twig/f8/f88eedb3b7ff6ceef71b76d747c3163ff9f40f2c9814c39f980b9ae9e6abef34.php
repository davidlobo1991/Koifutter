<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_93bddb5a95cd837b2562851cbdf605f7c2b28ed9080776f4e42cdb8b10013e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d726805272cad8427d624f504cb7f7f73aed0558cf246dd0e5bee7984704a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d726805272cad8427d624f504cb7f7f73aed0558cf246dd0e5bee7984704a81->enter($__internal_1d726805272cad8427d624f504cb7f7f73aed0558cf246dd0e5bee7984704a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d726805272cad8427d624f504cb7f7f73aed0558cf246dd0e5bee7984704a81->leave($__internal_1d726805272cad8427d624f504cb7f7f73aed0558cf246dd0e5bee7984704a81_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a76f9ea166105492a4c611896a68ee96b66813ab277acb4a5ac48bfdf4b2d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a76f9ea166105492a4c611896a68ee96b66813ab277acb4a5ac48bfdf4b2d36->enter($__internal_6a76f9ea166105492a4c611896a68ee96b66813ab277acb4a5ac48bfdf4b2d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_6a76f9ea166105492a4c611896a68ee96b66813ab277acb4a5ac48bfdf4b2d36->leave($__internal_6a76f9ea166105492a4c611896a68ee96b66813ab277acb4a5ac48bfdf4b2d36_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_851773443958719c90b07869755f4a03da36b1bf3d81509243351d0650f388da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_851773443958719c90b07869755f4a03da36b1bf3d81509243351d0650f388da->enter($__internal_851773443958719c90b07869755f4a03da36b1bf3d81509243351d0650f388da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_851773443958719c90b07869755f4a03da36b1bf3d81509243351d0650f388da->leave($__internal_851773443958719c90b07869755f4a03da36b1bf3d81509243351d0650f388da_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_06b5e11dc0acf2eba1d08579b640e5a96ebd9f2e5f757fb1d96278d5258bff67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b5e11dc0acf2eba1d08579b640e5a96ebd9f2e5f757fb1d96278d5258bff67->enter($__internal_06b5e11dc0acf2eba1d08579b640e5a96ebd9f2e5f757fb1d96278d5258bff67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_06b5e11dc0acf2eba1d08579b640e5a96ebd9f2e5f757fb1d96278d5258bff67->leave($__internal_06b5e11dc0acf2eba1d08579b640e5a96ebd9f2e5f757fb1d96278d5258bff67_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_7d68a789853fae2db11f068b005fa2eb9ab83c281c54215ebd09061e11aed2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d68a789853fae2db11f068b005fa2eb9ab83c281c54215ebd09061e11aed2de->enter($__internal_7d68a789853fae2db11f068b005fa2eb9ab83c281c54215ebd09061e11aed2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_7d68a789853fae2db11f068b005fa2eb9ab83c281c54215ebd09061e11aed2de->leave($__internal_7d68a789853fae2db11f068b005fa2eb9ab83c281c54215ebd09061e11aed2de_prof);

    }

    // line 34
    public function block_form($context, array $blocks = array())
    {
        $__internal_3e56f93da70dcc75dc034f9182ca95d4a9ba96dc5b8575b71b446daaa968fa9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e56f93da70dcc75dc034f9182ca95d4a9ba96dc5b8575b71b446daaa968fa9a->enter($__internal_3e56f93da70dcc75dc034f9182ca95d4a9ba96dc5b8575b71b446daaa968fa9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 35
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_3e56f93da70dcc75dc034f9182ca95d4a9ba96dc5b8575b71b446daaa968fa9a->leave($__internal_3e56f93da70dcc75dc034f9182ca95d4a9ba96dc5b8575b71b446daaa968fa9a_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 35,  122 => 34,  110 => 30,  103 => 27,  97 => 26,  87 => 23,  81 => 22,  70 => 18,  64 => 16,  61 => 15,  55 => 14,  40 => 12,  12 => 32,);
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

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
