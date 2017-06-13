<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_c7e924a104de505e48ea46688251e53a16733c93cf72c4b279780254751a2146 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b109773f678edf3ecd15ff2df7573f7a1c496f0878679dde4969b21f7b222145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b109773f678edf3ecd15ff2df7573f7a1c496f0878679dde4969b21f7b222145->enter($__internal_b109773f678edf3ecd15ff2df7573f7a1c496f0878679dde4969b21f7b222145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b109773f678edf3ecd15ff2df7573f7a1c496f0878679dde4969b21f7b222145->leave($__internal_b109773f678edf3ecd15ff2df7573f7a1c496f0878679dde4969b21f7b222145_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_233b69acbbde64bbb4c66822fb373b3cd30654f713628d275e3ed77bba7fc3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_233b69acbbde64bbb4c66822fb373b3cd30654f713628d275e3ed77bba7fc3c4->enter($__internal_233b69acbbde64bbb4c66822fb373b3cd30654f713628d275e3ed77bba7fc3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_233b69acbbde64bbb4c66822fb373b3cd30654f713628d275e3ed77bba7fc3c4->leave($__internal_233b69acbbde64bbb4c66822fb373b3cd30654f713628d275e3ed77bba7fc3c4_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_965c55a2518bf2741fd05c6f7752ab254166dfab5be9b99624e7171025c90d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965c55a2518bf2741fd05c6f7752ab254166dfab5be9b99624e7171025c90d9a->enter($__internal_965c55a2518bf2741fd05c6f7752ab254166dfab5be9b99624e7171025c90d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_965c55a2518bf2741fd05c6f7752ab254166dfab5be9b99624e7171025c90d9a->leave($__internal_965c55a2518bf2741fd05c6f7752ab254166dfab5be9b99624e7171025c90d9a_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_917299f0af2df3fc0f9341a52c27a17c9d80c3fda269cadfd43cb88e58dce83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_917299f0af2df3fc0f9341a52c27a17c9d80c3fda269cadfd43cb88e58dce83a->enter($__internal_917299f0af2df3fc0f9341a52c27a17c9d80c3fda269cadfd43cb88e58dce83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_917299f0af2df3fc0f9341a52c27a17c9d80c3fda269cadfd43cb88e58dce83a->leave($__internal_917299f0af2df3fc0f9341a52c27a17c9d80c3fda269cadfd43cb88e58dce83a_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_ee78907cd1f0c22f965ffcd4b641d45bb8d1ebeeaa63135f21aa92f21de17056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee78907cd1f0c22f965ffcd4b641d45bb8d1ebeeaa63135f21aa92f21de17056->enter($__internal_ee78907cd1f0c22f965ffcd4b641d45bb8d1ebeeaa63135f21aa92f21de17056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_ee78907cd1f0c22f965ffcd4b641d45bb8d1ebeeaa63135f21aa92f21de17056->leave($__internal_ee78907cd1f0c22f965ffcd4b641d45bb8d1ebeeaa63135f21aa92f21de17056_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21377cb26e43790e64e22da9f3159b686cff6d2be13a7f210112621d730486c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21377cb26e43790e64e22da9f3159b686cff6d2be13a7f210112621d730486c6->enter($__internal_21377cb26e43790e64e22da9f3159b686cff6d2be13a7f210112621d730486c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_21377cb26e43790e64e22da9f3159b686cff6d2be13a7f210112621d730486c6->leave($__internal_21377cb26e43790e64e22da9f3159b686cff6d2be13a7f210112621d730486c6_prof);

    }

    // line 30
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_3b1492d92fe3f2bd3af3a024702197cd6cdb61f37994d613514b7014839d5d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1492d92fe3f2bd3af3a024702197cd6cdb61f37994d613514b7014839d5d9b->enter($__internal_3b1492d92fe3f2bd3af3a024702197cd6cdb61f37994d613514b7014839d5d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 31
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_3b1492d92fe3f2bd3af3a024702197cd6cdb61f37994d613514b7014839d5d9b->leave($__internal_3b1492d92fe3f2bd3af3a024702197cd6cdb61f37994d613514b7014839d5d9b_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_43904c86187700ba077cd2860667dd4e6a34570b0a9fe2d3ab9a0fc4460f0dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43904c86187700ba077cd2860667dd4e6a34570b0a9fe2d3ab9a0fc4460f0dc9->enter($__internal_43904c86187700ba077cd2860667dd4e6a34570b0a9fe2d3ab9a0fc4460f0dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 32
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_43904c86187700ba077cd2860667dd4e6a34570b0a9fe2d3ab9a0fc4460f0dc9->leave($__internal_43904c86187700ba077cd2860667dd4e6a34570b0a9fe2d3ab9a0fc4460f0dc9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
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
", "@SonataAdmin/empty_layout.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\empty_layout.html.twig");
    }
}
