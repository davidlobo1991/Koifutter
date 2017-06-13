<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5b653aa509ce11908c193abecc6e3454529019fefbd58b04f4aba349b20a014f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41c807fc1c92ed451e1c6cb770b854d1f7969ab0e0a42134173b0fc52f3d9ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c807fc1c92ed451e1c6cb770b854d1f7969ab0e0a42134173b0fc52f3d9ae1->enter($__internal_41c807fc1c92ed451e1c6cb770b854d1f7969ab0e0a42134173b0fc52f3d9ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41c807fc1c92ed451e1c6cb770b854d1f7969ab0e0a42134173b0fc52f3d9ae1->leave($__internal_41c807fc1c92ed451e1c6cb770b854d1f7969ab0e0a42134173b0fc52f3d9ae1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_261c7911807436a3c4e0290010da7aaef0b0c8621a676d307af75b499240e64d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_261c7911807436a3c4e0290010da7aaef0b0c8621a676d307af75b499240e64d->enter($__internal_261c7911807436a3c4e0290010da7aaef0b0c8621a676d307af75b499240e64d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_261c7911807436a3c4e0290010da7aaef0b0c8621a676d307af75b499240e64d->leave($__internal_261c7911807436a3c4e0290010da7aaef0b0c8621a676d307af75b499240e64d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a148d1d5db67a762612031bcde18ac8955314e7c82e615844f401d2be71daf59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a148d1d5db67a762612031bcde18ac8955314e7c82e615844f401d2be71daf59->enter($__internal_a148d1d5db67a762612031bcde18ac8955314e7c82e615844f401d2be71daf59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a148d1d5db67a762612031bcde18ac8955314e7c82e615844f401d2be71daf59->leave($__internal_a148d1d5db67a762612031bcde18ac8955314e7c82e615844f401d2be71daf59_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_064787f3f1b27ba03c48957286fcda1c6dafb79fc6f79a8d4624eadc8176c509 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_064787f3f1b27ba03c48957286fcda1c6dafb79fc6f79a8d4624eadc8176c509->enter($__internal_064787f3f1b27ba03c48957286fcda1c6dafb79fc6f79a8d4624eadc8176c509_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_064787f3f1b27ba03c48957286fcda1c6dafb79fc6f79a8d4624eadc8176c509->leave($__internal_064787f3f1b27ba03c48957286fcda1c6dafb79fc6f79a8d4624eadc8176c509_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
