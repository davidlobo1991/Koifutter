<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2bd368cd1d1d04fea63b9029856d098d979d65d8ee785898ee16d9c38f7ac209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec94aa6a7f90f55648a409e2a47421d323193c8cc536ed3274845c1050c92be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec94aa6a7f90f55648a409e2a47421d323193c8cc536ed3274845c1050c92be5->enter($__internal_ec94aa6a7f90f55648a409e2a47421d323193c8cc536ed3274845c1050c92be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec94aa6a7f90f55648a409e2a47421d323193c8cc536ed3274845c1050c92be5->leave($__internal_ec94aa6a7f90f55648a409e2a47421d323193c8cc536ed3274845c1050c92be5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e669ffa22d342795a4d868dbaf8bb4f694f6fa39f90851c208192673d59e279f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e669ffa22d342795a4d868dbaf8bb4f694f6fa39f90851c208192673d59e279f->enter($__internal_e669ffa22d342795a4d868dbaf8bb4f694f6fa39f90851c208192673d59e279f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e669ffa22d342795a4d868dbaf8bb4f694f6fa39f90851c208192673d59e279f->leave($__internal_e669ffa22d342795a4d868dbaf8bb4f694f6fa39f90851c208192673d59e279f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_71e7a130c9a7dd35b0c8005fc746ac30340e05bbbdd473923e3f989faca10172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e7a130c9a7dd35b0c8005fc746ac30340e05bbbdd473923e3f989faca10172->enter($__internal_71e7a130c9a7dd35b0c8005fc746ac30340e05bbbdd473923e3f989faca10172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_71e7a130c9a7dd35b0c8005fc746ac30340e05bbbdd473923e3f989faca10172->leave($__internal_71e7a130c9a7dd35b0c8005fc746ac30340e05bbbdd473923e3f989faca10172_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7d128eb31c472b08530a42bae454feccce2ce5d0212d1946ba1370508ce1dc18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d128eb31c472b08530a42bae454feccce2ce5d0212d1946ba1370508ce1dc18->enter($__internal_7d128eb31c472b08530a42bae454feccce2ce5d0212d1946ba1370508ce1dc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d128eb31c472b08530a42bae454feccce2ce5d0212d1946ba1370508ce1dc18->leave($__internal_7d128eb31c472b08530a42bae454feccce2ce5d0212d1946ba1370508ce1dc18_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
