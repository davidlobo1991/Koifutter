<?php

/* knp_menu_base.html.twig */
class __TwigTemplate_2e43545eed8f012064b3231dca10a66c897de2c7b86f9cdda80f45e24c8a8683 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8b03eb5e26c8bcedda141a0fe89f5c2a2d41325b58378df067b0cc93276d5a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b03eb5e26c8bcedda141a0fe89f5c2a2d41325b58378df067b0cc93276d5a0->enter($__internal_e8b03eb5e26c8bcedda141a0fe89f5c2a2d41325b58378df067b0cc93276d5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "knp_menu_base.html.twig"));

        // line 1
        if ($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_e8b03eb5e26c8bcedda141a0fe89f5c2a2d41325b58378df067b0cc93276d5a0->leave($__internal_e8b03eb5e26c8bcedda141a0fe89f5c2a2d41325b58378df067b0cc93276d5a0_prof);

    }

    public function getTemplateName()
    {
        return "knp_menu_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if options.compressed %}{{ block('compressed_root') }}{% else %}{{ block('root') }}{% endif %}
", "knp_menu_base.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\knplabs\\knp-menu\\src\\Knp\\Menu\\Resources\\views\\knp_menu_base.html.twig");
    }
}
