<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_f772847a29a53a7dde822b42e4b4f24ac940dd28434b05de6aee41ca17620e89 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30787e3e0409a3bef02751f9eef73f88c87d4269465017707c1ba218d999f6fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30787e3e0409a3bef02751f9eef73f88c87d4269465017707c1ba218d999f6fd->enter($__internal_30787e3e0409a3bef02751f9eef73f88c87d4269465017707c1ba218d999f6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30787e3e0409a3bef02751f9eef73f88c87d4269465017707c1ba218d999f6fd->leave($__internal_30787e3e0409a3bef02751f9eef73f88c87d4269465017707c1ba218d999f6fd_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7d5738116aa11e15471197d9b58e92307ab7573eaa1c3602e35f6484192f0252 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d5738116aa11e15471197d9b58e92307ab7573eaa1c3602e35f6484192f0252->enter($__internal_7d5738116aa11e15471197d9b58e92307ab7573eaa1c3602e35f6484192f0252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), ($context["menu_options"] ?? $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_7d5738116aa11e15471197d9b58e92307ab7573eaa1c3602e35f6484192f0252->leave($__internal_7d5738116aa11e15471197d9b58e92307ab7573eaa1c3602e35f6484192f0252_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
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
", "@SonataBlock/Block/block_core_menu.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\block-bundle\\Resources\\views\\Block\\block_core_menu.html.twig");
    }
}
