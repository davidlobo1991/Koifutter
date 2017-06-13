<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_af538a16f970821bca9e9e3eca981675e6a59babb52472798905992d00056825 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c6395f0905a39c811ce1516a9a29d6ea1fc276468f002bb43c712bec31489232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6395f0905a39c811ce1516a9a29d6ea1fc276468f002bb43c712bec31489232->enter($__internal_c6395f0905a39c811ce1516a9a29d6ea1fc276468f002bb43c712bec31489232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6395f0905a39c811ce1516a9a29d6ea1fc276468f002bb43c712bec31489232->leave($__internal_c6395f0905a39c811ce1516a9a29d6ea1fc276468f002bb43c712bec31489232_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_ea95de706178106f3406c8974f0334ed499269dc2b995229cef0ee316f235b38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea95de706178106f3406c8974f0334ed499269dc2b995229cef0ee316f235b38->enter($__internal_ea95de706178106f3406c8974f0334ed499269dc2b995229cef0ee316f235b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
";
        
        $__internal_ea95de706178106f3406c8974f0334ed499269dc2b995229cef0ee316f235b38->leave($__internal_ea95de706178106f3406c8974f0334ed499269dc2b995229cef0ee316f235b38_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
", "@SonataBlock/Block/block_core_action.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_action.html.twig");
    }
}
