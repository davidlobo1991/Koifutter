<?php

/* SonataAdminBundle::empty_layout.html.twig */
class __TwigTemplate_a11e59aa0d053da24e4f7855de4b90a201ededc2a9c8a2a64a590d9f8177f9fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "SonataAdminBundle::empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74c09537074abc2643b58c8c9e1a02b292e79f3f5e52581c4040b527c2780d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74c09537074abc2643b58c8c9e1a02b292e79f3f5e52581c4040b527c2780d6a->enter($__internal_74c09537074abc2643b58c8c9e1a02b292e79f3f5e52581c4040b527c2780d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle::empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74c09537074abc2643b58c8c9e1a02b292e79f3f5e52581c4040b527c2780d6a->leave($__internal_74c09537074abc2643b58c8c9e1a02b292e79f3f5e52581c4040b527c2780d6a_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_e37bc5fb747441db347c931c5be91f09293b1640a78fb228d3ed2bc9ad0390b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37bc5fb747441db347c931c5be91f09293b1640a78fb228d3ed2bc9ad0390b6->enter($__internal_e37bc5fb747441db347c931c5be91f09293b1640a78fb228d3ed2bc9ad0390b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_e37bc5fb747441db347c931c5be91f09293b1640a78fb228d3ed2bc9ad0390b6->leave($__internal_e37bc5fb747441db347c931c5be91f09293b1640a78fb228d3ed2bc9ad0390b6_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_6892b41d3b9aefaa50c01b5a568f7e87591172b56795d6514fd56eadd3974c41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6892b41d3b9aefaa50c01b5a568f7e87591172b56795d6514fd56eadd3974c41->enter($__internal_6892b41d3b9aefaa50c01b5a568f7e87591172b56795d6514fd56eadd3974c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_6892b41d3b9aefaa50c01b5a568f7e87591172b56795d6514fd56eadd3974c41->leave($__internal_6892b41d3b9aefaa50c01b5a568f7e87591172b56795d6514fd56eadd3974c41_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_0b4ff7198d4aee453c6f47d92324ac7d2e1c55f54144a674e55de090a18a662c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4ff7198d4aee453c6f47d92324ac7d2e1c55f54144a674e55de090a18a662c->enter($__internal_0b4ff7198d4aee453c6f47d92324ac7d2e1c55f54144a674e55de090a18a662c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_0b4ff7198d4aee453c6f47d92324ac7d2e1c55f54144a674e55de090a18a662c->leave($__internal_0b4ff7198d4aee453c6f47d92324ac7d2e1c55f54144a674e55de090a18a662c_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_0df988ea10d1178a07a3c1feece94d8af536b7a7ad1947c58654b749727a4f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df988ea10d1178a07a3c1feece94d8af536b7a7ad1947c58654b749727a4f58->enter($__internal_0df988ea10d1178a07a3c1feece94d8af536b7a7ad1947c58654b749727a4f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_0df988ea10d1178a07a3c1feece94d8af536b7a7ad1947c58654b749727a4f58->leave($__internal_0df988ea10d1178a07a3c1feece94d8af536b7a7ad1947c58654b749727a4f58_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd5b604a02b51b337c3b44e8cb8a6ff026fb6c2dda1f5fe1b1f99fd414080edb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5b604a02b51b337c3b44e8cb8a6ff026fb6c2dda1f5fe1b1f99fd414080edb->enter($__internal_fd5b604a02b51b337c3b44e8cb8a6ff026fb6c2dda1f5fe1b1f99fd414080edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
";
        
        $__internal_fd5b604a02b51b337c3b44e8cb8a6ff026fb6c2dda1f5fe1b1f99fd414080edb->leave($__internal_fd5b604a02b51b337c3b44e8cb8a6ff026fb6c2dda1f5fe1b1f99fd414080edb_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_3767de4e4d0f93b22a0036f28c0e7ea0c95e514fdca5e67c9c547a048a6d0834 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3767de4e4d0f93b22a0036f28c0e7ea0c95e514fdca5e67c9c547a048a6d0834->enter($__internal_3767de4e4d0f93b22a0036f28c0e7ea0c95e514fdca5e67c9c547a048a6d0834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_3767de4e4d0f93b22a0036f28c0e7ea0c95e514fdca5e67c9c547a048a6d0834->leave($__internal_3767de4e4d0f93b22a0036f28c0e7ea0c95e514fdca5e67c9c547a048a6d0834_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_19012722ec2f7de330c19c3536612c1017c6eccc7c0f58570766a286aa27a800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19012722ec2f7de330c19c3536612c1017c6eccc7c0f58570766a286aa27a800->enter($__internal_19012722ec2f7de330c19c3536612c1017c6eccc7c0f58570766a286aa27a800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_19012722ec2f7de330c19c3536612c1017c6eccc7c0f58570766a286aa27a800->leave($__internal_19012722ec2f7de330c19c3536612c1017c6eccc7c0f58570766a286aa27a800_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  112 => 31,  106 => 30,  89 => 20,  83 => 19,  72 => 17,  61 => 16,  50 => 15,  39 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>
{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "SonataAdminBundle::empty_layout.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
