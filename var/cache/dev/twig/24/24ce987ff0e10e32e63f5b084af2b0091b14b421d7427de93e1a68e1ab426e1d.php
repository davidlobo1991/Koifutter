<?php

/* @Koi/sites/contact.html.twig */
class __TwigTemplate_95011dea46b14089e001803a5d15b85fb3c3f643dc7534a21360a28ea5b7407d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("KoiBundle::base.html.twig", "@Koi/sites/contact.html.twig", 1);
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
        $__internal_dbb3943ca846bce49b7a572325d0acda912b9ac4546ab8e0e2f7022ee74d6ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb3943ca846bce49b7a572325d0acda912b9ac4546ab8e0e2f7022ee74d6ca6->enter($__internal_dbb3943ca846bce49b7a572325d0acda912b9ac4546ab8e0e2f7022ee74d6ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Koi/sites/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb3943ca846bce49b7a572325d0acda912b9ac4546ab8e0e2f7022ee74d6ca6->leave($__internal_dbb3943ca846bce49b7a572325d0acda912b9ac4546ab8e0e2f7022ee74d6ca6_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c36d908a0039fecc64961f77b5bedf04715c3aa2b998ac2fbade703c817d7e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c36d908a0039fecc64961f77b5bedf04715c3aa2b998ac2fbade703c817d7e9->enter($__internal_9c36d908a0039fecc64961f77b5bedf04715c3aa2b998ac2fbade703c817d7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9c36d908a0039fecc64961f77b5bedf04715c3aa2b998ac2fbade703c817d7e9->leave($__internal_9c36d908a0039fecc64961f77b5bedf04715c3aa2b998ac2fbade703c817d7e9_prof);

    }

    public function getTemplateName()
    {
        return "@Koi/sites/contact.html.twig";
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
", "@Koi/sites/contact.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\src\\KoiBundle\\Resources\\views\\sites\\contact.html.twig");
    }
}
