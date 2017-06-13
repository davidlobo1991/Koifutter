<?php

/* KoiBundle:sites:contact.html.twig */
class __TwigTemplate_65df32cbd7caeba0d299c6d5d6277cf0e3daab0c6d1a67833d7d631ce38d1ae0 extends Twig_Template
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
        $__internal_d09d4275bb14cd60fd4ae3e9c35483f71839ac5a3ab650b159b6fccf0fea662e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d09d4275bb14cd60fd4ae3e9c35483f71839ac5a3ab650b159b6fccf0fea662e->enter($__internal_d09d4275bb14cd60fd4ae3e9c35483f71839ac5a3ab650b159b6fccf0fea662e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KoiBundle:sites:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d09d4275bb14cd60fd4ae3e9c35483f71839ac5a3ab650b159b6fccf0fea662e->leave($__internal_d09d4275bb14cd60fd4ae3e9c35483f71839ac5a3ab650b159b6fccf0fea662e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6b26d2994861b740a685cd346af21b341782197c5fb2a09aed4e885dfc0baf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b26d2994861b740a685cd346af21b341782197c5fb2a09aed4e885dfc0baf7->enter($__internal_b6b26d2994861b740a685cd346af21b341782197c5fb2a09aed4e885dfc0baf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b6b26d2994861b740a685cd346af21b341782197c5fb2a09aed4e885dfc0baf7->leave($__internal_b6b26d2994861b740a685cd346af21b341782197c5fb2a09aed4e885dfc0baf7_prof);

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
        return array (  53 => 12,  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'KoiBundle::base.html.twig' %}
{% block body %}
    {{ parent() }}

<div class=\"wrapper\">
    <div class=\"content-wrap\">
        <!-- Start CONTENT -->
        <div class=\"content\">
            <div class=\"container-wrapper\">
                <div class=\"container\">
                    <div class=\"breadcrumbs\">
                        <a href=\"{{ path('koi_homepage') }}\"><span class=\"icon icon-chevron-right\"></span>Zurück</a>
                    </div>
                    <div class=\"contact-site row\">
                        <h2>Contact</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "KoiBundle:sites:contact.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle/Resources/views/sites/contact.html.twig");
    }
}
