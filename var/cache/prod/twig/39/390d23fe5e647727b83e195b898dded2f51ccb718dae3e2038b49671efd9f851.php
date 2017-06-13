<?php

/* KoiBundle:sites:contact.html.twig */
class __TwigTemplate_c0650cb6794b384688643ed4dd6b43eacf16f8f8e4b5c29f994e0178f08bd05b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KoiBundle::base.html.twig", "KoiBundle:sites:contact.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "KoiBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

<div class=\"wrapper\">
    <div class=\"content-wrap\">
        <!-- Start CONTENT -->
        <div class=\"content\">
            <div class=\"container-wrapper\">
                <div class=\"container\">
                    <div class=\"breadcrumbs\">
                        <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("koi_homepage");
        echo "\"><span class=\"icon icon-chevron-right\"></span>Zurück</a>
                    </div>
                    <div class=\"contact-site row\">
                        <h2>Contact</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "KoiBundle:sites:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KoiBundle:sites:contact.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle/Resources/views/sites/contact.html.twig");
    }
}
