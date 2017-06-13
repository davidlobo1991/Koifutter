<?php

/* SonataBlockBundle:Block:block_core_menu.html.twig */
class __TwigTemplate_6a3b14fd7f475c511edf5bebe6b17641427c2ea052e22fa5201b33933d5cdb6c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1450f13b2199a3941ba6b6cdf405095251b29e3b40d756d0b384416b25757df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1450f13b2199a3941ba6b6cdf405095251b29e3b40d756d0b384416b25757df1->enter($__internal_1450f13b2199a3941ba6b6cdf405095251b29e3b40d756d0b384416b25757df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1450f13b2199a3941ba6b6cdf405095251b29e3b40d756d0b384416b25757df1->leave($__internal_1450f13b2199a3941ba6b6cdf405095251b29e3b40d756d0b384416b25757df1_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_73ee29b687bfda972b81751ba1df236889b1f7db4299b4a0940c993657d8d49e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73ee29b687bfda972b81751ba1df236889b1f7db4299b4a0940c993657d8d49e->enter($__internal_73ee29b687bfda972b81751ba1df236889b1f7db4299b4a0940c993657d8d49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), ($context["menu_options"] ?? $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_73ee29b687bfda972b81751ba1df236889b1f7db4299b4a0940c993657d8d49e->leave($__internal_73ee29b687bfda972b81751ba1df236889b1f7db4299b4a0940c993657d8d49e_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_menu.html.twig";
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
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "SonataBlockBundle:Block:block_core_menu.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
