<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_052f8731f3b782c877e9f207a6bd9739a200f6dda8f7c5b907cf1aeaafe626d1 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c6e5ff852418aaa6afab9ee7603e56ba3a34912e6b8fd51fedb032cfd743fe1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6e5ff852418aaa6afab9ee7603e56ba3a34912e6b8fd51fedb032cfd743fe1->enter($__internal_0c6e5ff852418aaa6afab9ee7603e56ba3a34912e6b8fd51fedb032cfd743fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c6e5ff852418aaa6afab9ee7603e56ba3a34912e6b8fd51fedb032cfd743fe1->leave($__internal_0c6e5ff852418aaa6afab9ee7603e56ba3a34912e6b8fd51fedb032cfd743fe1_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_139610ecd629ef0a97ca979131e5fb58ea7dd23d4a270ce94ba19078f18ca3aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_139610ecd629ef0a97ca979131e5fb58ea7dd23d4a270ce94ba19078f18ca3aa->enter($__internal_139610ecd629ef0a97ca979131e5fb58ea7dd23d4a270ce94ba19078f18ca3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
";
        
        $__internal_139610ecd629ef0a97ca979131e5fb58ea7dd23d4a270ce94ba19078f18ca3aa->leave($__internal_139610ecd629ef0a97ca979131e5fb58ea7dd23d4a270ce94ba19078f18ca3aa_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
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
    {{ content|raw }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_action.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
