<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_bc10980f5f3e4cae37729ea4106593e5d32e691c45678d224afcb308e2cd48c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93ee880d8b46be039675fed1e1f4b3336eb8b8c4bd046de93e2196f90c78029b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93ee880d8b46be039675fed1e1f4b3336eb8b8c4bd046de93e2196f90c78029b->enter($__internal_93ee880d8b46be039675fed1e1f4b3336eb8b8c4bd046de93e2196f90c78029b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_93ee880d8b46be039675fed1e1f4b3336eb8b8c4bd046de93e2196f90c78029b->leave($__internal_93ee880d8b46be039675fed1e1f4b3336eb8b8c4bd046de93e2196f90c78029b_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_e95703cc0a58fc9d964f06187fa22bf3d3b62131d06d5bf59f3a0e8c9158e5eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95703cc0a58fc9d964f06187fa22bf3d3b62131d06d5bf59f3a0e8c9158e5eb->enter($__internal_e95703cc0a58fc9d964f06187fa22bf3d3b62131d06d5bf59f3a0e8c9158e5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_e95703cc0a58fc9d964f06187fa22bf3d3b62131d06d5bf59f3a0e8c9158e5eb->leave($__internal_e95703cc0a58fc9d964f06187fa22bf3d3b62131d06d5bf59f3a0e8c9158e5eb_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
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
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
