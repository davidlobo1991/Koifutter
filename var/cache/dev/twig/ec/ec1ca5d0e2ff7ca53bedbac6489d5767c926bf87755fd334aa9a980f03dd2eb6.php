<?php

/* SonataAdminBundle:CRUD:action.html.twig */
class __TwigTemplate_1d083be9fc487a733eaacaabf28e551bb9f8809126beb9da35b6dfdd9be6d19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45047e93aa6e298a27b8196b961d075181dcd953ed34596129a635254d86e242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45047e93aa6e298a27b8196b961d075181dcd953ed34596129a635254d86e242->enter($__internal_45047e93aa6e298a27b8196b961d075181dcd953ed34596129a635254d86e242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45047e93aa6e298a27b8196b961d075181dcd953ed34596129a635254d86e242->leave($__internal_45047e93aa6e298a27b8196b961d075181dcd953ed34596129a635254d86e242_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bc7ddc24772de0da92ffc3dea6d98ff8b8dc73ed98d27605b113dbc056312964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7ddc24772de0da92ffc3dea6d98ff8b8dc73ed98d27605b113dbc056312964->enter($__internal_bc7ddc24772de0da92ffc3dea6d98ff8b8dc73ed98d27605b113dbc056312964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:action.html.twig", 15)->display($context);
        
        $__internal_bc7ddc24772de0da92ffc3dea6d98ff8b8dc73ed98d27605b113dbc056312964->leave($__internal_bc7ddc24772de0da92ffc3dea6d98ff8b8dc73ed98d27605b113dbc056312964_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_0468ac43d4454b864e93d318ded245e605f2c94d785e614d0295010b711027b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0468ac43d4454b864e93d318ded245e605f2c94d785e614d0295010b711027b6->enter($__internal_0468ac43d4454b864e93d318ded245e605f2c94d785e614d0295010b711027b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_0468ac43d4454b864e93d318ded245e605f2c94d785e614d0295010b711027b6->leave($__internal_0468ac43d4454b864e93d318ded245e605f2c94d785e614d0295010b711027b6_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_2a696d60bd6521532b52404ea8efa623a2459bbc23550297a3b1e2f775a1395b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a696d60bd6521532b52404ea8efa623a2459bbc23550297a3b1e2f775a1395b->enter($__internal_2a696d60bd6521532b52404ea8efa623a2459bbc23550297a3b1e2f775a1395b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_2a696d60bd6521532b52404ea8efa623a2459bbc23550297a3b1e2f775a1395b->leave($__internal_2a696d60bd6521532b52404ea8efa623a2459bbc23550297a3b1e2f775a1395b_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 25,  68 => 24,  57 => 20,  54 => 19,  48 => 18,  41 => 15,  35 => 14,  20 => 12,);
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

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "SonataAdminBundle:CRUD:action.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
