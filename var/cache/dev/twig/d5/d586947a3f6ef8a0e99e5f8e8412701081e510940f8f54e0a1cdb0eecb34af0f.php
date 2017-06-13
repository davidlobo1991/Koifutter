<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_fc3326f2f770e3ee4041563feffa4fce1f8937aa4866572b0875ef9a056300f0 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5998e8a286bef97a42500a5f12346b0c32c3aa48e0acb600472dda7626023108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5998e8a286bef97a42500a5f12346b0c32c3aa48e0acb600472dda7626023108->enter($__internal_5998e8a286bef97a42500a5f12346b0c32c3aa48e0acb600472dda7626023108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5998e8a286bef97a42500a5f12346b0c32c3aa48e0acb600472dda7626023108->leave($__internal_5998e8a286bef97a42500a5f12346b0c32c3aa48e0acb600472dda7626023108_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_096893780f994091b7326280fea288ced4daad2815a3090f496f47d67e6cc952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_096893780f994091b7326280fea288ced4daad2815a3090f496f47d67e6cc952->enter($__internal_096893780f994091b7326280fea288ced4daad2815a3090f496f47d67e6cc952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_096893780f994091b7326280fea288ced4daad2815a3090f496f47d67e6cc952->leave($__internal_096893780f994091b7326280fea288ced4daad2815a3090f496f47d67e6cc952_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ settings.content|raw }}
{% endblock %}
", "@SonataBlock/Block/block_core_text.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_text.html.twig");
    }
}
