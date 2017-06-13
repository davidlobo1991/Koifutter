<?php

/* SonataBlockBundle:Block:block_core_text.html.twig */
class __TwigTemplate_41695175e37868f9969949f174cf31e47c6a65ce59974b4d599246443caeb0fd extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "SonataBlockBundle:Block:block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c5bfd92fe1689c39b907ef5d2431fd383263ca84d80ed062002fc9cbd3273083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5bfd92fe1689c39b907ef5d2431fd383263ca84d80ed062002fc9cbd3273083->enter($__internal_c5bfd92fe1689c39b907ef5d2431fd383263ca84d80ed062002fc9cbd3273083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c5bfd92fe1689c39b907ef5d2431fd383263ca84d80ed062002fc9cbd3273083->leave($__internal_c5bfd92fe1689c39b907ef5d2431fd383263ca84d80ed062002fc9cbd3273083_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_109ba1238c9673f7b3d755ced1c1b69fccbcc323ce256e6379a5fc7b91fd103a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_109ba1238c9673f7b3d755ced1c1b69fccbcc323ce256e6379a5fc7b91fd103a->enter($__internal_109ba1238c9673f7b3d755ced1c1b69fccbcc323ce256e6379a5fc7b91fd103a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_109ba1238c9673f7b3d755ced1c1b69fccbcc323ce256e6379a5fc7b91fd103a->leave($__internal_109ba1238c9673f7b3d755ced1c1b69fccbcc323ce256e6379a5fc7b91fd103a_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_text.html.twig";
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
", "SonataBlockBundle:Block:block_core_text.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
