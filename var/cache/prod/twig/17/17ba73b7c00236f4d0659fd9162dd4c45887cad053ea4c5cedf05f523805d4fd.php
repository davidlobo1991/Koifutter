<?php

/* @SonataAdmin/Helper/short-object-description.html.twig */
class __TwigTemplate_fd6def7414840ea95f51e33b79a9f493b54967f9b6d8b2a6594adee937489dc8 extends Twig_Template
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
        // line 1
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if (((($context["object"] ?? null) && $this->getAttribute(($context["admin"] ?? null), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute(($context["admin"] ?? null), "hasAccess", array(0 => "edit"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? null), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? null), 2 => ($context["link_parameters"] ?? null)), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Helper/short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SonataAdmin/Helper/short-object-description.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\sonata-project\\admin-bundle\\Resources\\views\\Helper\\short-object-description.html.twig");
    }
}
