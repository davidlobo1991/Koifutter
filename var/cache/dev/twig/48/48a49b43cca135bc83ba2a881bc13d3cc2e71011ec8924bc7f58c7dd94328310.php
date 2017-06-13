<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_b993d659eb7d9544d46d67c8417d3cf5d40e9ed9c8384251ca7eaf4cece353b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad44ca8c56daf96db46e8f3e021280f443f412246a0f8cf6e7e14ad497a67224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad44ca8c56daf96db46e8f3e021280f443f412246a0f8cf6e7e14ad497a67224->enter($__internal_ad44ca8c56daf96db46e8f3e021280f443f412246a0f8cf6e7e14ad497a67224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad44ca8c56daf96db46e8f3e021280f443f412246a0f8cf6e7e14ad497a67224->leave($__internal_ad44ca8c56daf96db46e8f3e021280f443f412246a0f8cf6e7e14ad497a67224_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_69cfb03a5c3895bcb8e1d2ac49e2733dab98f859b4b69c146aab14026079f2a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cfb03a5c3895bcb8e1d2ac49e2733dab98f859b4b69c146aab14026079f2a0->enter($__internal_69cfb03a5c3895bcb8e1d2ac49e2733dab98f859b4b69c146aab14026079f2a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_69cfb03a5c3895bcb8e1d2ac49e2733dab98f859b4b69c146aab14026079f2a0->leave($__internal_69cfb03a5c3895bcb8e1d2ac49e2733dab98f859b4b69c146aab14026079f2a0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 17,  42 => 16,  39 => 15,  33 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "@SonataBlock/Block/block_exception.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_exception.html.twig");
    }
}
