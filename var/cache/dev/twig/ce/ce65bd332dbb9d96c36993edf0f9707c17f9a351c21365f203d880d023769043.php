<?php

/* @SonataBlock/Block/block_base.html.twig */
class __TwigTemplate_a7fc57af2c0351e55fdb47f04bf8ca6ef7194a3d22abc5c2d43331d1e550a4c5 extends Twig_Template
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
        $__internal_15d3942c6bbc6cc9f043077a896160ea489f3982f5ed47478f678515337140e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d3942c6bbc6cc9f043077a896160ea489f3982f5ed47478f678515337140e6->enter($__internal_15d3942c6bbc6cc9f043077a896160ea489f3982f5ed47478f678515337140e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_base.html.twig"));

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
        
        $__internal_15d3942c6bbc6cc9f043077a896160ea489f3982f5ed47478f678515337140e6->leave($__internal_15d3942c6bbc6cc9f043077a896160ea489f3982f5ed47478f678515337140e6_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_56066a6c1faa1ae7bc5264ad92f3c808c5642de0b7c11891c5599686bcfa3dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56066a6c1faa1ae7bc5264ad92f3c808c5642de0b7c11891c5599686bcfa3dff->enter($__internal_56066a6c1faa1ae7bc5264ad92f3c808c5642de0b7c11891c5599686bcfa3dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_56066a6c1faa1ae7bc5264ad92f3c808c5642de0b7c11891c5599686bcfa3dff->leave($__internal_56066a6c1faa1ae7bc5264ad92f3c808c5642de0b7c11891c5599686bcfa3dff_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_base.html.twig";
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
", "@SonataBlock/Block/block_base.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_base.html.twig");
    }
}
