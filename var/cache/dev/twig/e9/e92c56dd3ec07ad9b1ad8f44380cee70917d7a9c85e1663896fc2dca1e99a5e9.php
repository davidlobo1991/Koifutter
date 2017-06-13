<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_271709bf06b3cd17f77ce5a6e26bd5612279d9fc1a2a5bb6d7f3c41cd9bf7d6f extends Twig_Template
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
        $__internal_c405aaac2e2b5ee9d9a909edac6d9e1e69b9d3a45f4d666ea9da402e43c4bec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c405aaac2e2b5ee9d9a909edac6d9e1e69b9d3a45f4d666ea9da402e43c4bec4->enter($__internal_c405aaac2e2b5ee9d9a909edac6d9e1e69b9d3a45f4d666ea9da402e43c4bec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c405aaac2e2b5ee9d9a909edac6d9e1e69b9d3a45f4d666ea9da402e43c4bec4->leave($__internal_c405aaac2e2b5ee9d9a909edac6d9e1e69b9d3a45f4d666ea9da402e43c4bec4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "C:\\Users\\David\\Projekte\\Koifutter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
